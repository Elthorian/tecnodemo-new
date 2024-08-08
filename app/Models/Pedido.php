<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = 'pedidos';
    protected $primaryKey = 'id';
    protected $fillable = ['clienteId','nota','fechaInicioTramo','fechaFinalTramo','ultimaModificacion'];
    public $timestamps = false;

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'clienteId');
    }

    public function pedidoArticulos()
    {
        return $this->hasMany(PedidoArticulo::class, 'pedidoId');
    }

}
