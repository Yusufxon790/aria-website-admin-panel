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
    $sql="select * from service_types where id=".$_GET['uid'];
    $q=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($q);
    ?>
    <div class="container-lg">
        <h2 class="alert alert-warning text-center" >Service Types Data Update</h2>
        <form action="" method="POST" >
            <input type="hidden" name="uid" value="<?= $row['id']?>">
            <input type="text" name="st_title" class="form-control mb-2" value="<?= $row['st_title']?>" >
            <input type="text" name="st_title1" class="form-control mb-2" value="<?= $row['st_title1']?>" >
            <input type="text" name="st_content" class="form-control mb-2" value="<?= $row['st_content']?>" >
            <input type="submit" value="Update" class="btn btn-warning" name="s" >
            <a href="service.php" class="btn btn-danger" >->Back</a>
        </form>
        <?
         if (isset($_POST['s'])) {
           $st_title=addslashes($_POST['st_title']);
           $st_title1=addslashes($_POST['st_title1']);
           $st_content=addslashes($_POST['st_content']);
           include "connect.php";
           $sql="update service_types set st_title='{$st_title}',st_field1='{$st_title1}',st_content='{$st_content}'  where id=".$_POST['uid'];
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