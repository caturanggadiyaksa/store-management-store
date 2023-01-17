<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.css" rel="stylesheet" /> -->

</head>

<body>


	<div class="relative shadow bg-white">
		<div class="absolute inset-0 bg-cover bg-center bg-no-repeat bg-fixed bg-sky-500" style=""></div>

		<div class="w-full backdrop-blur-sm">
			<div class="relative z-1 h-16 mx-auto px-5 max-w-7xl flex items-center justify-between text-white">
				<a class="text-2xl hover:text-cyan-400 transition-colors" href="">Perpustakaan Management</a>

				<ul class="flex items-center gap-5">
					<li><a class="hover:text-cyan-400 transition-colors" href='index.php'>Home</a></li>
					<li><a class="hover:text-cyan-400 transition-colors" href='index.php?p=peminjaman'>Peminjaman</a></li>
					<li><a class="hover:text-cyan-400 transition-colors" href='index.php?a=anggota'>Anggota</a></li>
					<li><a class="hover:text-cyan-400 transition-colors" href='index.php?t=penerbit'>Penerbit</a></li>
					<li><a class="hover:text-cyan-400 transition-colors" href='index.php?g=pengarang'>Pengarang</a></li>
				</ul>
			</div>
		</div>
	</div>



	<section class="form mt-6 pt-8">
		<div class="w-full">
			<div class="grid place-items-center">
				<div class="w-full max-w-2xl bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">

					<div class="flex flex-col items-center pb-10">

						<h1 class="mb-1 mt-6 text-xl font-medium text-gray-900 dark:text-white">Form Tambah Data Buku</h1>

						<div class="mt-4 w-full">
							<form action="" method="POST">
								<div class="flex flex-col mx-20">



									<div class="relative z-0 w-full mb-6 group">
										<input type="text" name="kodebuku" id="" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
										<label class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Kode Buku</label>
									</div>
									<div class="relative z-0 w-full mb-6 group">
										<input type="text" name="judulbuku" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
										<label class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Judul Buku</label>
									</div>

									<div class="relative z-0 w-full mb-6 group">

										<!-- <label for="underline_select" class="sr-only">Tahun</label> -->
										<select name="tahun" id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
											<option selected>Tahun</option>
											<option value="1990">1990</option>
											<option value="1991">1991</option>
											<option value="1992">1992</option>
											<option value="1993">1993</option>
											<option value="1994">1994</option>
											<option value="1995">1995</option>
											<option value="1996">1996</option>
											<option value="1997">1997</option>
											<option value="1998">1998</option>
											<option value="1999">1999</option>
											<option value="2000">2000</option>
											<option value="2001">2001</option>
											<option value="2002">2002</option>
											<option value="2003">2003</option>
											<option value="2004">2004</option>
											<option value="2005">2005</option>
											<option value="2006">2006</option>
											<option value="2007">2007</option>
											<option value="2008">2008</option>
											<option value="2009">2009</option>
											<option value="2010">2010</option>
											<option value="2011">2011</option>
											<option value="2012">2012</option>
											<option value="2013">2013</option>
											<option value="2014">2014</option>
											<option value="2015">2015</option>
											<option value="2016">2016</option>
											<option value="2017">2017</option>
											<option value="2018">2018</option>
											<option value="2019">2019</option>
											<option value="2020">2020</option>
											<option value="2021">2021</option>
										</select>

									</div>



									<div class="relative z-0 w-full mb-6 group">
										<select name="idpenerbit" id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
											<option selected>ID Penerbit</option>
											<?php while ($data = $this->model->fetch($idPenerbit)) {
												echo "<option value='$data[0]'>$data[0]</option>";
											} ?>
										</select>
									</div>
									<div class="relative z-0 w-full mb-6 group">
										<select name="idpengarang" id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
											<option selected>ID Pengarang</option>
											<?php while ($datapengarang = $this->model->fetch($idPengarang)) {
												echo "<option value='$datapengarang[0]'>$datapengarang[0]</option>";
											} ?>
										</select>
									</div>
									<div class="relative z-0 w-full mb-6 group">
										<select name="idkatalog" id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
											<option selected>ID Katalog</option>
											<?php while ($datakatalog = $this->model->fetch($idKatalog)) {
												echo "<option value='$datakatalog[0]'>$datakatalog[0]</option>";
											} ?>
										</select>
									</div>

									<div class="relative z-0 w-full mb-6 group">
										<input type="number" min="1" max="1000" name="quantity" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
										<label class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Quantity</label>
									</div>

									<div class="relative z-0 w-full mb-6 group">
										<input type="number" min="1" max="1000000" name="harga" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
										<label class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Harga</label>
									</div>




									<div class="flex flex-row items-center justify-center">

										<input class="bg-cyan-500 text-white rounded-md p-2 hover:bg-cyan-400" type="submit" name="submit" value="Tambah Data" />

									</div>





								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>

	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.js"></script> -->

</body>

</html>
<?php
if (isset($_POST['submit'])) { //jika button submit diklik maka panggil fungsi insert pada controller
	$main = new controller();
	$main->insert();
}
?>