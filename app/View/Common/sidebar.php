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
							<span>Kursus Kahwin <i class="fas fa-chevron-down drop-down"></i></span>
						</a>
						<div class="sub-menu">
							<a href="../applicantMarCourse/viewTerms.php"><span>Terma dan Syarat</span></a>
							<a href="../applicantMarCourse/viewOrgList.php"><span>Senarai Organisasi</span></a>
							<a href="../applicantMarCourse/regCourseForm.php"><span>Pendaftaran Kursus</span></a>
							<a href="../applicantMarCourse/proofPayment.php"><span>Pembayaran Kursus</span></a>
						</div>
					</li>		
				</div>

				<!-- Kebenaran kahwin -->

				<div class="sidebar-menu">
					<li class="item" id="kebenaran-kahwin">
						<a href="#kebenaran-kahwin" class="menu-btn">
							<span>Kebenaran Perkahwinan <i class="fas fa-chevron-down drop-down"></i></span>
						</a>
						<div class="sub-menu">
							<a href="../applicantMarReq/regView.php"><span>Permohonan Kebenaran Perkahwinan</span></a>
							<a href="../applicantMarReq/applicantView.php"><span>Maklumat Pemohon</span></a>
							<a href="../applicantMarReq/partnerView.php"><span>Maklumat Pasangan</span></a>
							<a href="../applicantMarReq/marForm.php"><span>Borang Kebenaran Perkahwinan</span></a>
							<a href="../applicantMarReq/waliForm.php"><span>Borang Maklumat Wali</span></a>
							<a href="../applicantMarReq/witnessForm.php"><span>Borang Maklumat Saksi</span></a>
							<a href="../applicantMarReq/docForm.php"><span>Dokumen Kebenaran Perkahwinan</span></a>
							<a href="../applicantMarReq/paymentForm.php"><span>Pembayaran Kebenaran Perkahwinan</span></a>
							<a href="../applicantMarReq/manageReq.php"><span>Pengurusan Kebenaran Perkahwinan</span></a>
						</div>
					</li>		
				</div>

				<!-- Daftar Perkahwinan  -->

				<div class="sidebar-menu">
					<li class="item" id="daftar-kahwin">
						<a href="#daftar-kahwin" class="menu-btn">
							<span>Daftar Kahwin <i class="fas fa-chevron-down drop-down"></i></span>
						</a>
						<div class="sub-menu">
							<a href="../applicantMarReg/marRegistrationMenu.php"><span>Mohon</span></a>
						</div>
					</li>		
				</div>

				<!-- Khidmat Nasihat -->

				<div class="sidebar-menu">
					<li class="item" id="khidmat-nasihat">
					
						<div class="sub-menu">
							<div class="sidebar-menu">
					<li class="item" id="khidmat-nasihat">
						<a href="#khidmat-nasihat" class="menu-btn">
							<span>Khidmat Nasihat <i class="fas fa-chevron-down drop-down"></i></span>
						</a>
						<div class="sub-menu">
							<a href="mainUserPage.php"><span>Main Page</span></a>
							<a href="registrationConsultPage.php"><span>Registration</span></a>
							<a href="viewUserPage.php"><span>View</span></a>
							<a href="editUserPage.php"><span>Edit</span></a>
							<a href="deleteUserPage.php"><span>Delete</span></a>
						
						</div>
					</li>		
				</div>


				<!-- Bantuan Perkahwinan -->
				<div class="sidebar-menu">
					<li class="item" id="bantuan-perkahwinan">
						<a href="#bantuan-perkahwinan" class="menu-btn">
							<span>Bantuan Perkahwinan <i class="fas fa-chevron-down drop-down"></i></span>
						</a>
						<div class="sub-menu">
							<a href="../applicantIncentive/firstView.php" id=""><span>Mohon</span></a>
							<a href="../applicantIncentive/keputusanView.php"><span>Keputusan</span></a>							
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
