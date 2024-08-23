<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('titulo_espanol')
                    ->label('Titulo en Español')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Titulo de post en español'),
                Forms\Components\TextInput::make('titulo_ingles')
                    ->label('Tiulo en Ingles')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Titulo de post en ingles'),
                Forms\Components\RichEditor::make('cuerpo_espanol')
                    ->label('Cuerpo del post en español')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('cuerpo_ingles')
                    ->label('Cuerpo del post en Ingles')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('imagen')
                    ->label('Imagen Destacada (Tamaño recomendado 1920x1080)')
                    ->image()
                    ->required(),
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
                    ->label('Tiulo en Ingles')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('imagen'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
