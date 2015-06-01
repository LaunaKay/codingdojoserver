<?php
    session_start();
    date_default_timezone_set('America/Los_Angeles');
    require_once('wallFunctions.php');

    //================ SET VARIABLES ==================
global $connection;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>the wall</title>
    <meta name="description" content="The Wall for Coding Dojo">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/stylesheetWall.css">
	<link rel="icon" type = "image/png" href="img/LK_Favicon.png"
</head>
<body>
    <div id = "header_div">
        <h1>the wall</h1>
        <p class = "light_text">welcome <?= $_SESSION['first_name'] ?></p>
        <form  action = "loggedoff.php" method="POST">
            <input class = "headerBtn" type="submit" value="logoff">
        </form>
    </div>
    <div id = "body_div">
        <form action = 'addMessage.php' method="POST">
            <h1 class = "postTitle">post a message</h1>
            <textarea class = "textArea" placeholder = "type message here" name="message" cols="90" rows="2"></textarea>
            <input class="submitBtn3" type="submit" value="Submit">
        </form>
            <?php
                $displayMessages =
                    "SELECT messages.*, users.first_name, DATE_FORMAT(messages.created, '%M %D, %Y') AS created
                    FROM messages
                    LEFT JOIN users ON messages.user_id = users.id
                    GROUP BY messages.id
                    ORDER BY messages.created desc";
                $resultsMessages = fetch($displayMessages);
                $displayComments =
                    "SELECT comments.*, users.first_name, UNIX_TIMESTAMP(comments.created) as created
                    FROM comments
                    LEFT JOIN users on comments.users_id = users.id
                    ORDER BY comments.created asc";
                $resultsComments = fetch($displayComments);
                foreach($resultsMessages as $message)
                { ?>
                <form>
                    <h3><?= $message['first_name']; ?>  ~~  <?= $message['created']; ?></h3>
                    <h2><?= $message['message']; ?></h2>
                </form>
                <form>
                    <fieldset>
                        <?php
                        foreach($resultsComments as $commentV)
                        {
                            if ($message['id'] == $commentV['messages_id'])
                                {?>
                                <legend>comments</legend>
                                <h3><?=$commentV['first_name'];?>  ~~   <?= gmdate("Y-m-d H:i:s", $commentV['created']);?></h3>
                                <h2 style="color:blue"><?= $commentV['comment']?></h2>
                                     <?php if($commentV['users_id'] == $_SESSION['id'])
                                    {
                                        $currentTime=Time();
                                        $commentTime = $commentV['created'];
                                        $diffTime = round(abs($currentTime - $commentTime)/60,2);
                                        if ($diffTime < 30)
                                        {?>
                                            <form action='delete.php' method = "POST">
                                                <input name="checkbox[]" type="checkbox" value = <?=$commentV['id'];?>
                                                <p>Select checkbox to delete comment</p>
                                                <input id="deleteBtn" type = "submit" value="Delete" />
                                            </form>
                                    <?php }
                                }?>
                            <? }?>

                </form>
                       <? } ?>
                <form action = "addComment.php" method="POST">
                        <h3>Post a comment</h2>
                        <textarea name = "comment" cols="45" rows="3"></textarea>
                        <input class="submitBtn2" type="submit" value= "comment">
                        <input type = "hidden" name = "messagesID" value = <?= $message['id']?> >
                </form>
            </fieldset>
              <?  }?>
          </div>
    </div>
</body>
</html>