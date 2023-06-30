<?php

namespace App\Http\Controllers;

use App\Models\MessagePers;
use App\Models\ReponsePers;
use Illuminate\Http\Request;

class ReponsePersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function create(MessagePers $mespers){

        return view('message.reponse', compact('mespers'));
    }

    public function store(MessagePers $mespers){
        request()->validate([
            'reponsepers' => 'required|min:2',

        ]);

        $reponse = new ReponsePers();
        $reponse->reponsepers = request('reponsepers');
        $reponse->user_id = auth()->user()->id;
        $reponse->message_pers_id = $mespers->id;

        $reponse->save([$reponse]);

        return redirect()->route('message.index');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReponsePers  $reppers
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReponsePers $reppers)
    {
        $reppers->delete();

    }

}
