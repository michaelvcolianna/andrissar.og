<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Character extends Model
{
    use SoftDeletes;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'strength' => 'array',
        'dexterity' => 'array',
        'constitution' => 'array',
        'intelligence' => 'array',
        'wisdom' => 'array',
        'charisma' => 'array',
        'acrobatics' => 'array',
        'animal_handling' => 'array',
        'arcana' => 'array',
        'athletics' => 'array',
        'deception' => 'array',
        'history' => 'array',
        'insight' => 'array',
        'intimidation' => 'array',
        'investigation' => 'array',
        'medicine' => 'array',
        'nature' => 'array',
        'perception' => 'array',
        'performance' => 'array',
        'persuasion' => 'array',
        'religion' => 'array',
        'sleight_of_hand' => 'array',
        'stealth' => 'array',
        'survival' => 'array',
        'death_saves' => 'array',
        'weapons' => 'array',
        'spells' => 'array',
        'toggles' => 'array',
    ];

    /**
     * Get the user that owns the character.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
