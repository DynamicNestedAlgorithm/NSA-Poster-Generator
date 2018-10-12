<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Poster extends Model
{
    protected $fillable = ['file'];
   
    use SoftDeletes;
    public function getFilePath()
    {
        return Storage::url($this->file);
    }
    protected $dates = ['deleted_at'];
}
