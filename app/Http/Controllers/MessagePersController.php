<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\MessagePers;
use App\Models\ReponsePers;
use Illuminate\Http\Request;

class MessagePersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mespers = MessagePers::all();
        $reponsepers = ReponsePers::all();
        return view('message.index', compact('mespers', 'reponsepers'));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        return view('message.create', compact('user'));
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
            'conten_smsP' => 'required|min:2',
        ]);

        $mespers = new MessagePers();
        $mespers->conten_smsP = request('conten_smsP');
        $mespers->user_id = auth()->user()->id;
        $mespers->save([$mespers]);


       // $data = $request->except('_token');
       // MessagePers::create($data);
        return redirect()->route('message.index');
    }

      /**
     * Display the specified resource.
     *
     * @param  \App\Models\MessagePers  $mespers
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(MessagePers  $mespers, User  $user)
    {
        return view('message.show', compact('mespers', 'user'));
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MessagePers  $mespers
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(MessagePers $mespers, User $user)
    {
        $mespers->delete();

        return redirect()->route('message.index');
    }
}
