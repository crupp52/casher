<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Fueling extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_id',
        'gas_station_id',
        'traveled_distance',
        'refueled_quantity',
        'date',
        'price'
    ];

    /**
     * @return BelongsTo
     */
    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class);
    }

    /**
     * @return BelongsTo
     */
    public function gasStation(): BelongsTo
    {
        return $this->belongsTo(GasStation::class);
    }
}
