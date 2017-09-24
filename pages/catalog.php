<?php
$u1=new User('Olya','123');
//$u1->intoDb();
echo '<br/>';
$u2=User::fromDb(2);
var_dump($u2);

?>