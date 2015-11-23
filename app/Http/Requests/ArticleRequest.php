<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ArticleRequest extends Request
{
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
        //These are the list of rules that the person creating an article will need to follow
        //$rules = [
        return [
            'title' => 'required|min:3',
            'body' => 'required',
            'published_at' => 'required|date'
        ];

//        if(url segment/condition)
//        {
//            $rules['somethingelse'] = 'required'
//        }
    }
}
