<?php
    require_once("lib/data.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="liste.php">
        <div>
            <label for="nom">Votre name d'utilisateur:</label>
            <input type="text" name="nom" id="nom" value="">
        </div>
        <div>
            <label for="pass">Votre mot de passe:</label>
            <input type="password" name="pass" id="pass" value="">
        </div>
        <div>
        <label for="cin">Votre cin:</label>
        <input type="text" name="cin" id="cin" value="">
        </div>
        <div>
        <label for="prof">Votre profession:</label>
        <select size="1" id="prof" name="prof">
            <option value="">Votre choix</option>
            <?php
                foreach($profession as $k=>$v){
                    echo'<option value="'.$k.'">'.$v.'</option>"';
                }
            ?>
        </select>
        </div>
        <div>
        <label for="ville">Votre ville:</label>
        <select size="1" id="ville" name="ville">
            <option value="">Votre choix</option>
            <?php
                foreach($ville as $k=> $v){
                    echo'<option value="'.$k.'">'.$v.'</option>"';
                }
            ?>
        </select>
        </div>
        <div>
        <label for="genre">Votre Genre</label>
        <input type="radio" name="genre" id="M" value="M" checked="true"><label for="M">M</label>
        <input type="radio" name="genre" id="F" value="F"><label for="F">F</label>
        </div>
        <div>
        <label for="loisir">Votre Loisir</label>
        <?php
        foreach($loisir as $v){
            echo'<input type="checkbox" name="'.$v.'" id="'.$v.'" value="'.$v.'"><label for="'.$v.'">'.$v.'</label>';
        }
        ?>
        </div>
        <div>
            <input type="submit" value="valider">
            <input type="reset" value="annuler">
        </div>
    </form>
</body>
</html>