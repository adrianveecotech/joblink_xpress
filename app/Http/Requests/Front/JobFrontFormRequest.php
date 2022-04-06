<?php

namespace App\Http\Requests\Front;

use App\Http\Requests\Request;

class JobFrontFormRequest extends Request
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
        switch ($this->method()) {
            case 'PUT':
            case 'POST': {
                    $id = (int) $this->input('id', 0);

                    return [
                        "title" => "required|max:180",
                        "description" => "required",
                        "country_id" => "required",
                        "state_id" => "required",
                        "city_id" => "required",
                        //"career_level_id" => "required",
                        //"salary_from" => "required|max:11",
                        //"salary_to" => "required|max:11",
                        //"salary_currency" => "required|max:5",
                        //"salary_period_id" => "required",
                       // "hide_salary" => "required",
                        "functional_area_id" => "required",
                        "job_type_id" => "required",
                        //"num_of_positions" => "required",
                        //"gender_id" => "required",
                        "expiry_date" => "required",
                        //"degree_level_id" => "required",
                        "job_experience_id" => "required",
                    ];
                }
            default:break;
        }
    }

    public function messages()
    {
        return [
            'title.required' => __('Please enter Job title'),
            'description.required' => __('Please enter Job description'),
            'country_id.required' => __('Please select Country'),
            'state_id.required' => __('Please select State'),
            'city_id.required' => __('Please select City'),
            //'career_level_id.required' => __('Please select Career level'),
           // 'salary_from.required' => __('Please select salary from'),
           // 'salary_to.required' => __('Please select salary to'),
           // 'salary_currency.required' => __('Please select salary currency'),
            //'salary_period_id.required' => __('Please select salary period'),
            //'hide_salary.required' => __('Is salary hidden?'),
            'functional_area_id.required' => __('Please select functional area'),
            'job_type_id.required' => __('Please select job type'),
           // 'num_of_positions.required' => __('Please select number of positions'),
           // 'gender_id.required' => __('Please select gender'),
            'expiry_date.required' => __('Please enter Job expiry date'),
            //'degree_level_id.required' => __('Please select degree level'),
            'job_experience_id.required' => __('Please select job experience'),
        ];
    }

}
