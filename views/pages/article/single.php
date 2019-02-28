<div class="panel panel-default">
    <div class="panel-body">
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-5">
                <img class="img-responsive" src="<?php echo IMG_ARTICLES; ?><?php echo $item['photo_url']; ?>">
            </div>
            <div class="col-xs-12 col-sm-7">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="media-heading"><?php echo $item['title']; ?></h1>
                    </div>
                </div>
            </div>
            <?php echo $item['content']; ?>
            <?php if (isset($item['video_url']) && !empty($item['video_url'])): ?>
                <div class="text-center" style="padding-top: 20px;">
                    <iframe width="720" height="405" src="<?php echo $item['video_url']; ?>" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            <?php endif; ?>
            <!---------------------------------------------------------------------------------------------->
            <div class="col-xs-12">
                <?php if(!empty($user)): ?>
                <hr />
                    <form method="post" action="index.php?page=comments_add" id="add-comment">
                    <div class="form-group">
                        <label for="comment">Komentuoti</label>
                        <textarea class="form-control" name="comment" placeholder="tekstas..."></textarea>
                        <input type="hidden" name="article_id" value="<?php echo $item['id']; ?>" />
                    </div>
                    <button type="submit" class="btn btn-default">Komentuoti</button>
                </form>
                <?php endif; ?>
<!---------------------------------------------------------------------------------------------->
                <hr />
                <h3>Komentarai</h3>

                <div id="comments">
                    KRAUNASI...
                </div>
            </div>
        </div>
    </div>
</div>
<!---------------------------------------------------------------------------------------------->
<script type="text/javascript">
    function reloadComments() {
        $.ajax({
            url: 'index.php?page=comments_list&article_id=<?php echo $item['id']; ?>',
            dataType: 'json',
            type: 'POST',
            global: true,
            timeout: 50000,
            success: function (json) {
                var html = '';
                for (var i = 0; i < json.list.length; i++) {
                    var comment = json.list[i];
                    html += '<blockquote>';
                    html += '<p>'+comment.content+'</p>';
                    html += '<p><span class="glyphicon glyphicon-arrow-up rating-up" style="color: green;" aria-hidden="true" data-id="'+comment.id+'">'+comment.up+'</span><span class="glyphicon glyphicon-arrow-down rating_down" data-id="'+comment.id+'" style="color: red;" aria-hidden="true">'+comment.down+'</span></p>';
                    html += '<footer>'+comment.username+'</footer>';

                    <?php if(!empty($user) && $user['admin']): ?>
                    html += '<a href="#" class="delete-comment" data-id="'+comment.id+'">x</a>';
                    <?php endif; ?>

                    html += '</blockquote>';
                }
                $('#comments').html(html);
            },
            error: function (error) {
                console.log(error)
            }
        });
    }
    reloadComments();

    $('#add-comment').submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: 'index.php?page=comments_add',
            data: $('#add-comment').serialize(),
            dataType: 'json',
            type: 'POST',
            global: true,
            timeout: 50000,
            success: function (json) {
                reloadComments();
            },
            error: function (error) {
                console.log(error)
            }
        });
    });

    $( "body" ).on( "click", ".rating-up", function(e) {
        e.preventDefault();

        var commentId = $(this).attr("data-id")
        $.ajax({
            url: 'index.php?page=ratings_add',
            data: { comment_id: commentId, rating: 'up' },
            dataType: 'json',
            type: 'POST',
            global: true,
            timeout: 5000,
            success: function (json) {
                reloadComments();
            },
            error: function (error) {
                console.log(error)
            }
        });
    });

    $( "body" ).on( "click", ".rating_down", function(e) {
        e.preventDefault();

        var commentId = $(this).attr("data-id")

        $.ajax({
            url: 'index.php?page=ratings_add',
            data: { comment_id: commentId, rating: 'down' },
            dataType: 'json',
            type: 'POST',
            global: true,
            timeout: 5000,
            success: function (json) {
                reloadComments();
            },
            error: function (error) {
                console.log(error)
            }
        });
    });

    $( "body" ).on( "click", ".delete-comment", function(e) {
        e.preventDefault();
        var commentId = $(this).attr("data-id")

        $.ajax({
            url: 'index.php?page=comments_delete',
            data: { comment_id: commentId },
            dataType: 'json',
            type: 'POST',
            global: true,
            timeout: 5000,
            success: function (json) {
                reloadComments();
            },
            error: function (error) {
                console.log(error)
            }
        });
    });
</script>