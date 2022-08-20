<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTask extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return[
            'title' => 'タイトル',
            'due_date' => '期限日',
        ];
    }

    public function messages()
    {
        return[
            'due_date.after_or_equal' => ':attribute には今日以降の日付を入力してください。',
        ];
    }
}