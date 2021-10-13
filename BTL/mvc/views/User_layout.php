<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <style>
        #header,#footer{background-color: yellow;}
    </style>

</head>

<body>
    <div id="header">
        <p>Header</p>
    </div>
    <div id="content">
        <?php
            require_once "./mvc/views/User_pages/".$data["page"].".php";
            //cách hiện dữ liệu từ controller ra view
            while($row=mysqli_fetch_array($data["class"]))
            {
                //tên các cột phải trùng với tên cột trong db
                echo $row["username"]." ".$row["name"];
            }
        ?>
    </div>
    <div id="footer">
        <p>Footer</p>
    </div>

</body>
</html>