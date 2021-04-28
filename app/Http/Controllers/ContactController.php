<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests\StoreFormRequest;
use App\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\SentContactMail;

class ContactController extends Controller
{
    public function input()
    {
        return view('input');
    }

    public function confirm(StoreFormRequest $request)
    {
        return view('confirm', [
            'request' => $request->all(),
        ]);
    }

    public function complete(StoreFormRequest $request)
    {
        if ($request->input('button') === 'back') {
            return redirect()->route('input')
                ->withInput();
        } else {
            $form_data = new Contact;
            $form_data->last_name = $request['last_name'];
            $form_data->first_name = $request['first_name'];
            $form_data->last_name_kana = $request['last_name_kana'];
            $form_data->first_name_kana = $request['first_name_kana'];
            $form_data->zip = $request['zip'];
            $form_data->address = $request['address'];
            $form_data->telephone = $request['telephone'];
            $form_data->email = $request['email'];
            $form_data->user_agent = $request['user_agent'];
            $form_data->ip_address = $request['ip_address'];
            $form_data->save();

            Mail::to($request->input('email'))->send(new SentContactMail($request));

            $request->session()->regenerate();
            return view('complete');
        }
    }
}
