<form>
  
  <?php
              require_once "./mvc/views/Admin_pages/" . $data["page"] . ".php";
              //cách hiện dữ liệu từ controller ra view

              while ($row = mysqli_fetch_array($data["source"]["sp"])) {
                //tên các cột phải trùng với tên cột trong db
                echo "<div class='form-group row'></div>
                <label class='col-lg-3 col-form-label form-control-label'>Username</label>
                <div class='col-lg-3'></div>
                <input class='form-control' type='text' value='".$row["username"]."'>";
                echo "<div class='form-group row'></div>
                <label class='col-lg-3 col-form-label form-control-label'>Password</label>
                <div class='col-lg-3'></div>
                <input class='form-control' type='password' value='".$row["password"]."' disabled>";
                echo "<div class='form-group row'></div>
                <label class='col-lg-3 col-form-label form-control-label'>Name</label>
                <div class='col-lg-3'></div>
                <input class='form-control' type='text' value='".$row["name"]."'>";
                echo "<div class='form-group row'></div>
                <label class='col-lg-3 col-form-label form-control-label'>Date of birth </label>
                <div class='col-lg-3'></div>
                <input class='form-control' type='date' value='".$row["dob"]."'>";
                echo "<div class='form-group row'></div>
                <label class='col-lg-3 col-form-label form-control-label'>Email</label>
                <div class='col-lg-3'></div>
                <input class='form-control' type='email' value='".$row["email"]."'>";
                echo "<div class='form-group row'></div>
                <div class='col-lg-6 text-center'></div>
                  <input type='reset' class='btn btn-secondary' value='Cancel'>
                  <input type='button' class='btn btn-primary' type='button' class='btn btn-primary' value = 'Save changes'     >";
              }
              ?>
</form>