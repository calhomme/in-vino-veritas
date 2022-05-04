<?php

session_start();

$result1 = $_POST['answer1'];
$result2 = $_POST['answer2'];
$result3 = $_POST['answer3'];
$result4 = $_POST['answer4'];
$result5 = $_POST['answer5'];
$result6 = $_POST['answer6'];

$fullTotal = 0;
$total1 = 0;
$total2 = 0;
$total3 = 0;

//Question 1
if($result1 == "A") {
    $total1 += 1.6;
}
if($result1 == "B") {
    $total2 += 3.3;
}
if($result1 == "C") {
    $total3 += 5;
}

//Question 2
if($result2 == "A") {
    $total1 += 1.6;
}
if($result2 == "C") {
    $total2 += 3.3;
}
if($result2 == "B") {
    $total3 += 5;
}

//Question 3
if($result3 == "C") {
    $total1 += 1.6;
}
if($result3 == "A") {
    $total2 += 3.3;
}
if($result3 == "B") {
    $total3 += 5;
}

//Question 4
if($result4 == "A") {
    $total1 += 1.6;
}
if($result4 == "B") {
    $total2 += 3.3;
}
if($result4 == "C") {
    $total3 += 5;
}

//Question 5
if($result5 == "C") {
    $total1 += 1.6;
}
if($result5 == "A") {
    $total2 += 3.3;
}
if($result5 == "B") {
    $total3 += 5;
}

//Question 6
if($result6 == "B") {
    $total1 += 1.6;
}
if($result6 == "C") {
    $total2 += 3.3;
}
if($result6 == "A") {
    $total3 += 5;
}

$fullTotal = $total1 + $total2 + $total3;
//echo $fullTotal;

if(isset($_POST['sendAnswers']) ) {
    //Connexion à la base de données
    try {
        $database = new PDO('mysql:host=localhost;dbname=quiz;charset=utf8', 'root', 'root',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }

    //Requêtes de récupération du vin selon le nombre de points
    if($fullTotal <= 10) {
        $req = $database->query("SELECT * FROM Wine_list WHERE id >= 1 AND id <= 10 ORDER BY RAND() LIMIT 1");
        while($resultat_quiz = $req->fetch()) {
            echo 'La bouteille est '.$result['wine_name'].'.';
        }
    } else if($fullTotal >= 11 && $fullTotal <= 20) {
        $req = $database->query("SELECT * FROM Wine_list WHERE id >= 11 AND id <= 20 ORDER BY RAND() LIMIT 1");
        while($resultat_quiz = $req->fetch()) {
            echo 'La bouteille est '.$result['wine_name'].'.';
        }
    } else if($fullTotal >= 21 && $fullTotal <= 30) {

        $req = $database->query("SELECT * FROM Wine_list WHERE id >= 21 AND id <= 30 ORDER BY RAND() LIMIT 1");
        while($resultat_quiz = $req->fetch()) {
            echo 'La bouteille est '.$result['wine_name'].'.';
        }
    }

/*
$to = 'camille.lhomme6@gmail.com';
$subject = 'Wine bottle to buy';
$message = 'Je requiers une bouteille de '.$result['wine_name'].'.';

mail($to, $subject, $message);
*/
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index,follow">
    <title>In Vino Veritas</title>
</head>
<body>
    <div class="header-wrapper">
        <h1>In Vino Veritas</h1>
    </div>
    <div>
        <h3>Merci et à bientôt !</h3>
    </div>
</body>
</html>



<?php

session_destroy();

?>