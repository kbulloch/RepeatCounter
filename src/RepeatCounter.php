<?php

    class RepeatCounter
    {
        function countRepeats($phrase, $query)
        {
            //trim whitespace
            $query = trim($query);

            //make parameters globals so they can be used in the results page
            $GLOBALS['the_string'] = $phrase;
            $GLOBALS['the_query'] = $query;

            //ignore case sensitivity
            $phrase = strtolower($phrase);
            $query = strtolower($query);

            //seperate words delimited by spaces into an array
            $phrase_words = explode(" ", $phrase);

            //keep track of number of repeats
            $num_repeats = 0;

            //look at each word one by one for a match
            foreach($phrase_words as $my_word){
                //increment repeat count when match found
                if($query == $my_word){
                    ++$num_repeats;
                }
            }

            return "Repeats: " . $num_repeats;
        }
    }
?>
