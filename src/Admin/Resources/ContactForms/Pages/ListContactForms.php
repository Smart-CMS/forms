<?php

namespace SmartCms\Forms\Admin\Resources\ContactForms\Pages;

use Filament\Resources\Pages\ListRecords;
use SmartCms\Forms\Admin\Resources\ContactForms\ContactFormResource;

class ListContactForms extends ListRecords
{
    protected static string $resource = ContactFormResource::class;

    public function getBreadcrumbs(): array
    {
        return [];
    }

    protected function getHeaderActions(): array
    {
        return [];
    }
}
