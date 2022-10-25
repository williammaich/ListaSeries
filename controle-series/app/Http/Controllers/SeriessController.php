<?php
namespace App\Http\Controllers;

class SeriesController{

public function listarSeries(){

    $series =[
        'lost',
        'Game of thrones',
        'Andor'
    ];

    $html = '<ul>';
    foreach($series as $serie){
        $html .= "<li>$serie</li>";
    }
    $html .='</ul>';
    echo $html;
}

}
