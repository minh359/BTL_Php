<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <title>Test</title>
</head>

<body>
    <div id="content">
        <?php
        require_once "./mvc/views/User_pages/" . $data["page"] . ".php";
        //cách hiện dữ liệu từ controller ra view
        while ($row = mysqli_fetch_array($data["source"]["sp"])) {
            //tên các cột phải trùng với tên cột trong db
            echo "<br>" . $row["username"] . " " . $row["name"];
        }
        ?>
    </div>
    <div class="clear-both"></div>    
    <?php
    include './mvc/views/Admin_pages/partials/pagination.php';
    ?>

</body>

</html>