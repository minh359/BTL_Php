<head>
        <style>
                table {
                        border: 1px solid #555;
                        border-width: 0 0 1px 1px;
                }

                table td {
                        border: 1px solid #555;
                        border-width: 1px 1px 0 0;
                }

                /* What you need: */
                table td {
                        width: 30px;
                        overflow: hidden;
                }

                table.with-ellipsis td {
                        text-overflow: ellipsis;
                }
        </style>
</head>
<form class="crud" method='POST'action=<?php $_SERVER['PHP_SELF'] ?> >

        <?php
        require_once "./mvc/views/Admin_pages/" . $data["page"] . ".php";
        //cách hiện dữ liệu từ controller ra view
        if ($data["method"] == 'Create') {
                echo "<div class='form-group row'></div>
                <label class='col-lg-3 col-form-label form-control-label'>Id</label>
                <div class='col-lg-3'></div>
                <input class='form-control' id='id' type='number' >";
                echo "<div class='form-group row'></div>
                <label class='col-lg-3 col-form-label form-control-label'>Name</label>
                <div class='col-lg-3'></div>
                <input class='form-control' id='name' type='text' required>";
                echo "<div class='form-group row'></div>
                <div class='col-lg-6 text-center'></div>";
                // echo "<input type='button' class='btn btn-primary'   value = 'Create' onclick=\"location.href='/BTL/Admin/CreateUser/".$data["source"]["username"]."/".md5($data["source"]["password"])."/".$data["source"]["name"]."/".$data["source"]["dob"]."/".$data["source"]["email"]."'\">";    
                echo "<input type='submit' class='btn btn-primary'   value = 'Create' id='create_author' >";
                echo "<input type='button' class='btn btn-secondary' value='Cancel' onclick=\"location.href='javascript:history.go(-1)'\">";
        } else {
                while ($row = mysqli_fetch_array($data["source"]["sp"])) {
                    
                        //tên các cột phải trùng với tên cột trong db
                        echo "<div class='form-group row'></div>
                <label class='col-lg-3 col-form-label form-control-label'>Id</label>
                <div class='col-lg-3'></div>
                <input class='form-control' id='id' value='" . $row["id"] . "' type='number' required>";
                        echo "<div class='form-group row'></div>
                <label class='col-lg-3 col-form-label form-control-label'>Name</label>
                <div class='col-lg-3'></div>
                <input class='form-control' id='name' value='" . $row["name"] . "' type='text' required>";
                       
                        if ($data["method"] == "Update") {
                                echo "<input type='submit' class='btn btn-primary'  value = 'Save changes' id='update_author' >";
                        }
                        if ($data["method"] == "Delete") {
                                echo "<span>Bạn có chắc muốn xóa truyện " . $row["name"] . "?</span><br/>";
                                echo "<input type='button' class='btn btn-danger'   value = 'Confirm' onclick=\"location.href='/BTL/Admin/DeleteAuthor/" . $row["id"] . "'\">";
                        }
                        echo "<input type='button' class='btn btn-secondary' value='Cancel' onclick=\"location.href='javascript:history.go(-1)'\">";
                }
        }

        ?>
</form>