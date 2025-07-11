<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeachersController extends Controller
{


      public function docenti(){
    $arrayTeachers=[
      ['name'=>'Cristoforo', 'surname'=>'Colombo', 'subject'=>'Explorer', 'foto'=>'/colombo1.jpg'],
      ['name'=>'Marco', 'surname'=>'Polo', 'subject'=>'Commerciante', 'foto'=>'/Polo.jpg'],
      ['name'=>'Amerigo', 'surname'=>'Vespucci', 'subject'=>'Navigatore', 'foto'=>'/Vespucci.jpg'],
      ['name'=>'Ferdinando', 'surname'=>'Magellano', 'subject'=>'Navigatore/esploratore', 'foto'=>'/Magellano.jpg'],
    ];
    return view('docenti', ['teachers'=>$arrayTeachers]);
  }

      public function dettaglio($surname){
          // @dd($surname);
      $arrayTeachers=[
      ['name'=>'Cristoforo', 'surname'=>'Colombo', 'subject'=>'Explorer', 'foto'=>'/colombo1.jpg'],
      ['name'=>'Marco', 'surname'=>'Polo', 'subject'=>'Commerciante', 'foto'=>'/Polo.jpg'],
      ['name'=>'Amerigo', 'surname'=>'Vespucci', 'subject'=>'Navigatore', 'foto'=>'/Vespucci.jpg'],
      ['name'=>'Ferdinando', 'surname'=>'Magellano', 'subject'=>'Navigatore/esploratore', 'foto'=>'/Magellano.jpg'],
    ];
        foreach ($arrayTeachers as $teacher) {
            if ($surname == $teacher ['surname']){
            return view('teachers/dettaglioDocente',['teacher'=>$teacher]);
               
            }; 
                
        }
            
    }
}

