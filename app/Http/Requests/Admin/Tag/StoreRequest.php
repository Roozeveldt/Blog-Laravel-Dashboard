<?php

namespace App\Http\Requests\Admin\Tag;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
	public function rules()
	: array
	{
		return [
			'name' => 'required|string',
		];
	}

	public function authorize()
	: bool
	{
		return true;
	}
}
