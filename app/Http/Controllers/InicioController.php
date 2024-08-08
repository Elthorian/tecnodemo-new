<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use SEO;

class InicioController extends Controller
{
    public function index()
    {
        SEO::setTitle('Tecnodemo Iberica Mantenimiento y Servicios S.L.');
        SEO::setDescription('Servicios mantenimiento, servicios y limpieza en Cataluña');
        SEO::opengraph()->setUrl('https://www.tecnodemoiberica.com/');
        SEO::setCanonical('https://www.tecnodemoiberica.com/');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::twitter()->setSite('@Tecnodemoiberic');

        $date = Carbon::parse('2013-08-12 00:00:00');
        $now = Carbon::now();
        $diff = $date->diffInYears($now);

        return view('inicio.index', [
            'years' => $diff,
        ]);
    }
}
