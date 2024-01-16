<style>
    table,tr,td{
        border : 1px solid black;
        border-collapse:collapse;
        margin:5px;
        padding:5px;
        text-align:center;
    }
</style>
<?php
    require_once "lib/data.php";
    session_start();
    if(isset($_POST["cin"]) and $_POST["cin"]!=""){
        $cin= $_POST["cin"];
        $_SESSION["users"][$cin]=$_POST;
    }
?>
    <table>
        <tr>
            <td>cin</td>
            <td>genre_nom</td>
            <td>profession</td>
            <td>loisir</td>
            <td>modifier</td>
            <td>supprimer</td>
        </tr>
    <?php foreach($_SESSION["users"] as $cin=>$users){ ?>
        <tr>
            <td><?= $cin ?></td>
            <td><?= $users["genre"]."-".$users["nom"] ?></td>
            <td><?= $profession[$users["prof"]] ?></td>
            <td>
                <ul>
                    <?php
                        foreach($loisir as $k=>$v){
                            if(isset($users[$v])){
                                echo"<li>".$users[$k]."</li>";
                            }
                        }
                    ?>
                </ul>
            </td>
            <td><a href="modifier.php?cin=<?=$cin?>">modifier</a></td>
            <td><a href="supprimer.php?cin=<?=$cin?>">supprimer</a></td>
        </tr>
    <?php } ?>
    </table>
    <a href="Vider.php">Vider</a> | <a href="formulaire.php">Ajouter</a>