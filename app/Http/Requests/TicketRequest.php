<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TicketRequest extends FormRequest
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
            "title" => 'required|string|max:255',
            "description" => 'nullable|string',
            "priority" => 'nullable|in:low,medium,high,critical',
            "status" => 'nullable|in:open,in_progress,resolved,closed',
            "user_id" => 'nullable|exists:users,id',
            "category" => 'nullable|string|max:100'
        ];
    }
}
