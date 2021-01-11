<?php
function checkEmpty($value)
{
	if(empty($value))
	{
		return false;
	}
	return true ;
}
function validEmail($email)
{
	if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		return false;
	}
	return true;
}
 function checkLess($value,$min)
    {
        if(strlen($value) <= $min)
        {
            return false;
        }
        return true;
    }
     function sanitizeString($string)
    {
        $string = trim($string);
        $string = filter_var($string,FILTER_SANITIZE_STRING);
        return $string;
    }
    function sanitizeEmail($email)
    {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        return $email;
    }



?>