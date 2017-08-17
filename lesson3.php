<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PHP: Lesson 3</title>
</head>
<body>
<?php
$animals = [
"Australia" => ["Macropus rufus", "Canis lupus dingo", "Phascolarctos cinereus"],
"Africa" => ["Hippopotamus amphibius", "Acinonyx jubatus", "Panthera pardus"],
"North America" => ["Canis lupus", "Procyon lotor", "Cervus canadensis"],
"South America" => ["Hydrochoerus hydrochaeris", "Vultur gryphus", "Lama glama"],
];

//echo '<pre>';
//print_r($animals);
//exit();

$animals_array = [];
$array_2word = [];
foreach ($animals as $continent => $names) {
	foreach ($names as $animal) {
		$animalnames = explode (" ", $animal);
		if (count($animalnames) == 2) {
	$animals_array[$continent][] = join (" ", $animalnames);
	$array_2word[] = $animalnames[1];
		}
	}
}

//echo '<pre>';
//print_r($animals_array);
//exit();

shuffle($array_2word);

//echo '<pre>';
//print_r($array_2word);
//exit();


foreach ($animals_array as $continent => $names) 
{
    echo '<h2>'.$continent.'</h2>';
    $animallist =[];
	foreach ($names as $name) 
	{
		$name = explode (" ", $name);
        $animallist[] = $name[0].' '.array_shift($array_2word);
	}
	echo implode (', ', $animallist);
}
?>
</body>
</html>