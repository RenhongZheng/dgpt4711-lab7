<?php
namespace App\Controllers;

class Place extends \CodeIgniter\Controller
{

public function index()

{

// connect to the model

$place = new \App\Models\Place();

// retrieve all the records

$records = $place->findAll(); // JSON encode and return the result 

return json_encode($records);

}

}