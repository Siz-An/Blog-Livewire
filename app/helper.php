<?php

use App\Models\Service;

function getServices(){
    $service = Service::orderBy("title","ASC")->where('status',1)->get();
    return $service;

}

?>