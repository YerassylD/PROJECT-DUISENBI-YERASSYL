<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<style type="text/css">
    .editp{
        position:absolute;
        right: 15px;
        font-size: 18px;
        font-weight: bold;
        padding: 3px 5px 3px 5px;
        text-decoration: none;
        color: grey;
        background-color: white;
        border:2px solid grey;
        border-radius: 10px;
    }
    .editp:hover{
        color: navy;
        border:2px solid navy;
    }
    .row{
        padding: 20px;
    }
</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit News</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/1-col-portfolio.css" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="admin.php">BACK</a>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">News
                    <small>Today in SDU</small>
                </h1>
            </div>
        </div>

        <?php
            $conn = mysqli_connect("localhost","Yerassyl","87053163124","SF");
            $query = "SELECT * FROM `news` ORDER BY `id`";
            $result = mysqli_query($conn, $query);
            $num = $result->num_rows;
            for ($i=0;$i<$num;$i++){
                $row = $result->fetch_assoc();
            ?>
        <div class="row" height="auto" style="background-color:white;">
            <div class="col-md-7">
                    <img class="img-responsive" src=<?php echo $row["photo"]?> alt="">
            </div>
            <div class="col-md-5">
                <a class="editp" href="editnews2.php?id= <?= $row['id']?>">Edit NEWS</a>
                <h3><?php echo $row["title"]?></h3>
                <h4><?php echo $row["subhead"]?></h4>
                <p><?php echo $row["para"]?></p>
            </div>
        </div>
        <?php
        }
        ?>
        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Maded by &copy; Yerassyl 2016</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>