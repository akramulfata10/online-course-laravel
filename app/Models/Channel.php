<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Channel extends Model {
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];
    // satu channel hanya boleh memiliki banyak vidio
    public function videos() {
        return $this->hasMany(Video::class);
    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
        //satu channel hanya boleh memiliki satu user
    }

}