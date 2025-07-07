<?php

namespace SmartCms\Forms\Admin\Resources\Forms\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use SmartCms\Forms\FormFieldEnum;
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
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                        Repeater::make('fields')
                            ->grid(1)
                            ->itemLabel(fn (array $state): ?string => $state['label'] ?? null)
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
                    ]),
                    RightGrid::make()->schema([
                        Aside::make(),
                    ]),
                ]),
            ]);
    }
}
