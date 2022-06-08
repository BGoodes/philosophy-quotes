<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Citations</title>
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>

    <header>
        <h1 class="title">Générateur de citations</h1>     
        <a class="button" href="">Nouvelle citation</a></li>
    </header>
    
    <div class="container">

        <?php 
            include "includes/database.php";

            $q = $db->prepare("SELECT * FROM ".TABLE." ORDER BY rand() LIMIT 1");
            $q->execute();

            while($row = $q->fetch(PDO::FETCH_ASSOC)) {
                echo '<p class="citation">';
                echo "\"".$row["citation"]."\"";
                echo '</p>';

                echo '<p class="source">';
                echo " - ".$row["auteur"]."<br/> - ".$row["source"];
                echo '</p>';
            }
        ?>
    </div>


</body>
</html>