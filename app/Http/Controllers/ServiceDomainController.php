<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ServiceDomainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('service-domain');
    }

    /**
     * Check domain availability using WhoisXML API.
     */
    public function checkDomain(Request $request)
    {
        $apiKey = 'at_X8OQ5mdbFEfuiKR9Tj8xHcXyDSA9K';
        $domain = $request->input('domain');
        $outputFormat = 'JSON';
        $preferFresh = 1;
        $da = 1;
        $client = new Client();
        $response = $client->request('GET', 'https://www.whoisxmlapi.com/whoisserver/WhoisService?apiKey=' . $apiKey . '&domainName=' . $domain . '&outputFormat=' . $outputFormat . '&preferFresh=' . $preferFresh . '&da=' . $da);
        $data = json_decode($response->getBody()->getContents(), true);

        // Pastikan variabel $data didefinisikan sebelum dikirimkan ke view
        return view('service-domain', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
