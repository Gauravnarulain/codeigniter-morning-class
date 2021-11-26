<?= view('layouts/header') ?>
<div class="row">
    <div class="col-12">
        <h3>Movie list here</h3>
        <div class="list-group">
            <?php
            if (!empty($movie_list)) {
                foreach ($movie_list as $key => $value) {
            ?>
                    <a id="movie<?= $key + 1; ?>" href="<?= base_url('movies') . '/' . $value['id']; ?>" class="list-group-item list-group-item-action"><?= $value['title']; ?></a>
            <?php
                }
            } else {
                echo "No movie list were found";
            }

            ?>
        </div>
    </div>
</div>
<?= view('layouts/footer'); ?>