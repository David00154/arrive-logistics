<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Package extends Model
{
    use HasFactory, HasUuids;

    public $keyType = 'string';

    public $incrementing = false;

    protected $guarded = [];

    protected $fillable = ['package_name', 'description', 'weight', 'dimensions', 'customer_id'];

    protected $casts = [
        "weight" => "double",
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
