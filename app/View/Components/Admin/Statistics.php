<?php

namespace App\View\Components\Admin;

use App\Livewire\Pages\Admin\Customers;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class Statistics extends Component
{
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
        return view('components.admin.statistics', [
            'customers' => DB::table('customers')->get()->count(),
            "packages" => DB::table("packages")->get()->count(),
            "active_transits" => DB::table("customers")->where("tracking_id", "!=", null)->count(),
        ]);
    }
}
