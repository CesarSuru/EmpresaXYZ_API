<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sucursal extends Model
{
    protected $fillable = ['id','nom_sucursal','nom_admin','tel','direccion','fax','pedidos_mes','created_at','update_at'];
}
