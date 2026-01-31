<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\HeroResource\Pages;
use App\Filament\Admin\Resources\HeroResource\RelationManagers;
use App\Models\Hero;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HeroResource extends Resource
{
    protected static ?string $model = Hero::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationLabel = 'Hero Section';
    protected static ?string $navigationGroup = 'Landing Page';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\FileUpload::make('image')
                ->label('Background Image')
                ->directory('hero')
                ->image(),

            Forms\Components\TextInput::make('title')
                ->required(),

            Forms\Components\TextInput::make('subtitle'),

            Forms\Components\Textarea::make('description')
                ->required()
                ->columnSpanFull(),

            Forms\Components\TextInput::make('phone_number')
                ->label('No Telepon'),

            Forms\Components\TextInput::make('cta_text')
                ->label('Teks Tombol'),

            Forms\Components\TextInput::make('cta_link')
                ->label('Link Tombol'),

            Forms\Components\Toggle::make('is_active')
                ->label('Aktif')
                ->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('title')->searchable(),
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
            'index' => Pages\ListHeroes::route('/'),
            'create' => Pages\CreateHero::route('/create'),
            'edit' => Pages\EditHero::route('/{record}/edit'),
        ];
    }
}