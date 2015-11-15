<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'name',
        'assigned_to',
        'stage',
        'model_file',
        'request',
        'page_id'
    ];

    /**
     * Get the page that owns the image.
     */
    public function page()
    {
        return $this->belongsTo(Page::class);
    }

    /**
     * Get all of the images for the page.
     */
    public function proposals()
    {
        return $this->hasMany(Proposal::class);
    }
}
