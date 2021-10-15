<div id="pagination">
<?php
if ($data["source"]["currentPage"] > 3) {
    $first_page = 1;
    ?>
    <a class="page-item" href="/BTL/<?=$data["func"]?>/<?= $data["source"]["item_per_page"] ?>/<?= $first_page ?>">First</a>
    <?php
}
if ($data["source"]["currentPage"] > 1) {
    $prev_page = $data["source"]["currentPage"] - 1;
    ?>
    <a class="page-item" href="/BTL/<?=$data["func"]?>/<?= $data["source"]["item_per_page"] ?>/<?= $prev_page ?>">Prev</a>
<?php }
?>
<?php for ($num = 1; $num <= $data["source"]["totalPages"]; $num++) { ?>
    <?php if ($num != $data["source"]["currentPage"]) { ?>
        <?php if ($num > $data["source"]["currentPage"] - 3 && $num < $data["source"]["currentPage"] + 3) { ?>
            <a class="page-item" href="/BTL/<?=$data["func"]?>/<?= $data["source"]["item_per_page"] ?>/<?= $num ?>"><?= $num ?></a>
        <?php } ?>
    <?php } else { ?>
        <strong class="current-page page-item"><?= $num ?></strong>
    <?php } ?>
<?php } ?>
<?php
if ($data["source"]["currentPage"] < $data["source"]["totalPages"] - 1) {
    $next_page = $data["source"]["currentPage"] + 1;
    ?>
    <a class="page-item" href="/BTL/<?=$data["func"]?>/<?= $data["source"]["item_per_page"] ?>/<?= $next_page ?>">Next</a>
<?php
}
if ($data["source"]["currentPage"] < $data["source"]["totalPages"] - 3) {
    $end_page = $data["source"]["totalPages"];
    ?>
    <a class="page-item" href="/BTL/<?=$data["func"]?>/<?= $data["source"]["item_per_page"] ?>/<?= $end_page ?>">Last</a>
    <?php
}
?>
</div>