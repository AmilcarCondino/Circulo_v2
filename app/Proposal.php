<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'name',
        'selected',
        'downloaded',
        'rejected',
        'url',
        'image_id'
    ];

    /**
     * Get the page that owns the image.
     */
    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}
