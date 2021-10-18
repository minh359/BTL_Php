<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Danh sách thành viên</h4>
          <p class="card-description"> Các thành viên đã đăng kí tài khoản
          </p>
          <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th>Username<i class=' icon-user'></i></th>
                <th>Password<i class=' icon-lock'></i></th>
                <th>Name<i class='  icon-user-following'></i></th>
                <th>Date of birth<i class=' icon-calendar'></i></th>
                <th>Email<i class='  icon-envelope-open'></i></th>
                <th style="text-align: center;">Action<i  class='icon-settings'></i></th>
              </tr>
            </thead>
            <tbody>
              <?php
              require_once "./mvc/views/Admin_pages/" . $data["page"] . ".php";
              //cách hiện dữ liệu từ controller ra view

              while ($row = mysqli_fetch_array($data["source"]["sp"])) {
                //tên các cột phải trùng với tên cột trong db
                echo "<tr>
                <td>".$row["username"]."</td>
                <td>".$row["password"]."</td>
                <td>".$row["name"]."</td>
                <td class='text-success'>". $row["dob"]. ".</td>
                <td><label class='badge badge-email'>".$row["email"]."</label></td>
                <td style='text-align: center;'><a href='#'><i class='icon-eye'></i></a>
                    <a href='#'><i class='icon-wrench'></i></a>
                    <a href='/BTL/Admin/DeleteUser/".$row["username"]."'><i class='icon-trash'></i></a>
                </td>
                </tr>";
              }
              ?>
            </tbody>
          </table>
          <?php if (!empty($data["has_paging"])) : ?>
            <div class="clear-both"></div>
            <?php
            include './mvc/views/Admin_pages/partials/pagination.php';
            ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>