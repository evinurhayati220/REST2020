<?php
function data_api($url)
{
	$client = curl_init($url);
	curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
	//curl_setopt($client,CURLOPT_POST,$data);
	$response = curl_exec($client);
	//$result = json_decode($response);
	if (!empty($response)) {
		echo $response;
	} else {
		echo "No data found";
	}
}

?>

<!DOCTYPE html>
<html>

<head>
	<title>Kelompok 2</title>
	<link rel="stylesheet" href="https://stackpath.boot
strapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<style>
		body {
			background: url(img/sea-beach-branches-dusk-nature.jpg);
		}

		#input {
			width: 400px;
			height: auto;
			font-size: 17px;
			padding: 10px 0 10px 17px;
			border-radius: 15px;
			-moz-border-radius: 15px;
			-webkit-border-radius: 15px;
			border: none;
		}

		#td {
			font-size: 25px;
			color: #Fff;
			padding-bottom: 15px;
		}
	</style>
</head>

<body>
	<section class="portfolio py-5" id="portfolio">
		<div class="container py-3">
			<h3 class="heading text-capitalize mb-md-5 mb-4" style="color:#FFFFFF">Member Kelompok 2<span></span></h3>
			<form action="proses/proses.php" method="post" enctype="multipart/form-data">
				<table align="center">
					<div class="row news-grids text-center">
						<div class="col-md-3 col-6 gal-img">
							<a>
								<h4 style="color:#FFFFFF"><?php
															//tidak perlu jar file
															$url = "http://localhost:8080/WebServiceRestFul_war_exploded/hi/memberkelompok2/Member?npm=177006058&nama=Mitha%20Maharani%20Wahyudi";
															data_api($url); ?>
								</h4>
							</a>
							<p style="color:#FFFFFF"><?php
														//tidak perlu jar file
														$url = "http://localhost:8080/WebServiceRestFul_war_exploded/hi/memberkelompok2/Kata?kata=Orang%20pesimimis%20melihat%20kesulitan%20dalam%20setiap%20peluang.%20Orang%20optimis%20melihat%20peluang%20dalam%20setiap%20kesulitan.%22-%20Winston%20Churchill.";
														data_api($url);
														?>
							</p>
						</div>

						<div class="col-md-3 col-6 gal-img">
							<a>
								<h4 style="color:#FFFFFF"><?php
															//tidak perlu jar file
															$url = "http://localhost:8080/WebServiceRestFul_war_exploded/hi/memberkelompok2/Member?npm=177006005&nama=Evi%20Nurhayati";
															data_api($url);
															?>
								</h4>
							</a>
							<p style="color:#FFFFFF"><?php
														//tidak perlu jar file
														$url = "http://localhost:8080/WebServiceRestFul_war_exploded/hi/memberkelompok2/Kata?kata=%22Keberanian%20tidak%20selalu%20mengaum,%20kadang-kadang%20itu%20adalah%20suara%20tenang%20di%20akhir%20hari%20berbisik%20%27Aku%20akan%20mencoba%20lagi%20besok%22%20-%20Mary%20Anne%20Radmacher";
														data_api($url);
														?>
							</p>
						</div>

						<div class="col-md-3 col-6 gal-img">
							<a>
								<h4 style="color:#FFFFFF"><?php
															//tidak perlu jar file
															$url = "http://localhost:8080/WebServiceRestFul_war_exploded/hi/memberkelompok2/Member?npm=177006015&nama=Rahmi%20Septi%20Yudiantini";
															data_api($url);
															?>
								</h4>
							</a>
							<p style="color:#FFFFFF"><?php
														//tidak perlu jar file
														$url = "http://localhost:8080/WebServiceRestFul_war_exploded/hi/memberkelompok2/Kata?kata=%22Jika%20saya%20tidak%20bisa%20melakukan%20hal-hal%20besar,%20saya%20bisa%20melakukan%20hal-hal%20kecil%20dengan%20cara%20yang%20hebat.%22%20-%20Martin%20Luther%20King%20Jr.";
														data_api($url);
														?>
							</p>
						</div>

						<div class="col-md-3 col-6 gal-img">
							<a>
								<h4 style="color:#FFFFFF"><?php
															//tidak perlu jar file
															$url = "http://localhost:8080/WebServiceRestFul_war_exploded/hi/memberkelompok2/Member?npm=177006043&nama=Rika%20Silvia";
															data_api($url);
															?>
								</h4>
							</a>
							<p style="color:#FFFFFF"><?php
														//tidak perlu jar file
														$url = "http://localhost:8080/WebServiceRestFul_war_exploded/hi/memberkelompok2/Kata?kata=%22Kesuksesan%20tidak%20datang%20dari%20apa%20yang%20Anda%20lakukan%20sesekali.%20Itu%20berasal%20dari%20apa%20yang%20Anda%20lakukan%20secara%20konsisten.%22-Anonym";
														data_api($url);
														?>
							</p>
				</table>
			</form>
			<h4 class="text-capitalize mb-md-5 mb-4" align="center" style="color:#FFFFFF">@2020 by Kelompok 2 Web Service<span></span></h4>
</body>

</html>