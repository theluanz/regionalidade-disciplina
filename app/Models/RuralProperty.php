<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuralProperty extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'street',
      'zip_code',
      'latitude',
      'longitude',
      'phone',
      'user_id'
  ];

  public function user()
  {
      return $this->belongsTo('App\Models\User');
  }

  public function products()
  {
    return $this->hasMany(Product::class);
  }
}
