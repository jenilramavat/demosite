<?php

function json_validator_response($validator){


    if ($validator->fails()) {
        $errors = "";
        foreach ($validator->messages()->all() as $error){
            $errors .= $error."<br>";
        }
        return  Response::json(array("status" => "failed", "message" => $errors));
    }

}


?>