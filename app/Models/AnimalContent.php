<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class AnimalContent extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'bill_of_sale_id',
        'descriptions',
        'date',
        'keyword',
        'sold_to',
        'record_transaction',
        'sale_price',
    ];

    protected static function boot()
{
    parent::boot();

    static::creating(function ($animalContent) {
        // Generate a UUID and set it as the 'bill_of_sale_id' attribute
        $animalContent->bill_of_sale_id = Str::uuid();
    });

    static::creating(function ($model) {
        $model->id = (string) Str::uuid();
    });
}

public function animal()
    {
        return $this->belongsTo(Animal::class);
    }

    public function user()
{
    return $this->belongsTo(User::class);
}
}
