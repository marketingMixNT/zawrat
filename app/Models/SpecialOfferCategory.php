<?php

namespace App\Models;

use Filament\Forms\Set;
use Illuminate\Support\Str;
use Awcodes\Shout\Components\Shout;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SpecialOfferCategory extends Model
{
    use HasTranslations;

    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'array',
        'slug' => 'array',
    ];

    public function specialOffers(): BelongsToMany
    {
        return $this->belongsToMany(SpecialOffer::class);
    }

    public $translatable = [
        'title',
        'slug',
    ];

    // FORM
    public static function getForm(): array
    {
        return [
            Shout::make('info')
            ->content('Aby dodać tłumaczenie przejdź do dedykowanej zakładki')
            ->type('info'),
            TextInput::make('title')
                ->label('Tytuł')
                ->unique(ignoreRecord: true)
                ->minLength(3)
                ->maxLength(255)
                ->required()
                ->live(debounce: 1000)
                ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),

           TextInput::make('slug')
                ->label('Slug')
                ->required()
                ->placeholder('Przyjazny adres url który wygeneruje się automatycznie')
                ->readOnly(),
        ];
    }
}
