<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $guarded = ['id'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function setAttributesAttribute($value)
    {
        $this->attributes['attributes'] = json_encode($value);
    }

    public function setImagesAttribute($value)
    {
        $this->attributes['images'] = json_encode($value);
    }

    public function getImagesAttribute()
    {
        return json_decode($this->attributes['images']);
    }

    public function getFeautresAttribute()
    {
        return json_decode($this->attributes['attributes']);
    }

    public function getExcerptAttribute()
    {
        return substr($this->attributes['address'],0, 10);
    }
}
