<?php

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('admin/auth');
    } else {
        $email = $ci->session->userdata('email');


        $userAccess = $ci->db->get_where('user', [
            'email' => $email
        ]);

        
    }
}

if(!function_exists('hash_verified'))
{
    
    function hash_verified($PlainPassword,$HashPassword)
    {

    	return password_verify($PlainPassword,$HashPassword) ? true : false;

   }
}

if(!function_exists('get_hash'))
{
    
    function get_hash($PlainPassword)
    {

    	$option=[
                'cost'=>5,// proses hash sebanyak: 2^5 = 32x
    	        ];
    	return password_hash($PlainPassword, PASSWORD_DEFAULT, $option);

   }
}

?>