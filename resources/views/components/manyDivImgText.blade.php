@for ($i = 0; $i < count($text); $i++)
@component('components.divImgText', 
    [
        'img' => $text[$i]['img'],
        'txt' => $text[$i]['txt'],
        'alignLeft' => ($i % 2) ? true : false
    ]
    )  
@endcomponent
@endfor