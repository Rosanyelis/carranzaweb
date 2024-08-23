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
                Forms\Components\TextInput::make('titulo_espanol')
                    ->label('Titulo de notificacionen Español')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Titulo de notificacion en Español'),
                Forms\Components\TextInput::make('titulo_ingles')
                    ->label('Tiulo en Ingles')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Titulo de notificacion en ingles'),
                Forms\Components\RichEditor::make('cuerpo_espanol')
                    ->label('Cuerpo de notificacion en español')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('cuerpo_ingles')
                    ->label('Cuerpo de notificacion en Ingles')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Select::make('estado')
                    ->options([
                        '1' => 'Activo',
                        '0' => 'Inactivo',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('link')
                    ->label('Link o url de redireccion')
                    ->maxLength(255)
                    ->placeholder('link a otro sitio web'),
                Forms\Components\FileUpload::make('imagen')
                    ->label('Imagen Destacada (Tamaño recomendado 1920x1080)')
                    ->image(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('titulo_espanol')
                    ->label('Tiulo en Español')
                    ->searchable(),
                Tables\Columns\TextColumn::make('titulo_ingles')
                    ->label('Titulo en Ingles')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('imagen'),
                Tables\Columns\TextColumn::make('estado')
                    ->label('Estado')

                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Creado')
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
