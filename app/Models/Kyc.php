<?php

namespace Framework\Models;

use Illuminate\Database\Eloquent\Model;

class Kyc extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
