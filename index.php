<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Php Mirana</title>
</head>
<body>
    <h2>Page de test</h2>

    <p>
        Cette page contient <strong>uniquement</strong> du code HTML.<br />
        Voici quelques petits tests :
    </p>

    <ul>
        <li style="color: blue;">Texte en bleu</li>
        <li style="color: red;">Texte en rouge</li>
        <li style="color: green;">Texte en vert</li>
        <p>Il est :
         <?php
         /* ce ci est un scrip ou j'ai appris le php pour la premier fois */
          echo date('d/m/y h:i:s');
        $age =12;
        echo "<br>";
        if ($age == 12){
            echo "bien \"if\" marche";
            $authorization_enter ="oui";
        }
        else
        {
            $authorization_enter ="non";
        };
        if ($authorization_enter == "oui"){ 
          echo "bien c'est magnifique";
      }
      elseif($authorization_enter == "non"){
        echo "Ceci est tres bien";
    }
    else
    {
        echo "heho!";
    };
    echo "<br>";
    $taille= 20;
    switch ($taille) {
      case 0:
      echo "Bien  jouer avec switch";
      break;
      case 10:
      echo "10 est la valeur";
      break;
      case 20:
      echo "20 la on est ici";
      break;

      default:
      echo "bain c'est nul";
                  # code...
      break;
  };
  echo "<br>";
  $age =17;
          $majeur = ($age >= 18) ? true :false;// quand c'est faux il n'y a pas de'affichage et quand c'est vrais ca afficha 1
          echo $majeur;
          $nombre_de_ligne = 0;
          while ($nombre_de_ligne <= 10)
          {
            echo "test while";
            $nombre_de_ligne++;
              # code...
        };
        $tableau = array("do","re","mi","fa","sol","la","ti");
        foreach ($tableau as $value) {
            echo "<br>";
            echo $value;
        };
        $cv  = array('nom' => 'Raharimlalala',
          'prenom' =>'mirana',
          'age' => 21 );
        echo "<br>";
        echo  $cv['nom'] ." " .$cv['prenom']. " a " .$cv["age"]. "ans" ;
        echo "<br>";
        print_r($cv);
        echo "<br>";
        print_r($tableau);
        array_key_exists('age', $cv);
        ?></p>
        <a href="form.php">formulaire</a>
    </ul>
</body>
</html>