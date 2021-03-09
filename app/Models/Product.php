<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $fillable = [
        'description',
        'price',
        'details',
        'unit',
        'minimum_stock',
        'rural_property_id',
        'quantity'

    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function getUnits()
    {
        return [
            'l'     =>      'litros',
            'ml'    =>      'mililitros',
            'g'     =>      'gramas',
            'kg'    =>      'quilogramas',
            'un'    =>      'unidade',
            'pct'   =>      'pacote'
        ];
    }

}
