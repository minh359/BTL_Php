<head>
    <style>
body{
                font-family: arial;
            }
            .container{
                width: 1200px;
                margin: 0 auto;
            }
            h1{
                text-align: center;
            }
            .product-items{
                border: 1px solid #ccc;
                padding: 30px;
            }
            .product-item{
                float: left;
                width: 23%;
                margin: 1%;
                padding: 10px;
                box-sizing: border-box;
                border: 1px solid #ccc;
                line-height: 26px;
            }
            .product-item label{
                font-weight: bold;
            }
            .product-item p{
                margin: 0;
                line-height: 26px;
                max-height: 52px;
                overflow: hidden;
            }
            .product-price{
                color: red;
                font-weight: bold;
            }
            .product-img{
                padding: 5px;
                border: 1px solid #ccc;
                margin-bottom: 5px;
            }
            .product-item img{
                max-width: 100%;
            }
            .product-item ul{
                margin: 0;
                padding: 0;
                border-right: 1px solid #ccc;
            }
            .product-item ul li{
                float: left;
                width: 33.3333%;
                list-style: none;
                text-align: center;
                border: 1px solid #ccc;
                border-right: 0;
                box-sizing: border-box;
            }
            .clear-both{
                clear: both;
            }
            a{
                text-decoration: none;
            }
            .buy-button{
                text-align: right;
                margin-top: 10px;
            }
            .buy-button a{
                background: #444;
                padding: 5px;
                color: #fff;
            }
            #pagination{
                text-align: right;
                margin-top: 15px;
            }
            .page-item{
                border: 1px solid #ccc;
                padding: 5px 9px;
                color: #000;
            }
            .current-page{
                background: #000;
                color: #FFF;
            }
    </style>
</head>
<div id="pagination">
<?php
if ($data["source"]["currentPage"] > 3) {
    $first_page = 1;
    ?>
    <a class="page-item" href="/BTL/<?=$data["func"]?>/<?= $first_page ?>">First</a>
    <?php
}
if ($data["source"]["currentPage"] > 1) {
    $prev_page = $data["source"]["currentPage"] - 1;
    ?>
    <a class="page-item" href="/BTL/<?=$data["func"]?>/<?= $prev_page ?>">Prev</a>
<?php }
?>
<?php for ($num = 1; $num <= $data["source"]["totalPages"]; $num++) { ?>
    <?php if ($num != $data["source"]["currentPage"]) { ?>
        <?php if ($num > $data["source"]["currentPage"] - 3 && $num < $data["source"]["currentPage"] + 3) { ?>
            <a class="page-item" href="/BTL/<?=$data["func"]?>/<?= $num ?>"><?= $num ?></a>
        <?php } ?>
    <?php } else { ?>
        <strong class="current-page page-item"><?= $num ?></strong>
    <?php } ?>
<?php } ?>
<?php
if ($data["source"]["currentPage"] < $data["source"]["totalPages"] - 1) {
    $next_page = $data["source"]["currentPage"] + 1;
    ?>
    <a class="page-item" href="/BTL/<?=$data["func"]?>/<?= $next_page ?>">Next</a>
<?php
}
if ($data["source"]["currentPage"] < $data["source"]["totalPages"] - 3) {
    $end_page = $data["source"]["totalPages"];
    ?>
    <a class="page-item" href="/BTL/<?=$data["func"]?>/<?= $end_page ?>">Last</a>
    <?php
}
?>
</div>