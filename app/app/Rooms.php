<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    /**
     * Fields that the app can fill in db using the model
     *
     * @var array
     */
    protected $fillable = ['hotel_id', 'room_type_id', 'accommodation_id', 'amount'];

    /**
     * A room is in a hotel
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function hotel() 
    {
        return $this->belongsTo(Hotels::class, 'hotel_id');
    }

    /**
     * A room belongs to a type
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roomType()
    {
        return $this->belongsTo(RoomType::class, 'room_type_id');
    }

    /**
     * A room belongs to a accommodation
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function accommodation()
    {
        return $this->belongsTo(Accommodation::class, 'accommodation_id');
    }
}
