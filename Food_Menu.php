<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Menu</title>
    <link rel="stylesheet" href="Food_Menu1.css?v=<?php  echo time(); ?>">
</head>
<body>
    <h3>বাঙালিয়ানার বাঙালি ভোজন তালিকা</h3>
       <section class="page-section" id="menu">
        <div class="container">
            <div class="row">
                <h4>সকালের নাস্তা</h4>
                <?php 
                $conn= new mysqli('localhost','root','','online_food_order')or die("Could not connect to mysql".mysqli_error($con));
                $qry = $conn->query("SELECT * FROM product_list Where ID = 1 ORDER BY name COLLATE utf8mb4_general_ci ASC");
                while($row = $qry->fetch_assoc()):
                ?>
                <div class="disp">
                    <div class="menu-item">
                        <img src="images/<?php echo $row['img_path'] ?>" class="card-img-top" alt="..." width="200" height="200">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['name'] ?></h5>
                            <p class="card-text"><?php echo $row['description'] ?></p>
                            <p class="card-price"><?php echo $row['price'] ?></p>
                            <div class="text-center">
                              
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>

            <div class="row">
                <h4>দুপুরের খাবার</h4>
                <?php 
                $conn= new mysqli('localhost','root','','online_food_order')or die("Could not connect to mysql".mysqli_error($con));
                $qry = $conn->query("SELECT * FROM product_list Where ID = 2 ORDER BY name COLLATE utf8mb4_general_ci ASC");
                while($row = $qry->fetch_assoc()):
                ?>
                <div class="disp">
                    <div class="menu-item">
                        <img src="images/<?php echo $row['img_path'] ?>" class="card-img-top" alt="..." width="200" height="200">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['name'] ?></h5>
                            <p class="card-text"><?php echo $row['description'] ?></p>
                            <p class="card-price"><?php echo $row['price'] ?></p>
                            <div class="text-center">
                               
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>

            <div class="row">
                <h4>রাতের খাবার</h4>
                <?php 
                $conn= new mysqli('localhost','root','','online_food_order')or die("Could not connect to mysql".mysqli_error($con));
                $qry = $conn->query("SELECT * FROM product_list Where ID = 3 ORDER BY name COLLATE utf8mb4_general_ci ASC");
                while($row = $qry->fetch_assoc()):
                ?>
                <div class="disp">
                    <div class="menu-item">
                        <img src="images/<?php echo $row['img_path'] ?>" class="card-img-top" alt="..." width="200" height="200">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['name'] ?></h5>
                            <p class="card-text"><?php echo $row['description'] ?></p>
                            <p class="card-price"><?php echo $row['price'] ?></p>
                            <div class="text-center">
                               
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>

            <div class="row">
                <h4>পানীয়</h4>
                <?php 
                $conn= new mysqli('localhost','root','','online_food_order')or die("Could not connect to mysql".mysqli_error($con));
                $qry = $conn->query("SELECT * FROM product_list Where ID = 4 ORDER BY name COLLATE utf8mb4_general_ci ASC");
                while($row = $qry->fetch_assoc()):
                ?>
                <div class="disp">
                    <div class="menu-item">
                        <img src="images/<?php echo $row['img_path'] ?>" class="card-img-top" alt="..." width="200" height="200">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['name'] ?></h5>
                            <p class="card-text"><?php echo $row['description'] ?></p>
                            <p class="card-price"><?php echo $row['price'] ?></p>
                            <div class="text-center">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
</body>
</html>
