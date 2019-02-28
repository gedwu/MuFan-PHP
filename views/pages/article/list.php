<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="text-align: left;">
    <div class="thumbnail">
        <img src="<?php echo IMG_ARTICLES; ?><?php echo $article['photo_url']; ?>" class="img-responsive">
        <div class="caption" style="overflow: scroll; height: 194px; max-height: 194px;">
            <h4>
                <?php if (isset($article['video_url'])): ?>
                    <span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span>
                <?php endif; ?>
                <?php echo $article['title']; ?>
            </h4>
            <p>
                <?php echo $article['intro']; ?>
            </p>
        </div>

        <p style="margin-top: 10px; text-align: center;">
            <a href="index.php?page=article_single&id_new=<?php echo $article['id']; ?>" class="btn btn-primary" role="button">
                Straipsnis
            </a>
            <a href="index.php?page=article_single&id_new=<?php echo $article['id']; ?>#comments" class="btn btn-default" role="button">
                Komentarai <span class="badge"><?php echo countArticleComments($pdo, $article['id']); ?></span>
            </a>
        </p>
    </div>
</div>
