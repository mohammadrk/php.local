<?php
$first_names=array("ali","reza","amin","arash");
$last_names=array("amiri","kiani","sadeghi","lotfi");
for ($i=0;$i<sizeof($first_names);$i++){
    echo "hi.{$first_names[$i]}".' '."{$last_names[$i]}";
    echo "<br/>";
}