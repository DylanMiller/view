<?php
        require_once(__DIR__ . "/../model/config.php");
?>

<h1>Create blog post</h1>

<form method="post" action=""<?php echo $path . "controller/create-post.php";?> >
    <div>
        <label for="title">Title: </label>
        <input type="text" name="title"/>    
    </div><!this is a textbox for post title!>
    
    <div>
        <label for="post">Post: </label>
        <textarea name="post"></textarea>
    </div><!this is a textbox for the actual post!>
    
    <div>
        <button type="submit">submit</button>
    </div><!this is a button for submitting text!>
    
</form>
