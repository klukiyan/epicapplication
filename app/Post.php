<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name
    protected $table = 'posts';
    //primary key
    public $primaryKey = 'id';
    //Timestamps (which are not needed as are there by default0)
    public $timestamps = true;

    public function user(){
        //this is a relationship that a post belongs to a user
        return $this->belongsTo('App\User');
    }

}
