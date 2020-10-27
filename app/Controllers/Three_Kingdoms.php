<?php

namespace App\Controllers;

 

class Three_Kingdoms extends BaseController
{

    public function index()
    {
         // connect to the model

        $place = new \App\Models\Place();

            // retrieve all the records

        $records = $place->findAll();
        
        
        
        
        // get a template parser

$parser = \Config\Services::parser(); // tell it about the substitions

return $parser->setData(['records' => $records]) // and have it render the template with those

->render('placeslist');
    }
    
    
public function showme($id)

{
    // connect to the model

$place = new \App\Models\Place();

// retrieve all the records

$record = $place->find($id);




// get a template parser

$parser = \Config\Services::parser(); // tell it about the substitions 
return $parser->setData($record)

// and have it render the template with those

->render('figure');
}
}