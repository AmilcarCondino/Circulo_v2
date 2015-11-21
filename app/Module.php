<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'name',
        'project_id',
        'projected_total_pages',
        'parent_module'
    ];



    /**
     * Get the project that owns the module.
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    /**
    +     * Get the module that owns the module.
    +     */
    public function parentModule()
    {
        return $this->belongsTo(self::class, 'parent_module');
    }

    /**
     * Get the submodules.
     */
    public function submodules()
    {
        return $this->hasMany(self::class, 'parent_module');
    }

    /**
     * Get all of the pages for the project.
     */
    public function pages()
    {
        return $this->hasMany(Page::class)->orderBy('name', 'asc');;
    }

}
