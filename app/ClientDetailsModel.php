<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientDetailsModel extends Model
{
    protected $table = 'client_details';

    protected $guarded = ['id', 'created_at', 'updated_at'];
}