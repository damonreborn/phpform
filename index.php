<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Catégories de QCM</title>
    </head>
    <body>
        <h1>Identifiant de la catégorie</h1>
        <form action="index.php">
            <label>Identifiant de la catégorie</label>
            <input name="shortname" size="50"/>

        </form>
        <?php
            if (isset($_GET['shortname'])){
            $shortname = $_GET['shortname'];
            print $shortname;
            }

            $host = "localhost";
            $username = "slamquizz";
            $passwd = "i62O6CORckuM3ofQ";
            $dbname = "slamquizz";
            $idConnexion = new MySQLi($host,$username,$passwd,$dbname);
                if($idConnexion){
                    $result = $idConnexion->query("SELECT * FROM tbl_category WHERE shortname='" . $shortname . "';");
                }
        ?>
    </body>
</html>