<?php

namespace SmartCms\Forms\Admin\Resources\Forms\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use SmartCms\Forms\Admin\Resources\Forms\FormResource;
use SmartCms\Support\Admin\Components\Actions\SaveAction;
use SmartCms\Support\Admin\Components\Actions\SaveAndClose;

class EditForm extends EditRecord
{
    protected static string $resource = FormResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            SaveAndClose::make($this, FormResource::getUrl()),
            SaveAction::make($this),
        ];
    }
}
