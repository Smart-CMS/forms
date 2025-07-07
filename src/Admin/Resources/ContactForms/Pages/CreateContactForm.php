<?php

namespace SmartCms\Forms\Admin\Resources\ContactForms\Pages;

use Filament\Resources\Pages\CreateRecord;
use SmartCms\Forms\Admin\Resources\ContactForms\ContactFormResource;

class CreateContactForm extends CreateRecord
{
    protected static string $resource = ContactFormResource::class;
}
