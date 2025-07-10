<?php

namespace SmartCms\Forms\Admin\Resources\Forms\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use SmartCms\Forms\FormFieldEnum;
use SmartCms\Support\Admin\Components\Forms\NameField;
use SmartCms\Support\Admin\Components\Layout\Aside;
use SmartCms\Support\Admin\Components\Layout\FormGrid;
use SmartCms\Support\Admin\Components\Layout\LeftGrid;
use SmartCms\Support\Admin\Components\Layout\RightGrid;

class FormForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FormGrid::make()->schema([
                    LeftGrid::make()->schema([
                        Section::make()->compact()->schema([
                            TextInput::make('name')
                                ->required()
                                ->maxLength(255)
                                ->columnSpanFull(),
                        ]),
                        Section::make()->compact()->schema([
                            NameField::make('title')->label('Title')->required(false)
                                ->maxLength(255),
                            NameField::make('button')->label('Button')->required(false)
                                ->maxLength(255),
                            NameField::make('notification')->label('Notification')->required(false)
                                ->maxLength(255),
                        ]),
                        Tabs::make('translate')->schema(
                            self::getTabs()
                        ),
                    ]),
                    RightGrid::make()->schema([
                        Aside::make(),
                    ]),
                ]),
            ]);
    }

    public static function getTabs(): array
    {
        return app('lang')->adminLanguages()->map(function ($lang) {
            return Tab::make($lang->name)->schema([
                Repeater::make('fields.' . $lang->slug)->grid(1)
                    ->itemLabel(fn (array $state): ?string => $state['label'] ?? null)
                    ->hiddenLabel()
                    ->filled(false)
                    ->minItems(1)
                    ->columns(2)
                    ->schema([
                        TextInput::make('label')
                            ->required()
                            ->distinct()
                            ->maxLength(255),
                        TextInput::make('placeholder')
                            ->maxLength(255),
                        TextInput::make('description')
                            ->maxLength(255),
                        Select::make('type')
                            ->options(FormFieldEnum::class)
                            ->required(),
                        Toggle::make('required')
                            ->default(true),
                    ]),
            ]);
        })->toArray();
    }
}
