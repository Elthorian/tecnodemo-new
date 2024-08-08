<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Usuario extends Model implements AuthenticatableContract
{
    use HasFactory;
    use Authenticatable;

    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre','telefono','email','rolId','usuario','password','activo','ultimoLogin','ultimaEdicion','fechaCreacion'];
    public $timestamps = false;
    
    public function asignaciones()
    {
        return $this->hasMany(Asignacion::class, 'operarioId')->where('activo',1);
    }

    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'operarioId');
    }

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'rolId');
    }
}
