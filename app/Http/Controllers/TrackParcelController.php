<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class TrackParcelController extends Controller
{
    //
    public function __invoke()
    {
        $query = request()->query();
        if (isset($query["q"])) {
            $tracking_id = $query["q"];
            $customer = Customer::query()->where("tracking_id", $tracking_id)->first();
            if ($customer == null) {
                session()->flash("error", "The tracking number is not available.");
                return view(
                    'track-parcel'
                );
            }

            return view("track-parcel", ['statuses' => $customer->delivery_statuses]);
        }
        return view("track-parcel");
    }
}
