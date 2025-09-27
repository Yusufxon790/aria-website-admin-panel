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
    $sql="select * from service where id=".$_GET['uid'];
    $q=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($q);
    ?>
    <div class="container-lg">
        <h2 class="alert alert-warning text-center" >Service Data Update</h2>
        <form action="" method="POST" enctype="multipart/form-data" >
            <input type="hidden" name="uid" value="<?= $row['id']?>">
            <input type="text" name="s_title" class="form-control mb-2" value="<?= $row['s_title']?>" >
            <input type="text" name="s_content" class="form-control mb-2" value="<?= $row['s_content']?>" >
            <input type="text" name="s_field1" class="form-control mb-2" value="<?= $row['s_field1']?>" >
            <input type="text" name="s_field2" class="form-control mb-2" value="<?= $row['s_field2']?>" >
            <input type="text" name="s_price" class="form-control mb-2" value="<?= $row['s_price']?>" >
            <input type="file" name="s_img" class="form-control mb-2" value="" title="<? echo $row['s_img']?>" >
            <input type="hidden" name="img_old" class="form-control mb-2" value="<? echo $row['s_img']?>"  >
            <img src="images/<? echo $row['s_img']?>" alt="image" width="75" >
            <input type="submit" value="Update" class="btn btn-warning" name="s" >
            <a href="service.php" class="btn btn-danger" >->Back</a>
        </form>
        <?
         if (isset($_POST['s'])) {
           $s_title=addslashes($_POST['s_title']);
           $s_content=addslashes($_POST['s_content']);
           $s_field1=addslashes($_POST['s_field1']);
           $s_field2=addslashes($_POST['s_field2']);
           $s_price=addslashes($_POST['s_price']);
           $s_img=$_FILES['s_img']['name'];
            $img_old=$_POST['img_old'];
            if ($s_img!="") {
                $update_filename=$s_img;
            }
            else {
                $update_filename=$img_old;
            }
            move_uploaded_file($_FILES['s_img']['tmp_name'],$s_img);
           include "connect.php";
           $sql="update service set s_title='{$s_title}',s_content='{$s_content}',s_field1='{$s_field1}',s_field2='{$s_field2}',s_price='{$s_price}',s_img='{$update_filename}'  where id=".$_POST['uid'];
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