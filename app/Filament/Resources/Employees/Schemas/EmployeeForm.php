<?php

namespace App\Filament\Resources\Employees\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class EmployeeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('phone')
                    ->tel(),
                Select::make('department_id')
                    ->relationship('department', 'name')
                    ->required(),
                Select::make('position_id')
                    ->relationship('position', 'name')
                    ->required(),
                DatePicker::make('join_date')
                    ->required(),
                TextInput::make('annual_leave_quota')
                    ->required()
                    ->numeric()
                    ->default(12),
            ]);
    }
}
