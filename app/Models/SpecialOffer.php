<?php

namespace App\Models;

use App\Models\SpecialOfferCategory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SpecialOffer extends Model
{

    use HasTranslations;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'meta_title',
        'meta_description',
        'title',
        'slug',
        'thumbnail',
        'price',
        'start_date',
        'end_date',
        'short_description',
        'content',
        'link',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'meta_title' => 'array',
        'meta_description' => 'array',
        'title' => 'array',
        'slug' => 'array',
        'start_date' => 'date',
        'end_date' => 'date',
        'short_description' => 'array',
        'content' => 'array',
    ];

    public function specialOfferCategories(): BelongsToMany
    {
        return $this->belongsToMany(SpecialOfferCategory::class);
    }

    public function specialOfferFeatures(): BelongsToMany
    {
        return $this->belongsToMany(SpecialOfferFeature::class);
    }

    public $translatable = [
        'meta_title',
        'meta_description',
        'title',
        'slug',
        'short_description',
        'content',
        'link',
    ];
}
