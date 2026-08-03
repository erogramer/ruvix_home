<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php echo html_escape(element('page_title', $layout)); ?></title>
<?php if (element('meta_description', $layout)) { ?><meta name="description" content="<?php echo html_escape(element('meta_description', $layout)); ?>"><?php } ?>
<?php if (element('meta_keywords', $layout)) { ?><meta name="keywords" content="<?php echo html_escape(element('meta_keywords', $layout)); ?>"><?php } ?>
<?php if (element('meta_author', $layout)) { ?><meta name="author" content="<?php echo html_escape(element('meta_author', $layout)); ?>"><?php } ?>
<?php if (element('favicon', $layout)) { ?><link rel="shortcut icon" type="image/x-icon" href="<?php echo element('favicon', $layout); ?>" /><?php } ?>
<?php if (element('canonical', $view)) { ?><link rel="canonical" href="<?php echo element('canonical', $view); ?>" /><?php } ?>

<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">		
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800"> 
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600">			
<link rel="stylesheet" href="<?php echo base_url('assets/fonts/font-awesome.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fonts/themify-icons.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/owlcarousel/css/owl.carousel.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/owlcarousel/css/owl.theme.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/fonts.css'); ?>">		
<link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css'); ?>">		
<link rel="stylesheet" href="<?php echo base_url('assets/css/venobox.css'); ?>">			
<link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css'); ?>">					
<link rel="stylesheet" href="<?php echo base_url('assets/css/menu.css'); ?>">			
<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">			
<link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css'); ?>">	

<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/earlyaccess/nanumgothic.css" />
<link rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css" />
<?php echo $this->managelayout->display_css(); ?>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript">
// 자바스크립트에서 사용하는 전역변수 선언
var cb_url = "<?php echo trim(site_url(), '/'); ?>";
var cb_cookie_domain = "<?php echo config_item('cookie_domain'); ?>";
var cb_charset = "<?php echo config_item('charset'); ?>";
var cb_time_ymd = "<?php echo cdate('Y-m-d'); ?>";
var cb_time_ymdhis = "<?php echo cdate('Y-m-d H:i:s'); ?>";
var layout_skin_path = "<?php echo element('layout_skin_path', $layout); ?>";
var view_skin_path = "<?php echo element('view_skin_path', $layout); ?>";
var is_member = "<?php echo $this->member->is_member() ? '1' : ''; ?>";
var is_admin = "<?php echo $this->member->is_admin(); ?>";
var cb_admin_url = <?php echo $this->member->is_admin() === 'super' ? 'cb_url + "/' . config_item('uri_segment_admin') . '"' : '""'; ?>;
var cb_board = "<?php echo isset($view) ? element('board_key', $view) : ''; ?>";
var cb_board_url = <?php echo ( isset($view) && element('board_key', $view)) ? 'cb_url + "/' . config_item('uri_segment_board') . '/' . element('board_key', $view) . '"' : '""'; ?>;
var cb_device_type = "<?php echo $this->cbconfig->get_device_type() === 'mobile' ? 'mobile' : 'desktop' ?>";
var cb_csrf_hash = "<?php echo $this->security->get_csrf_hash(); ?>";
var cookie_prefix = "<?php echo config_item('cookie_prefix'); ?>";
</script>
<script type="text/javascript" src="<?php echo base_url('assets/js/common.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.validate.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.validate.extension.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/sideview.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/js.cookie.js'); ?>"></script>
<?php echo $this->managelayout->display_js(); ?>
</head>

