<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Page protégée par mot de passe les datas</title>
    </head>
        <?php
            if(isset($_POST["password"]) and $_POST["password"] == "nico"){
                ?>
                <p>Vous pouvez voir</p>
                <?php
            }
            else{
                ?>
                <p>vous pouvez PAS voir</p>
                <?php
            }

        ?>
    </body>
</html>