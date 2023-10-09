<?php
include_once "db.php";

$date = new DateTime('+1 day');
setcookie("token", time(), $date->getTimestamp());

$db = new DB();

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    // $comment = htmlspecialchars($_POST['comment'], ENT_QUOTES);
    $comment = $_POST['comment'];

    if($db->insert($name, $email, $comment)) {
        header("Location:XSS.php");
    }else {
        echo "<script>alert('Comment Fail');</script>";
    }
}else{
    $comments = $db->getAllComment();
}
?>

<style>
    .wrapper{
        width: 500px;
        height: 600px;
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        top: 0;
        margin: auto;
        border: 1px solid navy;
        padding: 20px;
    }

    form{
        width: inherit;
    }

    textarea,input:not([type="submit"]){
        display: block;
        width: inherit;
        padding: 10px;
    }

    input[type="submit"]{
        background: blue;
        padding: 10px;
        border: none;
        color: white;
        font-size: 15px;
        float: right;
    }

    label{
        display: block;
    }

    .pannel{
        background: lightblue;
        height: 155px;
        overflow: auto;
    }

    ul{
        list-style: none;
        padding: 0;
    }

    li{
        border-bottom: 1px solid darkblue;
        padding: 10px 0;
    }

    li> span{
        padding-left: 20px;
    }

    .clear{
        clear: both;
    }

    h1{
        text-align: center;
        color: skyblue;
    }
</style>

<div class="wrapper">
    <h1>Comment Below</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" autocomplete="off">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="enter your name">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="enter your email">
        <label for="comment">Comment</label>
        <textarea name="comment" id="comment" rows="10"></textarea>
        <input type="submit" value="Comment">
        <div class="clear"></div>
    </form>

    <div class="pannel">
        <ul>
            <?php foreach($comments as $comment): ?>
            <li>
                <span><?php echo $comment->name; ?></span>
                <span><?php echo $comment->comment; ?></span>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>