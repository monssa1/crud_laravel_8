<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listesclients = Client::paginate(2);
        //dd($listesclients);
        return view('index',compact('listesclients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = new Client;
        return view('pages/fcreate',compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request(['name','email','password','phone','address']);

        \Validator::make($data,['name' => 'required|min:6','email' => 'required|email',
            'password' => 'required|min:7','phone' => 'required|numeric',
         'address' => 'required|min:9'])->validate();
       /* if ($validation->fails()) {
        dd('fails');
            
        }else {
            dd('Success');
        }*/
        Client::create(['name' => $request->name ,'email' => $request->email , 
                        'password'=> $request->password , 'phone' => $request->phone ,
                        'address' => $request->address]);
        $listesclients = Client::all();
        return view('index',compact('listesclients'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
        return view('pages/fedit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = request(['name','email','password','phone','address']);
        \Validator::make($data,['name' => 'required|min:6','email' => 'required|email',
            'password' => 'required|min:7','phone' => 'required|numeric',
         'address' => 'required|min:9'])->validate();

        $client = Client::find($id);
        $client->update(['name' => $request->name ,'email' => $request->email , 
                        'password'=> $request->password , 'phone' => $request->phone ,
                        'address' => $request->address]);
        $listesclients = Client::all();
        return view('index',compact('listesclients'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Client::destroy($id);
        $listesclients = Client::all();
        return view('index',compact('listesclients'));
    }
}