<body data-spy="scroll" data-offset="80" <?php echo isset($view) ? element('body_script', $view) : ''; ?>>

	<div class="preloader">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div>
	<div class="site-mobile-menu site-navbar-target">
	  <div class="site-mobile-menu-header">
		<div class="site-mobile-menu-close mt-3">
		  <span class="icon-close2 js-menu-toggle"></span>
		</div>
	  </div>
	  <div class="site-mobile-menu-body"></div>
	</div>
   
	<header class="site-navbar js-sticky-header site-navbar-target" role="banner">
	  <div class="container">
		<div class="row align-items-center">       
		  
		  <div class="col-6 col-xl-2">
			<h1 class="mb-0 site-logo">
				<a href="<?php echo site_url(); ?>" title="<?php echo html_escape($this->cbconfig->item('site_title'));?>">
					<?php echo $this->cbconfig->item('site_logo') ? $this->cbconfig->item('site_logo') : 'MONOLINE'; ?>
				</a>
			</h1>
		  </div>
		  
		  <div class="col-12 col-md-10 d-none d-xl-block">
			<nav class="site-navigation position-relative text-right" role="navigation">
			  <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
				<?php
				if (element('menu', $layout)) {
					echo render_menu_dropdown(element('menu', $layout));
				}
				?>

				<?php if ($this->member->is_member()) { ?>
					<?php if ($this->member->is_admin() === 'super') { ?>
						<li><a class="nav-link" href="<?php echo site_url(config_item('uri_segment_admin')); ?>" style="color:#ffcc00;"><i class="fa fa-cog"></i> 관리자</a></li>
					<?php } ?>
					<li><a class="nav-link" href="<?php echo site_url('mypage'); ?>"><i class="fa fa-user"></i> 마이페이지</a></li>
					<li><a class="nav-link" href="<?php echo site_url('login/logout?url=' . urlencode(current_full_url())); ?>"><i class="fa fa-sign-out"></i> 로그아웃</a></li>
				<?php } else { ?>
					<li><a class="nav-link" href="<?php echo site_url('login?url=' . urlencode(current_full_url())); ?>"><i class="fa fa-sign-in"></i> 로그인</a></li>
					<li><a class="nav-link" href="<?php echo site_url('register'); ?>"><i class="fa fa-user-plus"></i> 회원가입</a></li>
				<?php } ?>
			  </ul>
			</nav>
		  </div>
		  
		  <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;">
			<a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>
		  </div>
		  
		</div>
	  </div>
	</header>
	<?php if (current_url() == base_url() || current_url() == site_url('main') || current_url() == site_url()) { ?>
		<div class="main-content-fluid">
			<?php if (isset($yield)) echo $yield; ?>
		</div>
	<?php } else { ?>
		<div class="main-sub-container" style="padding-top: 140px; min-height: 750px; background-color: #fff;">
			<div class="container">
				<div class="row">
					<?php if (element('use_sidebar', $layout)) { ?>
						<div class="col-lg-9 col-md-8 col-sm-12">
					<?php } else { ?>
						<div class="col-12">
					<?php } ?>

						<?php if (isset($yield)) echo $yield; ?>

					<?php if (element('use_sidebar', $layout)) { ?>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-12 sidebar">
							<?php $this->load->view(element('layout_skin_path', $layout) . '/sidebar'); ?>
						</div>
					<?php } else { ?>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	<?php } ?>
	<div class="footer" style="background-image: url(<?php echo base_url('assets/img/bg/footer.png'); ?>); background-size:cover; padding: 60px 0;">
		<div class="container">		
			<div class="row text-center text-md-left">
				
				<div class="col-md-8 copyright" style="color: #bbb; line-height: 1.8;">
					<?php if ($this->cbconfig->item('company_address')) { ?>
						<p><?php echo $this->cbconfig->item('company_address'); ?>
							<?php if ($this->cbconfig->item('company_zipcode')) { ?>(우편 <?php echo $this->cbconfig->item('company_zipcode'); ?>)<?php } ?>
						</p>
					<?php } ?>
					<p style="font-size: 0.9em;">
						<?php if ($this->cbconfig->item('company_owner')) { ?><span><b>대표:</b> <?php echo $this->cbconfig->item('company_owner'); ?></span> | <?php } ?>
						<?php if ($this->cbconfig->item('company_phone')) { ?><span><b>전화:</b> <?php echo $this->cbconfig->item('company_phone'); ?></span> | <?php } ?>
						<?php if ($this->cbconfig->item('company_fax')) { ?><span><b>팩스:</b> <?php echo $this->cbconfig->item('company_fax'); ?></span><?php } ?>
					</p>
					<p style="font-size: 0.9em; margin-top: 5px;">
						<?php if ($this->cbconfig->item('company_reg_no')) { ?><span><b>사업자등록번호:</b> <?php echo $this->cbconfig->item('company_reg_no'); ?></span> | <?php } ?>
						<?php if ($this->cbconfig->item('company_retail_sale_no')) { ?><span><b>통신판매업신고:</b> <?php echo $this->cbconfig->item('company_retail_sale_no'); ?></span><?php } ?>
					</p>
				</div>
				
				<div class="col-md-4 text-center text-md-right" style="margin-top: 20px;">
					<ul class="list-inline" style="margin-bottom: 15px;">
						<li class="list-inline-item"><a href="<?php echo document_url('aboutus'); ?>" style="color:#fff; margin-right:10px;">회사소개</a></li>
						<li class="list-inline-item"><a href="<?php echo document_url('provision'); ?>" style="color:#fff; margin-right:10px;">이용약관</a></li>
						<li class="list-inline-item"><a href="<?php echo document_url('privacy'); ?>" style="color:#fff;">개인정보 처리방침</a></li>
					</ul>
					
					<div class="version-switch" style="margin-top: 15px;">
						<?php if ($this->cbconfig->get_device_view_type() === 'mobile') { ?>
							<a href="<?php echo current_full_url(); ?>" class="btn btn-outline-light btn-sm viewpcversion">PC 버전보기</a>
						<?php } else { ?>
							<a href="<?php echo current_full_url(); ?>" class="btn btn-outline-light btn-sm viewmobileversion">모바일 버전보기</a>
						<?php } ?>
					</div>
				</div>
			</div>
			
			<hr style="border-top: 1px solid #444; margin-top: 30px;">
			
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="footer_copyright" style="color: #888; font-size: 0.9em;">
						<p>&copy; <?php echo cdate('Y'); ?> <?php echo $this->cbconfig->item('site_title'); ?>. All Rights Reserved.</p>
						<p style="font-size:0.8em; color:#555;">Distributed by <a href="https://themewagon.com" target="_blank" style="color:#666;">ThemeWagon</a></p>
					</div>
				</div>
			</div>				
		</div>
	</div>
	<script src="<?php echo base_url('assets/js/jquery-1.12.4.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/modernizr-2.8.3.min.js'); ?>"></script>																		
	<script src="<?php echo base_url('assets/owlcarousel/js/owl.carousel.min.js'); ?>"></script>					
	<script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js'); ?>"></script>			
	<script src="<?php echo base_url('assets/js/jquery.mixitup.js'); ?>"></script>			
	<script src="<?php echo base_url('assets/js/jquery.appear.js'); ?>"></script>							
	<script src="<?php echo base_url('assets/js/jquery.inview.min.js'); ?>"></script>	
	<script src="<?php echo base_url('assets/js/jquery.stellar.min.js'); ?>"></script>			
	<script src="<?php echo base_url('assets/js/wow.min.js'); ?>"></script>			
	<script src="<?php echo base_url('assets/js/menu.js'); ?>"></script>																				
	<script src="<?php echo base_url('assets/js/jquery.sticky.js'); ?>"></script>																				
	<script src="<?php echo base_url('assets/js/scrolltopcontrol.js'); ?>"></script>																				
	<script src="<?php echo base_url('assets/js/scripts.js'); ?>"></script>		

<script type="text/javascript">
$(document).on('click', '.viewpcversion', function(){
    Cookies.set('device_view_type', 'desktop', { expires: 1 });
});
$(document).on('click', '.viewmobileversion', function(){
    Cookies.set('device_view_type', 'mobile', { expires: 1 });
});
</script>
<?php echo element('popup', $layout); ?>
<?php echo $this->cbconfig->item('footer_script'); ?>

</body>
</html>