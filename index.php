<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <?php
  echo '<h1> Exercice1</h1>';
  echo '<h3> Liste clients</h3>';
  try{
    $pdo=new PDO("mysql:host=localhost;dbname=colyseum","root", "psycho4577");
    foreach($pdo->query('SELECT firstName, lastName FROM clients')as $row){
      print_r($row['firstName'].' ');
      print_r($row['lastName']);
      print_r('<br>');

    }
    $pdo = null;
  } catch (PDOException $e){
    print 'erreur:'.$e->getMessage().'<br>';
    die();
  }

  echo '<hr>';

  echo '';

  echo '<h1> Exercice2</h1>';
  echo '<h3> Types de spectacles possibles </h3>';
  try{
    $pdo=new PDO("mysql:host=localhost;dbname=colyseum","root", "psycho4577");
    foreach($pdo->query('SELECT type FROM showTypes')as $row){
      print_r($row['type'].' ');
      print_r('<br>');

    }
    $pdo = null;
  } catch (PDOException $e){
    print 'erreur:'.$e->getMessage().'<br>';
    die();
  }

  echo '<hr>';

  echo '<h1>Exercice3</h1>';
  echo '<h3>20 premiers clients</h3>';
  try{
    $pdo=new PDO("mysql:host=localhost;dbname=colyseum","root", "psycho4577");
    foreach($pdo->query('SELECT firstName, lastName FROM clients WHERE id < 21')as $row){
      print_r($row['firstName'].' ');
      print_r($row['lastName']);
      print_r('<br>');

    }
    $pdo = null;
  } catch (PDOException $e){
    print 'erreur:'.$e->getMessage().'<br>';
    die();
  }

  echo '<hr>';

  echo '<h1>Exercice4</h1>';
  echo '<h3>clients possédant une carte fidélité</h3>';
  $pdo=new PDO("mysql:host=localhost;dbname=colyseum","root", "psycho4577");
  foreach ($pdo->query('SELECT * FROM clients AS client, cards AS card WHERE card.cardNumber = client.cardNumber AND card.cardTypesId = 1')as $row) {
    print_r($row['lastName']." ".$row['firstName']."<br/> ");
  }

  echo '<hr>';

  echo '<h1> Exercice5</h1>';
  echo '<h3> Leur nom commence par "M" </h3>';
  try{
    $pdo=new PDO("mysql:host=localhost;dbname=colyseum","root", "psycho4577");
    foreach($pdo->query('SELECT firstName, lastName FROM clients WHERE lastName LIKE "M%"')as $row){
      print_r('Nom : ');
      print_r($row['lastName'].' ');
      print_r('<br>');
      print_r('Prénom : ');
      print_r($row['firstName'].' ');
      print_r('<br> <br>');

    }
    $pdo = null;
  } catch (PDOException $e){
    print 'erreur:'.$e->getMessage().'<br>';
    die();
  }

  echo '<hr>';

  echo '<h1> Exercice6</h1>';
  echo '<h3> Infos sur tous les spectacles </h3>';
  try{
    $pdo=new PDO("mysql:host=localhost;dbname=colyseum","root", "psycho4577");
    foreach($pdo->query('SELECT title, performer, date, startTime FROM shows ')as $row){
      print_r($row['title'].' ');
      print_r('par ');
      print_r($row['performer'].' ');
      print_r('le ');
      print_r($row['date'].' ');
      print_r('à ');
      print_r($row['startTime'].' ');
      print_r('<br>');

    }
    $pdo = null;
  } catch (PDOException $e){
    print 'erreur:'.$e->getMessage().'<br>';
    die();
  }

  echo '<hr>';

  echo '<h1>Exercice7</h1>';
  echo '<h3>Tous les clients</h3>';   // Code en commentaire car déffectueux.   Code:1 - Thibault:0
  // try{
    // $pdo=new PDO("mysql:host=localhost;dbname=colyseum","root", "psycho4577");
    // $tousLesClients = "SELECT firstName, lastName, birthDate, IF (cardTypesID=1,'oui','non') as carteFidelite, cards.cardNumber FROM clients LEFT JOIN colyseum.cards ON colyseum.clients.cardNumber = colyseum.cards.cardNumber AND cardTypesId=1";
    // $tousLesClients = $connexion -> query($tousLesClients);
    // foreach ($afficheClients as $row){

      print_r('Nom : ');
      print_r($row['lastName']);
      print_r('<br>');
      print_r('Prénom : ');
      print_r($row['firstName']);
      print_r('<br>');
      print_r('Date de naissance : ');
      print_r($row['birthDate']);
      print_r('<br>');
      print_r('Carte de fidélité : ');
      print_r('<br>');
      print_r('Numéro de carte : ');
      print_r($row['']);
      print_r('<br> <br>');

  //   }
  //   $pdo = null;
  // } catch (PDOException $e){
  //   print 'erreur:'.$e->getMessage().'<br>';
  //   die();
  // }

  echo '<hr>';



  ?>
</body>
</html>
