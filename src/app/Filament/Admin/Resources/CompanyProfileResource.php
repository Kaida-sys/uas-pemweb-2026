<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\CompanyProfileResource\Pages;
use App\Filament\Admin\Resources\CompanyProfileResource\RelationManagers;
use App\Models\CompanyProfile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CompanyProfileResource extends Resource
{
    protected static ?string $model = CompanyProfile::class;
    protected static ?string $navigationGroup = 'Landing Page';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('title')->required(),
            Forms\Components\Textarea::make('description')->columnSpanFull(),
            Forms\Components\FileUpload::make('image')->image()->directory('about'),
            Forms\Components\Toggle::make('is_active'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('title'),
            Tables\Columns\IconColumn::make('is_active')->boolean(),
        ]);
    }

    public static function getPages(): array
    {
        return ['index' => Pages\ListCompanyProfiles::route('/')];
    }
}
