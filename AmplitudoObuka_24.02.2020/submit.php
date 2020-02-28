<?php 

//provjera da li je request koji pristize GET ili POST
// if($_SERVER['REQUEST_METHOD'] === 'GET'){
//     echo 'Get metoda';
// }else{
//     echo 'Post metoda';
// }

// da li je varijabla null
// is_null($_POST['last_name']);

// da li je varijabla prazna = ''
// empty($_POST['last_name']);

//prihvatanje get parametra
// $_GET['last_name'];

//da li je setovana varijabla
// if(isset($_POST['last_name'])){
//     echo 'Postoji last name';
// }else{
//     echo 'Ne postoji';
// }

//definisanje funkcije
function checkIfEmpty($var){
//jednolinijsko izvrsavanje
// return isset($var) && !is_null($var) && !empty($var);
    if(isset($var) && !is_null($var) && !empty($var)){
        return true;
    }
    return false;
}

$varForCheck = 'Test';

//pozivanje funkcije
// if(checkIfEmpty($varForCheck) === true){
//     echo  'Varijabla postoji';
// }else{
//     echo 'Varijable ne postoji';
// }

// echo $_POST['vehicle'];

// print_r($_FILES);

// echo $_FILES['image']['size'];

// if(move_uploaded_file($_FILES['image']['tmp_name'], 'images/' . time() . '_' .  $_FILES['image']['name'])){
//     echo 'Uspjesan upload';
// }else{
//     echo 'Greska';
// }

// print_r($_POST['vehicleCheckbox']);


