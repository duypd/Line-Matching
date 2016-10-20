<?php

namespace App\Http\Requests;

class UserProfileRequest extends Request
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
        return [
            'user_id'  => 'integer',
            'on_groups'=> 'integer',
            'on_chat'  => 'integer',
            'on_event' => 'integer',
            //'images'   => 'required'
        ];
    }
}
