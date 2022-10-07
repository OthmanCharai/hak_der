<?php

namespace App\Models;

use App\Interfaces\IMustVerifyMobile;
use App\Traits\MustVerifyMobile ;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Cashier\Billable;
use Spatie\Permission\Traits\HasRoles;


use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements IMustVerifyMobile,MustVerifyEmail
{
    use HasFactory, Notifiable,HasRoles,MustVerifyMobile,Billable;

    protected $appends=['age'];

    protected $fillable = [
        'name',
        'email',
        'username',
        'birth_day',
        'gender',
        'nationality',
        'sickness',
        'approved_at',
        'address',
        'zip_code',
        'residence',
        'furnale_place',
        'phone_number',
        'mobile_number',
        'birth_place',
        'password',
        'birth_day'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */




    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'birth_day' => 'timestamp',
        'approved_at' => 'timestamp',
        'email_verified_at' => 'datetime',

    ];

    /**
     * children
     *
     * @return void
     */
    public function children():HasMany
    {
        return $this->hasMany(Child::class);
    }

    /**
     * account
     *
     * @return void
     */
    public function account():HasOne
    {
        return $this->hasOne(Account::class);
    }

    /**
     * plans
     *
     * @return void
     */
    public function plans():BelongsToMany
    {
        return $this->belongsToMany(Plan::class,'invoices','user_id','plan_id')->withPivot('description')->withTimestamps();
    }

    /**
     * get_birth_day
     *
     * @return string
     */
    public function get_birth_day(): string
    {
           return Carbon::parse($this->birth_day)->format('d/m/Y');

    }

    public function  getAgeAttribute(){
        return  Carbon::parse($this->birth_day)->age;
    }

    /**
     * partner
     *
     * @return BelongsTo
     */
    public function partner():HasOne{
        return $this->hasOne(Partner::class);
    }

    public function routeNotificationForVonage($notification)
    {
        return $this->phone_number;
    }
}
