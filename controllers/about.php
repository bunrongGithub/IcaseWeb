<?php
use Core\App;
use Core\Database;
$db = App::resolve(Database::class);

$abouts = $db->query("select * from about")->get();


view('about.view.php',[
   'abouts'=>$abouts
]);