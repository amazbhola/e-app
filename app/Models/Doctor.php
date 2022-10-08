<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Doctor
 *
 * @property int $id
 * @property string $name
 * @property string $degree
 * @property string|null $specialist
 * @property string $phone
 * @property string|null $job_location
 * @property string|null $email
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor query()
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereDegree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereJobLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereSpecialist($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'degree', 'specialist', 'phone', 'job_location', 'email',
    ];

}
