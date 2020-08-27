<?php

namespace App\Http\Controllers;

use App\Rooms;
use Illuminate\Http\Request;

class RoomsController extends Controller
{

    /**
     * Return rooms list of a specific hotel
     * 
     * @param int $hotel_id
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function list(int $hotel_id)
    {
        $rooms = Rooms::with('hotel','roomType', 'accommodation')->where('hotel_id', $hotel_id)->get();
        
        return $rooms;
    }

    /**
     * Save a new rooms set
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $newRooms = [
                'hotel_id' => $request->input('hotel_id'),
                'room_type_id' => $request->input('room_type_id'),
                'accommodation_id' => $request->input('accommodation_id'),
                'amount' => $request->input('amount')
            ];

            $room = Rooms::create($newRooms);

            return $room->id;

        } catch (\Illuminate\Database\QueryException $exception) {

            return 'Error agregando Habitaciones !!!';

        }
    }

    /**
     * Update a rooms set that already exist
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try {
            $rooms = Rooms::find($request->input('id'));

            $rooms->hotel_id = $request->input('hotel_id') ?: $rooms->hotel_id;
            $rooms->room_type_id = $request->input('room_type_id') ?: $rooms->room_type_id;
            $rooms->accommodation_id = $request->input('accommodation_id') ?: $rooms->accommodation_id;
            $rooms->amount = $request->input('amount') ?: $rooms->amount;

            $rooms->save();

            return $rooms->id;

        } catch (\Illuminate\Database\QueryException $exception) {

            return 'Error agregando Habitaciones !!!';

        }
    }

    /**
     * Delete a rooms set
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        try {
            $rooms = Rooms::find($request->input('id'));

            $rooms->delete();

            return 'Habitaciones removidas';

        } catch (\Illuminate\Database\QueryException $exception) {

            return 'Error removiendo habitaciones !!!';

        }
    }
}
