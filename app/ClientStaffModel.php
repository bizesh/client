<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientStaffModel extends Model
{
    protected $table = 'client_staff';

    protected $guarded = ['id', 'created_at', 'updated_at'];
}