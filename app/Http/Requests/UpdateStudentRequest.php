<?php

namespace App\Http\Requests;

use App\Models\Student;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateStudentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('student_edit');
    }

    public function rules()
    {
        return [
            'full_name' => [
                'string',
                'required',
            ],
            'post_code' => [
                'string',
                'required',
            ],
            'contact_no' => [
                'string',
                'required',
            ],
            'email' => [
                'required',
            ],
            'date_of_birth' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'ni_no' => [
                'string',
                'nullable',
            ],
            'date_of_entry' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'referred_by' => [
                'string',
                'nullable',
            ],
            'course_title' => [
                'string',
                'nullable',
            ],
            'previous_study' => [
                'string',
                'nullable',
            ],
            'emergency_contact_name' => [
                'string',
                'nullable',
            ],
            'emergency_contact_phone' => [
                'string',
                'nullable',
            ],
            'emergency_contact_relation' => [
                'string',
                'nullable',
            ],
            'documents' => [
                'array',
            ],
        ];
    }
}