<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Transaction extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'uuid', 'name', 'email', 'number', 'addres',
        'transaction_total', 'transaction_status'
    ];

    protected $hidden = [];

    public function Details()
    {
        return $this->hasMany(TransactionDetail::class, 'transactions_id');
    }
}
