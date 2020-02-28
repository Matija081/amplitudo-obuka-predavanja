<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amplitudo Obuka</title>
</head>

<style>

input{
    display: block;
}

</style>

<body>

<h4>Forma</h4>

<!-- da bi poslali fajl moramo da stavimo enctype -->
<form method="POST" action="submit.php" enctype='multipart/form-data'>

<label>Text</label>
<input type="text" name="text"/>

<label>Fajl</label>
<input type="file" name="image"/>

<h3>Choose transport</h3>

<!-- da bi smo poslali niz vrijednosti u name stavljamo [] -->
<label>Car</label>
<input type="checkbox" value="car" name="vehicle[]"/>

<label>Bike</label>
<input type="checkbox" value="bus" name="vehicle[]"/>

<label>Bus</label>
<input type="checkbox" value="bus" name="vehicle[]"/>

<input type="submit" value="Submit"/>

</form>
    
    <!-- ponekad zelimo da prenesemo informacije sa jedne strane na drugu.
        Koristimo: naziv fajla ? kljuc = vrijednost Pr.
        Da dodamo jos parametara koristimo & kljuc = vrijednost itd. --> 
<h3><a href="second_page.php?ime=Marko&prezime=Markovic">Visit second page</a></h3>

</body>
</html>