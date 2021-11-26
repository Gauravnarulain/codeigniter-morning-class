<?php include('layouts/header.php') ?>
<div class="row">
    <div class="col-12">
        <div class="list-group">
            <?php
            if (!empty($genre)) {
                foreach ($genre as $key => $value) {
            ?>
                    <a id="genre<?= $key + 1; ?>" href="<?= base_url('movies') . '/' . $value['id']; ?>" class="list-group-item list-group-item-action"><?= $value['title']; ?></a>
            <?php
                }
            } else {
                echo "No list were found!";
            }
            ?>
        </div>
    </div>
</div>
<?php include('layouts/footer.php') ?>