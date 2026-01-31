<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ContactResource\Pages;
use App\Filament\Admin\Resources\ContactResource\RelationManagers;
use App\Models\Contact;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';

    protected static ?string $navigationLabel = 'Pesan Masuk';

    protected static ?string $navigationGroup = 'Interaksi Pengguna';

    protected static ?int $navigationSort = 99;

    public static function form(Form $form): Form
    {
        return $form->schema([

            Forms\Components\TextInput::make('name')
                ->label('Nama')
                ->disabled(),

            Forms\Components\TextInput::make('email')
                ->label('Email')
                ->disabled(),

            Forms\Components\TextInput::make('phone')
                ->label('No HP')
                ->disabled(),

            Forms\Components\TextInput::make('subject')
                ->label('Subjek')
                ->disabled(),

            Forms\Components\Textarea::make('message')
                ->label('Pesan')
                ->disabled()
                ->columnSpanFull(),

        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('name')
                    ->label('Nama')
                    ->searchable(),

                Tables\Columns\TextColumn::make('email')
                    ->label('Email'),

                Tables\Columns\TextColumn::make('phone')
                    ->label('No HP'),

                Tables\Columns\TextColumn::make('subject')
                    ->label('Subjek'),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal')
                    ->dateTime('d M Y H:i'),

            ])
            ->actions([])
            ->bulkActions([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContacts::route('/'),
        ];
    }
}