<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    protected $table = "members";
    protected $primaryKey = 'account';

    // function members() {
    //     return $this->hasOne(Department::class, 'membersId');
    // }
}
