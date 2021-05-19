<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Period;
Use Illuminate\Validation\Rule;


class StoreRecordRequest extends FormRequest
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
        return 
        [
                    'date_regis' => Rule::unique('periods')->where(function ($query) {
                    return $query->where('quadrant_id', $this->quadrant_id);
            })
        ];
    }
}

