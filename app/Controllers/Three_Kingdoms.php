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
        
        
        
        
        
        $table = new \CodeIgniter\View\Table();

        $headings = $place->fields;
        $displayHeadings = array_slice($headings,1,2);
        $table->setHeading(array_map('ucfirst', $displayHeadings));
        
        foreach ($records as $record) {
                $nameLink = anchor("Three_Kingdoms/showme/$record->id",$record->name);
//                $nameLinks = anchor("Three_Kingdoms/showme/$record->image",$record->image);
//               $nameLinks = readfile(WRITEPATH . 'data/',$record->image);
               // $nameLinks =()
                $theimage =  '<img src="/image/'.$record->image.'" height="60% width="100%"" >'; 
//                $theimage = '<img src="/image/'.$record['image'].'">';
                $nameLinkss = anchor("Three_Kingdoms/showme/$record->id","http://dgpt4711.local/index.php/Three_Kingdoms/showme/$record->name");
                
//                $table->addRow($nameLink,$nameLinks,$record->description);
                $table->addRow($nameLink,$theimage,$nameLinkss);
//                    public function image($filename)
//                   {
//                   readfile(WRITEPATH . 'data/' . $filename);
//                   }
        }
        $template = [
            'table_open' => '<table cellpadding="5px">',
            'cell_start' => '<td style="border: 1px solid #dddddd;">',
            'row_alt_start' => '<tr style="background-color:#dddddd">',
        ];
        $table->setTemplate($template);
        
        
        
        
        // get a template parser

$parser = \Config\Services::parser(); // tell it about the substitions
        
        $fields = [
            'title' => 'List of Heroes Destinationss',
            'heading' => 'List of Heroes Destinations',
            'footer' => 'Copyright RenhongZhneg'];

        
        
return $parser->setData($fields) ->render('templates\top').
       $table->generate().
       $parser->setData($fields)->render('templates\bottom');
        
//return $parser->setData(['records' => $records]) // and have it render the template with those
//
//->render('placeslist');
    }
    
    
public function showme($id)

{
    // connect to the model

$place = new \App\Models\Place();

// retrieve all the records

$record = $place->find($id);

        $table1 = new \CodeIgniter\View\Table();

        $headings = $place->fields;
        $displayHeadings = array_slice($headings,0,7);
        $table1->setHeading(array_map('ucfirst', $displayHeadings));
        
       // foreach ($records as $record) {
//                $id = anchor("Three_Kingdoms/showme/$record->id",$record->id);
//                $name = anchor("Three_Kingdoms/showme/$record->name",$record->name);
//                $age = anchor("Three_Kingdoms/showme/$record->age",$record->age);
//                $countries = anchor("Three_Kingdoms/showme/$record->countries",$record->countries);
//                $description = anchor("Three_Kingdoms/showme/$record->description",$record->description);
                //$image = anchor("Three_Kingdoms/showme/$record->image",$record->image);
                $theimage = '<img src="/image/'.$record['image'].'">';
                $table1->addRow($record['id'],$record['name'],$record['age'],$record['countries'],$record['description'],$record['achievements'],$theimage);
       // }
        $template = [
            'table_open' => '<table cellpadding="5px">',
            'cell_start' => '<td style="border: 1px solid #dddddd;">',
            'row_alt_start' => '<tr style="background-color:#dddddd">',
        ];
        $table1->setTemplate($template);

$parser = \Config\Services::parser(); // tell it about the substitions 
                $fields = [
            'title' => 'List of Heroes Destinationss',
            'heading' => 'List of Heroes Destinations',
            'footer' => 'Copyright RenhongZhneg'];

        
        
return $parser->setData($fields) ->render('templates\top').
       $table1->generate().
       $parser->setData($fields)->render('templates\bottom');
        
        
        
// get a template parser


//return $parser->setData($record)

// and have it render the template with those

//->render('figure');
}
}