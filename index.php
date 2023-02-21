<?php
require_once 'config/connect.php';
$query="SELECT*FROM `aloqa`";
$results=mysqli_query($connect,$query);
$results=mysqli_fetch_all($results,MYSQLI_ASSOC);
$tr = 1;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <div class="container my-3">
   <a href="/crud/create.php" class="btn btn-success my-3">Odam qo'shish</a>
   <table class="table table-bordered table-hover table-striped">
   <thead>
        <tr>
            <th>Id</th>
            <th>Ism</th>
            <th>Yo'nalish</th>
            <th>Kurs</th>
            <th>Baho</th>
            <th>Show</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php  foreach ($results as $result){?>
            <tr>
                    <td class="text-center"><?=$tr++?></td>
                    <td class="text-center"><?=$result['name']?></td>
                    <td class="text-center"><?=$result['yo_nalish']?></td>
                    <td class="text-center"><?=$result['kurs']?></td>
                    <td class="text-center"><?=$result['baho']?></td>
                    <td class="text-center"><a href="crud/show.php?id=<?=$result['id']?>" class="btn btn-primary">Show</a></td>
                    <td class="text-center"><a href="crud/edit.php?id=<?=$result['id']?>" class="btn btn-success">Update</a></td>
                    <td class="text-center"><a href="crud/delete.php?id=<?=$result['id']?>" class="btn btn-danger">Delete</a></td>
            </tr>
            <?php } ?>


    </tbody>
   </table>
   </div>
</body>
</html>