<?php

namespace SmartCms\Forms\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * @property string $name
 * @property array $fields
 * @property array $content
 */
class Form extends Model
{
    use HasTranslations;

    public array $translatable = ['fields', 'title', 'button', 'notification', 'email'];

    protected $casts = [
        'title' => 'array',
        'button' => 'array',
        'notification' => 'array',
        'fields' => 'array',
        'email' => 'array',
    ];

    public function getTable()
    {
        return config('forms.forms_table_name', 'forms');
    }

    public function getFallbackLocale(): string
    {
        return main_lang();
    }
}
