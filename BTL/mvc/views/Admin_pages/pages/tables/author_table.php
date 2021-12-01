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
            white-space: nowrap;
        }

        table.with-ellipsis td {
            text-overflow: ellipsis;
        }
    </style>
</head>
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Danh sách tác giả</h4>
          <p class="card-description"> Các tác giả
          </p>
          <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th>id<i class=' icon-user'></i></th>
                <th >Name<i class=' icon-lock'></i></th>
                <th >Action<i  class='icon-settings'></i></th>
              </tr>
            </thead>
            <tbody>
              <?php
              require_once "./mvc/views/Admin_pages/" . $data["page"] . ".php";
              //cách hiện dữ liệu từ controller ra view
              while ($row = mysqli_fetch_array($data["source"]["sp"])) {
                //tên các cột phải trùng với tên cột trong db
                echo "<tr>
                <td><label class='badge badge-email'>".$row["id"]."</label></td>
                <td>".substr($row["name"],0,30)." ...</td>
                <td style='text-align: center;'>
                    <a href='/BTL/Admin/CrudAuthor/View/".$row["id"]."'><i class='icon-eye'></i></a>
                    <a href='/BTL/Admin/CrudAuthor/Update/".$row["id"]."'><i class='icon-wrench'></i></a>
                    <a href='/BTL/Admin/CrudAuthor/Delete/".$row["id"]."'><i class='icon-trash'></i></a>
                </td>
                </tr>";
              }
              ?>
              
            </tbody>
          </table>
          <a href='/BTL/Admin/CrudAuthor/Create/0'><i class='icon-plus'></i></a>
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