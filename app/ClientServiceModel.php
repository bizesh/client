<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientServiceModel extends Model
{
    protected $table = 'service';

    protected $guarded = ['id', 'created_at', 'updated_at'];
}