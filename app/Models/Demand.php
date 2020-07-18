<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Demand extends Model
{
    protected $guarded = ['id'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
