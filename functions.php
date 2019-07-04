<?php
    // FUNCTIONS.PHP

    function checkForClickBait() {
        // get value from textarea using $_POST
        // make all letters lowercase using strtolower() function
        $clickBait = strtolower( $_POST["clickbait_headline"] );

        // array of clickbait-sounding words or phrases
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

        //  array of replacement words or phrases with the same index as the origin word
        $b = array(
                "so-called scientists",
                "so-called doctors",
                "aren't threatened by",
                "average",
                "completely normal",
                "ineffective",
                "method",
                "is no different than the others",
                "you won't really be surprised by",
                "slightly improve",
                "boring",
                "normal"
            );

        // use the str_replace() function to replace the words
        $honestHeadline = str_replace( $a, $b, $clickBait );
        
        // return an array of the headlines
        return array($clickBait, $honestHeadline);
    }

    function displayHonestHeadline( $x, $y ) {
        if($y == $x){
            echo "<div class='alert alert-danger' role='alert'>Ooops, '".ucwords($x)."' could not be made honest. Try again with the lited words</div> ";

        }else{
                        // use ucwords() function to uppercase first letter in every word
            // echo the variable on the screen
            echo "<strong class='text-danger'>Original Headline:</strong><h4>".ucwords($x)."</h4><hr>";

            // echo the honest headline on the screen
            echo "<strong class='text-success'>Honest Headline:</strong><h4>".ucwords($y)."</h4>";
        }

    }

?>


















