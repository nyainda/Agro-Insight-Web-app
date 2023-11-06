<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Animal extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;


    protected $fillable = [
        'user_id',
        'name',
        'type',
        'breed',
        'gender',
        'keywords',
        'internal_id',
        'status',
        'death_date',
        'deceased_reason',
//
        'is_neutered',
        'is_breeding_stock',
        'coloring',
        'retention_score',
        'weight',
        'height',
        'body_condition_score',
        'horn_length',
        'tail_length_shape',
        'fur_feather_scale_type',
        'eye_color',
        'beak_shape',
        'tail_feather_pattern',
        'saddle_markings',
        'hoof_type',
        'gait_or_movement',
        'teeth_characteristics',
        'description',
//
        'tag_number',
        'color',
        'location',
        'electronic_id',
        'other_tag',
        'other_color',
        'other_location',
        'registry_number',
        'tattoo_left',
        'tattoo_right',
        'photographs',
        'dna_profile',
        'scars',
//
        'birth_date',
        'dam',
        'sire',
        'birth_weight',
        'weight_unit',
        'age_to_wean',
        'date_weaned',
        'birth_time',
        'birth_status',
        'colostrum_intake',
        'health_at_birth',
        'milk_feeding',
        'vaccinations',
        'breeder_info',
        'raised_purchased',
        'birth_photos',
        'purchasedAnimal',
        'purchaseDate',
        'purchasePrice',
        'vendor',
        'treatments',




    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($animal) {
            $animal->id = (string) Str::uuid();
        });
    }

    public function measurements()
    {
        return $this->hasMany(Measurement::class);
    }

    public function treatments()
    {
        return $this->hasMany(Treatment::class);
    }

    public function Feedings()
    {
        return $this->hasMany(Feeding::class);
    }

    public function yieldrecords()
    {
        return $this->hasMany(YieldRecord::class);
    }

    // Animal.php
public function user()
{
    return $this->belongsTo(User::class);
}
public function notes(): HasMany
{
    return $this->hasMany(Note::class);
}
public function tasks(): HasMany
{
    return $this->hasMany(Task::class);
}
}
