<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'min_age',
        'max_age',
        'price'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'price' => 'float',
        'expire_at' => 'timestamp',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class,'invoices','plan_id','user_id')->withPivot('paid_at',"description")->withTimestamps();
    }

    public function expaired_at_difference()
      {
           return Carbon::createFromTimestamp($this->expire_at)->diffForHumans();
      } 
}
