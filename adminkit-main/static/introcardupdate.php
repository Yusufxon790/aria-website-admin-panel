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
    $sql="select * from intro_card where id=".$_GET['uid'];
    $q=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($q);
    ?>
    <div class="container-lg">
        <h2 class="alert alert-warning text-center" >Intro Card Data Update</h2>
        <form action="" method="POST" >
            <input type="hidden" name="uid" value="<?= $row['id']?>">
            <input type="text" name="c_title" class="form-control mb-2" value="<?= $row['c_title']?>" >
            <input type="text" name="c_content" class="form-control mb-2" value="<?= $row['c_content']?>" >
            <input type="text" name="c_icon" class="form-control mb-2" value="<?= $row['c_icon']?>" >
            <input type="submit" value="Update" class="btn btn-warning" name="s" >
            <a href="index.php" class="btn btn-danger" >->Back</a>
        </form>
        <?
         if (isset($_POST['s'])) {
           $c_title=addslashes($_POST['c_title']);
           $c_content=addslashes($_POST['c_content']);
           $c_icon=addslashes($_POST['c_icon']);
           include "connect.php";
           $sql="update intro_card set c_title='{$c_title}',c_content='{$c_content}',c_icon='{$c_icon}' where id=".$_POST['uid'];
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