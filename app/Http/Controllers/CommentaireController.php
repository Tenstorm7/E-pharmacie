<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{

    public function create(){

        $comments = Commentaire::latest()->first();

        return view('acceuil.acceuil', compact('comments'));
    }
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index(){

        $comments = Commentaire::all();
        return view('commentaire.index', compact('comments'));
    }

    public function store(Commentaire $comments){
        request()->validate([
            'conten_comment' => 'required|min:5',

        ]);

        $comments = new Commentaire() ;
        $comments ->conten_comment = request('conten_comment');
        $comments ->user_id = auth()->user()->id;

        $comments ->save([$comments ]);

        return redirect()->route('commentaire.create');

    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commentaire  $comments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commentaire $comments)
    {
        $comments->delete();

    }
}
