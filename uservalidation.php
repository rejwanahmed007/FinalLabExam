<?php
session_start();
if(isset($_REQUEST['login']))
{
$GLOBALS['data']= simplexml_load_file('userlist.xml');
$GLOBALS['id']=$_REQUEST['id'] ;
$GLOBALS['password'] = $_REQUEST['password'];
//print_r($GLOBALS['data']);
//echo $data->user[0]->id;
$username=$_REQUEST['id'];
$password=$_REQUEST['password'];


	if(empty($username) == true || empty($password) == true)
	{
			header('location: index.php');
    }
    else
    {
    	$GLOBALS['userinfo'] = validation();
    	if(is_null($userinfo))
    	{
    		header('location: index.php');

    	}
    	else
    	{
    		header('location: home.php');
    	}
    }

}
function validation()
    {
    	for ($i=0; $i <count($data->user) ; $i++) 
    	{ 
    		foreach ($data->user[i] as $value) 
    	   {
    		
    	     if($data->user[i]->id==$id && $data->user[i]->password==password )
    	     {
    	     	return $data->user[i];
    	     	break;
    	     }
    	   }
    	}

    }    
?>