<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'member';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'email', 'name', 'password', 'package', 'free_trial'];

    
}
