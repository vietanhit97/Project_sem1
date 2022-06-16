<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = ['customer_id','name','email','phone','address','status'];

    public function details()
    {
        return $this->hasMany(OrderDetail::class, 'order_id', 'id');
    }

    public function getTotalAmount()
    {
        $total = 0;

        foreach ($this->details as $detail) {
            $total += $detail->quantity * $detail->price;
        }

        return $total;
    }
    public function scopeSearch($query) // scopeSearch viết bên controller bỏ scope viết thương search
    {
        if (request('key')) {
            $key = request('key');
            $query = $query->where('name','like','%'.$key.'%');
        }
        return $query;
    }

}