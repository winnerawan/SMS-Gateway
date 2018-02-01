<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outbox extends Model
{
    protected $table = 'outbox';

    public $timestamps = false;

    protected $fillable = [
        'SendBefore',
        'SendAfter',
        'SendingDateTime',
        'DestinationNumber',
        'Class',
        'TextDecoded',
        'CreatorID'
    ];
}
