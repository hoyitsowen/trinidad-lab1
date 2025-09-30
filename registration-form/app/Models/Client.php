<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    protected $fillable = ['firstname', 'lastname', 'stud_num', 'gender', 'created_at', 'updated_at'];
}
