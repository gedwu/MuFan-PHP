<div id="blogs">
    KRAUNASI...
</div>
<!-------------------------------------------------------------------------->
<script type="text/javascript">
    function reloadBlogs() {
        $.ajax({
            url: 'index.php?page=blog_ajax',
            dataType: 'json',
            type: 'POST',
            global: true,
            timeout: 50000,
            success: function (json) {
                var html = '';
                for (var i = 0; i < json.list.length; i++) {
                    var blog = json.list[i];
                    html += '<div class="panel panel-default">';
                    html += '<div class="panel-heading">';
                    html += '<h3 class="panel-title text-left">';
                    html += '<p>'+blog.title+'</p>';
                    html += '</h3>';
                    html += '</div/>';
                    html += '<div class="panel-body">';
                    html += ' Autorius: <span style="color: #d34615;">'+blog.username+'</span>';
                    html += '<span class="glyphicon glyphicon-arrow-up rating-up" style="color: green;" aria-hidden="true" data-id="'+blog.id+'">'+blog.up+'</span><span class="glyphicon glyphicon-arrow-down rating_down" data-id="'+blog.id+'" style="color: red;" aria-hidden="true">'+blog.down+'</span>';
                    <?php if(!empty($user) && $user['admin']): ?>
                    html += '<br><a href="#" class="delete-blog" data-id="'+blog.id+'">x</a>';
                    <?php endif; ?>
                    html += '<p>'+blog.content+'</p>';
                    html += '<em>'+blog.created_at+'</em>';
                    html += '</div>';
                    html += '</div>';
                    html += '<br><br>';
                }
                $('#blogs').html(html);
            },
            error: function (error) {
                console.log(error)
            }
        });
    }

    reloadBlogs();

    $( "body" ).on( "click", ".rating-up", function(e) {
        e.preventDefault();
        var blogId = $(this).attr("data-id")
        $.ajax({
            url: 'index.php?page=ratings_add',
            data: { blog_id: blogId, rating: 'blog_up' },
            dataType: 'json',
            type: 'POST',
            global: true,
            timeout: 5000,
            success: function (json) {
                reloadBlogs();
            },
            error: function (error) {
                console.log(error)
            }
        });
    });

    $( "body" ).on( "click", ".rating_down", function(e) {
        e.preventDefault();

        var blogId = $(this).attr("data-id")

        $.ajax({
            url: 'index.php?page=ratings_add',
            data: { blog_id: blogId, rating: 'blog_down' },
            dataType: 'json',
            type: 'POST',
            global: true,
            timeout: 5000,
            success: function (json) {
                reloadBlogs();
            },
            error: function (error) {
                console.log(error)
            }
        });
    });

    $( "body" ).on( "click", ".delete-blog", function(e) {
        e.preventDefault();
        var blogId = $(this).attr("data-id")

        $.ajax({
            url: 'index.php?page=blogs_delete',
            data: { blog_id: blogId },
            dataType: 'json',
            type: 'POST',
            global: true,
            timeout: 5000,
            success: function (json) {
                reloadBlogs();
            },
            error: function (error) {
                console.log(error)
            }
        });
    });

</script>