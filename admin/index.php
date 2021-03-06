<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limontesweetalert2/7.2.0/sweetalert2.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/c52f7154f4.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" href="./assets/css/index.css" />
	<link rel="icon" href="../User/assets/images/images_home/favicon.PNG" sizes="32x32" type="image/png" />
	<link rel="icon" href="../User/assets/images/images_home/favicon.PNG" sizes="192x192" type="image/png" />
</head>

<body>
	<?php session_start();
	include './update_Date.php'; ?>
	<!-- Check thong tin truoc khi login admin -->
	<?php if (isset($_SESSION['admin']) == null && isset($_SESSION['admin-NCC']) == null)  echo "<script>window.location.href='../DangNhap/dangnhap.php'</script>"; ?>
	<div id="fade"></div>
	<div class="main">
		<img src="./assets/images/category.png" id="image_nav" class="openbtn">
		<div id="jquery-accordion-menu" class="jquery-accordion-menu" style="width: 20%;">
			<div class="jquery-accordion-menu-header">
				<img src="./assets/images/profile.png" alt="./assets/images/profile.png" width="80" class="mr-3 rounded-circle image-profile">
				<p class="name"><?php if (isset($_SESSION['admin'])) echo $_SESSION['admin'];
								if (isset($_SESSION['admin-NCC'])) echo $_SESSION['admin-NCC'] ?></p>
			</div>
			<ul class="active1">
				<?php if (isset($_SESSION['admin'])) { ?>

					<li><a href="./index.php?url=QlTK"><i class="far fa-user" id="icon"></i>Qu???n l?? t??i kho???n</a></li>
					<li><a href="#"><i class="fas fa-list-ul" id="icon"></i>Qu???n l?? danh m???c </a>
						<ul class="submenu">
							<li><a href="./index.php?url=duyet">Danh m???c ch??? duy???t</a></li>
							<li><a href="./index.php?url=qldm">Danh s??ch danh m???c</a></li>
						</ul>
					</li>
					<li><a href="./index.php?url=qlncc"><i class="fas fa-house-user" id="icon"></i>Qu???n l?? nh?? cung c???p</a></li>
					<!-- <li><a href="./index.php?url=DSBanner"><i class="fas fa-ad" id="icon"></i>Qu???n l?? banner</a></li> -->
					<li><a href="./index.php?url=DSB??"><i class="far fa-window-maximize" id="icon"></i>Qu???n l?? b??i ????ng</a></li>
					<li><a href="./index.php?url=qlthue"><i class="fas fa-percentage" id="icon"></i></i>Qu???n l?? thu???</a></li>
					<li><a href="./index.php?url=thongkedt"><i class="far fa-chart-bar" id="icon"></i>Th???ng k?? doanh thu</a></li>
				<?php } ?>
				<!-- Nh?? cung c???p -->
				<?php if (isset($_SESSION['admin-NCC'])) { ?>
					<li><a href="./index.php?url=qlsanpham"><i class="fas fa-tags" id="icon"></i>Qu???n l?? s???n ph???m</a>
					<li><a href="#"><i class="fas fa-file-invoice" id="icon"></i>Qu???n l?? h??a ????n</a>
						<ul class="submenu">
							<li><a href="./index.php?url=hdchoduyet">H??a ????n ch??? x??t duy???t</a></li>
							<li><a href="./index.php?url=hddanggiao">H??a ????n ??ang giao</a></li>
							<!-- <li><a href="#">Design </a>
								<ul class="submenu">
									<li><a href="#">	</a></li>
									<li><a href="#">	 </a></li>
									<li><a href="#">	</a></li>
									<li><a href="#">	</a></li>
								</ul>
							</li> -->
							<li><a href="./index.php?url=hddagiao">H??a ????n ???? giao</a></li>
							<li><a href="./index.php?url=hddahuy">H??a ????n ???? h???y</a></li>
						</ul>
					</li>
					<li><a href="./index.php?url=khuyenmai"><i class="fas fa-percentage" id="icon"></i>Qu???n l?? khuy???n m???i</a>
						<!-- <ul class="submenu">
							<li><a href="#">	</a></li>
							<li><a href="#">	</a>
							<li><a href="#">	</a></li>
							<li><a href="#">	</a></li>
						</ul> -->
					</li>
					<li><a href="./index.php?url=qldg"><i class="far fa-comments" id="icon"></i>Qu???n l?? ????nh gi??</a></li>
					<li><a href="./index.php?url=qlkh"><i class="fas fa-user-friends" id="icon"></i>Qu???n l?? kh??ch h??ng</a></li>
					<li><a href="./index.php?url=ycdm"><i class="fas fa-reply" id="icon"></i>Y??u c???u danh m???c</a></li>
					<li><a href="./index.php?url=thongke"><i class="far fa-chart-bar" id="icon"></i>Th???ng k??</a></li>
				<?php } ?>
				<li><a href="./index.php?url=dangxuat"><i class="fas fa-sign-out-alt" id="icon"></i>????ng xu???t</a></li>
			</ul>
			<div class="jquery-accordion-menu-footer">

			</div>
			<!--Footer-->
		</div>


		<!-- Content -->
		<div class="content-right">

			<?php
			if (isset($_GET['url'])) {
				switch ($_GET['url']) {
						// Quan ly hoa don
					case 'hdchoduyet':
						include './QLHD/hdchoduyet.php';
						break;
					case 'hddanggiao':
						include './QLHD/hddanggiao.php';
						break;
					case 'hddagiao':
						include './QLHD/hddagiao.php';
						break;
					case 'hddahuy':
						include './QLHD/hddahuy.php';
						break;
					case 'cthoadon':
						include './QLHD/cthoadon.php';
						break;
					case 'checkhd':
						include './QLHD/checkhd.php';
						break;

						// Quan ly khuyen mai
					case 'khuyenmai':
						include './QLKM/khuyenmai.php';
						break;
					case 'themdotkm':
						include './QLKM/themdotkm.php';
						break;
					case 'ctkhuyenmai':
						include './QLKM/ctkhuyenmai.php';
						break;
					case 'themspkm':
						include './QLKM/themspkm.php';
						break;
					case 'suakm':
						include './QLKM/suakm.php';
						break;
					case 'suactkm':
						include './QLKM/suactkm.php';
						break;
					case 'xoakm':
						include './QLKM/xoakm.php';
						break;
					case 'khoakm':
						include './QLKM/khoakm.php';
						break;

						// Quan ly tai khoan
					case 'QlTK':
						include './QLTK/DsTK.php';
						break;
					case 'themtk':
						include './QLTK/ThemTK.php';
						break;
					case 'suatk':
						include './QLTK/SuaTK.php';
						break;
					case 'suatksb':
						include './QLTK/SuaTK_submit.php';
						break;
					case 'doimk':
						include './QLTK/DoiMK.php';
						break;
					case 'xoatk':
						include './QLTK/XoaTK_submit.php';
						break;

						// Quan ly danh muc
					case 'qldm':
						include './QLDM/DsDM.php';
						break;
					case 'duyet':
						include './QLDM/duyetdm.php';
						break;
					case 'duyetdm':
						include './QLDM/duyet.php';
						break;
					case 'themdm':
						include './QLDM/ThemDM.php';
						break;
					case 'suadm':
						include './QLDM/SuaDM.php';
						break;
					case 'xoadm':
						include './QLDM/XoaDM_submit.php';
						break;
						// Quan ly thue
					case 'qlthue':
						include './QLTHUE/dsthue.php';
						break;
					case 'themthue':
						include './QLTHUE/ThemThue.php';
						break;
					case 'xoathue':
						include './QLTHUE/XoaThue_submit.php';
						break;
					case 'suathue':
						include './QLTHUE/SuaThue.php';
						break;
						//Quan ly san pham
					case 'qlsanpham':
						include './QLSP/qlsanpham.php';
						break;
					case 'add':
						include './QLSP/add.php';
						break;
					case 'view':
						include './QLSP/view.php';
						break;
					case 'edit':
						include './QLSP/edit.php';
						break;
					case 'delete':
						include './QLSP/delete.php';
						break;
						//Quan ly khach hang
					case 'dskh':
						include './QLKH/dskh.php';
						break;
						//Quan ly danh gia
					case 'qldg':
						include './QLDG/DanhSachDG.php';
						break;
					case 'review':
						include './QLDG/chon.php';
						break;
					case 'confirm':
						include './QLDG/duyet_submit.php';
						break;
					case 'xoadg':
						include './QLDG/xoa.php';
						break;

						//Quan ly nha cung cap
					case 'qlncc':
						include './QLNCC/dsncc.php';
						break;
					case 'ncc':
						include './QLNCC/xulyncc.php';
						break;
					case 'suancc':
						include './QLNCC/suancc.php';
						break;

						//Quan ly nha cung cap
					case 'qlkh':
						include './QLKH/dskh.php';
						break;

						//Y??u c???u danh m???c
					case 'ycdm':
						include './QLDM/yeucaudm.php';
						break;
					case 'xulydm':
						include './QLDM/xulydm.php';
						break;

						//Thong ke nh?? cung c???p
					case 'thongke':
						include './TKE/thongke.php';
						break;

						//Thong ke admin
					case 'thongkedt':
						include './TKE_AD/thongke.php';
						break;

					case 'dangxuat':
						include './dangxuat.php';
						break;

						//Quan ly bai dang
					case 'DSB??':
						include './QLB??/DSB??.php';
						break;
					case 'xemCTB??':
						include './QLB??/xemCTB??.php';
						break;
					case 'themB??':
						include './QLB??/themB??.php';
						break;
					case 'xoaB??':
						include './QLB??/xoaB??_submit.php';
						break;
					case 'suaB??':
						include './QLB??/suaB??.php';
						break;

					// 	//Quan ly banner
					// case 'DSBanner':
					// 	include './QLBANNER/DSBanner.php';
					// 	break;
					// case 'themBanner':
					// 	include './QLBANNER/themBanner.php';
					// 	break;
					// case 'xoaBanner':
					// 	include './QLBANNER/xoaBanner_submit.php';
					// 	break;
					// case 'suaBanner':
					// 	include './QLBANNER/suaBanner.php';
					// 	break;
				}
			}
			?>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="./assets/js/index.js"></script>
	<script src="./assets/js/date.js"></script>
	<?php if (isset($_SESSION['admin']) && isset($_GET['ad']) && $_GET['ad'] == 1) { ?>
		<script>
			swal("", "Xin ch??o," + " <?php if (isset($_SESSION['admin'])) echo $_SESSION['admin'];  ?> ch??o m???ng b???n ?????n v???i trang qu???n tr??? vi??n c???a ch??ng t??i!", "success");
		</script>
	<?php } ?>
	<?php if (isset($_SESSION['admin-NCC']) && isset($_GET['ad']) && $_GET['ad'] == 2) { ?>
		<script>
			swal("", "Xin ch??o," + " <?php if (isset($_SESSION['admin-NCC'])) echo $_SESSION['admin-NCC'];  ?> ch??o m???ng b???n ?????n v???i trang qu???n tr??? vi??n c???a ch??ng t??i!", "success");
		</script>
	<?php } ?>
</body>

</html>