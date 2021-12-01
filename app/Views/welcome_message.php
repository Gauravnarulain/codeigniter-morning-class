<?php include('layouts/header.php') ?>
<div class="row">
    <div class="col-12">

        <?= form_open('create'); ?>

        <div class="form-group">
            <lable>Movie Category</lable>
            <input type="text" name="title" id="title" class="form-control" />
        </div>
        <div class="form-group">
            <lable>Release Date</lable>
            <input type="date" name="releasedate" id="releasedate" class="form-control" />
        </div>
        <div class="form-group">
            <lable>Publish Status</lable>
            <select name="status" class="form-control">
                <option>Active</option>
                <option>Inactive</option>
            </select>
        </div>
        <div class="">&nbsp;</div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary btn-sm" name="btnsave" value="Save" />
        </div>
        <div class="">&nbsp;</div>
        <?= form_close(); ?>
    </div>
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