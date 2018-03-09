<?php
$sql = "SELECT * FROM member";
$result = mysql_query($sql,$conn);
$i=0;
while($row = mysql_fetch_row($result))
{
    $output[$i]["user_id"] = $row[0];
    $output[$i]["account"] = $row[1];
    $i++;
}
echo json_encode($output);
?>