<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container-lg">
        <h2 class="alert alert-warning text-center mt-2" >Intro Data Update</h2>
        <?
        include "connect.php";
        $sql="select * from intro where id=".$_GET['uid'];
        $q=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($q);
        ?>
        <form action="" method="POST"  enctype="multipart/form-data" >
            <input type="hidden" name="uid" value="<?echo $row['id']?>" >
            <input type="text" name="i_title" class="form-control mb-2" value="<?= $row['i_title']?>">
            <input type="text" name="i_content" class="form-control mb-2" value="<?= $row['i_content']?>">
            <input type="text" name="i_contents" class="form-control mb-2" value="<?= $row['i_contents']?>">
            <input type="file" name="i_img" class="form-control mb-2" value="" title="<? echo $row['i_img']?>" >
            <input type="hidden" name="img_old" class="form-control mb-2" value="<? echo $row['i_img']?>"  >
            <img src="images/<? echo $row['i_img']?>" alt="image" width="75" >
            <input type="submit" name="s" class="btn btn-primary" value="Update">
            <a href="index.php" class="btn btn-danger" ><-Back</a>
        </form>
        <?
        if (isset($_POST['s'])) {
            $i_title=addslashes($_POST['i_title']);
            $i_content=addslashes($_POST['i_content']);
            $i_contents=addslashes($_POST['i_contents']);
            $i_img=$_FILES['i_img']['name'];
            $img_old=$_POST['img_old'];
            if ($i_img!="") {
                $update_filename=$i_img;
            }
            else {
                $update_filename=$img_old;
            }
            move_uploaded_file($_FILES['i_img']['tmp_name'],$i_img);
            include "connect.php";
            $sql="update intro set i_title='{$i_title}',i_content='{$i_content}',i_contents='{$i_contents}', i_img='{$update_filename}' where id=".$_POST['uid'];
            $q=mysqli_query($con,$sql) or die(mysqli_error($con));
            if ($q) {
                ?>
                <script>
                    alert("Data Updated Successfully!");
                </script>
                <?
            }
            else {
                ?>
                <script>
                    alert("Data is not Updated!!");
                </script>
                <?
            }
        }
        ?>
    </div>
</body>
</html>