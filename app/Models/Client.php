<?php

namespace CodeDelivery\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Client extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'category_id',
        'phone',
        'address',
        'city',
        'state',
        'postcode'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
