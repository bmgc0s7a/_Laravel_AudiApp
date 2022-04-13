@extends('main.index')
{{-- {{dd($players[0])}} --}}
@section('main')
<div class="align-center">
    <a href="{{ url('/players') }}">Voltar aos players</a>
    <p>{{ $player->id }}</p>
    <p>{{ $player->name }}</p>
    <p>{{ $player->address->address }}</p>
    <p>{{ $player->address->country->name }}</p>
    <p>{{ $player->birth_date }}</p>
    <p>{{ $player->created_at }}</p>
    <p>{{ $player->updated_at }}</p>
</div>
@endsection


