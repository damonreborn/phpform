<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Catégories de QCM</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <h1>Identifiant de la catégorie</h1>
    <form action="index.php">
        <label>Identifiant de la catégorie</label>
        <input name="shortname" size="50" />
    </form>
    <hr/>
    <table border>
    <tr><td>ShortName</td><td>LongName</td></tr>
    <?php
$shortname = null;
$longname = null;
if (isset($_GET['shortname'])) {

    $shortname = $_GET['shortname'];
    $host = "localhost";
    $username = "slamquizz";
    $passwd = "i62O6CORckuM3ofQ";
    $dbname = "slamquizz";

    $idConnexion = new MySQLi($host, $username, $passwd, $dbname);
    if ($idConnexion) {
        $sql = "SELECT * FROM formulaire WHERE shortname LIKE '%" . $shortname . "%';";
        $result = $idConnexion->query($sql);
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $id = $row['id'];
                $shortname = $row['shortname'];
                $longname = $row['longname'];
                echo "<tr>";
                echo "<td>" . $shortname . "</td>";
                echo "<td>" . $longname . "</td>";
                echo "</tr>";
            }

        }

    } else {
        print("Impossible de se connecter");
    }

}
?>
</table>
</body>

</html>