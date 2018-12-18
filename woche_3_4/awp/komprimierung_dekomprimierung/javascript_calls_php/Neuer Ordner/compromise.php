<?php

function compromise($string) {
    $string_arr = str_split($string);
    $last_char = "";
    $char_index = 0;

    $result_str = "";
    if(!empty($string) || isset($string) || $string = ""){

        foreach($string_arr as $char){
            if($last_char != ""){
                    if($last_char == $char){
                        if($char_index <= 8)
                        {
                            $char_index++;
                        }else{
                            $result_str .= $char_index . $last_char;
                            $char_index = 1; 
                        }
                    }else{
                        $result_str .= $char_index . $last_char;
                        $char_index = 1;
                        $last_char = $char;
                    }
            }else{
                $last_char = $char;
                $char_index++;
            }
        }

        $result_str .= $char_index . $last_char;

        return $result_str;
    }
}

function decompromise($string){
    $string_arr = str_split($string, 2);

    $result_str = "";

    foreach($string_arr as $com_char){
        $char_arr = str_split($com_char);

        $result_str .= str_repeat($char_arr[1], $char_arr[0]);
    }

    return $result_str;
}

$type = $_POST["type"];
$value = $_POST["value"];

if($type !== "" || $value !== "") {
    if($type == "comp") {
        echo compromise($value);
    }
    if($type == "decomp") {
        echo decompromise($value);
    }
}