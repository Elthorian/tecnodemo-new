<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use SEO;

class ContactoController extends Controller
{
    public function index()
    {
        SEO::setTitle('Tecnodemo Iberica');
        SEO::setDescription('Servicios de limpieza en Cataluña');
        SEO::opengraph()->setUrl('https://www.tecnodemoiberica.com/');
        SEO::setCanonical('https://www.tecnodemoiberica.com/');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::twitter()->setSite('@Tecnodemoiberic');

        return view('contacto.index', []);
    }

    public function enviarMail(Request $request)
    {
        $emailData = [
            'name' => $request->name,
            'subject' => $request->subject,
            'mail' => $request->mail,
            'phone' => $request->phone,
            'comment' => $request->comment
        ];
        Mail::to(env('MAIL_SEND_TO'))->send(new ContactMail($emailData));
        $val = sizeof(Mail::failures()) == 0;
        return back()->withInput();
    }
}
