<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function index(Request $request){
        return view('welcome');
    }

    function getHotelDetails($id){
        $hotel = Hotel::findOrFail($id);
        return view('hotel-details', ['hotel'=>$hotel]);
    }
}
