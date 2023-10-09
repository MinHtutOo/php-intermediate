<?php
session_start();
?>

<style>
    input,textarea{
        display: block;
        margin-bottom: 2px;
    }
</style>

<form action="post.php" method="post">
    <input type="hidden" name="_token" value="<?php echo $_SESSION["_token"]; ?>">
    <input type="text" name="name" id="name">
    <input type="email" name="email" id="email">
    <textarea name="comment" id="comment" rows="10"></textarea>
    <input type="submit" value="Comment">
</form>
