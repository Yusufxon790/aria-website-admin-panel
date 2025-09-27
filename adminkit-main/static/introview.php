<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aria Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container-lg">
        <h2 class="alert alert-info text-center mt-2" >Aria Intro Data</h2>
        <table class="table table-dark" >
            <thead>
                <tr>
                    <th>No</th>
                    <th>Intro Title</th>
                    <th>Content 1</th>
                    <th>Content 2</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                <?
                include "connect.php";
                $sql="select * from intro where id=".$_GET['id'];
                $q=mysqli_query($con,$sql);
                while ($row=mysqli_fetch_array($q)) {
                    ?>
                    <tr>
                        <td><?= $row['id']?></td>
                        <td><?= $row['i_title']?></td>
                        <td><?= $row['i_content']?></td>
                        <td><?= $row['i_contents']?></td>
                        <td>
                            <img src="images/<?= $row['i_img']?>" width="150px" alt="">
                        </td>
                    </tr>
                    <?
                }
                ?>
            </tbody>
        </table>
        <a href="index.php" class="btn btn-danger" ><--Back</a>
    </div>
</body>
</html>