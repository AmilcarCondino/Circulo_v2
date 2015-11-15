<?php namespace App\Http\Requests;

use Auth;
use App\Http\Requests\Request;

class PageRequest extends Request {

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
            'name' => 'required',
            'page_stage' => 'required',
            'layout_stage' => 'required'

        ];

        return $rules;
    }

}