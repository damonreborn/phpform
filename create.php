<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Ajouter une catégories de QCM</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <h1>Ajouter une catégories de QCM</h1>
    <form action="create.php">
        <label>Identifiant de la catégorie</label>
        <input name="shortname" size="10" />
        <label>Libellé de la catégorie</label>
        <input name="longname" size="50" />
        <input type="submit" value="Créer" />
    </form>
    <hr />
    <table border>
        <tr>
            <td>ShortName</td>
            <td>LongName</td>
        </tr>
        <?php
$shortname = null;
$longname = null;
if (isset($_GET['shortname'])) {

    $shortname = $_GET['shortname'];
    $longname = $_GET['longname'];
    $host = "localhost";
    $username = "slamquizz";
    $passwd = "i62O6CORckuM3ofQ";
    $dbname = "slamquizz";

    $idConnexion = new MySQLi($host, $username, $passwd, $dbname);
    if ($idConnexion) {
        $sql = "INSERT INTO formulaire (shortname,longname) VALUES ('$shortname','$longname') ;";
        $result = $idConnexion->query($sql);
        if ($result) {
            

        }

    } else {
        print("Impossible de se connecter");
    }

}
?>
    </table>
</body>

</html>