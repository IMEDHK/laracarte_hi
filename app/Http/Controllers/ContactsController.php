<?php
namespace App\Http\Controllers;
use App\Http\Requests\StoreFormContact;
use App\Mail\ContactMessageCreated;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class ContactsController extends Controller
{
    public function create(){
        return view('contacts.create');
    }
    public function store( StoreFormContact $request){
//       dd($request->only('name','email','message'));
        $message=Message::create($request->all());

        $mailable=new ContactMessageCreated($message);
            Mail::to(config('laracarte.admin_support_email'))->send($mailable);
            flashy()->success('Nous vous rependrons dans 28h ouvrable !');
            return redirect()->route('root_path');
    }
}