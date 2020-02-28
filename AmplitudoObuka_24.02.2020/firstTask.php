<?php 

$firstSide = 10;
$secondSide = 15;
$thirdSide = 5;

$plus = $firstSide + $secondSide;
$minus = $firstSide - $secondSide;
$surface = $firstSide * $secondSide;

$assocArrayOutput = [
    'dimenzije_kvadra' => [
        'x' => $firstSide,
        'y' => $secondSide,
        'z' => $thirdSide
    ],
    'zapremina_kvadra' => $plus,
    'povrsina_kvadra' => $minus,
    'osnova_kvadra' => [
        'strane' => [
            'x' => $firstSide,
            'y' => $secondSide
        ],
        'povrsina' => $surface
    ],
    'povrisna_omotaca' => $thirdSide
];

// print_r($assocArrayOutput);

echo "<pre>";
echo json_encode($assocArrayOutput, JSON_PRETTY_PRINT);
echo "</pre>";