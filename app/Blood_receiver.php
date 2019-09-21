<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blood_receiver extends Model
{
    protected $fillable = [
    	'NID', 'branch_id', 'blood_type', 'blood_bag_quantity', 'reason',
    ];
}
