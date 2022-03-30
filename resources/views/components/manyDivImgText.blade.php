@for ($i = 0; $i < count($text); $i++)
@component('components.text', 
    [
        'img' => $text[$i]['img'],
        'txt' => $text[$i]['txt'],
        'alignLeft' => ($i % 2) ? true : false
    ]
    )  
@endcomponent
@endfor