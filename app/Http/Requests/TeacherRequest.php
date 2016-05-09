<?php namespace Pomaray\Http\Requests;

use Pomaray\Http\Requests\Request;

class TeacherRequest extends Request {

	/**
	 /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'image'=> 'required',
            'name'=> 'required',
            'technique'=> 'required',
            'course'=> 'required',
            'celPhone'=> 'required',

        ];
    }

}
