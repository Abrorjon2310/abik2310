<?php
ob_start();
require_once '../config/connect.php';

if (!empty($_POST['submit'])){
    $name = $_POST['name'];
    $yo_nalish = $_POST['yo_nalish'];
    $kurs=$_POST['kurs'];
    $baho=$_POST['baho'];

    $query="INSERT INTO `aloqa`(`name`,`yo_nalish`,`kurs`,`baho`) VALUES ('$name','$yo_nalish','$kurs','$baho')";

    mysqli_query($connect,$query);

    header("Location:/");
    ob_end_flush();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
<div class="container my-3">
        <form action="" method="POST">
            <div class="row">
                <div class="col-4">
                    <div class="card shadow-lg">
                        <div class="card-body">
                            <p class="text-center">CREATE</p>
                            <div class="my-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                           
                            <div class="my-3">
                                <label for="" class="form-label">Yo'nalish</label>
                                <input type="text" class="form-control" name="yo_nalish">
                            </div>
                            <div class="my-3">
                                <label for="" class="form-label">Kurs</label>
                                <input type="number" class="form-control" name="kurs">
                            </div>
                            <div class="my-3">
                                <label for="" class="form-label">Baho</label>
                                <input type="number" class="form-control" name="baho">
                            </div>
                    
                            <input type="submit" class="btn btn-primary form-control" name="submit" value="Create">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>