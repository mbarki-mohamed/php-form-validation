<?php

/**
*
* php Form Validation class.Developed By Mohamed Mbarki
*
* @author : Mohamed Mbarki 
* Twitter : @mbarki2009
* MIT  Licence .
*
**/


class Form_validator {
	

	function _getvalue($field)
	{
		$value = $_POST[$field];
		return trim($value);
	}



	function isPassword($field) 
	{

           $password = $this->_getvalue($field);
           if(strlen($password) < 8  || strlen($password) > 25) 
           {
       	      echo 'Password Must be between 8 and 25 !' ; 
              return FALSE;
           }

           if(!preg_match(“/\d/”, $password)) 
           {
               return FALSE;
           }

           if(!preg_match(“/[a-z]/i”, $password)) 
           {
               return FALSE;
           }

        }




    function acceptedLength($field,$minlength,$maxlength)
    {

       $value = $this->_getvalue($field);

       if(strlen($value) < $minlength)
       {
              echo $field.' length must be more than '.$minlength.' !' ;
              return FALSE ;     
       }
       
       elseif (strlen($value) > $maxlength)
       {
             echo $field.' length must be less than '. $maxlength.' !' ;
             return FALSE ;
       }

       else
       {
       	     return TRUE ; 
       }
      
    }  



    function isEmpty($field)
    {

       $value = $this->_getvalue($field);

       if($value == '')
       {
             echo $field.'cannot be empty !' ;
             return FALSE ;        
       }

       else
       {
       	 return TRUE ; 
       }
      
    }


    function isNumber($field)
    {
	$value = $this->_getvalue($field);
		
	if(!is_numeric($value))
	{
	   echo 'please enter a valid '.$field.'!' ; 
           return FALSE ; 
	}
	else
	{
           return TRUE;
	}
	
    }



	// check whether input is a valid email address
	function isEmail($field)
	{
	  $value = $this->_getvalue($field);
	  $pattern = "/^([a-zA-Z0-9])+([\.a-zA-Z0-9_-])*@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-]+)+/";
	  if(preg_match($pattern, $value))
	  {
		return TRUE;
	  }
	  else
	  {
		echo 'Please enter a valid email Address' ;
		return FALSE;
	  }
	
	}



	// Check the facebook url 

	function isFacebook($field)
	{
            $value     = $this->_getvalue($field);	  
	    $position1 = strpos($value, "facebook.com");
	    $position2 = strpos($value, "http://facebook.com");
            $position3 = strpos($value, "http://www.facebook.com");
  
           if($position1 !== 1 || $postion2 !== 1 || $position3 !== 1)
		{
			echo 'Please enter a valid facebook Url .' ; 
			return FALSE;
		}
		else
		{
			return TRUE;
		}


	}

	// Check the twitter url 

	function isTwitter($field)
	{

	    $value     = $this->_getvalue($field); 
	    $position1 = strpos($value, "twitter.com");
	    $position2 = strpos($value, "http://twitter.com");
	    $position3 = strpos($value, "http://www.twitter.com");

             if($position1 !== 1 || $postion2 !== 1 || $position3 !== 1)
		{
			echo 'please enter a valid twitter Url .'
			return FALSE;
		}
		else
		{
			return TRUE;
		}


	}



	// Check the Github url 

	function isGithub($field)
	{

	    $value     = $this->_getvalue($field);  
	    $position1 = strpos($value, "github.com");
	    $position2 = strpos($value, "http://github.com");
            $position3 = strpos($value, "http://www.github.com");
            if($position1 !== 1 || $postion2 !== 1 || $position3 !== 1)
	    {
		echo 'please enter a valid Github Url .'
		return FALSE;
	    }
	    else
	    {
		return TRUE;
            }


	}

       // validate  5 digit (eg-12344) or 5 digit-4 digit (eg- 12345-2323) zipcode  field
	function isZipcode($field)
	{
	  $value = $this->_getvalue($field);
	  $pattern = "/^\d{5}([\-]\d{4})?$/";
	  if(preg_match($pattern, $value))
	  {
		return TRUE;
	  }
	  else
	  {
		echo 'Please enter a valid zipcode' ;
		return FALSE;
	  }
	
	}

}

?>
