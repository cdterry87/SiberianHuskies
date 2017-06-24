<?php

//Set the base URL.
$base_url='/huskies/';

//Set the default page.
$page='home';

//Override the page if one is set.
if(isset($_GET['page'])){
	$page=rtrim($_GET['page'],'/');
}

//Set the path to the current page.
$page_path='pages/'.$page.'.php';

//Set a template page (optional).
$template_path='pages/includes/template.php';

//Load the page if the file exists.
if(file_exists($page_path)){
	//If a template is defined, load content into the template.
	if(isset($template_path) and trim($template_path)!=''){
		require($template_path);
	}else{
		require($page_path);
	}
}
