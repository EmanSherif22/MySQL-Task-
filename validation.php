<?php
//modification of data
function modifyDate($data){
    $data=trim($data);
    $data=htmlspecialchars($data);
    $data=stripcslashes($data);
}

//validation data 
function validateLoginForm($username,$password){
    $isValidData=true;
    if(!filter_var($username, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH))
    {
        echo "wrong name format, please try again";
        $isValidData=false;
    }
    if($password=="" || strlen($password)<5)
    {
        echo "not valid password, please try again";
        $isValidData=false;
    }
    return $isValidData;
}


?>