               <?
                     if (isset($_POST['s1'])) {
                        $cname=$_POST['cname'];
                        $cemail=$_POST['cemail'];
                        $cphone=$_POST['cphone'];
                        $interested=$_POST['interested'];
                        include "connect.php";
                        $sql="insert into callme_form(name,phone,email,interested) values('{$cname}','{$cphone}','{$cemail}','{$interested}')";
                        $q=mysqli_query($con,$sql) or die(mysqli_error($con));
                    }
                    if ($q) {
                        ?>
                        <script>
                            alert("Data inserted succesfully!");
                        </script>
                        <?
                    }
                    else {
                        ?>
                        <script>
                            alert("Data is not inserted!!");
                        </script>
                        <?
                    }
                    ?>
                    <script>
                        window.location.href="index.php";
                    </script>
                    <?
                ?>