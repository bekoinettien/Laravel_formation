<?php

namespace App\Http\Controllers;

use App\Http\Requests\validerFormulaireRequest;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class Monpremiercontroller extends Controller
{
    public function methode1($name) {
        return 'Bonjour ' . $name;
    }

    public function methodeview(){
        $username = 'BEKOIN ETTIEN';
        return view('accueil',[
            'name'=> $username ,
            'age'=> 15
        ]);

    }
    public function formulaire(validerFormulaireRequest $request){
        // dd($request);
        $verif=$request;
        if ($verif) {
            echo 'Verification effectuée';
        }else{
            return redirect()->back();   // retourner a l'ecran precedent;
        }
           
    }
}
