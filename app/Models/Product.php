<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'categorie_id',
        'prix',
        'stock',
    ];
    protected $guarded = ['id'];
    //
    public function Category()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }

    public function favoritedBy()
    {
        return $this->belongsToMany(User::class, 'favorites')
            ->withTimestamps();
    }

}
