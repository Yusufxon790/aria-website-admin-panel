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
        <h2 class="alert alert-warning text-center mt-2" >Home Data Editing</h2>
        <?
        include "connect.php";
        $sql="select * from home where id=".$_GET['uid'];
        $q=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($q);
        ?>
        <form action="" method="POST" >
            <input type="hidden" name="uid" value="<?echo $row['id']?>" >
            <input type="text" name="h_title" class="form-control mb-2" value="<?= $row['h_title']?>">
            <input type="text" name="h_content" class="form-control mb-2" value="<?= $row['h_content']?>">
            <input type="submit" name="s" class="btn btn-primary" value="Update">
            <a href="index.php" class="btn btn-danger" ><-Back</a>
        </form>
        <?
        if (isset($_POST['s'])) {
            $h_title=$_POST['h_title'];
            $h_content=$_POST['h_content'];
            include "connect.php";
            $sql="update home set h_title='{$h_title}',h_content='{$h_content}' where id=".$_POST['uid'];
            $q=mysqli_query($con,$sql);
            if ($q) {
                ?>
                <script>
                    alert("Data updated successfully!");
                </script>
                <?
            }
            else {
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