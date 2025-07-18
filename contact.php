<?php
$success = false;
$error = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = htmlspecialchars($_POST['Nom'] ?? '');
    $email = htmlspecialchars($_POST['Email'] ?? '');
    $telephone = htmlspecialchars($_POST['Telephone'] ?? '');
    $message = htmlspecialchars($_POST['Message'] ?? '');

    if (!empty($nom) && !empty($email) && !empty($message)) {
        $to = "bluedream.piscines@gmail.com";
        $subject = "Demande via formulaire Bluedream";
        $body = "Nom : $nom\nEmail : $email\nTéléphone : $telephone\n\nMessage :\n$message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            $success = true;
        } else {
            $error = true;
        }
    } else {
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Contact - Bluedream</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light text-center p-5">
  <div class="container">
    <?php if ($success): ?>
      <h2 class="text-success">✅ Merci pour votre message !</h2>
      <p>Nous vous répondrons dès que possible.</p>
    <?php else: ?>
      <h2 class="text-danger">❌ Une erreur est survenue</h2>
      <p>Merci de réessayer ou nous contacter directement à <a href="mailto:bluedream.piscines@gmail.com" class="text-info">bluedream.piscines@gmail.com</a></p>
    <?php endif; ?>
    <a href="index.html" class="btn btn-outline-light mt-4">Retour à l'accueil</a>
  </div>
</body>
</html>
