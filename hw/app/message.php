<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    protected $table = "message";
    protected $primaryKey = 'messageId';

    // function message() {
    //     return $this->hasOne(Department::class, 'membersId');
    // }
}
