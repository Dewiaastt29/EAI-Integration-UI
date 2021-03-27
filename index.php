<!DOCTYPE html>
<html>

<head>
    <title>Scraping Website</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-4.5.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-4.5.2-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" href="bootstrap-4.5.2-dist/css/bootstrap-reboot.css">
    <style>
        blink {
            color: #1c87c8;
            font-size: 15px;
            font-weight: bold;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS';
        }

        table,
        th,
        td {
            border: 2px solid white;

        }
    </style>
</head>

<body>
    <!-- JUST SHOWING THE LOGO OF STARTUP -->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="https://pngimg.com/uploads/ebay/ebay_PNG22.png" width="100" height="100" class="d-inline-block align-top" alt="">
            <img src="https://logodownload.org/wp-content/uploads/2014/04/amazon-logo-0.png" width="100" height="100" class="d-inline-block align-top" alt="">
        </a>
    </nav>

    <!-- TITLE OF PAGE -->
    <div class="alert alert-success" role="alert">
        <b>
            <h1 class="text-dark text-center mt-4">SCRAPING WEBSITE AMAZON AND EBAY</h1>
        </b>

    </div>
    <?php

    //PUT DATA ON TABLE MAKEUP IN DATABASE
    include 'connect.php';
    $query = "SELECT * FROM tb_scraping";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {

        //TABLE PRODUCT EBAY
        echo "<table>";
        echo "<tr>";
        echo "<th>Ebay Image</th>";
        echo "<th>Ebay Product Name</th>";
        echo "<th>Ebay Product URL</th>";
        echo "<th>Ebay Price</th>";

        //TABLE PRODUCT AMAZON
        echo "<th>Amazon Image</th>";
        echo "<th>Amazon Product Name</th>";
        echo "<th>Amazon Product URL</th>";
        echo "<th>Amazon Price</th>";
        echo "</tr>";

        //WILL ONLY BE EXECUTED IF CONDITION IS TRUE
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";

            //DATABASE EBAY
            echo "<td> <img src='" . $row['ebay_image'] . " ' width='150' height='150' /></td>";
            echo "<td>" . $row['ebay_nama'] . "</td>";
            echo "<td> <a href = ' " . $row['ebay_url'] . " ' style='color:info' /> Go to buy </td>";
            echo "<td>" . $row['ebay_harga'] . "</td>";


            //DATABASE AMAZON
            echo "<td> <img src='" . $row['amazon_image'] . " ' width='150' height='150' /></td>";
            echo "<td>" . $row['amazon_nama'] . "</td>";
            echo "<td> <a href = ' " . $row['amazon_url'] . " ' style='color:info' /> Go to buy </td>";
            echo "<td>" . $row['amazon_harga'] . "</td>";
            echo "</tr>";
        }

        echo "</table";
    }
    ?>

</body>

</html>