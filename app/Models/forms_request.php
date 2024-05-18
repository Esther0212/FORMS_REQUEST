<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormRequest extends Model
{
    protected $fillable = [
        'type', 'description', 'document_path', 'status', 'quantity', 'total_amount'
    ];
}
