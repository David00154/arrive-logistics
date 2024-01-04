<?php

namespace App\View\Components\Base;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MobileNavigation extends Component
{
    public $solutions = [
        array(
            "title" => "Air Fowarding",
            "image" => "imgs/page/homepage1/menu2.png",
            "href" => "air-fowarding",
            "megamenu" => ["General Cargo", "Express Shipping", "Dangerous Goods", "Oversized Cargo", "Perishable Goods"]
        ),
        array(
            "title" => "Land Fowarding",
            "image" => "imgs/page/homepage1/menu3.png",
            "href" => "land-fowarding",
            "megamenu" => ["Container Shipping", "Bulk Shipping", "Roll-on/Roll-off Shipping", "Break Bulk Shipping", "Project Cargo Shipping"]
        ),
        array(
            "title" => "Sea Fowarding",
            "image" => "imgs/page/homepage1/menu1.png",
            "href" => "sea-fowarding",
            "megamenu" => ["Road Freight", "Rail Freight", "Intermodal Transportation", "Less-than-Truckload (LTL) Shipping", "Specialized Transportation"]
        ),
        array(
            "title" => "Warehousing & Storage",
            "image" => "imgs/page/homepage1/menu5.png",
            "href" => "warhousing",
            "megamenu" => ["Warehousing", "Distribution Center Operations", "E-Commerce Fulfillment", "Reverse Logistics", "Inventory Management"]
        ),
    ];
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.base.mobile-navigation');
    }
}
