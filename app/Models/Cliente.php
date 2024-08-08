<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';
    protected $primaryKey = 'id';
    protected $fillable = ['codigo','nombre','direccion','poblacion','observaciones','material','activo','ultimaEdicion',
    'fechaCreacion'];
    public $timestamps = false;
    
    public function asignaciones()
    {
        return $this->hasMany(Asignacion::class, 'clienteId');
    }

    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'clienteId');
    }
}
