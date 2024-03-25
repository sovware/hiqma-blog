<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;
?>
<header class="navbar fixed-top navbar-expand-lg p-lg-0">

<div class="container-xxl">
	<!-- logo  -->
	<div class="d-flex">
		<a href="https://hiqmatrip.com" class="fadeout navbar-brand m-0 p-0 rounded-3">
			<img class="logo p-1 rounded" style="max-width: 140px;max-height: 50px;" src="https://hiqmatrip.com/wp-content/uploads/2024/02/ht-logo-300x76.png" alt="logo">
		</a>
	</div>

	<!-- toggle button  -->
	<button class="navbar-toggler rounded-1" type="button" data-bs-toggle="collapse"
		data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
		aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<!-- nav items  -->
	<div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">

		<!-- left  -->
		<div class="nav-item--left ms-lg-5">

			<ul class="header_menu navbar-nav">				
				<li> <a class="nav-link fadeout  waves-effect" href="http://tripksa.local/tours">Tours</a></li>
				<li> <a class="nav-link fadeout  waves-effect" href="http://tripksa.local/flights">Flights</a></li>
				<li> <a class="nav-link fadeout  waves-effect" href="http://tripksa.local/hotels">Hotels</a></li>
				<li> <a class="nav-link fadeout  waves-effect" href="http://tripksa.local/cars">Cars</a></li>
			</ul>
		</div>

		<!-- right  -->
		<div class="nav-item--right" role="search">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a href="https://wa.link/8ee9xa" target="_blank" class="nav-link support-element btn px-3 text-center d-flex align-items-center justify-content-center border">
						<svg fill="#000000" width="800px" height="800px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"><title/><path d="M6,59a1,1,0,0,1-.95-1.32L9,46.06A27.1,27.1,0,0,1,13,13,26.93,26.93,0,0,1,51,13h0A26.94,26.94,0,0,1,20.22,56.23L6.2,59Zm14.35-4.85a1,1,0,0,1,.45.11A24.94,24.94,0,0,0,49.63,14.37h0a24.93,24.93,0,0,0-35.26,0,25.08,25.08,0,0,0-3.4,31,1,1,0,0,1,.1.86L7.51,56.72,20.17,54.2Z"/><path d="M39.17,46a8.46,8.46,0,0,1-.92,0c-5.31-.58-12-5.83-13.89-7.68h0c-1.85-1.85-7.11-8.58-7.68-13.89-.46-4.24,2.37-7.12,3.61-8.17a2.87,2.87,0,0,1,2-.69l2.7.09a1,1,0,0,1,.9.65c.6,1.59,2.54,6.88,2.54,8.25,0,1.2-1.06,2.13-2,2.95-.2.17-.47.41-.63.58a28.74,28.74,0,0,0,3.61,5.16,28.77,28.77,0,0,0,5.16,3.61c.17-.17.41-.44.58-.63.82-.94,1.75-2,3-2,1.37,0,6.66,1.94,8.25,2.54a1,1,0,0,1,.65.9l.09,2.7a3,3,0,0,1-.69,2A9.82,9.82,0,0,1,39.17,46ZM25.78,36.88c1.65,1.65,8,6.6,12.69,7.11,3.29.35,5.59-1.92,6.43-2.91a1,1,0,0,0,.22-.66l-.07-2a47.65,47.65,0,0,0-6.92-2.18c-.32,0-1.11.93-1.45,1.32-.68.78-1.22,1.39-2,1.39-1.27,0-5.7-3.28-6.69-4.27S23.75,29.23,23.75,28c0-.75.61-1.29,1.39-2,.38-.34,1.29-1.12,1.32-1.45a47.7,47.7,0,0,0-2.18-6.92l-2-.07a1,1,0,0,0-.66.22c-1,.84-3.27,3.14-2.91,6.42.51,4.72,5.46,11,7.11,12.69Zm9,0Z"/></svg>
						<strong>
							+966559006487
						</strong>
					</a>
				</li>
				<!-- <?php if (app()->app->multi_language == 1) {?>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle btn language-element px-3 p-0 py-2 text-center d-flex align-items-center justify-content-center gap-0 border"
						href="javascriptvoid(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">

						<?php if (!isset($_SESSION['phptravels_client_language_country'])) { ?>
						<img
							src="<?=root?>assets/img/flags/<?php foreach (app()->languages as $lang){ if($lang->default == 1){ echo strtolower($lang->country_id); } }?>.svg"
							alt="flag">
						<?php } else {?>
						<img
							src="<?=root?>assets/img/flags/<?=$_SESSION['phptravels_client_language_country']?>.svg"
							alt="flag">
						<?php } ?>

						<strong>
							<?php if (!isset($_SESSION['phptravels_client_language_name'])) { ?>
							<?php foreach (app()->languages as $lang){ if($lang->default == 1){ echo $lang->name; $def_language = $lang->name; } }?>
							<?php } else {?>
							<?=$_SESSION['phptravels_client_language_name'] ?? 'English'; ?>
							<?php } ?>
						</strong>
						<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
							viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round">
							<path d="M6 9l6 6 6-6" />
						</svg>
					</a>
					<ul class="dropdown-menu rounded-1">
						<?php foreach(app()->languages as $lang){ ?>
						<li><a class="dropdown-item d-flex gap-3 fadeout"
								href="<?=root?>language/<?=strtolower($lang->country_id)?>/<?=$lang->name?>/<?=$lang->type?>">
								<img style="width:18px"
									 src="<?=root?>assets/img/flags/<?=strtolower($lang->country_id)?>.svg"
									 alt="flag"> </i><span><?=$lang->name?></span></a></li>
						<?php } ?>
					</ul>
				</li>
				<?php } ?> -->

				<?php if (app()->app->user_registration == 1) {?>
				<li class="nav-item dropdown">
					<a class="bg-light account-element nav-link dropdown-toggle btn btn-outline-secondary px-0 ps-3 text-center d-flex align-items-center justify-content-center gap-2 border-0"
						href="javascriptvoid(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">

						<svg stroke="#000" xmlns="http://www.w3.org/2000/svg" width="20"
							height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.5"
							stroke-linecap="round" stroke-linejoin="round">
							<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
							<circle cx="12" cy="7" r="4"></circle>
						</svg>

						<strong class="m-0 text-dark">
							<?=T::account?>
						</strong>

						<svg stroke="#000" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
							viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round">
							<path d="M6 9l6 6 6-6" />
						</svg>

					</a>

					<?php if(!isset($_SESSION['phptravels_client']->user_id)) { ?>
					<ul class="dropdown-menu bg-white rounded-2">
						<li><a class="dropdown-item fadeout" href="<?=root?>login"> <?=T::login?> </i></a></li>
						<li><a class="dropdown-item fadeout" href="<?=root?>signup"> <?=T::signup?> </i></a></li>
					</ul>
					<?php } ?>

					<?php if(isset($_SESSION['phptravels_client']->user_id)) { ?>
					<ul class="dropdown-menu bg-white rounded-4">
						<li><a class="dropdown-item fadeout" href="<?=root?>dashboard"> <?=T::dashboard?></i></a></li>
						<li><a class="dropdown-item fadeout" href="<?=root?>bookings"> <?=T::bookings?></i></a></li>
						<?php if($_SESSION['phptravels_client']->user_type ==  "Agent"){ ?>
						<li><a class="dropdown-item fadeout" href="<?=root.('reports/'.date("Y"))?>"> <?=T::reports?></i></a></li>
						<?php } ?>
						<!-- <li><a class="dropdown-item fadeout" href="<?=root?>wallet"> <?=T::wallet?></i></a></li> -->
						<li><a class="dropdown-item fadeout" href="<?=root?>profile"> <?=T::profile?></i></a></li>
						<li><hr class="dropdown-divider"></li>
						<li><a class="dropdown-item fadeout" href="<?=root?>logout"> <?=T::logout?></i></a></li>
					</ul>
					<?php } ?>

				</li>
				<?php } ?>

			</ul>
		</div>

	</div>
	<!-- nav items end  -->
</div>
</header>