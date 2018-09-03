<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreFormContact;
use App\Jobs\ResizeImage;
use App\Mail\ContactMessageCreated;
use App\Message;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    public function create(){
        return view('contacts.create');
    }
    /**
     * @param StoreFormContact $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreFormContact $request){
//       dd($request->only('name','email','message'));
        $uploadaefile=$request->file('file');
       $file= $uploadaefile->move(public_path('uploads'),$uploadaefile->getClientOriginalName());
        $formats=[150,500,1000,1220,1800];
        $job=new ResizeImage($formats, $file);
        $job->delay(Carbon::now()->addSecond(15));
        $this->dispatch($job);
        $message=Message::create($request->all());
            $mailable=new ContactMessageCreated($message);
            Mail::to(config('laracarte.admin_support_email'));
            flashy()->success('Nous vous rependrons dans 28h ouvrable !');
            return redirect()->route('root_path');
    }
}