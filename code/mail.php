<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Envoi du message</title>
</head>

<body>
    <?php
    $retour = mail('evan.theron@free.fr', $_POST['subject'], $_POST['message'], 'From: '$_POST['email']);
    if ($retour)
        echo '<p>Votre message a bien été envoyé.</p>';
    ?>
</body>
</html>