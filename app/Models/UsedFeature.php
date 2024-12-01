<?php

namespace App\Models;

use App\Models\User;
use App\Models\Feature;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UsedFeature extends Model
{
    use HasFactory;

    protected $fillable = ['feature_id', 'user_id', 'credits'];

    protected function casts() : array{
        return [
            'data' => 'array'
        ];
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function feature(){
        return $this->belongsTo(Feature::class);
    }
}
