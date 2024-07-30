<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');
    
    $to = "lucleterriblecontact@gmail.com";
    $subject = "Nouveau message de $name";
    $body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Message envoyé avec succès.";
        echo "<script>console.log('Message envoyé avec succès.');</script>";
    } else {
        echo "Échec de l'envoi du message.";
        echo "<script>console.log('Échec de l'envoi du message.');</script>";
    }
} else {
    echo "Méthode de requête non autorisée.";
        echo "<script>console.log('Méthode de requête non autorisée.');</script>";
}
?>

</body>
</html>
