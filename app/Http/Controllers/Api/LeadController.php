<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Models\Lead;
use App\Mail\NewContact;

class LeadController extends Controller
{
    public function store(Request $request){
        $data = $request->all();

        $val_data = Validator::make($data,
        [
            'name' => 'required|min:3|max:255',
            'lastname' => 'required|min:3|max:255',
            'message' => 'required|min:5'
        ],
        [
            'name.required' => 'Il nome è un campo obbligatorio',
            'name.min' => 'Il nome deve contenere almeno :min caratteri',
            'name.max' => 'Il nome non può avre piò di :max caratteri',
            'lastname.required' => 'Il cognome è un campo obbligatorio',
            'lastname.min' => 'Il cognome deve contenere almeno :min caratteri',
            'lastname.max' => 'Il cognome non può avre più di :max caratteri',
            'message.required' => 'Il messaggio è un campo obbligatorio',
            'message.min' => 'Il messaggio deve contenere almeno :min caratteri',
        ]);

        if($val_data->fails()){
            $success = false;
            $errors = $val_data->errors();
            return response()->json(compact('success', 'errors'));

        }

        $new_lead = new Lead();
        $new_lead->fill($data);
        $new_lead->save();

        $success = true;
        return response()->json(compact('success'));

        // hello@example-mailtrap.com

        Mail::to('hello@example-mailtrap.com')->send(new NewContact($new_lead));

    }
}
