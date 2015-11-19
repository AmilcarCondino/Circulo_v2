<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Module;
use App\Page;

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


    public function moduleAndPageCreate($request)
    {

        $projectID = Project::orderBy('id', 'desc')->first();

        $modules = $request->projected_total_modules;
        $m = 1;

        $pages = $request->projected_total_pages / $request->projected_total_modules;
        $p = 1;
        $pageNumber = 1;

        while ($m <= $modules ) {

            $newModule = new Module();

            $newModule->project_id = $projectID->id;
            $newModule->name = 'Modulo'.$m;
            $newModule->projected_total_pages =  $pages;

            $newModule->save();

            $p = 1;

            while ($p <= $pages){

                $moduleID = Module::orderBy('id', 'desc')->first();

                $newPage = new Page();

                $newPage->module_id = $moduleID->id;
                $newPage->name = $pageNumber;

                $newPage->save();

                $p++;
                $pageNumber++;
            }
            $m++;

        }


    }
}
