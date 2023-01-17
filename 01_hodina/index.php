<!DOCTYPE html>

<html lang="cs">
    <head>
        <meta charset="UTF-8"/>
        <title>První hodina php</title>
    </head>
    <body>
        <h1>První hodina php</h1>
        <?php
            $a = 123;   //Deklaruje promennou (Vzdy zacina dolarem - Alt + ů)
            $b = 'Text';
            
            printf($a);     //Vypise promennou
            echo $a;        //Vypise promennou
        
            echo $a;
            echo '<br>aaaaaaaaaa';  //<br> -> new line
            echo 69;
            
            $den = 'Patek';
            echo '<h2>Dnes je ' . $den . '</h2>';   // tecka spojuje stringy
            echo "<h2>Dnes je {$den} </h2>";      //Udela uplne to samy! Slozene zavorky jen pro orientaci!
        ?>
    
        <h2>Dnes je <?php echo $den ?></h2>     <!--php v HTML-->
        <h2>Dnes je <?= $den ?></h2>    <!--Zkracena verze-->
    
         <?php
             if (strtolower($den) === 'patek')  //strtolower - zmeni vsechna pismena na mala
                 echo "o ano";
             else
                 echo "kezby byl patek";    //Syntaxe na zaklade C
                 
         //===========================================================================
         
            $arr = ['Pondeli', 'Utery', 'Streda', 'Ctvrtek', 'Patek', 'Sobota', 'Nedele'];
            echo '<br>';
            
            var_dump($arr);     //Vypise uplne VSECHNO!
            echo'<br>';
            
            $arr[] = 'Patek';   //Pole se daji menit
            var_dump($arr);
            echo '<br>';
            
            echo 'Velikost pole je: ' . sizeof($arr) . '<br>';
            echo "Prvni prvek pole je {$arr[0]}<br>";
         ?>
         <ul>
             <?php
                 $size = sizeof($arr);
                 for ($i = 0; $i < $size; $i++) { ?>
                     <li><?= $arr[$i] ?></li>
                 <?php }
             ?>
         </ul>
    </body>
</html>