<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'name',
        'authors',
        'projected_total_modules',
        'projected_total_pages',
        'format',
        'alternative_format',
        'complementary_materials',
        'notes',
        'isbn_number'
    ];

    /**
     * Get all of the modules for the project.
     */
    public function modules()
    {
        return $this->hasMany(Module::class);
    }

    /**
     * Get only the root modules for the project.
     */
    public function rootModules()
    {
        return $this->modules()->whereNull('parent_module');
    }
}
