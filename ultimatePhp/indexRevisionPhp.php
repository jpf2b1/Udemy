<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Les Boucles</h1>

<?php
    //Boucles : while

    /*
    $ligne = 0;
    while ($ligne<10){
        echo 'Voici le numero de la ligne : '.($ligne + 1).'<br/>';
        $ligne ++;
    };
    */

    /*
    //Boucles : For
    for($ligne = 0; $ligne<10; $ligne++){
        echo 'Voici le numero de la ligne : '.($ligne+1).'<br>';
    };
    */

    $user = ['Nicolas', 'George', 'Marc', 'Emmanuel', 'Thomas'];

    $nicolas = ['prenom'        => 'Nicolas',
                'nom'           => 'Dupond',
                'age'           => 20,
                'sex'           => 'Masculin',
                'profession'    => 'Développeur'];

/*
    for($i = 0; $i < count($user); $i++){
        echo $user[$i].'<br>';
    }

    echo '<br> <br>';

    $nom = 0;
    while($nom < count($user)){
        echo $user[$nom].'<br>';
        $nom++;
    }
*/
    echo '<br> <br>';

/*
    foreach($user as $name){
        echo $name.'<br>';
    }
*/


/*
foreach($nicolas as $categorie => $value){
    echo ucfirst($categorie.' : '.$value.'<br>');
}
*/
    $x = 110;

/*
    do{
        echo 'Le nombre est égal à : '. $x.'<br>';
        $x++;
    }while($x<10);

*/

/*
for ($i=0; $i <=10 ; $i++) { 
    for ($j=0; $j <=10 ; $j++) { 
        echo $i * $j .' ';
    }
    echo '<br>';
}
*/

echo   '<table border style="border-collapse: collapse;">
            <tr>
                <th></th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>9</th>
                <th>10</th>
            </tr>
            
            

        </table>';

        for ($i=0; $i <=10 ; $i++) { 
                echo'<tr>';
                    for ($j=0; $j <10 ; $j++) { 
                        echo '<td></td>';
                    }
                echo '</tr>';
        
        }



?>

</body>
</html>




