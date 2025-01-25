<?php
    $conn=mysqli_connect('localhost','root','','feedbackinfo');
    $query=mysqli_query($conn,"select * from feedbacks");
    ?>