<?php

error_reporting(E_ALL);

	if($_POST['method'] == 'create'):
		if(mkdir(dirname(__FILE__).$_POST['path'], 0775)):
			exit('Create Folder Success.');
		else:
			exit('Create Folder Failed.');
		endif;

	elseif($_POST['method'] == 'upload'):

		$tmpname = $_FILES['file']['tmp_name'];
		$name = urldecode($_FILES['file']['name']);

		/*
			echo "檔案名稱: " . $_FILES["file"]["name"]."<br/>";
			echo "檔案類型: " . $_FILES["file"]["type"]."<br/>";
			echo "檔案大小: " . ($_FILES["file"]["size"] / 1024)." Kb<br />";
			echo "暫存名稱: " . $_FILES["file"]["tmp_name"]."<br/><br/><br/>";
		*/

		//假如有檔案
		if( $_FILES ):
			
			#移動檔案到儲存位置
			$result = move_uploaded_file( $tmpname, dirname(__FILE__) . $_POST['path'] . '/' . $name);

			if($result):
				exit('Upload Success.');
			else:
				exit('Upload Failed：【' . $result . '】');
			endif;
		else:
			exit("error");
		endif;
	endif;
?>
