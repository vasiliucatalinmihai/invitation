<?php

namespace App\Http\Requests;

use App\Contracts\Repositories\Marketing\CommunityRepositoryintegererface;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Validator;

class InvitationSubmitRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'hash' => ['required', 'string'],
            'accepted' => ['boolean'],
            'guests' => ['required', 'integer'],
            'infants' => ['required', 'integer'],
            'infants_age' => ['required', 'integer'],
            'food_restriction' => ['nullable', 'string'],
            'vegan' => ['boolean'],
            'after_party' => ['boolean'],
            'message' => ['nullable', 'string'],
        ];
    }

    public function all($keys = null)
    {
        $input = parent::all($keys);

        $input['accepted'] = (bool) ($input['accepted'] ?? false);
        $input['vegan'] = (bool) ($input['vegan'] ?? false);
        $input['after_party'] = (bool) ($input['after_party'] ?? false);

        $input['guests'] = (int) $input['guests'];
        $input['infants'] = (int) $input['infants'];
        $input['infants_age'] = (int) $input['infants_age'];

        $this->replace($input);

        return parent::all($keys);
    }


    public function withValidator(Validator $validator)
    {
        $validator->after(function (Validator $validator) {
            if ($validator->errors()->count()) {
                Session::flash('danger', 'Something went wrong!');
            }
        });
    }
}
