<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<?php

$jsonString = file_get_contents('posts.json');
$jsonArray = json_decode($jsonString, true);
$posts = [];

// preko prazne stdClass klase pravim objekte 
// for($i = 0; $i < count($jsonArray); $i++){
//     $post = new stdClass;
//     $post->title = $jsonArray[$i]['title'];
//     $post->id = $jsonArray[$i]['id'];
//     $post->body = $jsonArray[$i]['body'];
//     array_push($posts, $post);
// }

// kastujem jedan clan niza u objekat
for($i = 0; $i < count($jsonArray); $i++){
    $post = (object) $jsonArray[$i];
    array_push($posts, $post);
}

// print_r($posts);

// echo $posts[0]['title'];



?>
<body>

    <div class="container mt-5">

        <div class="row">

<?php

foreach($posts as $post){

    // for($i = 0; $i < count($posts); $i++){
?>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#"><?php echo $post->title ?></a>
                        </h4>
                        <h5><?php echo $post->id ?></h5>
                        <p class="card-text"><?PHp echo $post->body ?></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                    </div>
                </div>
            </div>

<?php } ?>

        </div>
        <!-- /.row -->

    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>