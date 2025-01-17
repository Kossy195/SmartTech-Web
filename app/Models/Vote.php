<?php

namespace App\Models;

use App\Models\Contestant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vote extends Model
{
    use HasFactory;

    public function contestants()
    {
        return $this->hasMany(Contestant::class);
    }
}
