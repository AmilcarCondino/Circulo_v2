<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'name',
        'page_stage',
        'layout_stage',
        'module_id',
        'notes'
    ];

    /**
     * Get the module that owns the page.
     */
    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    /**
     * Get all of the images for the page.
     */
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
