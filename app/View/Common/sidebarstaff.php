<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Sidebar Dashboard Template With Sub Menu</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
        <link rel="stylesheet" href="../css/sidebar.css">
	</head>
	<body>
		<!--wrapper start-->
		<div class="wrapper ">
			<!--sidebar start-->
			<div style=" background-color: #D9D9D9;" class="sidebar sidebar-container">
				<div class="sidebar-menu">
					<li class="item" id="profile">
						<a href="#profile" class="menu-btn">
							<span>Profile <i class="fas fa-chevron-down drop-down"></i></span>
						</a>
						<div class="sub-menu">
							<a href="#"><span>Picture</span></a>
							<a href="#"><span>Info</span></a>
						</div>
					</li>		
				</div>

				<!-- Kursus Kahwin -->

				<div class="sidebar-menu">
					<li class="item" id="kursus-kahwin">
						<a href="#kursus-kahwin" class="menu-btn">
							<span>Senarai Kursus Kahwin <i class="fas fa-chevron-down drop-down"></i></span>
						</a>
						<div class="sub-menu">
							<a href="../staffMarCourse/viewUserList.php"><span>Senarai Pemohon</span></a>
							<a href="../staffMarCourse/viewUserAppDetails.php"><span>Maklumat Pemohon</span></a>
							<a href="../staffMarCourse/updateUserApp.php"><span>Urus Status Pemohon</span></a>
						</div>
					</li>		
				</div>

				<!-- Kebenaran kahwin -->

				<div class="sidebar-menu">
					<li class="item" id="kebenaran-kahwin">
						<a href="#kebenaran-kahwin" class="menu-btn">
							<span>Senarai Kebenaran Perkahwinan <i class="fas fa-chevron-down drop-down"></i></span>
						</a>
						<div class="sub-menu">
							<a href="../staffMarReq/viewUserList.php"><span>Senarai Pemohon</span></a>
							<a href="../staffMarReq/viewUserReqDetails.php"><span>Maklumat Pemohon</span></a>
							<a href="../staffMarReq/updateUserReq.php"><span>Urus Status Pemohon</span></a>
						</div>
					</li>		
				</div>

				<!-- Daftar Perkahwinan  -->

				<div class="sidebar-menu">
					<li class="item" id="daftar-kahwin">
						<a href="#daftar-kahwin" class="menu-btn">
							<span>Senarai Daftar Kahwin <i class="fas fa-chevron-down drop-down"></i></span>
						</a>
						<div class="sub-menu">
							<a href="../staffMarReg/marRegistrationMenu.php"><span>Senarai Pemohon</span></a>
						</div>
					</li>		
				</div>

				<!-- Khidmat Nasihat -->

				<div class="sidebar-menu">
					<li class="item" id="khidmat-nasihat">
						<a href="#khidmat-nasihat" class="menu-btn">
							<span>Senarai Khidmat Nasihat <i class="fas fa-chevron-down drop-down"></i></span>
						</a>
						<div class="sub-menu">
							<a href="mainAdminPage.php"><span>Main Page</span></a>
							<a href="viewAdminPage.php"><span>View</span></a>
						</div>
					</li>		
				</div>


				<!-- Bantuan Perkahwinan -->
				<div class="sidebar-menu">
					<li class="item" id="bantuan-perkahwinan">
						<a href="#bantuan-perkahwinan" class="menu-btn">
							<span>Senarai Bantuan Perkahwinan <i class="fas fa-chevron-down drop-down"></i></span>
						</a>
						<div class="sub-menu">
							<a href="listView.php" id=""><span>Special Incentive</span></a>							
						</div>
					</li>		
				</div>
			</div>
			<!--sidebar end-->
		</div>
		<!--wrapper end-->

		<!-- <script type="text/javascript">
		$(document).ready(function(){
			$(".sidebar-btn").click(function(){
				$(".wrapper").toggleClass("collapse");
			});
		});
		</script> -->
		

	</body>
</html>
