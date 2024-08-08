<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Articulo extends Model
{
    use HasFactory;

    protected $table = 'articulos';
    protected $primaryKey = 'id';
    protected $fillable = ['codigo','nombre','activo','ultimaEdicion','fechaCreacion'];
    public $timestamps = false;

    public function articulosPedidos()
    {
        return $this->hasMany(PedidoArticulo::class, 'articuloId');
    }

    public function totalPedidosMes()
    {
        $diaInicioMes = getFechaInicioTramoActual();
        $contador = 0;
        foreach($this->articulosPedidos->where('cantidad','>',0) as $articuloPedido)
        {
            if($articuloPedido->pedido == null){
                dd($articuloPedido);
            }
            if(Carbon::parse($articuloPedido->pedido->fechaInicioTramo)->format('Y-m-d') == $diaInicioMes->format('Y-m-d'))
            {
                $contador += $articuloPedido->cantidad;
            }
        }
        return $contador;
    }
}
