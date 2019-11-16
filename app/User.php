<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'status', 'company_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /** Mine down from here */
    public function company(){

        return $this->belongsTo(Company::class);

    }

    /** This is an Accesors; Accesor allow you to format Eloquent Attributes values when retrieve them on model Instances */
    public function getStatusAttribute($attribute){
        // Here we will do some refactoring.
        return $this->getStatus()[$attribute];
    }

    public function getStatus(){
        /** We refactored here.
         * By creating this function outside of the getStatusAtrribute we can now call it from the view.
         */
        return [
            0 => 'Inactive',
            1 => 'Active',
            2 => 'In-progress'
        ];
    }
    /** Default value set in order to solve an error */
    protected $attributes = [
        'status' => 1
    ];

}
