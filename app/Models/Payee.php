<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payee extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'firstname',
        'lastname',
        'bank_name',
        'routing_number',
        'account_number',

    ];

    protected $appends = ['full_account'];

    public function getFullAccountDetailsAttribute()
    {
        return $this->firstname. ' ' . $this->lastname. ' ' . $this->bank_name. ' ' . $this->account_number;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
