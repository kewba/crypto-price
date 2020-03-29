<?php

namespace App\Http\Controllers;

use App\bbiNewsItemsModel;
use Illuminate\Http\Request;
use App\Http\Resources\bbc_news as NewResource;

class BbiNewsItemsModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function itemsList()
    {
        $newsList = bbiNewsItemsModel::paginate(15);
        return $newsList;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function remChars($str){
        $newStr = str_replace('â€“','',$str);
        $newStr = str_replace('â€”','',$newStr);
        $newStr = str_replace('â€˜','',$newStr);
        $newStr = str_replace('â€™','',$newStr);
        $newStr = str_replace('â€œ','',$newStr);
        $newStr = str_replace('â€','',$newStr);
        $newStr = str_replace('.','',$newStr);
        $newStr = str_replace(',','',$newStr);
        $newStr = str_replace(':','',$newStr);
        $newStr = str_replace('?','',$newStr);
        $newStr = str_replace('\\','',$newStr);
        $newStr = str_replace('/','-',$newStr);
        $newStr = str_replace('â‚¬','',$newStr);
        $newStr = str_replace('â','',$newStr);
        $newStr = str_replace(';','',$newStr);
        $newStr = str_replace('!','',$newStr);
        $newStr = str_replace('€¦','',$newStr);
        $newStr = str_replace('[','',$newStr);
        $newStr = str_replace(']','',$newStr);
        $newStr = str_replace('Â 3','',$newStr);
        $newStr = str_replace('Â®','',$newStr);
        $newStr = str_replace('|','',$newStr);
        return $newStr;
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
     * @param  \App\bbiNewsItemsModel  $bbiNewsItemsModel
     * @return \Illuminate\Http\Response
     */
    public function show(bbiNewsItemsModel $bbiNewsItemsModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bbiNewsItemsModel  $bbiNewsItemsModel
     * @return \Illuminate\Http\Response
     */
    public function edit(bbiNewsItemsModel $bbiNewsItemsModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bbiNewsItemsModel  $bbiNewsItemsModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bbiNewsItemsModel $bbiNewsItemsModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\bbiNewsItemsModel  $bbiNewsItemsModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(bbiNewsItemsModel $bbiNewsItemsModel)
    {
        //
    }
}
