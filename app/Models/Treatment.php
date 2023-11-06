<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
class Treatment extends Model
{
    public $timestamps = true;

    use HasFactory;
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $table = 'treatments';

    protected $fillable = [
        'type',
        'product',
        'batch',
        'amount',
        'inventory_amount',
        'unit',
        'mode',
        'site',
        'days_to_withdrawal',
        'retreat_date',
        'technician',
        'currency',
        'cost',
        'record_transaction',
        'treatment_description',
        'dates',
        'treatment_keywords',
    ];

    public function animal()
{
    return $this->belongsTo(Animal::class, 'animal_id');
}
protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
        });
    }

    public function user()
{
    return $this->belongsTo(User::class);
}
}
