<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>réponse</title>
</head>
<body>
  <h2>Merci <strong><?=$_POST['user_firstname']?> <?= $_POST['user_lastname']?></strong> de nous avoir contacté à propos de <strong><?=$_POST['user_sujet']?></strong>.</h2>

   <p>Un de nos conseiller vous contactera soit à l’adresse <strong><?=$_POST['user_mail']?></strong> ou par téléphone au <strong><?=$_POST['user_phone_number']?></strong> dans les plus brefs délais pour traiter votre demande :</p>

   <p><strong><?=$_POST['user_message']?></strong></p>



</body>
</html>
