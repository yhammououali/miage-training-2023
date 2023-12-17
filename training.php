<?php

$varString = 'Un exemple de string';
$varNull = null;
$varBool = true;
$varInteger = 13;
$fruits = [
    'fruit1' => 'Banane',
    'fruit2' => 'Orange',
    'fruit3' => 'Fraise',
];

const MY_MAGICAL_NUMBER = 42;

// Ceci est une boucle parcourant mon tableau de fruits
/**
 * Ceci est une boucle parcourant mon tableau de fruits
 * Il s'agit d'une insrtruction basique
 */
foreach ($fruits as $key => $fruit) {
    echo ($key . ' - ' . $fruit . '<br/>');
}

?>

<hr />

<?php

for ($i = 1; $i <= count($fruits); $i++) {
    echo ($fruits['fruit' . $i] . '<br/>');
}

echo ('<hr>');

echo ($fruits['fruit1']);

echo ('<hr>');

$lines = 1;

while ($lines <= 10) {
    echo ('J\'apprends le PHP <br/>');
    $lines++;
}

echo ('<hr>');

function showFruitsArray(array $fruits, int $total = 2): null
{
    for ($i = 1; $i <= count($fruits); $i++) {
        echo ($fruits['fruit' . $i] . '<br/>');
        echo ($total);
    }

    return null;
}

showFruitsArray($fruits, 5);

$num1 = 2;
$num2 = 4;
$num3;

// $num1 += 3;

if ($num1 !== "2") {
    echo ('Je suis égale à 2');
} elseif ($num2 === 4) {
    echo ('Je suis égale à 4');
} else {
    echo ('Je suis égale à 0');
}

echo ('<hr>');

foreach ($fruits as $key => $fruit) {
    switch ($key) {
        case 'fruit1':
            echo 'Je suis une banane <br>';
            break;
        case 'fruit2':
            echo 'Je suis une orange <br>';
            break;
        default:
            echo 'Je ne suis pas un fruit <br>';
            break;
    }
}

?>