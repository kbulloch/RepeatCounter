<?php

    class RepeatCounter
    {
        function countRepeats($main, $query)
        {
            $main = strtolower($main);
            $query = strtolower($query);

            if($query == $main){
                return "Repeats: 1";
            }
            else {
                return "Repeats: 0";
            }
        }
    }
?>
