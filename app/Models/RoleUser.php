<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{

    use HasFactory;

    public $timestamps = false;
    // this is just connecting the user_id to the role_id;
}
