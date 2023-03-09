<?php

// checks if you as a user are logged in 
if(post_password_required()) {
    return;
}

?>

<div id="comments" class="comments-area">

    <?php comment_form() ?>

</div>

