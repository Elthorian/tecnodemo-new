<?php

use Carbon\Carbon;

function getFechaInicioTramoActual()
{
    $hoy = Carbon::now()->startOfDay();
    $dia21 = $hoy->copy()->day(21);
    if($dia21 >= $hoy)
    {
        $dia21 = $dia21->subMonth();
    }
    return $dia21;
}

function getFechaFinalTramoActual()
{
    $hoy = Carbon::now()->startOfDay();
    $dia21 = $hoy->copy()->day(20);
    if($dia21 < $hoy)
    {
        $dia21 = $dia21->addMonth(1);
    }
    return $dia21;
}

function getFechaFinalTramo($fechaInicio)
{
    return $fechaInicio->copy()->addMonth(1)->subDays(1);
}

function getMeses()
{
    return [
        '1' => '21 de Enero',
        '2' => '21 de Febrero',
        '3' => '21 de Marzo',
        '4' => '21 de Abril',
        '5' => '21 de Mayo',
        '6' => '21 de Junio',
        '7' => '21 de Julio',
        '8' => '21 de Agosto',
        '9' => '21 de Septiembre',
        '10' => '21 de Octubre',
        '11' => '21 de Noviembre',
        '12' => '21 de Diciembre'
    ];
}

function getAnyos()
{
    return [
        '2023' => '2023',
        '2024' => '2024',
        /*'2025' => '2025',
        '2026' => '2026',
        '2027' => '2027',
        '2028' => '2028',
        '2029' => '2029',
        '2030' => '2030',*/
    ];
}

?>