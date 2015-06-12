<!DOCTYPE html>
<html>
  <head>
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  </head>

  <body>
    <div class="container">
        <div id="posts">
            <h1>Welcome to My Posts</h1>
            <?php foreach($posts as $post)
            { ?>
                <div class="row">
                  <div class="col s12 m5">
                    <div class="card-panel teal">
                      <p class="white-text"><?= $post['description'];?>
                      </p>
                    </div>
                  </div>
                </div>
            <?php } ?>
        </div>
        <div id="postform">
            <div class="row">
                <form class="col s12" action="Posts/addMessage" method="POST">
                  <div class="row">
                    <div class="input-field col s12">
                        <i class="mdi-editor-mode-edit prefix"></i>
                      <textarea name="description" id="postformtext" class="materialize-textarea"></textarea>
                      <label for="description">Add a Note:</label>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit">post-it
                    <i class="mdi-content-send right"></i>
                  </button>
                  </div>
                </form>
            </div>
        </div>
    </div>


    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>

