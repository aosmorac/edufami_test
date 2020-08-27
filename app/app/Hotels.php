<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotels extends Model
{
    /**
     * Fields that the app can fill in db using the model
     * 
     * @var array 
     */
    protected $fillable = ['city_id', 'name', 'address', 'nit', 'rooms'];

    /**
     * A hotel is in a city
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city()
    {
        return $this->belongsTo('App\Cities', 'city_id');
    }
}
