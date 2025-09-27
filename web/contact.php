<?
                    if (isset($_POST['s'])) {
                        $name=$_POST['name'];
                        $email=$_POST['email'];
                        $message=$_POST['message'];
                        include "connect.php";
                        $sql="insert into contact_form(name,email,message) values('{$name}','{$email}','{$message}')";
                        $q=mysqli_query($con,$sql) or die(mysqli_error($con)); 
                        
                    }
                    if ($q) {
                        ?>
                        <script>
                            alert("Data inserted Succesfully");
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
                  ?><script>
                    window.location.href="index.php";
                  </script><?
                    ?>