<<?php
$klas = ["Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck"];

//echo var_dump($klas);


/*for ($i=0; $i <3; $i++) {
  echo $klas[$i],PHP_EOL;
}

foreach($klas as $mensen){
  echo "$mensen\n ";
}
*/
$bucket_list=[];


$hoeveelheid_activiteiten = readline("Hoeveel activiteiten wil je toevoegen aan de bucketlist");

 for ($i=0; $i <$hoeveelheid_activiteiten ; $i++) {
  $bucket_list[$i] =readline("Welke activiteiten wil je toevoegen: ");

}
echo var_dump($bucket_list);

foreach ($bucket_list as $activiteit) {
  echo $activiteit, PHP_EOL;
};


?>
