<?php

namespace App\Http\Controllers;

use App\Hotels;
use Illuminate\Http\Request;

class HotelsController extends Controller
{
    /**
     * Return hotels list
     * 
     * @param Request $request
     * @return mixed
     */
    public function list(Request $request)
    {
        $hotels = Hotels::orderBy('name')->get();
        
        return $hotels;
    }

    /**
     * Save a new hotel
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $newHotel = [
                'city_id' => $request->input('city_id'),
                'name' => $request->input('name'),
                'address' => $request->input('address'),
                'nit' => $request->input('nit'),
                'rooms' => $request->input('rooms')
            ];
            
            $hotel = Hotels::create($newHotel);

            return $hotel->id;
            
        } catch (\Illuminate\Database\QueryException $exception) {

            return 'Error agregando nuevo Hotel !!!';
            
        }        
    }

    /**
     * Edit a hotel that already exist
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try {
            $hotel = Hotels::find($request->input('id'));
            
            $hotel->city_id = $request->input('city_id') ?: $hotel->city_id;
            $hotel->name = $request->input('name') ?: $hotel->name;
            $hotel->address = $request->input('address') ?: $hotel->address;
            $hotel->nit = $request->input('nit') ?: $hotel->nit;
            $hotel->rooms = $request->input('rooms') ?: $hotel->rooms;
            
            $hotel->save();
    
            return $hotel->id;
    
        } catch (\Illuminate\Database\QueryException $exception) {
            
            return 'Error agregando nuevo Hotel !!!';
    
        }
    }

    /**
     * Delete a hotel
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        try {
            $hotel = Hotels::find($request->input('id'));

            $hotel->delete();
            
            return 'Hotel removido';

        } catch (\Illuminate\Database\QueryException $exception) {

            return 'Error removiendo Hotel, asegurese de eliminar las habitaciones previamente !!!';

        }
    }
}
