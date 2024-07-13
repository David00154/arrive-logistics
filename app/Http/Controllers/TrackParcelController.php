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
            $customer = Customer::query()->where("tracking_id", $tracking_id)->first()->load("packages");
            if ($customer == null) {
                session()->flash("error", "The tracking number is not available.");
                return view(
                    'track-parcel'
                );
            }
            // dd($customer["packages"]);
            $lastIndex = count($customer->delivery_statuses) > 0 && -1;
            return view("track-parcel", [ //
                'statuses' => $customer->delivery_statuses,
                'courier_solution' => $customer->solution,
                'tracking_id' => $tracking_id,
                "customer_id" => $customer->id,
                "customer_email" => $customer->email,
                "delivery_date" => $customer->delivery_date->format('d F, Y H:i'),
                "address" => $customer->address,
                "package_names" => $this->getPackageNames($customer['packages']),
                'is_status_failed' => $this->getLastIndex($customer->delivery_statuses)
            ]);
        }
        return view("track-parcel");
    }
    function getPackageNames($list): string
    {
        $packageNames = [];
        foreach ($list as $item) {
            if (isset($item['package_name'])) {
                $packageNames[] = $item['package_name'];
            }
        }
        $packageNamesString = implode(', ', $packageNames);
        return $packageNamesString;
    }
    function getLastIndex($array)
    {
        $size = count($array) > 0;
        if ($size > 0) {
            $lastIndex = $array[$size - 1]['status'];
            if ($lastIndex == "Failed to Deliver") {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }

    }
}
