<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'file', 'dimension', 'user_id', 'title'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }


    public static function makefolder()
    {
        $subfolder = 'images/' . date('Y/m/d');
        Storage::makeDirectory($subfolder);
        return $subfolder;
    }
    public static function getDimension($image)
    {
        [$width, $height] = getimagesize(Storage::path($image)); //returns array first two of array is image width and height
        return $width . "x" . $height;
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function fileUrl()
    {
        return Storage::url($this->file);
    }
    // public function link()
    // {
    //     return route('show', $this->path);
    // }

}
