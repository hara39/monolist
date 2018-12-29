<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Item;

class ItemsController extends Controller
{
    public function create()
    {
        $keyword = request()->keyword;
        $items[];
        if ($keyword) {
            $client = new \RakutenRws_Client();
            $client->setApplicationId(evn('RAKUTEN_APPLICATION_ID'));
            
            $rws_response = $client->execute('IchibaItemSerch',[
                'keyword' => $keyword,
                'imageFlag' => 1,
                'hits' => 20,
                ]);
        }
    }
}
