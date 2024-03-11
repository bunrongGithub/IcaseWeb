<?php
use Core\App;
use Core\Database;
$db = App::resolve(Database::class);

$cards = $db->query("select * from home")->get();


view('index.view.php',[
   'heading'=>"icase service",
   'cards'=>$cards,
]);