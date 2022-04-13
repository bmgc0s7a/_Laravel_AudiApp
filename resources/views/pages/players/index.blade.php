@extends('main.index')
{{-- {{dd($players[0])}} --}}
@section('main')
    @component('components.h1', ['text' => 'Players'])
    @endcomponent
    <table>
    @component('components.table', ['values' => $players])
    @endcomponent
    <table>
@endsection

