<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Guest;
use App\FoodPreference;
use App\Desk;
use App\Categorie;
use App\ShoeSize;
use Mail;

class MyController extends Controller
{
    public function rsvpGet($categories_id) {
    	$obj = new \stdClass();
    	$obj->categories_id = $categories_id;
        $obj->food_preferences = [];
        
        foreach (FoodPreference::all() as $food_record) {
            $obj->food_preferences[$food_record->id] = $food_record->preference;
        }
    
        $obj->shoe_sizes = [];
        $obj->food_prefences = FoodPreference::lists('id', 'preference');
     foreach (ShoeSize::all() as $shoe_record) {
            $obj->shoe_sizes[$shoe_record->id] = $shoe_record->size;
        }

    	return view('frontend.rsvp', ["obj" => $obj]);
    } 

    public function rsvpPost(Request $request) {
    	$obj = new \stdClass();
    	$obj->full_name = $request->input('full_name');
        $obj->email = $request->input('email');
        $obj->rsvp = $request->input('rsvp');
        $obj->shoe_sizes_id = $request->input('shoe_sizes_id');
        $obj->categories_id = $request->input('categories_id');
        $obj->food_preferences_id = $request->input('food_preferences_id');
        if ($obj->rsvp) {
            $guest = new Guest;
            $guest->full_name = $obj->full_name;
            $guest->email = $obj->email;
            $guest->rsvp = $obj->rsvp;
            $guest->shoe_sizes_id = $obj->shoe_sizes_id;
            $guest->food_preferences_id = $obj->food_preferences_id;
            $guest->categories_id = $obj->categories_id
            $desks = Desk::where('categories_id', $obj->categories_id);
            if (count($desks) > 0) {
                $empty_desks = false;
                foreach ($desks as $desk) {
                    $desk_guests = $desk->guests();
                    if (count($desk_guests) < 10) {
                        $guest->desks_id = $desk->id;
                        $empty_desks = true;
                        break;
                    }
                }
                if (!$empty_desks) {
                    $desk = new Desk;
                    $desk->categories_id = $obj->categories_id;
                    $desk->save();
                    $guest->desks_id = $desk->id;
                }
            } else {
                // If no table exists
                $desk = new Desk;
                $desk->categories_id = $obj->categories_id;
                $desk->save();
                $guest->desks_id = $desk->id;
            } 
            $guest->save();
            $obj->desks_id = $guest->desks_id;

                        }
    	   return view('frontend.thankyou', ["obj" => $obj]);
    }
}
