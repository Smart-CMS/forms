<?php

namespace SmartCms\Forms;

enum FormFieldEnum: string
{
    case Text = 'text';
    case Textarea = 'textarea';
    case Email = 'email';
    case Tel = 'tel';
    case Select = 'select';
    case Radio = 'radio';
    case Checkbox = 'checkbox';
    case Date = 'date';
    case Time = 'time';
}
