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
<form class="crud" method='POST'>

        <?php
        require_once "./mvc/views/Admin_pages/" . $data["page"] . ".php";
        //cách hiện dữ liệu từ controller ra view
        if ($data["method"] == 'Create') {
                echo "<div class='form-group row'></div>
                <label class='col-lg-3 col-form-label form-control-label'>Id</label>
                <div class='col-lg-3'></div>
                <input class='form-control' id='id' type='number' required>";
                echo "<div class='form-group row'></div>
                <label class='col-lg-3 col-form-label form-control-label'>Name</label>
                <div class='col-lg-3'></div>
                <input class='form-control' id='name' type='text' required>";
                echo "<div class='form-group row'></div>
                <label class='col-lg-3 col-form-label form-control-label'>Description</label>
                <div class='col-lg-3'></div>
                <textarea class='form-control texteditor' name='description' id='description' rows='2'></textarea>";
                echo "<div class='form-group row'></div>
                <label class='col-lg-3 col-form-label form-control-label'>Avatar </label>
                <div class='col-lg-3'></div>
                <input class='form-control'id='avatar' type='text' required>";
                echo "<div class='form-group row'></div>
                <label class='col-lg-3 col-form-label form-control-label'>State</label>
                <div class='col-lg-3'></div>
                <input class='form-control' id='state' type='text ' required>";
                echo "<div class='form-group row'></div>
                <label class='col-lg-3 col-form-label form-control-label'>Post date</label>
                <div class='col-lg-3'></div>
                <input class='form-control' id='postdate' type='date ' required>";
                echo "<div class='form-group row'></div>
                        <label class='col-lg-3 col-form-label form-control-label'>Author</label>";
                echo "<select name='author_sl' id='author_id'class='form-control'>
              ";
                while ($row = mysqli_fetch_array($data["author"]["sp"])) {
                        echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                }
                echo "</select>";

                echo "<div class='form-group row'></div>
                        <label class='col-lg-3 col-form-label form-control-label'>Category</label>";
                echo "<select name='category_sl' id='category_id' class='form-control'>
              ";
                while ($row = mysqli_fetch_array($data["category"]["sp"])) {
                        echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                }
                echo "</select>";

                echo "<div class='form-group row'></div>
                <div class='col-lg-6 text-center'></div>";
                echo "<input type='button' class='btn btn-primary'   value = 'Create_novel' id='create_novel' onclick=\"location.href='/BTL/Admin/NovelTable/1'\">";
                echo "<input type='button' class='btn btn-secondary' value='Cancel' onclick=\"location.href='javascript:history.go(-1)'\">";
        } else {
                while ($row = mysqli_fetch_array($data["novel"]["sp"])) {
                        echo "<div class='row justify-content-center' style='display: flex;justify-content: center;'>
        <img src='" . $row["avatar"] . "'  width='400px' height='500px'></div>";
                        //tên các cột phải trùng với tên cột trong db
                        echo "<div class='form-group row'></div>
                <label class='col-lg-3 col-form-label form-control-label'>Id</label>
                <div class='col-lg-3'></div>
                <input class='form-control' id='id' value='" . $row["id"] . "' type='number' >";
                        echo "<div class='form-group row'></div>
                <label class='col-lg-3 col-form-label form-control-label'>Name</label>
                <div class='col-lg-3'></div>
                <input class='form-control' id='name' value='" . $row["name"] . "' type='text' required>";
                        echo "<div class='form-group row'></div>
                <label class='col-lg-3 col-form-label form-control-label'>Description</label>
                <div class='col-lg-3'></div>
                <textarea class='form-control texteditor' name='description' id='description' rows='5'>" . $row["description"] . "</textarea>";
                        echo "<div class='form-group row'></div>
                <label class='col-lg-3 col-form-label form-control-label'>Avatar </label>
                <div class='col-lg-3'></div>
                <input class='form-control'id='avatar'value='" . $row["avatar"] . "' type='text' required>";
                        echo "<div class='form-group row'></div>
                <label class='col-lg-3 col-form-label form-control-label'>State</label>
                <div class='col-lg-3'></div>
                <input class='form-control' id='state' value='" . $row["state"] . "' type='text ' required>";
                        echo "<div class='form-group row'></div>
                <label class='col-lg-3 col-form-label form-control-label'>Post date</label>
                <div class='col-lg-3'></div>
                <input class='form-control' id='postdate' value='" . $row["post_date"] . "' type='date ' required>";


                        echo "<div class='form-group row'></div>
                <label class='col-lg-3 col-form-label form-control-label'>Author</label>";
                        echo "<select name='author_sl' id='author_sl'class='form-control'>";
                        while ($lst = mysqli_fetch_array($data["author"]["sp"])) {
                                if($lst['id']==$row["author_id"])
                                {
                                        echo "<option value='" . $lst['id'] . "' selected>" . $lst['name'] . "</option>";
                                }
                                else{
                                        echo "<option value='" . $lst['id'] . "'>" . $lst['name'] . "</option>";
                                }
                        }
                        echo "</select>";

                        echo "<div class='form-group row'></div>
                <label class='col-lg-3 col-form-label form-control-label'>Category</label>";
                        echo "<select name='category_sl' id='category_sl' class='form-control'>";
                        while ($lst = mysqli_fetch_array($data["category"]["sp"])) {
                                if($lst['id']==$row["category_id"])
                                {
                                        echo "<option value='" . $lst['id'] . "' selected>" . $lst['name'] . "</option>";
                                }
                                else{
                                        echo "<option value='" . $lst['id'] . "'>" . $lst['name'] . "</option>";
                                }
                        }
                        echo "</select>";
                        echo "<div class='form-group row'></div>
                <div class='col-lg-6 text-center'></div>";
                        echo "<div class='row'>
    <div class='col-md-12 grid-margin stretch-card'>
      <div class='card' style='width:100%'>
        <div class='card-body' style='width:auto;'>
          <h4 class='card-title'>Danh sách chương</h4>
          <p class='card-description'> Các chương truyện</p>
          <table class='table table-hover table-bordered'>
            <thead>
              <tr>
                <th>Name<i class=' icon-book-open'></i></th>
                <th style='text-align: center;'>Action<i  class='icon-settings'></i></th>
              </tr>
            </thead>
            <tbody>";
                        while ($row2 = mysqli_fetch_array($data["source"]["sp"])) {
                                //tên các cột phải trùng với tên cột trong db
                                echo "<tr>
                <td>" . $row2["chapter_number"] . "</td>
                <td style='text-align: center;'>
                    <a href='/BTL/Admin/CrudChapter/View/" . $row["id"] . "/" . $row2["id"] . "/'><i class='icon-eye'></i></a>
                    <a href='/BTL/Admin/CrudChapter/Update/" . $row["id"] . "/" . $row2["id"] . "/'><i class='icon-wrench'></i></a>
                    <a href='/BTL/Admin/CrudChapter/Delete/" . $row["id"] . "/" . $row2["id"] . "'><i class='icon-trash'></i></a>
                </td>
                </tr>";
                        }
                        echo "</tbody>
          </table>
        </div>
      </div>
    </div>
  </div>";
                        if (!empty($data["has_paging"]))
                                echo "<div class='clear-both'></div>
        <a href='/BTL/Admin/CrudChapter/Create/" . $row["id"] . "/0'><i class='icon-plus'></i></a>";

                        include './mvc/views/Admin_pages/partials/pagination.php';

                        if ($data["method"] == "Update") {
                                echo "<input type='button' class='btn btn-primary'  value = 'Save changes' id='update' onclick=\"location.href='/BTL/Admin/UserTable/1'\">";
                        }
                        if ($data["method"] == "Delete") {
                                echo "<span>Bạn có chắc muốn xóa truyện " . $row["name"] . "?</span><br/>";
                                echo "<input type='button' class='btn btn-danger'   value = 'Confirm' onclick=\"location.href='/BTL/Admin/DeleteNovel/" . $row["id"] . "'\">";
                        }
                        echo "<input type='button' class='btn btn-secondary' value='Cancel' onclick=\"location.href='javascript:history.go(-1)'\">";
                }
        }

        ?>
</form>