<?php

namespace SmartCms\Forms\Admin\Resources\Forms\Pages;

use Filament\Resources\Pages\CreateRecord;
use SmartCms\Forms\Admin\Resources\Forms\FormResource;
use SmartCms\Support\Admin\Components\Actions\SaveAction;
use SmartCms\Support\Admin\Components\Actions\SaveAndClose;

class CreateForm extends CreateRecord
{
    protected static string $resource = FormResource::class;

    protected function getHeaderActions(): array
    {
        return [
            SaveAction::make($this),
        ];
    }
}
