<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class links extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }

    public function payment()
    {
        return $this->hasOne(payments::class, 'link_id', 'id');
    }



}
