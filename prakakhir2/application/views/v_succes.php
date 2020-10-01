<!DOCTYPE html>
<html lang="en">
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700" rel="stylesheet" />
</head>

<body class="bg-grey" style="font-family: 'Source Sans Pro' , sans-serif">
	<header class="flex flex-col sm:flex-row items-center justify-between relative">
		<nav>
			<div class="container mx-auto px-6 py-2 flex justify-between items-center">
				<div class="block lg:hidden">
					<svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
					</svg>
				</div>
				<div class="hidden lg:block">
					<ul class="inline-flex">
						<li><a href="" class="font-bold text-2xl lg:text-3xl">Home</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<section class="container mx-auto px-12 p-10 bg-blue-200 py-32 shadow-md">
		<h1 class=" text-black text-4xl">Profile <?= $sekarang ?></h1>
		<h4 class=" text-black text-2xl">Praktikum PTW</h4><br>
		<a href="<?php echo base_url('index.php/c_login/logout') ?>" class="bg-black font-bold rounded-full py-3 px-5 shadow-lg uppercase tracking-wider">Logout</a>
	</section>
</body>

</html>