<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AudiController extends Controller
{
    public function index()
    {
        return view('audi.home', 
        [
            'slideshow' => [
                [
                    'img' => 'https://www.audi.pt/media/Theme_Menu_Model_Dropdown_Item_Image_Component/root-pt-model-modelMenu-editableItems-72736-dropdown-476668-image/dh-487-a0e9a6/770b761f/1635486188/audi-a3-limousine-tfsi.jpg',
                    'title' => 'Audi Car',
                    'desc' => 'Audi Car desc'
                ],
                [
                    'img' => 'https://www.audi.pt/media/Theme_Menu_Model_Dropdown_Item_Image_Component/root-pt-model-modelMenu-editableItems-73866-dropdown-477126-image/dh-487-a0e9a6/33081950/1635486198/menue.jpg',
                    'title' => 'Audi Car 2',
                    'desc' => 'Audi Car 2 desc'
                ]
            ], 
            'cards' => [
                [
                    'img' => 'https://bordalo.observador.pt/v2/rs:fill:900/c:1237:697:nowe:157:0/q:86/plain/https://s3.observador.pt/wp-content/uploads/2021/06/20111551/markusduesmannceoaudi-header.jpg',
                    'title' => 'Card 1',
                    'desc' => 'Desc1'
                ],
                [
                    'img' => 'https://www.turbo.pt/wp-content/uploads/Audi-e-tron-GT-2-1111.jpg',
                    'title' => 'Card 2',
                    'desc' => 'Desc2'
                ],
                [
                    'img' => 'https://www.turbo.pt/wp-content/uploads/Audi-e-tron-GT-2-1111.jpg',
                    'title' => 'Card 2',
                    'desc' => 'Desc2'
                ]
            ],
            'text' => [
                [
                    'img' => 'https://bordalo.observador.pt/v2/rs:fill:900/c:1237:697:nowe:157:0/q:86/plain/https://s3.observador.pt/wp-content/uploads/2021/06/20111551/markusduesmannceoaudi-header.jpg',
                    'txt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia alias quasi vel, quod sunt ipsam aut repellat quidem ab voluptas, id ea sit corporis commodi iste recusandae, deleniti quas eligendi?',
                ],
                [
                    'img' => 'https://www.turbo.pt/wp-content/uploads/Audi-e-tron-GT-2-1111.jpg',
                    'txt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia alias quasi vel, quod sunt ipsam aut repellat quidem ab voluptas, id ea sit corporis commodi iste recusandae, deleniti quas eligendi?',
                ]
            ]
        ]);
    }
}
