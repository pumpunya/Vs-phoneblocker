<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reportnumber extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'reportnumber';

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
    protected $fillable = ['id', 'address', 'detail', 'status'];

    
}
