<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    //

    public function index(Request $request)
    {

        $search = $request['search'] ?? "";
        if ($search != "") {
            $images = Image::where('title', 'LIKE', "%$search%")->get();
        } else {
            $images = Image::latest()->paginate(15);
        }
        return view('index', compact('images', 'search'));
    }


    public function show(Image $image, $id)
    {

        $image = Image::find($id);
        return view('show', compact('image'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'file' => 'required',
            'title' => 'nullable'
        ]);

        if ($request->hasFile('file')) {
            $direc = Image::makefolder();
            $image = $request->file('file');
            $images = $image->store($direc);
            Image::create([
                'user_id' => auth()->user()->id,
                'title' => $request->title,
                'file' => $images,
                'dimension' => Image::getDimension($images)
            ]);
        }


        return redirect()->route('index')->with('message', 'image uploaded');
    }

    public function showmyimages()
    {
        $datas = Image::where('user_id', Auth::user()->id)->latest('id')->get();
        return view('myimages', compact('datas'));
    }

    public function delete(Image $image, $id)
    {
        $row = Image::where('id', $id)->where('user_id', auth()->user()->id)->first();
        !is_null($image->file) && Storage::delete($image->file);
        $row->delete();

        return redirect('/myimages')->with('message', "Image has been removed successfully");
    }
}
