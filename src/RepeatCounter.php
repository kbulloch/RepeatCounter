<?php

    class RepeatCounter
    {
        function countRepeats($main, $query)
        {
            //ignore case sensitivity
            $main = strtolower($main);
            $query = strtolower($query);

            //seperate words delimited by spaces into an array
            $main_words = explode(" ", $main);

            //keep track of number of repeats
            $num_repeats = 0;

            //look at each word one by one for a match
            foreach($main_words as $my_word){
                
            }

            if($query == $main){
                return "Repeats: 1";
            }
            else {
                return "Repeats: 0";
            }
        }
    }
?>
