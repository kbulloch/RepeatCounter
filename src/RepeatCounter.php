<?php

    class RepeatCounter
    {
        function countRepeats($main, $query)
        {
            //make parameters globals so they can be used in the results page
            $main = $GLOBALS['the_string'];
            $query = $GLOBALS['the_query'];

            //ignore case sensitivity
            $main = strtolower($main);
            $query = strtolower($query);

            //seperate words delimited by spaces into an array
            $main_words = explode(" ", $main);

            //keep track of number of repeats
            $num_repeats = 0;

            //look at each word one by one for a match
            foreach($main_words as $my_word){
                //increment repeat count when match found
                if($query == $my_word){
                    ++$num_repeats;
                }
            }

            return "Repeats: " . $num_repeats;
        }
    }
?>
