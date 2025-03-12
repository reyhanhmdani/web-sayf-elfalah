<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentResource\Pages;
use App\Filament\Resources\StudentResource\RelationManagers;
use App\Models\Student;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StudentResource extends Resource
{
    protected static ?string $model = Student::class;

    protected static ?string $navigationIcon = 'heroicon-s-users';

    // ⬇ Tambahkan navigation group
    protected static ?string $navigationGroup = 'Database Member';
    protected static ?string $navigationLabel = 'Para Santri';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nama Santri')
                    ->required()
                    ->maxLength(255),

                Forms\Components\DatePicker::make('tanggal_lahir')
                    ->label('Tanggal Lahir')
                    ->required(),

                Forms\Components\Select::make('kelamin')
                    ->label('Jenis Kelamin')
                    ->options([
                        'L' => 'Laki-Laki',
                        'P' => 'Perempuan',
                    ])
                    ->required(),

                Forms\Components\TextInput::make('alamat')
                    ->label('Alamat')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('nama_wali')
                    ->label('Nama Wali')
                    ->maxLength(255),

                Forms\Components\TextInput::make('no_hp_wali')
                    ->label('No HP Wali')
                    ->maxLength(15),

                Forms\Components\TextInput::make('hafalan')
                    ->label('Hafalan (Juz)')
                    ->numeric()
                    ->rules(['min:1', 'max:30']),

                Forms\Components\DatePicker::make('tanggal_masuk')
                    ->label('Tanggal Masuk'),

                Forms\Components\FileUpload::make('images')
                    ->label('Dokumen Santri')
//                    ->multiple()
            ]);
    }



    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Santri')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('tanggal_lahir')
                    ->label('Tanggal Lahir')
                    ->sortable(),

                Tables\Columns\TextColumn::make('kelamin')
                    ->label('Jenis Kelamin')
                    ->searchable(),

                Tables\Columns\TextColumn::make('alamat')
                    ->label('Alamat'),

                Tables\Columns\TextColumn::make('nama_wali')
                    ->label('Nama Wali'),

                Tables\Columns\TextColumn::make('no_hp_wali')
                    ->label('No HP Wali'),

                Tables\Columns\TextColumn::make('hafalan')
                    ->label('Hafalan (Juz)')
                    ->sortable(),


                Tables\Columns\TextColumn::make('tanggal_masuk')
                    ->label('Tanggal Masuk')
                    ->sortable(),

                Tables\Columns\TextColumn::make('images')
                    ->label('Dokumen')
                    ->width(100),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('kelamin')
                    ->label('Jenis Kelamin')
                    ->options([
                        'L' => 'Laki-Laki',
                        'P' => 'Perempuan',
                    ]),
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
            'index' => Pages\ListStudents::route('/'),
            'create' => Pages\CreateStudent::route('/create'),
            'edit' => Pages\EditStudent::route('/{record}/edit'),
        ];
    }
}
