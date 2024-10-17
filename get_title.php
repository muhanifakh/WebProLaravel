<?php 

if (isset($_GET['page'])) {
	switch ($_GET['page']) {
		case 'data_penjualan':
			$title = "Sales Data";
			break;
		case 'data_teknisi':
			$title = "Technician Data";
			break;
		case 'user_data':
			$title = "User Data";
			break;
		case 'spk':
			$title = "Data SPK";
			break;
		
		default:
			$title = "Page not found";
			break;
	}
	echo $title;
}
else {
	echo "Main Page";
}

 ?>