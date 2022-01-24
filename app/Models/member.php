<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

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
    protected $fillable = ['id', 'email', 'username', 'password', 'package', 'free_trial','exp_date'];

    
    public static function login($email,$password)
    {
        return DB::table('member')
                ->select('*')
                ->where('username', $email)
                ->Where('password', $password)
                ->first();
    }
}
