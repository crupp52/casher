<?php

namespace App\Models;

use App\Enums\VehicleType;
use BenSampo\Enum\Traits\CastsEnums;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
    use HasFactory;
    use SoftDeletes;
    use CastsEnums;

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'type',
    ];

    protected $casts = [
        'type' => VehicleType::class
    ];

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return HasMany
     */
    public function fuelings(): HasMany
    {
        return $this->hasMany(Fueling::class);
    }
}
