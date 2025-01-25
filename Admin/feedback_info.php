<html>
<head><link rel="stylesheet" href="Feedback_info.css"></head>
<body>
<table border='1'>
        <tr>
            <th colspan='4'>Customer Feedbacks</th>
        </tr>
        <tr>
            <th>Customer Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
        </tr>
<?php
include_once('db.php');
while($r3=mysqli_fetch_array($query))
{
    echo"<tr><td>".$r3['id']."</td>
    <td>".$r3['name']."</td>
    <td>".$r3['email']."</td>
    <td>".$r3['message']."</td>
</tr>";
}
echo"</table>";
mysqli_close($conn);

?>
</body>
</html>