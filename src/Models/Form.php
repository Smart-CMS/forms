<?php

namespace SmartCms\Forms\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $casts = [
        'fields' => 'array',
        'content' => 'array',
    ];

    public function getTable()
    {
        return config('forms.forms_table_name', 'forms');
    }
}
