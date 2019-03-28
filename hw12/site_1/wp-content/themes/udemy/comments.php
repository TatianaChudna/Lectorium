<div class="comment-wrap">
    <?php
    foreach ($comments as $comment) {
        ?>
      <h4><a href="<?php comment_author_url(); ?>"><?php comment_author(); ?></a> -
        <small><?php comment_date(); ?></small>
      </h4>
      <div class="comment-body">
        <p><?php comment_text(); ?></p>
      </div><!--comment-body-->
        <?php
    }
    ?>
</div>

<?php
if (comments_open()) {
?>
    <h4>Leave the comments</h4>
    <form action="<?php echo site_url( 'wp-comments-post.php'); ?>" method="post" id="comments-form">
        <input type="hidden" name="comment_post_ID" value="<?php echo $post->ID; ?>" id="comment_post_ID">
        <div class="form-group">
            <label>Name / Alias (required)</label>
            <input type="text" name="author" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Email Address / Alias (required, not show)</label>
            <input type="text" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Website / (optional)</label>
            <input type="text" name="url" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Comment</label>
            <textarea name="comment" id="" cols="60" rows="7" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add Comment</button>
        </div>
    </form>
<?php
}else{
    _e( 'Comments are closed', 'udemy');
}