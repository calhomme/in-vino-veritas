<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index,follow">
    <title>In Vino Veritas</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Josefin+Sans&display=swap" rel="stylesheet">
</head>

<body>
    <div class="page-content">
        <div class="header-wrapper">
            <h1>In Vino Veritas</h1>
        </div>
        <h2>Nous avons une surprise pour vous ! Avez-vous quelques minutes à nous consacrer ?</h2>
        <div class="form-wrap">
            <form method="post">
                <label for="name">Veuillez entrer votre nom</label>
                    <input type="text" name="name" id="name" required />
                <label for="name">Veuillez entrer votre prénom</label>
                    <input type="text" name="firstname" id="firstname" required />
                <label for="num-booking">Veuillez entrer votre numéro de réservation</label>    
                    <input type="number" name="booking_num" id="booking_num" required/>
                <input type="submit" id="btnSend" value="Envoyer" name="btnSend"/>
            </form>
        </div>
        
    </div> 
    <img src="/img/plant1.png" alt="" class="plant1 plant">
    <img src="/img/plant2.png" alt="" class="plant2 plant">

    <script>
        const outer = document.querySelector('.page-content');
        const error = document.querySelector('.error_message');

        window.onclick = function(event) {
            if (event.target == outer) {
                error.style.display = "none";
            }
        }
    </script>
</body>
</html>

<?php
// Vérifie si le bouton d'envoi est bien cliqué
if(isset($_POST['btnSend']) ) {
    //Vérifie si les champs sont bien remplis et qu'ils ne correspondent pas à un chaîne de caractères vide
    if (isset($_POST['name']) AND !empty($_POST['name'])
    AND isset($_POST['firstname']) AND !empty($_POST['firstname'])
    AND isset($_POST['booking_num']) AND !empty($_POST['booking_num'])) {
        //Enregistre les valeurs du formulaire dans des variables
        $name = htmlspecialchars($_POST['name']);
        $firstname = htmlspecialchars($_POST['firstname']);
        $bookingNum = htmlspecialchars($_POST['booking_num']);
    } else {
        echo '<div class="error_message">Veuillez renseigner les champs</div>';
    }
    
    //Connexion à la base de données
    try {
        $database = new PDO('mysql:host=localhost;dbname=quiz;charset=utf8', 'root', 'root',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }

    $req = $database->prepare("SELECT client.client_name, client.client_firstname, booking.booking_num 
        FROM booking INNER JOIN client ON booking.id_client = client.id_client AND booking.booking_num = client.booking_num WHERE booking.booking_num = :num_res");
    $req -> execute(array(
        'num_res' => $bookingNum
    ));

    //Envoi de la requête à la base de données
    while ($result = $req->fetch()) {
            //Si les identifiants sont corrects, redirige vers la page de quiz
            if(strtoupper($result['client_name']) == strtoupper($name) AND strtoupper($result['client_firstname']) == strtoupper($firstname) AND $result['booking_num'] == $bookingNum) {
                $_SESSION['name'] = strtoupper($name);
                $_SESSION['firstname'] = strtoupper($firstname);
                $_SESSION['booking_num'] = $bookingNum;
                header('Location: test.php');
            } else { 
                //Si les identifiants sont incorrects, redirige vers la page de connexion et affiche un message d'erreur
                header('Location: index.php');
                echo '<div class="error_message">Un des paramètres est incorrect.</div>';
            }
    }

}

?>