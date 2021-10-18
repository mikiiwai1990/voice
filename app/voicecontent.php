<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class voicecontent extends Model
{
    //
    protected $fillable =[
        'voicecontent_id','user_id',
    ];
        
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function likes()
    {
        return $this->hasMany('App\Like');
    }

}
