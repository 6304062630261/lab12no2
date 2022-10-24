<?php
    $keyword = $_GET["keyword"];
    $conn = mysqli_connect('localhost', 'root', '', 'blueshop');

   

    $sql = "SELECT * FROM member WHERE username LIKE '%$keyword%'";
    $objQuery = mysqli_query($conn,$sql);
?>

<table border="1">
    <?php
        while($row = mysqli_fetch_array($objQuery)): ?>
    <tr>
        <img src="img/member_photo/<?=$row["username"]?>.jpg" width="100">
     
        <td><?php echo $row["username"]?></a></td>
        <td><?php echo $row["name"]?></td>
        <td><?php echo $row["address"]?></td>
        <td><?php echo $row["mobile"]?></td>
        <td><?php echo $row["email"]?></td>
    </tr>
    <?php endwhile;?>
</table>