<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Address
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $steet
 * @property string $city
 * @property string|null $zip
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Address newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address query()
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereSteet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereZip($value)
 * @mixin \Eloquent
 */
class Address extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
