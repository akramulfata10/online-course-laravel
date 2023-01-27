<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model {
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];
    // satu vidio hanya boleh dimiliki oleh satu channel
    public function channel() {
        return $this->belongsTo(Channel::class);
    }
}