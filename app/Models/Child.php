<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'name',
        'birth_day',
        'gender',
    ];

    protected $appends=['day','age'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'birth_day' => 'timestamp',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getDayAttribute(){
        return Carbon::parse($this->birth_day)->format('d/m/Y');
    }

    public function getAgeAttribute(){
      
    
        return  Carbon::parse($this->birth_day)->age;
    }


}
