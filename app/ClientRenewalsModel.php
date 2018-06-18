<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientRenewalsModel extends Model
{
    protected $table = 'renewal';

    protected $guarded = ['id', 'created_at', 'updated_at'];
}