<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\CardSet;

class Word extends Model
{
    public $timestamps = false;
    protected $fillable = ['word', 'translation', 'cardset_id'];

    public function cardSets(): BelongsToMany
    {
        return $this->belongsToMany(CardSet::class);
    }

}
