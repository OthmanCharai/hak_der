<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Partner extends Model
{
    use HasFactory;


    protected $appends=['birth_day'];
    protected $fillable=[
        'partner_name',
        'partner_username',
        'partner_birth_day',
        'partner_gender',
        'partner_nationality',
        'partner_sickness',
        'partner_birth_place',
        'partner_furnal_place'
    ];

    /**
     * user
     *
     * @return HasOne
     */
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }

    /**
     * @return string
     */
    public function getBirthDayAttribute():string{
        return Carbon::parse($this->partner_birth_day)->format('d/m/Y');
    }
}
