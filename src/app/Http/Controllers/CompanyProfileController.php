<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\CompanyProfileResource\Pages;
use App\Models\CompanyProfile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CompanyProfileResource extends Resource
{
    protected static ?string $model = CompanyProfile::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';
    protected static ?string $navigationLabel = 'Company Profile';
    protected static ?string $navigationGroup = 'Landing Page';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('title')
                ->required(),

            Forms\Components\Textarea::make('description')
                ->required()
                ->columnSpanFull(),

            Forms\Components\Repeater::make('points')
                ->label('Poin Keunggulan')
                ->schema([
                Forms\Components\TextInput::make('value')
                    ->label('Poin')
                    ->required(),
         ])
            ->columnSpanFull(),


            Forms\Components\FileUpload::make('image')
                ->directory('company-profile')
                ->image(),

            Forms\Components\TextInput::make('button_text'),

            Forms\Components\TextInput::make('button_link'),

            Forms\Components\Toggle::make('is_active')
                ->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\IconColumn::make('is_active')->boolean(),
                Tables\Columns\TextColumn::make('created_at')->dateTime(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCompanyProfiles::route('/'),
            'create' => Pages\CreateCompanyProfile::route('/create'),
            'edit' => Pages\EditCompanyProfile::route('/{record}/edit'),
        ];
    }
}
