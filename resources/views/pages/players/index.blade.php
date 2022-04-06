@extends('main.index');

@section('main')
    @component('components.h1', ['text' => 'Players'])
    @endcomponent
    <table>
    @component('components.table', ['values' =>
    ]) 
    @endcomponent
    @component('components.table', ['values' => $players]) 
    @endcomponent
    <table>
@endsection

