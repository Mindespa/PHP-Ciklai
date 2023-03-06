<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  #word-wrap{
    word-wrap: break-word;
  }
  span{
    color: red;
  }
  .row{
    line-height: 8px;
  }
</style>
<body>
 
  <?php

                              //  3. Ciklai

// 1 Naršyklėje nupieškite linija iš 400 “*”. 
// Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
// Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”; 
                                                          

echo "<p>" . "1 Udavinys ". "</p>";


echo '<p id="word-wrap">';

for ($i=0; $i < 400 ; $i++) { 
 echo "*";
}
echo "</p>";

echo '<p>';

for ($i=1; $i < 401 ; $i++) { 
  echo "*";
  if($i % 50 == 0 && $i != 400){
    echo "</p><p>";
  }
}
echo "</p>";
echo "<hr>";
// Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, 
// atspausdinkite juos atskirtus tarpais ir suskaičiuokite kiek tarp jų yra didesnių už 150. 
//  Skaičiai didesni nei 275 turi būti raudonos spalvos.

echo "<p>" . "2 Udavinys ". "</p>";

$count = 0;
for ($i=0; $i < 300; $i++) { 
  $rnd = rand(0,300);   
  if($rnd > 150) {
    $count++;
   }
  if($rnd <=275) {
  echo $rnd. " ";
  }else{
   echo "<span>$rnd </span>";
  }
 
}

echo "<hr>";
// Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus 
// tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), kurie dalijasi iš 77 be liekanos. 
// Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti. 
// Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane.

echo "<p>" . "3 Udavinys ". "</p>";

$rnd = rand(3000,4000);
$txt = "";
echo "random skaicius" . " " . $rnd;

echo "<hr>";

for ($i=1; $i < $rnd; $i++) { 
     if ($i % 77 ==0){
     $txt .= $i.", ";
      
     }
}
echo substr($txt,0, -2);
echo "<hr>";

// Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”.
//  Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis.

echo "<p>" . "4 Udavinys ". "</p>";
for ($a = 0; $a < 10; $a++) { 
  $row = "";
  for ($i = 0; $i < 10 ; $i++) { 
    $row .= "*";
  }
  echo '<div class="row">'. $row.'</div>';
}



echo "<hr>";

echo "<p>" . "5 Udavinys ". "</p>";

// Prieš tai nupieštam kvadratui nupieškite raudonas istrižaines.

for ($i=0; $i < 100; $i++) { 
    for ($a=0; $a < 100; $a++) { 
    //  echo "*";
     if ($i==$a){
       echo "<span class='red'>" . "*" . "</span>";
     }else{
       echo "<span class='black'>" . "*" . "</span>";
     }
    }
}

echo "<hr>";
echo "<p>" . "6 Udavinys ". "</p>";

// Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, 
// o 1 - skaičius. Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: 
// “S” jeigu iškrito skaičius ir “H” jeigu herbas.
//  Suprogramuokite tris skirtingus scenarijus kai monetos metimą stabdome:

echo "<p>" . "A) Iškritus herbui ". "</p>";

while (true) {
   $chance = rand(0,1);
  if ($chance) {
      echo "H";
      break;
  } else {
      echo "S";
  }

}

echo "<p>" . "B) Tris kartus iškritus herbui ". "</p>";

$count = 0;
while (true) {
     $chance = rand(0,1);
    if ($chance) {
        echo "H";
        $count++;
    } else {
        echo "S";
    }
    if ($count == 3) {
        break;
    }
}

echo "<p>" . "C) Tris kartus is eiles iškritus herbui ". "</p>";


$count = 0;
while (true) {
    $chance = rand(0,1);
    if ($chance) {
        echo "H";
        $count++;
    } else {
        echo "S";
        $count = 0;
    }
    if ($count == 3) {
        break;
    }
}

echo "<hr>";
echo "<p>" . "7 Udavinys ". "</p>";

// Kazys ir Petras žaidžiai Bingo. Petras surenka taškų kiekį nuo 10 iki 20,
//  Kazys surenka taškų kiekį nuo 5 iki 25. Vienoje eilutėje išvesti žaidėjų vardus
//   su taškų kiekiu ir “Partiją laimėjo: ​laimėtojo vardas​”.
//  Taškų kiekį generuokite funkcija ​rand()​. Žaidimą laimi tas, kas greičiau surenka 222 

$petrasCount = 0;
$kazysCount = 0;

while (true){

  $petras = rand(10,20);
  $kazys = rand(5,20);
  $petrasCount += $petras;
  $kazysCount += $kazys;
   echo("petras " . $petras . " kazys " . $kazys);
  
  if ($petrasCount >= 222 || $kazysCount >= 222){
      break;
  }
}
echo "<br>";
  
  if ($petrasCount < $kazysCount) {
       echo("Partija laimejo: laimetojas kazys, surinko " . $kazysCount . "tasku o jo varzovas " . $petrasCount );
      
  } else {
       echo("Partija laimejo: laimetojas petras, surinko " . $petrasCount . "tasku o jo varzovas " . $kazysCount );
       
      }
      // echo "<br>";
?>

</body>
</html>