<?php
function is_login()
{
	$CI = &get_instance();
	if ($CI->session->userdata('role_id') == null || $CI->session->userdata('is_login') == FALSE) {
	
		redirect('login');
	}
}
