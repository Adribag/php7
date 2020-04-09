<hr />

<?php

echo"<div> <h1 style=\"border-width:3;border-style:groove;background-color:#ffcc99;\">
Fin de la page PHP Liens utiles: <a href=\"http://www.php.net\">php.net</a>
&nbsp;
<a href=\"mysql.org\">MySQL.org</a></h1>";

echo"Nom du fichier ex&#233;cut&#233;";
$_SERVER['PHP_SELF'];
echo "Nom du fichier inclus: ",__FILE__,"</div>";


$mavar1="Paris"; echo "\$mavar1= ",$mavar1,"<br />"; $mavar2="Lyon"; echo "\$mavar2= ",$mavar2,"<br />"; 
//Affectation par référence de $mavar2 
$mavar2 = &$mavar1; 
echo "Affectation par référence de \$mavar2 <br />"; 
echo "\$mavar1= ",$mavar1,"<br />"; 
echo "\$mavar2= ",$mavar2,"<br />"; 
echo "modification  de \$mavar1 <br />"; $mavar1="Nantes"; 
echo "\$mavar1= ",$mavar1,"<br />"; 
echo "\$mavar2= ",$mavar2,"<br />"; 
echo "modification  de \$mavar2 <br />"; $mavar2="Marseille"; 
echo "\$mavar1= ",$mavar1,"<br />"; 
echo "\$mavar2= ",$mavar2,"<br />";


//Déclaration de la contante "PI" 
//FALSE pour définir la casse sur sensible
define("PI",3.1415926535,FALSE);

echo "la consatante PI vaut",PI,"<br/>";
echo "la consatante PI vaut",PI,"<br/>";

if (defined("PI")) echo "La constante PI est déjà définie","<br/>";
if (defined("pi")) echo "La constante pi est déjà définie","<br/>";

if(define("site","http://www.funhtml.com",FALSE))
{
    echo "<a href=",site,"> Mon site </a>";
}

echo "</br>"."Version de PHP du serveur :</br>".PHP_VERSION."<br/>";

const NOM = ['Bach ','Mozart '];
echo NOM[0];
echo NOM[1];


//Affiche toutes les constante définie de base dans PHP
//print_r(get_defined_constants());


$var=73;
if (is_int($var)) {
    # code...
$var++;
echo "<br/>la variable vaut $var </br>";
//Affiche la variable vaut 74
}

$var2="Bonjour";
if(is_string($var2)){
    $var2.=" à tous <br/>";
    echo $var2;
//Affiche "Bonjour à tous"
}
$var="3.52 kilomètres";
$var2=(double)$var;
echo "\$var vaut ",$var;
echo "<br/> \$var2 =",$var2,"<br/>";
$var3=(integer)$var2;
echo "\$var3 vaut ",$var3,"<br/>";
$var4=(boolean)$var3;
echo "\$var4 vaut ",$var4,"<br/>";

$a=null;
if (isset($a)) {
    echo "\$a existe déjà <br/>";
}else{
    echo "\$a n'existe pas <br/>";
}
if(empty($a)){
    echo "\$a est vide <br/>";
}else{
    echo "\$a a la valeur $a <br/>";
}

$b=0;
if (isset($b)) {
    echo "\$b existe déjà <br/>";
}else{
    echo "\$b n'existe pas <br/>";
}
if(empty($b)){
    echo "\$b est vide <br/>";
}else{
    echo "\$b a la valeur $b <br/>";
}

$c=1;
if (isset($c)) {
    echo "\$c existe déjà <br/>";
}else{
    echo "\$c n'existe pas <br/>";
}
if(empty($c)){
    echo "\$c est vide <br/>";
}else{
    echo "\$c a la valeur $c <br/>";
}

$d=80;
$e=($d<95);
echo "\$e vaut $e <br/>";


echo "<br/> Exercices chapitre 2 <br/>";
//CHAP2 EXO1
$mavar=1;
$_mavar=2;
$_5var=3;
$__élément1=4;

