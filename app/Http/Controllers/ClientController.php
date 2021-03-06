<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('clients.index')->with('clients', $clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validation

        $this->validate($request, [
            'client' => 'required',
            'codFiscal' => 'required',
            'oras' => 'required',
            'strada' => 'required',
            'numar' => 'required',
            'codPostal' => 'required',
            'persoanaContact' => 'required',
            'numarTelefon' => 'required|max:10',
        ]);



        //Create post

        $client = Client::create([
            'client' => $request->client,
            'codFiscal' => $request->codFiscal,
            'oras' => $request->oras,
            'strada' => $request->strada,
            'numar' => $request->numar,
            'codPostal' => $request->codPostal,
            'persoanaContact' => $request->persoanaContact,
            'numarTelefon' => $request->numarTelefon,
        ]);

        Session::flash('success', 'Client a fost adaugat');
        return redirect()->route('clients.index');
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
        dd($client);
        return view('clients.edit')->with('client', $client);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}