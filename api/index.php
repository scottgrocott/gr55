<?php
// This path should point to Composer's autoloader
require '../vendor/autoload.php';
$mongo = new MongoDB\Client("mongodb://localhost:27017");
$collection = $mongo->gr55->patches;
$result = $collection->find(
    [],
    [
        'limit' => 200,
        'sort' => ['name' => 1],
    ]
)->toArray();


$test = json_encode($result);
echo $test;

?>
