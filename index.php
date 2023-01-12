<?php
function first() {
    return "true";
}
echo first();

function second($caractere) {
    return $caractere;
}
echo second("text");

function third($mon, $day) {
    return $mon . $day;
}
echo third("mon", "day");

function number($num1, $num2) {
    if ($num1 > $num2) {
        return "Le premier nombre est plus grand";
    }
    elseif ($num1 < $num2) {
        return "Le premier nombre est plus petit";
    }
    else {
        return "Les deux nombres sont identiques";
    }
}
echo number(5, 9);

function fusion($nombre, $lettre) {
    return $nombre . $lettre;
}
echo fusion(4, "portes");

function presente($name, $surname, $age) {
    return "Bonjour $name $surname ,tu as $age ans";
}
echo presente("Harpin", "Vincent", 26);

function personne($age, $genre) {
    if ($age >= 18 && $genre === "Homme") {
        return "Vous êtes un homme et vous êtes majeur";
    }
    elseif ($age < 18 && $genre === "Homme") {
        return "Vous êtes un homme et vous êtes mineur";
    }
    elseif ($age >= 18 && $genre === "Femme") {
        return "Vous êtes une femme et vous êtes majeur";
    }
    elseif ($age < 18 && $genre === "Femme") {
        return "Vous êtes une femme et vous êtes mineur";
    }
    else {
        return "Le genre n'est pas correct";
    }
}
echo personne(22, "Femme");

function pomme($pomme = 2, $poire = 5, $banane = 8) {
    return $pomme + $poire + $banane;
}
echo pomme(8, 3, 1);