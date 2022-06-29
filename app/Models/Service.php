<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');

    }

    public function reviews()
    {
        return $this->hasMany(Comment::class);

    }

    public function shopcart()
    {

        return $this->hasMany(ShopCart::class);
    }

    public function orderproduct()
    {

        return $this->hasMany(OrderProduct::class);
    }

    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }

    public function message()
    {

        return $this->hasMany(Message::class);
    }

}
