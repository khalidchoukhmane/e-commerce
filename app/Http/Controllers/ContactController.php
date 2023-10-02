<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * 
     * @return mixed
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(),[
            'nom'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required',
        ],
        [
            'nom.required' => 'Le champ Nom complet est obligatoire.',
            'subject.required' => 'Le champ Objet est obligatoire.',
            'email.required' => 'Le champ Adresse email est obligatoire.',
            'message.required' => 'Le champ Message est obligatoire.'
        ]);

        if(!$validator->passes()){
             return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
        }else{ 
            $query = \App\Models\Contact::create(["nom" => $request->nom,"subject" => $request->subject,"email" => $request->email,"message" => $request->message]);
            // $contact = new Contact();
            // $contact->nom = $request->nom;
            // $contact->email = $request->email;
            // $contact->subject = $request->subject;
            // $contact->message = $request->message;

            if(!$query){
                return response()->json(['code'=>0,'msg'=>'Something went wrong']);
            }else{
                return response()->json(['code'=>1,'msg'=>'Nouveau message a été enregistré avec succès']);
            }
        }
    }

    
}
