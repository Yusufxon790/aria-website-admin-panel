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
    $sql="select * from stuff where id=".$_GET['uid'];
    $q=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($q);
    ?>
    <div class="container-lg">
        <h2 class="alert alert-warning text-center" >Stuff Data Update</h2>
        <form action="" method="POST" enctype="multipart/form-data" >
            <input type="hidden" name="uid" value="<?= $row['id']?>">
            <input type="text" name="stuff_name" class="form-control mb-2" value="<?= $row['stuff_name']?>" >
            <input type="text" name="stuff_position" class="form-control mb-2" value="<?= $row['stuff_position']?>" >
            <input type="file" name="stuff_img" class="form-control mb-2" value="" title="<? echo $row['stuff_img']?>" >
            <input type="hidden" name="img_old" class="form-control mb-2" value="<? echo $row['stuff_img']?>"  >
            <img src="images/<? echo $row['stuff_img']?>" alt="image" width="75" >
            <input type="submit" value="Update" class="btn btn-warning" name="s" >
            <a href="service.php" class="btn btn-danger" >->Back</a>
        </form>
        <?
         if (isset($_POST['s'])) {
            $stuff_name=$_POST['stuff_name'];
            $stuff_position=$_POST['stuff_position'];
            $stuff_img=$_FILES['stuff_img']['name'];
            $img_old=$_POST['img_old'];
            if ($stuff_img!="") {
                $update_filename=$stuff_img;
            }
            else {
                $update_filename=$img_old;
            }
            move_uploaded_file($_FILES['stuff_img']['tmp_name'],$stuff_img);
           include "connect.php";
           $sql="update stuff set stuff_img='{$update_filename}',stuff_name='{$stuff_name}',stuff_position='{$stuff_position}'  where id=".$_POST['uid'];
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