<?php 

spl_autoload_register( function($fileName){
    require "./files/".$fileName.".php";
} );


new Students;
new Teachers;
new Live;


// echo Students::STUDENT;
// echo Teachers::TEACHER;








