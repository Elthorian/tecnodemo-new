<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SEO;

class ServiciosController extends Controller
{
    public function index()
    {
        SEO::setTitle('Tecnodemo Iberica');
        SEO::setDescription('Servicios de limpieza en Cataluña');
        SEO::opengraph()->setUrl('https://www.tecnodemoiberica.com/');
        SEO::setCanonical('https://www.tecnodemoiberica.com/');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::twitter()->setSite('@Tecnodemoiberic');

        return view('servicios.index', []);
    }

    public function comunities()
    {
        return view('servicios.comunities', []);
    }

    public function parkings()
    {
        return view('servicios.parkings', []);
    }

    public function buildingsMaintenance()
    {
        return view('servicios.buildingsMaintenance', []);
    }

    public function crystals()
    {
        return view('servicios.crystals', []);
    }

    public function heightCleans()
    {
        return view('servicios.heightCleans', []);
    }

    public function shopsOffices()
    {
        return view('servicios.shopsOffices', []);
    }

    public function technicalCleanings()
    {
        return view('servicios.technicalCleanings', []);
    }

    public function industrialCleanings()
    {
        return view('servicios.industrialCleanings', []);
    }

    public function accessControl()
    {
        return view('servicios.accessControl', []);
    }

    public function muchMore()
    {
        return view('servicios.muchMore', []);
    }

}
