<?php

namespace App\Http\Controllers;

use App\Models\AcceptedRequest;
use App\Models\Client_request;
use Illuminate\Http\Request;

class AcceptedRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $requestes = Client_request::orderBy("id", "asc")->paginate(5);
        return view('Technicians.AcceptRequest.index', compact('requestes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $requestes = Client_request::orderBy("id", "asc")->paginate(5);

        return view('Technicians.AcceptRequest.add' , compact('requestes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => 'required',
            "email" => 'required',
            "service_name" => 'required',
            "category" => 'required',
            "price" => 'required',
        ]);

        AcceptedRequest::create($request->post());
        return redirect()->route('accepted_req.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(AcceptedRequest $acceptedRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AcceptedRequest $acceptedRequest)
    {
        //
        return view('Technicians.AcceptRequest.edit', compact('acceptedRequest'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AcceptedRequest $acceptedRequest)
    {

        $request->validate([
            "name" => 'required',
            "email" => 'required',
            "service_name" => 'required',
            "category" => 'required',
            "price" => 'required',
        ]);

        $acceptedRequest->fill($request->post())->save();
        return redirect()->route('accepted_req.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AcceptedRequest $acceptedRequest)
    {
        //
        $acceptedRequest->delete();
        return redirect()->route('accepted_req.index');
    }
}

