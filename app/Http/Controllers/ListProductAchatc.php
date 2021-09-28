<?php

namespace App\Http\Controllers;
use App\Models\ListProductAchatc;
use Illuminate\Http\Request;

class ListProductAchatec extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $facture = ListProductAchatc::all();
        return response()->json(
            $facture
        , 200);
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
        $facture = new ListProductAchatc();
        $facture->id_product = $request->id_product;
        $facture->quantite = $request->quantite;
        $facture->save();
        return response()->json('List saved');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ListProductAchat  $listProductAchat
     * @return \Illuminate\Http\Response
     */
    public function show(ListProductAchatc $id)
    {
       

        
        $k = ListProductAchatc::select('id')->where('id_facture',$id);
        $paiement = ListProductAchatc::find($k);
        return response()->json($paiement);
        


    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ListProductAchat  $listProductAchat
     * @return \Illuminate\Http\Response
     */
    public function edit(ListProductAchatc $listProductAchat)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ListProductAchat  $listProductAchat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListProductAchatc $id)
    {
        //
        $facture = ListProductAchatc::find($id);
        $facture->id_product = $request->id_product;
        $facture->quantite = $request->quantite;
        $facture->save();
        return response()->json('List saved');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListProductAchat  $listProductAchat
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $facture = ListProductAchatc::find($id);
        $facture->delete();
        return response()->json('deleted');
    }
}
