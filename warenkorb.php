<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Erfasse die Formulardaten
  $produkt = $_POST['produkt'];
  $menge = $_POST['menge'];
  $email = $_POST['email'];

  // Validiere und verarbeite die Bestellung
  // Hier kannst du deinen eigenen Code hinzufügen, um die Bestellung zu verarbeiten und in einer Datenbank zu speichern

  // Sende die Bestätigungs-E-Mail
  $empfaenger = $email;
  $betreff = 'Bestellbestätigung';
  $nachricht = 'Vielen Dank für Ihre Bestellung!' . "\r\n";
  $nachricht .= 'Produkt: ' . $produkt . "\r\n";
  $nachricht .= 'Menge: ' . $menge . "\r\n";
  $header = 'From: Duzar.Business@gmail.com' . "\r\n" .
            'Reply-To: Duzar.Business@gmail.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

  // E-Mail senden
  if (mail($empfaenger, $betreff, $nachricht, $header)) {
    echo 'Die Bestellung wurde erfolgreich abgeschickt und eine Bestätigungs-E-Mail wurde versendet.';
  } else {
    echo 'Es ist ein Fehler beim Senden der E-Mail aufgetreten.';
  }
}
?>
