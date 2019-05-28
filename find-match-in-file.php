<?php
    function findmatch($string, $file) {
        $matches = array();
        $handle = @fopen($file, "r");
        if ($handle)
        {
            while (!feof($handle))
            {
                $buffer = fgets($handle);
                if(strpos($buffer, $string) !== FALSE)
                    $matches[] = $buffer;
            }
            fclose($handle);
        }
        print_r($matches);
    }
?>
