</!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<table border="0" cellpadding="10" cellspacing="1" width="100%">
		<tr>
			<td align="center">User Dashboard</td>
		</tr>
		<tr>
			<td>
				Selamat datang <?= $this->session->userdata('username');?>.
				klik disini untuk <a href="<?=base_url('user/logout');?>" tite="Logout"> Logout.</a>
			</td>
		</tr>
</table>
</body>
</html>
	</table>
</body>
</html>