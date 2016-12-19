<?php

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nickname',
        'email',
        'password',
        'role',
        'pic_url',
        'language',
        'website',
        'twitter',
        'facebook',
        'mobile_phone',
        'work_phone',
        'description',
        'disabled_at',
    ];

    public function getUsers() {
        return [ 'id' => 'hello' ];
    }

}