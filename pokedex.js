<!DOCTYPE html>
<html lang="english">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pokedex</title>

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
             <script src="//code.jquery.com/jquery.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $.get("http://pokeapi.co/api/v1/pokemon/1/", function(res) {
                    console.log(res);
                }, "json");
            });
        </script>
    </head>
    <body>
        <div class="container-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row-fluid">
                for($i=1; $i<=151; $i++)
                <div class="col-sm-1">
                    <img src="http://pokeapi.co/media/img/<?=$i?>.png" class="img-responsive" alt="Image">
                </div>
                <?php } ?>
            </div.
        </div>
        </div>
    </body>
</html>