<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

class Message extends Model
{


    use HasTags;

    public function user(){
        return $this->belongsTo('App\User');

    }

    protected $fillable = ['message', 'header'];

}
