<?php 

namespace Ypcode\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Ypcode\Contact\Mail\ContactMailable;
use Ypcode\Contact\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function store(Request $request)
    {
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name));
        Contact::create($request->all());

        return redirect()->back();
    }
}