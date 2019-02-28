<h2>Naujienos:</h2>
<div class="row articles">
    <?php foreach ($articles as $article): ?>
        <div class="col-sm-6 col-md-3 col-xs-12">
            <div class="thumbnail">
                <img src="<?php echo IMG_ARTICLES; ?><?php echo $article['photo_url']; ?>" alt="" style="width:100%;">
                <div class="caption" style="height: 100px;">
                    <a href="index.php?page=article_single&id_new=<?php echo $article['id']; ?>">
                        <?php echo $article['title']; ?>
                    </a>
                    <br>
                    <div style="text-align: center;"><?php echo substr($article['created_at'], 0, 16); ?></div>
                </div>

            </div>
        </div>
    <?php endforeach; ?>
</div>