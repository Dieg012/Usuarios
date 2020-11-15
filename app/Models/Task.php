<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name',
        'description',
        'date',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
