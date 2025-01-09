<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use App\Models\SpecialOffer;
use Illuminate\Support\Carbon;
use Filament\Resources\Resource;
use App\Models\SpecialOfferFeature;
use Awcodes\Shout\Components\Shout;
use Filament\Forms\Components\Tabs;
use Livewire\Component as Livewire;
use App\Models\SpecialOfferCategory;
use Filament\Forms\Components\Component;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SpecialOfferResource\Pages;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use App\Filament\Resources\SpecialOfferResource\RelationManagers;
use Schmeits\FilamentCharacterCounter\Forms\Components\TextInput;

class SpecialOfferResource extends Resource
{
    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = SpecialOffer::class;
    protected static ?string $navigationGroup = 'Oferty specjalne';

    public static function getNavigationSort(): ?int
    {
        return 1;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Tabs::make('Tabs')
                    ->columnSpanFull()
                    ->tabs([
                        // MAIN INFO
                        Tabs\Tab::make('Główne informacje')
                            ->icon('heroicon-o-information-circle')
                            ->columns()
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->label('Tytuł')
                                    ->unique(ignoreRecord: true, column: 'title')
                                    ->minLength(3)
                                    ->maxLength(255)
                                    ->required()
                                    ->live(debounce: 1000)
                                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),

                                Forms\Components\TextInput::make('slug')
                                    ->label('Slug')
                                    ->required()
                                    ->placeholder('Przyjazny adres url który wygeneruje się automatycznie')
                                    ->readOnly(),

                                Forms\Components\DatePicker::make('start_date')
                                    ->label('Data rozpoczęcia')
                                    ->columns(1)
                                    ->default(now())
                                    ->required(),

                                Forms\Components\DatePicker::make('end_date')
                                    ->label('Data zakończenia')
                                    ->columns(1)
                                    ->default(now()->addMonths(3))
                                    ->required(),

                                Forms\Components\Select::make('special_offer_category_id')
                                    ->label('Kategoria')
                                    ->relationship('specialOfferCategories', 'title',)
                                    ->multiple()
                                    ->preload()
                                    ->searchable()
                                    ->required()
                                    ->columnSpanFull()
                                    ->createOptionForm(SpecialOfferCategory::getForm())
                                    ->placeholder('Mozesz wybrac kilka'),

                                Forms\Components\Select::make('special_offer_feature_id')
                                    ->label('Cechy')
                                    ->relationship('specialOfferFeatures', 'title',)
                                    ->multiple()
                                    ->preload()
                                    ->searchable()
                                    ->required()
                                    ->columnSpanFull()
                                    ->createOptionForm(SpecialOfferFeature::getForm())
                                    ->placeholder('Mozesz wybrac kilka'),


                                Forms\Components\TextInput::make('price')
                                    ->label('Cena')
                                    ->required()
                                    ->numeric()
                                    ->suffix('zł'),

                                Forms\Components\Textinput::make('link')
                                    ->label('Link do oferty')
                                    ->url()
                                    ->required()
                                    ->columns(1),


                                Forms\Components\FileUpload::make('thumbnail')
                                    ->label('Miniaturka')
                                    ->directory('special-offers')
                                    ->getUploadedFileNameForStorageUsing(
                                        fn(TemporaryUploadedFile $file): string => 'oferta-specjalna' . now()->format('Ymd_His') . '.' . $file->getClientOriginalExtension()
                                    )
                                    ->image()
                                    ->maxSize(8192)
                                    ->optimize('webp')
                                    ->imageEditor()
                                    ->imageEditorAspectRatios([
                                        null,
                                        '16:9',
                                        '4:3',
                                        '1:1',
                                    ])
                                    ->required()
                                    ->columnSpanFull(),
                            ]),
                        // TREŚĆ
                        Tabs\Tab::make('Treść')
                            ->icon('heroicon-o-pencil')
                            ->columns()
                            ->schema([
                                Forms\Components\Textarea::make('short_description')
                                    ->label('Krótki opis')
                                    ->required()
                                    ->columnSpanFull(),

                                Forms\Components\RichEditor::make('content')
                                    ->label('Opis główny')
                                    ->toolbarButtons([
                                        'bold',
                                        'italic',
                                        'h2',
                                        'h3',
                                        'italic',
                                        'bulletList',
                                        'orderedList',
                                        'redo',
                                        'strike',
                                        'underline',
                                        'undo',
                                    ])
                                    ->required()
                                    ->columnSpanFull(),
                            ]),
                        // SEO
                        Tabs\Tab::make('SEO')
                            ->icon('heroicon-o-globe-alt')
                            ->columns()
                            ->schema([

                                Shout::make('seo-info')
                                    ->content('Jeżeli nie podasz meta tagow zostana one wygenerowane automatycznie.')
                                    ->color('info')
                                    ->columnSpanFull(),

                                TextInput::make('meta_title')
                                    ->label('Tytuł Meta')
                                    ->placeholder('Meta title to tytuł strony internetowej wyświetlany w wynikach wyszukiwarek i na kartach przeglądarki.')
                                    ->characterLimit(60)
                                    ->minLength(10)
                                    ->maxLength(75)
                                    ->live(debounce: 1000)
                                    ->afterStateUpdated(function (Livewire $livewire, Component $component) {
                                        $validate = $livewire->validateOnly($component->getStatePath());
                                    })
                                    ->columnSpanFull(),

                                TextInput::make('meta_desc')
                                    ->label('Opis Meta')
                                    ->placeholder('Meta description to krótki opis strony internetowej wyświetlany w wynikach wyszukiwarek.')
                                    ->characterLimit(160)
                                    ->maxLength(180)
                                    ->live(debounce: 1000)
                                    ->afterStateUpdated(function (Livewire $livewire, Component $component) {
                                        $validate = $livewire->validateOnly($component->getStatePath());
                                    })
                                    ->columnSpanFull(),
                            ]),


                    ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->label('Miniaturka')
                    ->circular(),
                Tables\Columns\TextColumn::make('title')
                    ->label('Tytuł')
                    ->description(function (SpecialOffer $record) {
                        return Str::limit(strip_tags($record->short_description), 40);
                    })
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('start_date')
                    ->label('Data rozpoczęcia')
                    ->badge()
                    ->dateTime()
                    ->formatStateUsing(function ($state) {
                        return Carbon::parse($state)->format('d-m-Y H:i');
                    })
                    ->color(function ($state) {
                        if ($state <= Carbon::now()) {
                            return 'success';
                        } else {
                            return 'danger';
                        }
                    })
                    ->sortable(),
                Tables\Columns\TextColumn::make('end_date')
                    ->label('Data zakończenia')
                    ->badge()
                    ->dateTime()
                    ->formatStateUsing(function ($state) {
                        return Carbon::parse($state)->format('d-m-Y H:i');
                    })
                    ->color(function ($state) {
                        if ($state < Carbon::now()) {
                            return 'danger';
                        } else {
                            return 'success';
                        }
                    })
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
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
            'index' => Pages\ListSpecialOffers::route('/'),
            'create' => Pages\CreateSpecialOffer::route('/create'),
            'edit' => Pages\EditSpecialOffer::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return ('Oferta');
    }
    public static function getPluralLabel(): string
    {
        return ('Oferty');
    }

    public static function getLabel(): string
    {
        return ('Oferta');
    }
}
