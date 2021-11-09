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
                <th>id<i class=' icon-user'></i></th>
                <th >Name<i class=' icon-lock'></i></th>
                <th >Description<i class='  icon-user-following'></i></th>
                <th >Avatar<i class=' icon-calendar'></i></th>
                <th >State<i class='  icon-envelope-open'></i></th>
                <th >Post date<i class='  icon-user-following'></i></th>
                <th >Author<i class=' icon-calendar'></i></th>
                <th >Category<i class='  icon-envelope-open'></i></th>
                <th >Action<i  class='icon-settings'></i></th>
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
                <td>".substr($row["name"],0,30)." ...</td>
                <td>".substr($row["description"],0,30)." ...</td>
                <td><img src='".$row["avatar"]."'></td>
                <td>".$row["state"]."</td>
                <td>".$row["post_date"]."</td>
                <td class='text-success'>". $row["author_id"]. ".</td>
                <td><label class='badge badge-email'>".$row["category_id"]."</label></td>
                <td style='text-align: center;'>
                    <a href='/BTL/Admin/CrudNovel/View/".$row["id"]."/1'><i class='icon-eye'></i></a>
                    <a href='/BTL/Admin/CrudNovel/Update/".$row["id"]."/1'><i class='icon-wrench'></i></a>
                    <a href='/BTL/Admin/CrudNovel/Delete/".$row["id"]."/1'><i class='icon-trash'></i></a>
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