<?php
$text = "Un giovane Jedi, di nome Dart Fener, che era stato mio allievo finché non si volse al male, aiutò l'Impero a dare la caccia ai cavalieri Jedi e a distruggerli. Egli tradì e assassinò tuo padre. Ora i Jedi sono praticamente estinti. Fener fu sedotto dalla parte tetra e oscura della Forza";
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badword</title>
</head>

<body style="background-color: black; color:white ; text-align:center">
    <h1>Suggerimento:"Aggiungi alla barra di ricerca dopo <em>/php-badwords/</em> questo parametro <em>?badword=</em> aggiungendo dopo l'uguale la parola che desideri censurare "</h1>
    <h2>STRINGA NON CENSURATA</h2>
    <p>
        <?php
        /* <!-- Stampo la stringa  --> */
        echo $text 
        ?>
    </p>

    <p>lunghezza stringa
        <?php
        /* <!-- Stampo la lungezza della stringa  --> */
        echo strlen($text) 
        ?>
        caratteri
    </p>
    <h2>STRINGA CENSURATA</h2>
    <p>

        <?php
        /* ESEMPIO. Scrivendo nella barra di ricerca  
            http://localhost/PHP/php-badwords/?badword=Jedi   
            la parola Jedi verrà censurata
           */
         $censored_text = str_replace($_GET['badword'], '***', $text) ;
         echo $censored_text
        ?>
    </p>
    <p>
        lunghezza stringa censurata
        <?php
        /*  <!-- Stampo la lungezza della stringa  --> */
        echo strlen($censored_text) 
        ?>
        caratteri
    </p>
    <img src="https://brighterworld.mcmaster.ca/wp-content/uploads/sites/2/2018/01/shutterstock_342247694_Converted.jpg" alt="">
    
</body>

</html>