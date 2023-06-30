<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Famille;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public int $id_famille=0;
      
    //les methde de traitement 
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fam=Categorie::all();

        return view('Categorie.show', compact('fam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(int $famille):View
    {
        
       
        return view('Categorie.index',compact('famille'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, int $famille)

    {
        
        
        $request->validate([
                'nom_cat' => ['required','max:255'],
                'descri_cat' => ['required','string' , 'min:20'],
           
            ]);
            $famill=Famille::findOrFail($famille);
            
            
            $categorie=new Categorie();
            $categorie->nom_cat=$request->nom_cat;
            $categorie->descri_cat =$request->descri_cat;

            $famill->categories()->save($categorie);

            dd('hello produit creer avec succes');


          

             
return redirect(route('categorie.show'));
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $Categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $Categorie)
    {
        // dd($Categorie->id);
        $cat=Categorie::where('Categories_id','=',$Categorie->id)->get();
        

        return view('Categorie.show',compact('cat'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie  $Categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $Categorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorie  $Categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie $Categorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $Categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $Categorie)
    {
        //
    }
}
