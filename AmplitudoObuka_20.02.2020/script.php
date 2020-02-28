<?php
 
//ponekad vremenska zona na serveru nije ista kao ona koju zelimo
//koristimo sljedecu funkciju za podesavnje vremenske zone
date_default_timezone_set('Europe/Budapest');

//funkcija koja nam daje datum i vrijeme
//parametri: format datuma kao string
//(d->dan, m->mjesec, y->godina, h->sat, i->minut, s->sekunda)
echo 'Datum: ' . date('d/m/Y H:i:s');

//funkcija koja nam daje nasumican (random) broj
echo '<br>Nasumican broj: ' . rand();
//moze da prima parametre min i max vrijednost
echo '<br>Nasumican broj izmedju 1 i 10: ' .rand(1, 10);

$arr = [1, 2, 3];
echo '<br>Niz prije: ';
print_r($arr);
//funkcija koja ubacuje elemente u inicijalizovani niz
//parametri: niz u koji zelimo da ubacimo elemente i elementi koje zelimo da ubacimo
array_push($arr, 4, 'Test');
echo '<br> Niz poslije: ';
print_r($arr);

//funkcija koja gleda da li se element nalazi u nizu
//parametri: element koji zelimo da nadjemo i niz koji pretrazujemo
in_array(1, $arr);

//funkcija koja vraca broj karaktera
echo '<br>Broj karaktera: ' .strlen('Amplitudo Obuka');

//funckcija koja vraca broj elemenata u nizu
echo '<br>Broj elemenata u nizu: ' . count($arr);

//funkcija koja dijeli string na niz na osnovu nekog delimetra
//vraca niz djelova
//parametri: delimetar (po cemu zelimo da podijelimo string) i string koji zelimo da podijelimo
$pieces = explode('-', 'Amplitudo-Obuka-Test');
echo '<br>2 element niza: ' . $pieces[1];

$rep = 'Amplitud| |buka';
//funkcija koja zamjenjuje odredjene karaktere sa onim sto zelimo
//parametri: sta zelimo da zamijenimo, cime zelimo da zamijenimo, string koji zelimo da izmijenimo
echo '<br>Zamijenjeni string: ' . str_replace('|', 'o', $rep);


//password nikad ne cuvamo onakav kakav jeste, vec ga hashujemo
//low-end funkcije koje hashuju string:
echo '<br>Hashovani string: ' . md5('Test');
echo '<br>Hashovani string: ' . sha1('Test');

$int = 5.7;
//funkcija koja zaokruzuje decimalni broj na najblizi broj
echo '<br>Zaokruzeni najblizi broj: ' . round($int);
//funkcija koja zaokruzuje decimalni broj na veci broj
echo '<br>Zaokruzeni veci broj: ' . ceil($int);
//funkcija koja zaokruzuje decimalni broj na nizi broj
echo '<br>Zaokruzeni manji broj: ' . floor($int);

//funkcija koja povecava sva slova u stringu
echo '<br>Velika slova: ' . strtoupper('sve mala slova');
//funkcija koja smanjuje sva slova u stringu
echo '<br>Mala slova: ' . strtolower('SVE MALA SLOVA');
//funkcija koja povecava svako prvo slovo rijeci u stringu
echo '<br>Veliko prvo slovo svake rijeci: ' . ucwords("ovo je test");


//Zadatak 1.
// Dat je četvorocifreni prirodan broj. 
// Napisati PHP kod koji štampa cifru
//  stotina tog broja. 
// Napomena: npr. za broj 4647 broj je 6

$var = 4647;

if($var > 99){
    echo '<br>Stotina je: ' . substr(round($var), -3, -2);
}else{
    echo '<br>Nema stotinu';
}

//Zadatak 2.
//Napisati sve prestupne godine izmedju 800-te i 2200-te.

echo '<br> Svaka prestupna godina:';
 for($i = 800; $i < 2200; $i++){
    if($i % 4 == 0){
        echo "<br>" . $i;
    }
}

// % je mod - x % 4 == 0 gleda da li broj x pri dijeljenju sa 4 daje ostatak 0
