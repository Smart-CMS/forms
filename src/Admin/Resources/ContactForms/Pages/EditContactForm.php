<?php

namespace SmartCms\Forms\Admin\Resources\ContactForms\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use SmartCms\Forms\Admin\Resources\ContactForms\ContactFormResource;
use SmartCms\Support\Admin\Components\Actions\SaveAction;
use SmartCms\Support\Admin\Components\Actions\SaveAndClose;

class EditContactForm extends EditRecord
{
    protected static string $resource = ContactFormResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            SaveAndClose::make($this, ContactFormResource::getUrl()),
            SaveAction::make($this),
        ];
    }
}
