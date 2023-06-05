<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    //
    
    //les methde de traitement 
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prod=Produit::all();

        return view('Produit.index', compact('prod'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create():View
    {
        $cats=Categorie::all();
        return view('Produit.index',compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        
        
        $request->validate([
                'nom_prod' => ['required','max:255'],
                'descri_prod' => ['required','string' , 'min:10'],
                'prix_prod' => ['required','integer'],
               
                'url_prod' => ['required'],
               
                'qteS_prod' => ['required','integer'],

            ]);

           

            


            // $extension=substr(strrchr($request->url_prod,'.'),1);
            
        // renommer le fichier avant de le stocker par la suite

        $filename= 'Produit'.time().'.'. $request->url_prod->extension();
        
        
       
       

       $path= $request->url_prod->storeAs(
            'ProduitImage',
            $filename,
            'public'
        );

       

            $produitf=Produit::create([

               'url_prod' => $path,
                'nom_prod' => $request->nom_prod,
                'description_prod' => $request->descri_prod,
                
                'qteS_prod' => $request->qteS_prod,
                'prix_prod' => $request->prix_prod,
               
                
            ]);
           

             
return redirect(route('Produit.index'));
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produit  $Produit
     * @return \Illuminate\Http\Response
     */
    public function show(Produit $Produit)
    {
        // dd($Produit->id);
        $produit=Produit::where('Produits_id','=',$Produit->id)->get();
        

        return view('Produit.show',compact('produit'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produit  $Produit
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $Produit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produit  $Produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produit $Produit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produit  $Produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $Produit)
    {
        //
    }
}
