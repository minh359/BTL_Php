<form class="crud" method='POST' action=<?php $_SERVER['PHP_SELF'] ?> name="form_user" onsubmit="sm_user(event)">
  
  <?php
              require_once "./mvc/views/Admin_pages/" . $data["page"] . ".php";
              //cách hiện dữ liệu từ controller ra view
              if($data["method"]=='Create')
              {
                echo "<div class='form-group row'></div>
                <label class='col-lg-3 col-form-label form-control-label'>Username</label>
                <div class='col-lg-3'></div>
                <input class='form-control' id='username' type='text' >";
                echo "<div class='form-group row'></div>
                <label class='col-lg-3 col-form-label form-control-label'>Password</label>
                <div class='col-lg-3'></div>
                <input class='form-control' id='password' type='password' >";
                echo "<div class='form-group row'></div>
                <label class='col-lg-3 col-form-label form-control-label'>Name</label>
                <div class='col-lg-3'></div>
                <input class='form-control' id='name' type='text' >";
                echo "<div class='form-group row'></div>
                <label class='col-lg-3 col-form-label form-control-label'>Date of birth </label>
                <div class='col-lg-3'></div>
                <input class='form-control'id='dob' type='date' >";
                echo "<div class='form-group row'></div>
                <label class='col-lg-3 col-form-label form-control-label'>Email</label>
                <div class='col-lg-3'></div>
                <input class='form-control' id='email' type='email' >";
                echo "<div class='form-group row'></div>
                <div class='col-lg-6 text-center'></div>";   
                // echo "<input type='button' class='btn btn-primary'   value = 'Create' onclick=\"location.href='/BTL/Admin/CreateUser/".$data["source"]["username"]."/".md5($data["source"]["password"])."/".$data["source"]["name"]."/".$data["source"]["dob"]."/".$data["source"]["email"]."'\">";    
                echo "<input type='button' class='btn btn-primary'   value = 'Create' id='create_user' onclick=\"location.href='/BTL/Admin/UserTable/1'\">";      
                echo "<input type='button' class='btn btn-secondary' value='Cancel' onclick=\"location.href='javascript:history.go(-1)'\">";
                
              }
              else
              {
                while ($row = mysqli_fetch_array($data["source"]["sp"])) {
                  //tên các cột phải trùng với tên cột trong db
                  echo "<div class='form-group row'></div>
                  <label class='col-lg-3 col-form-label form-control-label'>Username</label>
                  <div class='col-lg-3'></div>
                  <input class='form-control' type='text' value='".$row["username"]."' id='username' disabled>";
                  echo "<div class='form-group row'></div>
                  <label class='col-lg-3 col-form-label form-control-label'>Password</label>
                  <div class='col-lg-3'></div>
                  <input class='form-control' type='password' value='".$row["password"]."' id='password'>";
                  echo "<div class='form-group row'></div>
                  <label class='col-lg-3 col-form-label form-control-label'>Name</label>
                  <div class='col-lg-3'></div>
                  <input class='form-control' type='text' value='".$row["name"]."' id='name'>";
                  echo "<div class='form-group row'></div>
                  <label class='col-lg-3 col-form-label form-control-label'>Date of birth </label>
                  <div class='col-lg-3'></div>
                  <input class='form-control' type='date' value='".date($row["dob"])."' id='dob'>";
                  echo "<div class='form-group row'></div>
                  <label class='col-lg-3 col-form-label form-control-label'>Email</label>
                  <div class='col-lg-3'></div>
                  <input class='form-control' type='email' value='".$row["email"]."' id='email'>";
                  echo "<div class='form-group row'></div>
                  <div class='col-lg-6 text-center'></div>";
                  if($data["method"]=="Update")
                  {
                    echo "<input type='button' class='btn btn-primary'  value = 'Save changes' id='update_user' onclick=\"location.href='/BTL/Admin/UserTable/1'\">";
                  }  
                  if($data["method"]=="Delete")
                  {
                    echo "<span>Bạn có chắc muốn xóa tài khoản ".$row["username"]."?</span><br/>";
                    echo "<input type='button' class='btn btn-danger'   value = 'Confirm' onclick=\"location.href='/BTL/Admin/DeleteUser/".$row["username"]."'\">";
                  } 
                  echo "<input type='button' class='btn btn-secondary' value='Cancel' onclick=\"location.href='javascript:history.go(-1)'\">";
                  
                }
              }
              
              ?>
</form>
