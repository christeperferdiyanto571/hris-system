<?php

namespace App\Filament\Resources\Payrolls\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PayrollForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('employee_id')
                    ->relationship('employee', 'name')
                    ->required(),
                TextInput::make('month')
                    ->required()
                    ->numeric(),
                TextInput::make('year')
                    ->required()
                    ->numeric(),
                TextInput::make('basic_salary')
                    ->required()
                    ->numeric(),
                TextInput::make('deductions')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('net_salary')
                    ->required()
                    ->numeric(),
            ]);
    }
}