echo $__élément1."<br/>";

//CHAP2 EXO2
$x="PostgreSQL";
$y="MySQL";
$z=&$x;
$x="PHP 5";
$y=&$x;

echo "\$x vaut ",$x,"<br/>";
echo "\$y vaut ",$y,"<br/>";
echo "\$z vaut ",$z,"<br/>";

//CHAP2 EXO3
echo " \$GLOBALS['x'] vaut ",$GLOBALS['x'];

//CHAP2 EXO4
echo "Version de PHP ",PHP_VERSION,"<br/>";
echo "Systeme d'exploitation du serveur ",PHP_OS,"<br/>";
echo "La langue du navigateur du poste client est ",$_SERVER["HTTP_ACCEPT_LANGUAGE"],"<br/>";

//CHAP2 EXO5
$x="PHP7";
echo "\$x vaut ",$x,"et est de type", gettype($x) ,"<br/>";
$a[]=&$x;
echo "\$a[0] vaut ",$a[0],"et est de type", gettype($a) ,"<br/>";
$y="7";
echo "\$y vaut ",$y,"et est de type", gettype($y) ,"<br/>";
$z=$y*10;
echo "\$z vaut ",$z,"et est de type", gettype($z) ,"<br/>";
$x.=$y;
echo "\$x vaut ",$x,"et est de type", gettype($x) ,"<br/>";
$y*=$z;
echo "\$y vaut ",$y,"et est de type", gettype($y) ,"<br/>";
$a[0]="MySQL";
echo "\$a[0] vaut ",$a[0],"et est de type", gettype($a[0]) ,"<br/>";

//CHAP2 EXO6
$x26="7 personnes";
$y26=(integer) $x26;
$x26="9E3";
$z26=(double) $x26;

echo "\$x vaut : $x26, \$y vaut : $y26, \$z vaut : $z26";

//CHAP2 EXO5
$a27="0";
$b27="TRUE";
$c27=FALSE;
$d27=($a27 OR $b27);
$e27=($a27 AND $c27);
$f27=($a27 XOR $b27);


function bool($val){
    if($val){
        echo "la variable vaut TRUE";
    }else{
        echo "la variable vaut FALSE"; 
    }
};

echo "<br/> \$a27 ",bool($a27);
echo "<br/> \$b27 ",bool($b27);
echo "<br/> \$c27 ",bool($c27);
echo "<br/> \$d27 ",bool($d27);
echo "<br/> \$e27 ",bool($e27);
echo "<br/> \$f27 ",bool($f27);


$ch="Bonjour ";
$sexe="M";
$ch.=($sexe=="F")?"Madame":"Monsieur";
echo "<h2>$ch</h2>";
$nb=3;
$pmu="Il faut trouver ".$nb;
$mot=($nb ==1)?"cheval":"chevaux";
echo "<h3>$pmu $mot</h3>";

$dept=75;
switch($dept)
{
    case 75:
    case "Capitale":
        echo "Paris";
    break;

    case 78:
        echo "Haut de seine";
    break;

    case 93:
    case "Stade de France":
        echo "Seine Saint Denis";
    break;

    default:
        echo "Département inconnu en Ile de France";
    break;
}

for($i=1;$i<7;$i++){
    echo "<h$i>Ce titre est un H$i</h$i><br/>"; 
}

//Création d'une table de multiplication
for($i=1,$j=9;$i<10,$j>0;$i++,$j--){
    echo "<span style=\"border: 1px solid black\">$i+$j=10 </span>";
}
echo "<br/>";
echo "Table de Multiplication <br/>";
echo "<table border=\"2\" style=\"background-color:yellow\"><th>&nbsp; X &nbsp;</th>";

