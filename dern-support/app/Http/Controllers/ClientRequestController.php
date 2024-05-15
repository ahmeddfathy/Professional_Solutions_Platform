<?php

namespace App\Http\Controllers;

use App\Models\Client_request;
use Illuminate\Http\Request;

class ClientRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $client_requests = Client_request::orderBy("id", "asc")->paginate(5);
        return view('clients.Requests.index', compact('client_requests'));
    }



public function create()
{
    return view('clients.Requests.create');
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "service_name" => 'required',
            "category_name" => 'required',
            "user_name" => 'required',
            "address" => 'required',
            "phone" => 'required',
            "price" => 'required',
            "time" => 'required',

        ]);

        Client_request::create($request->post());
        return redirect()->route('client_requests.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(client_request $client_request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(client_request $client_request)
    {
        return view('clients.Requests.edit', compact('client_request'));
    }


public function update(Request $request, client_request $client_request)
{
    $request->validate([
        "service_name" => 'required',
        "user_name" => 'required',
        "category_name" => 'required',
        "address" => 'required',
        "phone" => 'required',
        "price" => 'required',
        "time" => 'required',
    ]);

    $client_request->fill($request->post())->save();
    return redirect()->route('client_requests.index');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(client_request $client_request)
    {
        $client_request->delete();
        return redirect()->route('client_requests.index');
    }
    }




