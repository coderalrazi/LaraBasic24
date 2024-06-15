<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TopicUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:75',
            // 'url' => 'required|string|max:255|unique:posts,url,' . $this->route('posts'),
            'content' => 'required|string',
            'category_id' => 'required|integer',
        ];
    }
}
