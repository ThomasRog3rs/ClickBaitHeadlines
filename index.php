<?php
    define( "TITLE", "Honest Click Bait Headlines" );
    include("functions.php");

    if( isset( $_POST["fix_submit"] ) ) {
        checkForClickBait();
    }

    $a = array(
        "scientists",
        "doctors",
        "hate",
        "stupid",
        "weird",
        "simple",
        "trick",
        "shocked me",
        "you'll never believe",
        "hack",
        "epic",
        "unbelievable"
    );
?>

<!DOCTYPE html>

<html>

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo TITLE; ?></title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body>
        <div class="container mt-5">
            <h1><?php echo TITLE; ?></h1>
            <p class="lead">Hate click bait? Turn those annoying headlines into realistic and honest ones using this simple program.</p>
            
            <div class="row border p-3 mb-3">
                <form class="col-sm-8 col-sm-offset-2" action="" method="post">
                    <textarea placeholder="Paste click bait headline here" class="form-control input-lg mb-2" name="clickbait_headline"></textarea>
                    <button type="submit" class="btn btn-primary btn-lg pull-right mb-2" name="fix_submit">Make honest!</button>

                </form>
            </div>
            <?php
            if ( isset( $_POST["fix_submit"] ) ) {
                
                // get the clickBait headline
                $clickBait = checkForClickBait()[0];
                
                // get the honestHeadline
                $honestHeadline = checkForClickBait()[1];
                
                // pass two arguments in the function
                displayHonestHeadline( $clickBait, $honestHeadline );

                unset($_POST["fix_submit"]);
            }
            ?>

            <br>
            <div class="border p-3">
                <h5>Words you can use:</h5>
                <ul>
                    <?php foreach($a as $word){
                        echo '<li>'.$word.'</li>';
                    }?>
                </ul>
            </div>

        </div>
        <!-- Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>






























