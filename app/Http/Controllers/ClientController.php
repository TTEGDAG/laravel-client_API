<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $clients = Client::get();

        return view('index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UpdateClientRequest $request)
    {
        $client = new Client($request->validated());

        if ($client->save()) {
            $type   =   'success';
            $content=   'Successful update data.';

        } else {
            $type   =   'danger';
            $content=   'An error occurred.';
        }
        return redirect('/')
            ->with([
                'status'    =>  [
                    'type'  => $type,
                    'content'   =>  $content
                ]
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {

        $client = Client::findOrFail($id);
        return view('show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('layouts.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClientRequest $request, $id)
    {
        $client = Client::find($id);

        $client->email = $request->email;
        $client->first_name = $request->first_name;
        $client->last_name = $request->last_name;
        $client->avatar = $request->avatar;
        
        if ($client->save()) {
            $type   =   'success';
            $content=   'Successful update data.';

        } else {
            $type   =   'danger';
            $content=   'An error occurred.';
        }
        return redirect('/')
            ->with([
                'status'    =>  [
                    'type'  => $type,
                    'content'   =>  $content
                ]
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Client $client)
    {
        $name = $client->first_name. ' ' .$client->last_name;
        if ($client->delete()) {
            $type   =   'success';
            $content=   'Successfully deleted '.$name;

        } else {
            $type   =   'danger';
            $content=   'An error occurred.';
        }
        return redirect('/')
            ->with([
                'status'    =>  [
                    'type'  => $type,
                    'content'   =>  $content
                ]
            ]);
    }
}