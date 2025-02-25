<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Tables;
use App\Models\Member;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\MemberResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MemberResource\RelationManagers;

class MemberResource extends Resource
{
    protected static ?string $model = Member::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                TextInput::make('designation')->required(),
                TextInput::make('fb_url')
                ->url()->label('Facebook Url'),
                TextInput::make('insta_url')
                ->url()->label('Instagram Url'),
                TextInput::make('x_url')
                ->url()->label('X Url'),
                Select::make('status')->options([
                    1=>'Active',
                    0=>'Block'
                ]),
                FileUpload::make('image'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                ImageColumn::make('image')->width('100'),
                TextColumn::make('designation')->html(),
                TextColumn::make('fb_url')->label('Facebook Url'),
                TextColumn::make('insta_url')->label('Instagram Url'),
                TextColumn::make('x_url')->label('X Url'),
                // TextColumn::make('status'),



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
            'index' => Pages\ListMembers::route('/'),
            'create' => Pages\CreateMember::route('/create'),
            'edit' => Pages\EditMember::route('/{record}/edit'),
        ];
    }
}
