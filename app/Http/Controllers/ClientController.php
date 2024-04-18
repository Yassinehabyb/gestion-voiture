<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\TryCatch;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $client =Client::all();
        return view('client.index',['clients'=>$client]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create( )
    
    { 
    // dd($request->txtName);
        return view('client.create');
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            // first way
        //  $client =new Client();
        //  $client->name=$request->name;
        //  $client->email=$request->email;
        //  $client->adress=$request->adress;
        //  $client->save();
            // second way
        // Client::create([
        //         'name'=>$request->name,
        //         'email'=>$request->email,
        //         'adress'=>$request->adress
        // ]);
            // third way
            try {
                Client::create($request->post());
                return redirect()->route('clients.index')->with('success','client engestrair avec success ');
            } catch (\Exception $e) {
                return redirect()->route('clients.index')->with('erreur',"client non engestraire");
            }
        
        //  return Redirect::to('clients/');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        return view('client.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)

    {
        $client=Client::find($id);
        return view('client.edit',['client'=>$client]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $client=Client::find($id);
        // $client->name =$request->name;
        // $client->adress =$request->adress;
        // $client->email =$request->email;
        // $client->update();
        $client->update($request->post());
        return redirect()->route('clients.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Client::find($id)->delete();
        return redirect()->back();
    }
}
