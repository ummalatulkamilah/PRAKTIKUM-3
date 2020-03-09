
<!-- view v_admin adalah form yang akan di tampilkan jika login berhasil dilakukan -->
<!DOCTYPE html>
<html>
<head>
	<title>Membuat login dengan codeigniter | www.malasngoding.com</title>
</head>
<body>
	<h1>Login berhasil !</h1>
	<h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2> 
	
	<a href="<?php echo base_url('login/logout'); ?>">Logout</a> <!-- hyperlink yang mengarahkan ke logout/login -->
</body>
</html>