<!DOCTYPE html>
<html class="h-full">

<head>
	<title>Form Login</title>
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700" rel="stylesheet" />
</head>

<body class="h-full bg-local" style="font-family: 'Source Sans Pro', sans-serif ">
	<div style="color: red;margin-bottom: 15px;">
		<?php
		if (isset($_GET['pesan'])) {
			if ($_GET['pesan'] == "gagal") {
				echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
			}
		}
		?>
	</div>

	<div class="flex items-center justify-center h-full">
		<div class="flex max-w-3xl shadow-md">
			<div class="bg-gray-100 p-8 rounded bg-opacity-75">
				<h1 class="text-gray-700 text-1xl text-center mb-4 font-black">Andreas Peter Chandra<br>1461800113</h1>
				<h1 class="text-gray-700 text-4xl text-center mb-4 font-black">Login</h1>

				<?= validation_errors(); ?>
				<?= form_open('c_login/login'); ?>
				<form>
					<label>Username</label><br>
					<div class="my-3">
						<input type="text" name="user" class="border rounded w-full py-2 px-4 outline-none focus:shadow-outline" placeholder="fill username" autofocus="">
					</div>
					<label>Password</label><br>
					<div class="my-3">
						<input type="password" name="pass" class="border rounded w-full py-2 px-4 outline-none focus:shadow-outline" placeholder="fill password" autofocus="">
					</div>
					<div>
						<div class="flex items-center justify-between">
							<button type="submit" class="bg-teal-600 hover:bg-teal-500 text-white font-bold py-2 px-4 shadow-md rounded" value="Login Now">Login</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>