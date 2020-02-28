<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amplitudo Obuka</title>
</head>
<body>
    
    <!-- uzimamo GET vrijednosti iz URL-a koje smo poslali sa prethodne stranice -->
<h1>Second page <?PHP echo $_GET['ime'] . ' ' . $_GET['prezime'] ?></h1>
<h3><a href="index.php">First page</a><h3>
</body>
</html>