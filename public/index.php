<?php

include __DIR__ . DIRECTORY_SEPARATOR . 'libs' . DIRECTORY_SEPARATOR . 'Hospiceguiden.class.php';

$hospiceguiden = new Hospiceguiden();

$exist = file_exists('views/' . $hospiceguiden->page_name . '.php');

if (!$hospiceguiden->isPartial) {
    
    include_once('views/layouts/header.php');
    
}

if ($exist) {
    
    include_once('views/' . $hospiceguiden->page_name . '.php');
    
} else {
    
    include_once('views/error_404.php');
    
}

if (!$hospiceguiden->isPartial) {
    
    include_once('views/layouts/footer.php');
    
}
            
