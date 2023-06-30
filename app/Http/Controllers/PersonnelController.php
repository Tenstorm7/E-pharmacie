<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Statut;
use App\Models\Personnel;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class PersonnelController extends Controller
{
    //les methde de traitement
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();

        return view('personnel.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user):View
    {
        $status = Statut::all();
        return view('Personnel.create', compact('user', 'status'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // dd($Personnel->id);
        $cours=User::where('users_id','=',$user->id)->get();


        return view('personnel.show',compact('cours'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

     $request->validate([
       'statut_id' => 'required|exists:statuts,id'
        ]);

       $data = $request->except('_token');
       $user->update($data);

        return redirect()->route('personnel.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('Personnel.index');
    }

   /* public function guard()
    {
        $user = Auth::user();
        if ($user->statut->titre_status != 'pharmacien') {
            return $user;
        } else {
            return response()->json(['key' => 'l\'utilisateur n\'est pas un admin']);
        }
    }*/
}
