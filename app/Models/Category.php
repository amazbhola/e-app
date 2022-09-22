<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'user_id',
    ];

    public function tasks()
    {
        return $this->hasMany(Tasks::class);
    }

    public function googlekeeps()
    {
        return $this->hasMany(Googlekeep::class);
    }
}
