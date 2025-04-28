<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Belongsto;

class Tasks extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function Project(): BelongsTo
    {
        return $this->belongsTo(Projects::class);
    }
}
