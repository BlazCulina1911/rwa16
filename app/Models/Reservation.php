<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Reservation
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $result
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|Reservation newModelQuery()
 * @method static Builder|Reservation newQuery()
 * @method static Builder|Reservation query()
 * @method static Builder|Reservation whereCreatedAt($value)
 * @method static Builder|Reservation whereId($value)
 * @method static Builder|Reservation whereResult($value)
 * @method static Builder|Reservation whereUpdatedAt($value)
 * @method static Builder|Reservation whereUserId($value)
 * @mixin \Eloquent
 */
class Reservation extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
