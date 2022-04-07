@extends('main.index');

@section('main')
    @component('components.h1', ['text' => 'Players'])
    @endcomponent
    
    @component('components.table', ['title' => $title, 'values' => $players]) 
    @endcomponent
@endsection

