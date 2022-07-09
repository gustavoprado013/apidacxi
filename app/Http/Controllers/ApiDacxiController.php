<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Codenixsv\CoinGeckoApi\CoinGeckoClient;

class ApiDacxiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function statusGecko(){

        return Http::get('https://api.coingecko.com/api/v3/ping')->json();

    }

    public function index()
    {
        $client = new CoinGeckoClient();
        $data = $client->ping();

        return $data;
        
        //return response()->json('OK');
    }

    public function priceBitcoin()
    {
        $client = new CoinGeckoClient();
        $data = $client->simple()->getPrice('0x,bitcoin', 'usd,rub');

        return $data;

    }

    public function priceDacxi()
    {
        $client = new CoinGeckoClient();
        $data = $client->simple()->getPrice('0x,dacxi', 'usd,rub');

        return $data;

    }

    public function priceEth()
    {
        $client = new CoinGeckoClient();
        $data = $client->simple()->getPrice('0x,ethereum', 'usd,rub');

        return $data;

    }

    public function priceAtom()
    {
        $client = new CoinGeckoClient();
        $data = $client->simple()->getPrice('0x,cosmos', 'usd,rub');

        return $data;

    }

    public function priceLuna()
    {
        $client = new CoinGeckoClient();
        $data = $client->simple()->getPrice('0x,terra-luna', 'usd,rub');

        return $data;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
