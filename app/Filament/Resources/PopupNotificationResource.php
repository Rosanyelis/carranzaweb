<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PopupNotificationResource\Pages;
use App\Filament\Resources\PopupNotificationResource\RelationManagers;
use App\Models\PopupNotification;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PopupNotificationResource extends Resource
{
    protected static ?string $model = PopupNotification::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('titulo')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('link')
                ->maxLength(255),
            Forms\Components\Select::make('estado')
                ->options([
                    '0' => 'Inactivo',
                    '1' => 'Activo',
                ])
                ->required(),
            Forms\Components\RichEditor::make('cuerpo')
                ->required()
                ->columnSpanFull(),
            Forms\Components\FileUpload::make('imagen')
                ->image()
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('titulo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('link')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('imagen'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPopupNotifications::route('/'),
            'create' => Pages\CreatePopupNotification::route('/create'),
            'edit' => Pages\EditPopupNotification::route('/{record}/edit'),
        ];
    }
}
