<?php
    require_once "lib/data.php";
    session_start();
    if(isset($_GET["cin"]) and $_GET["cin"]!=""){
        $cin = $_GET["cin"];
        $user = $_SESSION["users"][$cin];   
        print_r($user);
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
            <label for="nom">Votre nom d'utilisateur:</label>
            <input type="text" name="nom" id="nom" value="<?=$user["nom"]?>">
        </div>
        <div>
            <label for="pass">Votre mot de passe:</label>
            <input type="password" name="pass" id="pass" value="<?=$user["pass"]?>">
        </div>
        <div>
            <label for="cin">Votre cin:</label>
            <input type="text" name="cin" id="cin" value="<?=$user["cin"]?>" readonly>
        </div>
        <div>
            <label for="prof">Votre profession:</label>
            <select size="1" id="prof" name="prof">
                <option value="">Votre choix</option>
                <?php
                    foreach($profession as $k=>$v){
                        echo '<option value="'.$k.'" '.($user["prof"] == $k ? "selected" : "").'>'.$v.'</option>';
                    }
                ?>
            </select>
        </div>
        <div>
            <label for="ville">Votre ville:</label>
            <select size="1" id="ville" name="ville">
                <option value="">Votre choix</option>
                <?php
                    foreach ($ville as $k => $v) {
                        echo '<option value="'.$k.'" '.($user["ville"] == $k ? "selected" : "").'>'.$v.'</option>';
                    }
                ?>
            </select>
        </div>
        <div>
            <label for="genre">Votre Genre</label>
            <input type="radio" name="genre" id="M" value="M" <?php if($user["genre"]=="M"){echo"checked";} ?>><label for="M">M</label>
            <input type="radio" name="genre" id="F" value="F" <?php if($user["genre"]=="F"){echo"checked";}?>><label for="F">F</label>
        </div>
        <div>
            <label for="loisir">Votre Loisir</label>
            <?php
                foreach ($loisir as $k=>$v) {
                    echo '<input type="checkbox" name="' . $v . '" id="' . $v . '" value="' . $v . '" ' . (isset($user[$k]) ? 'checked' : '') . '><label for="' . $v . '">' . $v . '</label>';
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
<?php
    }
    else{
       echo "users not defined";
       exit();
    }
?>
