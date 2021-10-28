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
          <h4 class="card-title">Danh sách tiểu thuyết</h4>
          <p class="card-description"> Các truyện được đăng trên web
          </p>
          <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th style="width:50px">id<i class=' icon-user'></i></th>
                <th style="width:150px">Name<i class=' icon-lock'></i></th>
                <th style="width:50px">Description<i class='  icon-user-following'></i></th>
                <th style="width:50px">Avatar<i class=' icon-calendar'></i></th>
                <th style="width:50px">State<i class='  icon-envelope-open'></i></th>
                <th style="width:50px">Post date<i class='  icon-user-following'></i></th>
                <th style="width:50px">Author<i class=' icon-calendar'></i></th>
                <th style="width:50px">Category<i class='  icon-envelope-open'></i></th>
                <th style="text-align: center;">Action<i  class='icon-settings'></i></th>
              </tr>
            </thead>
            <tbody>
              <?php
              require_once "./mvc/views/Admin_pages/" . $data["page"] . ".php";
              //cách hiện dữ liệu từ controller ra view
              if(isset($data["result"]))
              {
                echo $data["result"];
              }
              while ($row = mysqli_fetch_array($data["source"]["sp"])) {
                //tên các cột phải trùng với tên cột trong db
                echo "<tr>
                <td><label class='badge badge-email'>".$row["id"]."</label></td>
                <td>".$row["name"]."</td>
                <td>".$row["description"]."</td>
                <td>".$row["avatar"]."</td>
                <td>".$row["state"]."</td>
                <td>".$row["post_date"]."</td>
                <td class='text-success'>". $row["author_id"]. ".</td>
                <td><label class='badge badge-email'>".$row["category_id"]."</label></td>
                <td style='text-align: center;'>
                    <a href='/BTL/Admin/CrudUser/View/".$row["id"]."/'><i class='icon-eye'></i></a>
                    <a href='/BTL/Admin/CrudUser/Update/".$row["id"]."/'><i class='icon-wrench'></i></a>
                    <a href='/BTL/Admin/CrudUser/Delete/".$row["id"]."'><i class='icon-trash'></i></a>
                </td>
                </tr>";
              }
              ?>
            </tbody>
          </table>
          <?php if (!empty($data["has_paging"])) : ?>
            <div class="clear-both"></div>
            <a href='/BTL/Admin/CrudUser/Create/0'><i class='icon-plus'></i></a>
            <?php
            include './mvc/views/Admin_pages/partials/pagination.php';
            ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div> 