<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientPaymentsModel extends Model
{
    protected $table = 'payment';

    protected $guarded = ['id', 'created_at', 'updated_at'];
}