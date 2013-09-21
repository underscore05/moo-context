<?php

sleep(1);
$data = array(
        array('id'=>1, 'lname'=>'Roque', 'fname'=>'Richard Neil', 'mname'=>'Tenoria', 'age'=>22),
        array('id'=>2, 'lname'=>'Posadas', 'fname'=>'Karen', 'mname'=>'Bernal', 'age'=>23),
        array('id'=>3, 'lname'=>'Roque', 'fname'=>'Reymond', 'mname'=>'Tenoria', 'age'=>17),
    );

header('Content-Type: application/json');
header('Page-Count: 100');
header('Current-Page: 1');
header('Row-Count: 12');
header('Row-Total: 100');
header('Columns: '.implode(',', array_keys($data[0])));

echo $_GET['callback']."(".json_encode(array('rs'=>$data)).")";
//echo json_encode($data);