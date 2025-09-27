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
        <h2 class="alert alert-info text-center mt-2" >Service Types Data</h2>
        <table class="table table-dark">
								<thead>
									<tr>
										<th>No</th>
										<th>Service Types Title</th>
                                        <th>Titles</th>
										<th>Content</th>
									</tr>
								</thead>
								<tbody>
									<?
									include "connect.php";
									$sql="select * from service_types where id=".$_GET['id'];
									$q=mysqli_query($con,$sql);
									$i=1;
									while ($row=mysqli_fetch_array($q)) {
										?>
										<tr>
											<td><?= $i; $i++;?></td>
											<td><?= $row['st_title']?></td>
											<td><?= $row['st_title1']?></td>
											<td><?= $row['st_content']?></td>
										</tr>
										<?
									}
									?>
								</tbody>
							</table>
        <a href="service.php" class="btn btn-danger" ><--Back</a>
    </div>
</body>
</html>
