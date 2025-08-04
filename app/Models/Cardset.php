<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Word;

class Cardset extends Model
{
    protected $fillable = ['name'];

     public function words(): HasMany
    {
        return $this->hasMany(Word::class);
    }

    //find bases with already ready words, find the way to fetch the words + add avail to create words
    //make resource for cardset
}
