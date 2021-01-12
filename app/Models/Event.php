<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //use HasFactory; TODO: Cleanup

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'start',
        'end',
        'color',
        'textColor',
        'user_id',
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
