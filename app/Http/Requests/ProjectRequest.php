<?php namespace App\Http\Requests;

use Auth;
use App\Http\Requests\Request;

class ProjectRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //Auth::check(); @TODO: pending user integration
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name' => 'required|min:3|unique:projects,name',
            'projected_total_modules' => 'required|numeric',
            'projected_total_pages' => 'required|numeric',
            'project_code' => 'unique:projects,project_code|required|min:3',

        ];

        if($project = $this->route('project')){
            $rules['name'] = 'unique:projects,name,'.$project->id.'|required|min:3';
        }

        if($project = $this->route('project')){
            $rules['project_code'] = 'unique:projects,project_code,'.$project->id.'|required|min:3';
        }

        return $rules;
    }

}