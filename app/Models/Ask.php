<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ask extends Model
{
    use HasFactory;
    protected $fillable = ["address", "country" , "source", "quantity", "phone", "date", "bill", "user_id"];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
