<?php
require("functions.php");
$id = clear_data($_POST["id"]);

require_once("sql.php");


$data = $mysqli->query("SELECT * FROM users WHERE id = '$id'");

if($data->num_rows) {


    $mysqli->query("DELETE FROM users WHERE id='".$id."'");

    if($mysqli->affected_rows) {
        echo('{"success" : "1"}');
    }
    else
    {
        echo('{"success" : "0"}');
    }


}
else
{
    $mysqli->close();
    exit('{"success" : "0"}');

}
$mysqli->close();