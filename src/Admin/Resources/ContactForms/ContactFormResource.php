<?php

namespace SmartCms\Forms\Admin\Resources\ContactForms;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use SmartCms\Forms\Admin\Resources\ContactForms\Pages\EditContactForm;
use SmartCms\Forms\Admin\Resources\ContactForms\Pages\ListContactForms;
use SmartCms\Forms\Admin\Resources\ContactForms\Schemas\ContactFormForm;
use SmartCms\Forms\Admin\Resources\ContactForms\Tables\ContactFormsTable;
use SmartCms\Forms\Models\ContactForm;

class ContactFormResource extends Resource
{
    protected static ?string $model = ContactForm::class;

    public static function canCreate(): bool
    {
        return false;
    }

    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }

    protected static string | BackedEnum | null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ContactFormForm::configure($schema)->columns(1);
    }

    public static function table(Table $table): Table
    {
        return ContactFormsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListContactForms::route('/'),
            'edit' => EditContactForm::route('/{record}/edit'),
        ];
    }
}
