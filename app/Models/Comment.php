<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function service()
    {
        return $this->belongsTo(Service::class, 'user_id');
    }

    use HasFactory;
}