for($i=1;$i<10;$i++){
    echo "<th>&nbsp;$i&nbsp;</th>";
}
for($i=1;$i<10;$i++){
    echo "<tr><th>&nbsp;$i&nbsp;";

    for($j=1;$j<10;$j++){
        echo "<td>".$i*$j."</td>";
    }
    echo "</tr>";
}
echo "</table>";

$n=1;
while($n%7!=0){
    $n=rand(1,100);
    echo $n,"&nbsp;/";
}
echo "<br/>";
do{
    $m=rand(1,100);
    echo $m,"&nbsp;/";
}
while($m%7!=0);

echo "<br/>";

//Création d'un tableau de 9 éléments
for($i=0;$i<=8;$i++){
    $tab[$i] = pow(2,$i);
}
$val="Une valeur";
echo $val,"<br/>";
//Lecture des valeur du tableau
echo "Les puissances de 2 sont :";
foreach($tab as $val){
    echo $val," : ";
}

echo "<br/>";

//Création d'un tableau de 9 éléments
for($i=0;$i<=8;$i++){
    $tab[$i] = pow(2,$i);
}
//Lecture des indices et des valeurs
foreach($tab as $ind => $val){
    echo "2 puissance $ind vaut $val <br/>";
}
echo "Dernier indice ",$ind,", dernière valeur ",$val;

echo "<br/>";

for($i=0;$i<=8;$i++){
    $tabass["client ".$i]=rand(100,1000);
}

echo "<br/>";

foreach($tabass as $ind => $val){
    echo "Le client numéro ",$ind," a l'identifiant ",$val,"<br/>";
}

$tab[1]="Basile";
$tab[2]="Conan";
$tab[3]="Albert";
$tab[4]="Vincent";

for($i=1;$i<count($tab);$i++){
    if($tab[$i][0]=="A"){
        echo "Le premier nom commençant par A est le n° $i:",$tab[$i];
    break;
    }
}

echo "<br/>";

for($i=0;$i<20;$i++){
    if($i%5==0){
        continue;
    }
    echo $i,"<br/>";
}
$taba[1]="Ain"; 
$taba[2]="Allier"; 
$taba[27]="Eure"; 
$taba[28]="Eure et Loir"; 
$taba[29]="Finistère"; 
$taba[33]="Gironde"; 

foreach($taba as $cle=>$valeur) {   
    if($taba[$cle][0]!="E") { 
        continue;
    } 
     echo "code $cle : département ",$taba[$cle],"<br />";
}

for ($i=0;$i<10;$i++){
    for ($j=0;$j<10;$j++){
        for($k=0;$k<10;$k++){
            if(($i+$j+$k)%3==0) continue 3;
              echo "$i : $j : $k <br/>";  
        }
    }
}

goto a;
echo 'Cacher';

a:
echo 'Voir';

echo "<br/>";

$tabb[1]="Ain"; 
$tabb[2]="Allier"; 
$tabb[27]="Eure"; 
$tabb[28]="Eure et Loir"; 
$tabb[29]="Finistère"; 
$tabb[33]="Gironde"; 

foreach($tabb as $cle => $valeur){
    if($tabb[$cle][0]=="E"){
        $result=$tabb[$cle];
        goto info;
    }
    else $result="Pas de résultat";
}
echo $result;
exit;
info:
echo "Premier trouvé = ",$result;

echo "<br/>";

//CHAP3EX1
$exnum=15;

if($exnum%3==0 && $exnum%5==0){
    echo "Le nombre est divisible par 3 et 5";
}else{
    echo "Le nombre n'est pas divisible par 3 et 5";
}

echo "<br/>";
echo "<br/>";
echo "<br/>";

//CHAP3EX2
$exsexe="F";
$exage="30";
if($exsexe=="F"&&$exage<"40"&&$exage>"21"){
    echo "Bonjour Madame vous etes du sexe $exsexe et vous avez entre 21 et 40 ans votre age : $exage";
}elseif($exsexe=="M"){
    echo "Bonjour Monsieur vous etes du sexe $exsexe";
}
?>

</body>
</html>