<html lang="fr">
    <body>
        <h1>Un fichier d'exemple</h1>
<?php

    include  'functions.php';

    include 'variable.php';

    echo date('d/m/Y H:i:s');


    foreach($tab as $key => $value) {
        echo $key. ' : <br \>';
        foreach($value as $key2 => $value2)
            if($key2 == 'prix') {
                if($value2 <= 12) {
                    echo getPriceWithoutTVA($value2). '-> <span style="color: green">' .$value2. '</span><br \>';
                }
                else {
                    echo getPriceWithoutTVA($value2). '-> <span style="color: blue">' .$value2. '</span><br \>';
                }
            }
        else 
            echo $key2. ' : ' .$value2. '<br \>';
    }


    ?>
    </body>
</html>
