<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class Asignacion extends Model
{
    use HasFactory;
    
    protected $table = 'asignaciones';
    protected $primaryKey = 'id';
    protected $fillable = ['clienteId','operarioId','fechaAsignacion','fechaInicio','fechaFinal','activo'];
    public $timestamps = false;
    
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'clienteId');
    }

    public function operario()
    {
        return $this->belongsTo(Usuario::class, 'operarioId');
    }

    public function pedidoActual($clienteId)
    {
        $diaInicioMes = getFechaInicioTramoActual();
        $diaFinalMes = getFechaFinalTramoActual();
        $asignacion = Asignacion::where('activo', 1)->where('clienteId', $clienteId)->where('operarioId', Auth::user()->id)->first();
        if($asignacion != null)
        {
            return Pedido::where('clienteId', $clienteId)
            ->where('fechaInicioTramo', '>=', $diaInicioMes)
            ->where('fechaFinalTramo', '>=', $diaFinalMes)
            ->first();
        }
        return null;
    }
}
