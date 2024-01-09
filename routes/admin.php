<?php

use App\Livewire\Actions\Logout;
use App\Livewire\Pages\Admin\CreatePackage;
use App\Livewire\Pages\Admin\Customers;
use App\Livewire\Pages\Admin\EditCustomer;
use App\Livewire\Pages\Admin\GetCustomerById;
use App\Livewire\Pages\Admin\GetPackageById;
use App\Livewire\Pages\Admin\Packages;
use App\Models\Customer;
use App\Models\Package;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')
        ->name('dashboard');

    Route::get('customers', Customers::class)->name('customers');
    Route::get('edit-customer/{id}', EditCustomer::class)->name('edit-customer');
    Route::get('packages', Packages::class)->name('packages');
    Route::get('edit-package/{id}', Customers::class)->name('edit-package');
    Route::get('create-package', CreatePackage::class)->name('create-package');
    Route::get('customer/{id}', GetCustomerById::class)->name('customer-by-id');
    Route::get('package/{id}', GetPackageById::class)->name('package-by-id');
    // 
    Route::get("customer/{id}/delete", function (string $id) {
        try {
            Customer::where('id', $id)->delete();
            session()->flash("success", "Customer deleted.");
            return redirect()->back();
        } catch (\Throwable $th) {
            session()->flash("error", "Unable to take this action right now.");
            return redirect()->back();
        }
    })->name("delete-customer");
    Route::get("package/{id}/delete", function (string $id) {
        try {
            Package::where('id', $id)->delete();
            session()->flash("success", "Package deleted.");
            return redirect()->back();
        } catch (\Throwable $th) {
            session()->flash("error", "Unable to take this action right now.");
            return redirect()->back();
        }
    })->name("delete-package");

});

Route::get("/logout", function () {
    Auth::guard('web')->logout();

    Session::invalidate();
    Session::regenerateToken();
    return redirect(route('login'));
})->name("logout");