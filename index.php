<?php

include './config/autoload.php';

$personnageTest = new Personnage("Axel");
$personnageTestTwo = new Personnage("Benji");
echo($personnageTestTwo->getHealthPoints() . "<br>");

$personnageTest->hitAnotherCharacter($personnageTestTwo);

echo($personnageTestTwo->getHealthPoints());
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100..900&family=Oswald:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<form action="./classes/personnagesManager.php" method="post" > 
    <label for="personnage">Pseudo</label>
        <input type="text" name="personnage" placeholder="pseudo">
        
        <div class="container">

            <div class="card">
                <div class="case1">

                </div>
            </div>


            <div class="image">
                <img src="vs.png" alt="">
            </div>
                

            <div class="card">
                <div class="case1">

                </div>
            </div>

        </div>

        <div class="action">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione error animi asperiores fugiat aliquam dolorum, laboriosam quibusdam facilis similique. Ratione voluptatibus molestiae, iste error provident adipisci eaque nemo sed iusto. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis, quod. Culpa necessitatibus quaerat reiciendis placeat voluptas, voluptates natus expedita sunt tenetur, dicta, esse quidem iure quod eos quam accusamus? Placeat. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat odit, voluptatem quos sequi facere natus. Sunt voluptatibus tempore, asperiores perspiciatis iste est culpa, autem accusantium sed vitae facere molestiae ex. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa natus nulla rerum consequatur iusto iure quia veniam autem itaque, voluptatum ipsum ipsa quis facere at, harum a explicabo suscipit ipsam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque soluta eum hic voluptate reprehenderit praesentium possimus labore id odio dolorem, recusandae tenetur placeat maiores, vero aut fuga, obcaecati in dolore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel repellat facere ex quidem molestias earum reiciendis expedita inventore odit aliquam perferendis exercitationem, nemo molestiae dolor magni architecto mollitia alias adipisci!</div>
</form>
</body>
</html>