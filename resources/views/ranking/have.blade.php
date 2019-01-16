@extends('layouts.app')
    @section('content')
        <h1>Haveランキング</h1>
        @include('items.item_ranking_have', ['items' => $items])u
        
    @endsection