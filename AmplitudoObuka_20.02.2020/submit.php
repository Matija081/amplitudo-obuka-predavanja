<?php

//isset() funkcija provjerava da li je input poslat, da li je setovan
//is_null() provjerava da li je nesto null
//empty() provjerava da li je vrijednost varijable ili polja prazan string ''

if(!isset($_POST['text']) || !isset($_FILES['image']['tmp_name'])){
    echo "Values missing!";
    die();
}

if(empty($_POST['text'])){
    echo 'Tekst je prazan <br>';
}else{
    echo 'Vrijednost polja text: ' . $_POST['text'] . '<br>';
}

//$_FILES vraca niz, sluzi za prihvatanje fajlova
echo 'Niz fajl: ';
print_r($_FILES);
echo "<br>";
//mozemo pristupiti: privremenom nazivu, pravom nazivu, velicini fajla, ekstenziji...
//koristimo $_FILES[name][vrijednost koju zelimo]
echo 'Privremeni naziv: ' . $_FILES['image']['tmp_name'] . "<br>";
echo 'Naziv: ' . $_FILES['image']['name'] . "<br>";
echo 'Velicina: ' . $_FILES['image']['size'] . "<br>";
echo 'Ekstenzija: ' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION) . "<br>";;

//da prebacimo fajl, tj da odradimo upload koristimo funkciju move_uploaded_file
//parametri: tmp_name fajla, lokacija foldera gdje zelimo da sacuvamo fajl + naziv fajla
//koristim time() funkciju koja daje timestamp da bi mogli da upload-ujemo fajlove sa istim nazivom
if(move_uploaded_file($_FILES['image']['tmp_name'], 'images/' . time() . "_" . $_FILES['image']['name'])){
    echo 'Upload uspjesan <br>';
}else{
    echo 'Greska pri upload-u <br>';
}

echo "Prevozno sredstvo niz: <br>";
if(isset($_POST['vehicle'])){
    print_r($_POST['vehicle']);
}