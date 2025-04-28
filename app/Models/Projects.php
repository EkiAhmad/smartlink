<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Projects extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Task(): HasMany
    {
        return $this->hasMany(Tasks::class, 'project_id', 'id');
    }

}
