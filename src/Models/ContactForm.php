<?php

namespace SmartCms\Forms\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContactForm
 *
 * @property int $id The unique identifier for the model.
 * @property string|null $comment Admin comment on the form submission.
 * @property int $status The status of the form submission (0=new, 1=viewed, 2=closed).
 * @property \DateTime $created_at The date and time when the model was created.
 * @property \DateTime $updated_at The date and time when the model was last updated.
 */
class ContactForm extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = ['data' => 'array'];

    public function getTable(): string
    {
        return config('forms.contact_forms_table_name');
    }
}
