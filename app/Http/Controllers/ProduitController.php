<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\View\View as ViewView;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View as FacadesView;

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

        return view('Produit.show', compact('prod'));
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
                'prix_prod' => ['required'],
               
                'url_prod' => ['required','image'],
               
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
       
       $categorie=Categorie::findOrfail($request->categorie_id);
        $prod =new Produit();
        $prod->nom_prod=$request->nom_prod;
        $prod->prix_prod=$request->prix_prod;
        
        $prod->url_prod=$path;
        $prod->descri_prod=$request->descri_prod;
        $prod->qteS_prod=$request->qteS_prod;
        $categorie->produits()->save($prod);

         

             
return redirect(route('produit.index'));
    
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
        
        $cats=Categorie::all();
        return view('Produit.update',compact('Produit','cats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produit  $Produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, produit $produit)
    {

        
        $request->validate([
            'nom_prod' => ['required','max:255'],
            'descri_prod' => ['required','string' , 'min:10'],
            'prix_prod' => ['required'],
           
            'url_prod' => ['required','image'],
           
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
       
       $categorie=Categorie::findOrfail($request->categorie_id);
        //modifier le produit recuperer dans les parametres
        $produit->nom_prod=$request->nom_prod;
        $produit->prix_prod=$request->prix_prod;
        
        $produit->url_prod=$path;
        $produit->descri_prod=$request->descri_prod;
        $produit->qteS_prod=$request->qteS_prod;
        $categorie->produits()->save($produit);


        return redirect(route('produit.index'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produit  $Produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $Produit)
    {
        $Produit->delete();

        return redirect(route('produit.index'));

    }
}
