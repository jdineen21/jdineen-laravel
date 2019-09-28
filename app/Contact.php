<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $connection = 'sqlite';
    protected $table = 'contacts';
    protected $primaryKey = 'id';
}
