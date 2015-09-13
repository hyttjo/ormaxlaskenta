<?php
    $description = "näyttää kaikki $table";
    
    if (isset($_GET["column"]) && isset($_GET["input"]) && $column != '' && $input != '' && $logic == 'is') {
        $description = "näyttää $table joissa $column on '$input'";
    }
    if ($logic == "not") { 
        $description = "näyttää $table joissa $column ei ole '$input'";
    }
    if ($logic == "include") {
        $description = "näyttää $table joissa $column sisältää '$input'";
    }
    if ($logic == "null") {
        $description = "näyttää $table joissa $column on tyhjä";
    }

    function GetYearsDescription($years) {
        $year_now = date("Y");
        $years_to_2010 = $year_now - 2010;

        if (min($years) == "2010" && count($years) > 5) {
            return "";
        } else if (count($years) > 1 && count($years) == (max($years) - min($years))) {
            $years_text = " vuosilta ";
            for ($i = 0; $i < count($years); $i++) {
                if ($i == count($years) - 1) {
                    $years_text .= $years[$i];
                } else if ($i == count($years) - 2) { 
                    $years_text .= $years[$i] . " ja ";
                } else {
                    $years_text .= $years[$i] . ", ";
                }
            }
            return $years_text;
        } else if (count($years) > 1) {
            return " vuosilta " . max($years) . "-" . min($years);
        } else {
            return " vuodelta $years[0]";
        }
    }
?>