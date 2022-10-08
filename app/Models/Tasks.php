<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Tasks
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string|null $description
 * @property string $status
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Tasks newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tasks newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tasks query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tasks whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tasks whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tasks whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tasks whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tasks whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tasks whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tasks whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tasks whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Tasks extends Model
{
    use HasFactory;
    protected $fillable = [

        'title', 'slug', 'description', 'status', 'image',
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
