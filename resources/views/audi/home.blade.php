@extends('main.index')

@section('main')
    @component('components.slideshow', ['slideshow' => $slideshow] )
    @endcomponent
    @component('components.cards', ['cards' => $cards])
    @endcomponent
    @component('components.twoText', ['text' => $text])
    @endcomponent
@endsection