<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?
    include "connect.php";
    $sql="select * from project where id=".$_GET['uid'];
    $q=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($q);
    ?>
    <div class="container-lg">
        <h2 class="alert alert-warning text-center" >Project Data Update</h2>
        <form action="" method="POST" enctype="multipart/form-data" >
            <input type="hidden" name="uid" value="<?= $row['id']?>">
            <input type="file" name="p_img" class="form-control mb-2" value="" title="<? echo $row['p_img']?>" >
            <input type="hidden" name="img_old" class="form-control mb-2" value="<? echo $row['p_img']?>"  >
            <img src="images/<? echo $row['p_img']?>" alt="image" width="75" >
            <input type="submit" value="Update" class="btn btn-warning" name="s" >
            <a href="service.php" class="btn btn-danger" >->Back</a>
        </form>
        <?
         if (isset($_POST['s'])) {
           $p_img=$_FILES['p_img']['name'];
            $img_old=$_POST['img_old'];
            if ($p_img!="") {
                $update_filename=$p_img;
            }
            else {
                $update_filename=$img_old;
            }
            move_uploaded_file($_FILES['p_img']['tmp_name'],$p_img);
           include "connect.php";
           $sql="update project set p_img='{$update_filename}'  where id=".$_POST['uid'];
           $q=mysqli_query($con,$sql);
           if ($q) {
            ?>
            <script>
                alert("Data updated succesfully!");
            </script>
            <?
           }
           else{
            ?>
            <script>
                alert("Data is not updated!!");
            </script>
            <?
           }
         }
        ?>
    </div>
</body>
</html>