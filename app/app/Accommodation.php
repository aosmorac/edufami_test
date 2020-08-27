<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accommodation extends Model
{
    /**
     * The primary key in the table is a string
     * 
     * @var string 
     */
    public $keyType = 'string';
    
    /**
     * Relation with roomType
     * A Accommodation is linked to a specific room type
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function roomType()
    {
        return $this->belongsTo('App\RoomType', 'room_type_id');
    }
}
