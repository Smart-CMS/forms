<?php

namespace SmartCms\Forms\Admin\Resources\Forms\Pages;

use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use SmartCms\Forms\Admin\Resources\Forms\FormResource;

class CreateForm extends CreateRecord
{
    protected static string $resource = FormResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $data['content'] = [];

        return parent::handleRecordCreation($data);
    }
}
