<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoArticulo extends Model
{
    use HasFactory;

    protected $table = 'articulos_pedidos';
    protected $primaryKey = 'id';
    protected $fillable = ['pedidoId','articuloId','cantidad'];
    public $timestamps = false;

    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'pedidoId');
    }

    public function articulo()
    {
        return $this->belongsTo(Articulo::class, 'articuloId');
    }
    
}
