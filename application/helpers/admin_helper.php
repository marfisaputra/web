<?php 

function check_session()
{
	$CI= & get_instance();
	$session=$CI->session->userdata('status_login');
	if($session!='oke')
	{
		redirect('/account');
	}
}


function check_session_login()
{
	$CI= & get_instance();
	$session=$CI->session->userdata('status_login');
	if($session=='oke')
	{
		redirect('/home');
	}
}




?>