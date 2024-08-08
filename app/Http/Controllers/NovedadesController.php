<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SEO;

class NovedadesController extends Controller
{
    public function index()
    {
        SEO::setTitle('Tecnodemo Iberica');
        SEO::setDescription('Servicios de limpieza en Cataluña');
        SEO::opengraph()->setUrl('https://www.tecnodemoiberica.com/');
        SEO::setCanonical('https://www.tecnodemoiberica.com/');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::twitter()->setSite('@Tecnodemoiberic');

        return view('novedades.index', []);
    }  

}
