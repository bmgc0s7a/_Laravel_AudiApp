<div class="row m-5 justify-content-center">
    @for ($i = 0; $i < count($cards); $i++)
        <div class="col-{{12/count($cards)}}">
            @component('components.card', [
                'img' => $cards[$i]['img'],
                'title' => $cards[$i]['title'],
                'desc' => $cards[$i]['desc']
                ])
            @endcomponent
        </div>
    @endfor
</div>