<?php

namespace App\Models;

use App\Enums\DeliveryStatus;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory, HasUuids;

    public $keyType = 'string';

    public $incrementing = false;

    protected $guarded = [];

    protected $fillable = ["name", "email", "phone", "address", "message", "tracking_id", "delivery_date", "estimated_delivery_time", "solution", "delivery_status", "delivery_amount", "payment_status"];

    public function packages(): HasMany
    {
        return $this->hasMany(Package::class);
    }

    protected $casts = [
        "delivery_status" => DeliveryStatus::class,
        "delivery_date" => "timestamp",
        "estimated_delivery_time" => "timestamp",
        "payment_status" => "boolean",
        "delivery_amount" => "double"
    ];
}
