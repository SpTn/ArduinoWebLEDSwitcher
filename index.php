<?php
if(isset($_POST['statut'])) {
$myfile = fopen("statut.txt", "w") or die("Unable to open file!");
$txt = $_POST['statut'];
fwrite($myfile, $txt);
fclose($myfile);
}
?>

<html>
<body>
    <form action="index.php" method="POST">
        <select name="statut">
            <option value="OFF">OFF</option>
            <option value="ON">On</option>
        </select>
        <input type="submit" value="Submit">
    </form>

    </body>
</html>
