<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php if ($this->cbconfig->get_device_view_type() === 'desktop' && $this->cbconfig->get_device_type() === 'mobile') { ?>
<meta name="viewport" content="width=1000">
<?php } else { ?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php } ?>
<title><?php echo html_escape(element('page_title', $layout)); ?></title>
<?php if (element('meta_description', $layout)) { ?><meta name="description" content="<?php echo html_escape(element('meta_description', $layout)); ?>"><?php } ?>
<?php if (element('meta_keywords', $layout)) { ?><meta name="keywords" content="<?php echo html_escape(element('meta_keywords', $layout)); ?>"><?php } ?>
<?php if (element('meta_author', $layout)) { ?><meta name="author" content="<?php echo html_escape(element('meta_author', $layout)); ?>"><?php } ?>
<?php if (element('favicon', $layout)) { ?><link rel="shortcut icon" type="image/x-icon" href="<?php echo element('favicon', $layout); ?>" /><?php } ?>
<?php if (element('canonical', $view)) { ?><link rel="canonical" href="<?php echo element('canonical', $view); ?>" /><?php } ?>

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" />
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600">
<link rel="stylesheet" href="https://fonts.googleapis.com/earlyaccess/nanumgothic.css" />
<!-- Font Awesome & Themify -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/font-awesome.min.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/themify-icons.css'); ?>" />
<!-- Owl Carousel -->
<link rel="stylesheet" href="<?php echo base_url('assets/owlcarousel/css/owl.carousel.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/owlcarousel/css/owl.theme.css'); ?>">
<!-- Animate / Venobox / Magnific -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/fonts.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/venobox.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css'); ?>">
<!-- Theme CSS -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/menu.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css'); ?>">
<!-- jQuery UI CSS (CIBOARD 에디터용) -->
<link rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css" />

<?php echo $this->managelayout->display_css(); ?>

<!-- jQuery (CIBOARD가 먼저 요구) -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script type="text/javascript">
// CIBOARD 전역변수
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

<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo base_url('assets/js/html5shiv.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/respond.min.js'); ?>"></script>
<![endif]-->

<!-- CIBOARD 공통 JS -->
<script type="text/javascript" src="<?php echo base_url('assets/js/common.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.validate.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.validate.extension.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/sideview.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/js.cookie.js'); ?>"></script>

<?php echo $this->managelayout->display_js(); ?>
</head>

<body data-spy="scroll" data-offset="80" <?php echo isset($view) ? element('body_script', $view) : ''; ?>>

<!-- ===============================================================
     PRELOADER
================================================================ -->
<div class="preloader">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>

<!-- ===============================================================
     MOBILE MENU (Monoline 방식)
================================================================ -->
<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<!-- ===============================================================
     HEADER / NAVBAR
================================================================ -->
<?php
// 🎯 현재 페이지가 메인페이지인지 검사 (CIBOARD 및 CodeIgniter 표준 판별 방식)
$is_main = (current_url() == site_url() || $this->uri->segment(1) == '' || $this->uri->segment(1) == 'main') ? true : false;

// 메인이 아닐 때 서브페이지 전용 제어 클래스(sub-layout-header)를 주입합니다.
$header_sub_class = !$is_main ? ' sub-layout-header' : '';
?>

<header class="site-navbar js-sticky-header site-navbar-target<?php echo $header_sub_class; ?>" role="banner">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-6 col-xl-2">
                <h1 class="mb-0 site-logo">
                    <a href="<?php echo site_url(); ?>" title="<?php echo html_escape($this->cbconfig->item('site_title')); ?>">
                        <?php
                        $logo = $this->cbconfig->item('site_logo');
                        echo $logo ? $logo : html_escape($this->cbconfig->item('site_title'));
                        ?>
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

                        <li class="cb-member-menu">
                            <?php if ($this->member->is_member()) { ?>
                                <a href="<?php echo site_url('mypage'); ?>" class="nav-link" title="마이페이지"><i class="fa fa-user"></i></a>
                            <?php } else { ?>
                                <a href="<?php echo site_url('login?url=' . urlencode(current_full_url())); ?>" class="nav-link" title="로그인"><i class="fa fa-sign-in"></i> 로그인</a>
                            <?php } ?>
                        </li>
                        <?php if ($this->member->is_member()) { ?>
                        <li>
                            <a href="<?php echo site_url('login/logout?url=' . urlencode(current_full_url())); ?>" class="nav-link" title="로그아웃"><i class="fa fa-sign-out"></i> 로그아웃</a>
                        </li>
                        <?php } ?>
                        <?php if ($this->member->is_admin() === 'super') { ?>
                        <li>
                            <a href="<?php echo site_url(config_item('uri_segment_admin')); ?>" class="nav-link" title="관리자"><i class="fa fa-cog"></i></a>
                        </li>
                        <?php } ?>

                        <?php if ($this->member->is_member() && $this->cbconfig->item('use_notification')) { ?>
                        <li class="notifications">
                            <a href="<?php echo site_url('notification'); ?>" class="nav-link" title="알림">
                                <i class="fa fa-bell-o"></i>
                                <span class="badge notification_num"><?php echo number_format((int) element('notification_num', $layout)); ?></span>
                            </a>
                        </li>
                        <?php } ?>

                    </ul>
                </nav>
            </div>

            <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position:relative;top:3px;">
                <a href="#" class="site-menu-toggle js-menu-toggle float-right">
                    <span class="icon-menu h3"></span>
                </a>
            </div>

        </div>
    </div>
</header>

<style>
<?php if (!$is_main): ?>

/* ✅ 1번 수정: body에 헤더 높이만큼 padding-top을 줘서 본문 제목영역이 헤더에 가려지지 않도록 함 */
body > .wrapper > .main {
    padding-top: 110px !important;
}

/* ✅ 2번 + 3번 수정:
   - position: fixed → 처음부터 상단에 고정되어 스크롤해도 항상 따라옴
   - background: #ffffff → 흰색 배경
   - 기존 테마의 is-sticky 클래스 의존 제거 (fixed 자체가 sticky 역할)
*/
header.site-navbar.sub-layout-header {
    position: fixed !important;
    top: 0 !important;
    left: 0 !important;
    width: 100% !important;
    z-index: 9999 !important;
    background: #ffffff !important;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08) !important;
    padding: 1px 0 !important;
}

/* 흰 배경일 때 nav 링크 텍스트가 보이도록 어둡게 */
header.site-navbar.sub-layout-header .nav-link,
header.site-navbar.sub-layout-header .site-navigation a {
    color: #333333 !important;
}

header.site-navbar.sub-layout-header .nav-link:hover,
header.site-navbar.sub-layout-header .site-navigation a:hover {
    color: #e03131 !important; /* 브랜드 포인트 컬러 유지 */
}

/* 드롭다운 메뉴도 흰 배경으로 통일 */
header.site-navbar.sub-layout-header .dropdown {
    background: #ffffff !important;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.10) !important;
}

header.site-navbar.sub-layout-header .dropdown li a {
    color: #333333 !important;
}

header.site-navbar.sub-layout-header .dropdown li a:hover {
    color: #e03131 !important;
    background: #f8f8f8 !important;
}

/* 모바일 햄버거 아이콘도 어둡게 */
header.site-navbar.sub-layout-header .icon-menu {
    color: #333333 !important;
}

/* ✅ is-sticky 클래스가 붙어도 동일하게 고정 유지 (테마 JS 충돌 방지) */
header.site-navbar.sub-layout-header.is-sticky {
    position: fixed !important;
    top: 0 !important;
    background: #ffffff !important;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.10) !important;
}

<?php endif; ?>
</style>
<!-- END NAVBAR -->




<div class="floating-quick-menu">
    <ul>
        <li>
            <a href="tel:02-1234-5678">
                <i class="fa fa-phone"></i>
                <span>상담전화</span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url('assets/file/catalog.pdf'); ?>" target="_blank">
                <i class="fa fa-file-text-o"></i>
                <span>카탈로그</span>
            </a>
        </li>
        <li>
            <a href="<?php echo site_url('write/inquiry'); ?>">
                <i class="fa fa-envelope-o"></i>
                <span>제품문의</span>
            </a>
        </li>
        <li class="menu-youtube">
            <a href="https://www.youtube.com/@ruvix9129/videos" target="_blank">
                <i class="fa fa-youtube-play"></i>
                <span>YouTube</span>
            </a>
        </li>
    </ul>
</div>


<!-- ===============================================================
     플로팅배너
================================================================ -->
<style>
.floating-quick-menu {
    position: fixed;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    z-index: 9999;
    font-family: 'Poppins', 'Malgun Gothic', sans-serif;
}

.floating-quick-menu ul {
    list-style: none;
    padding: 0;
    margin: 0;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
    border-radius: 8px;
    overflow: hidden;
    background: #fff;
}

.floating-quick-menu ul li {
    border-bottom: 1px solid #f0f0f0;
    width: 75px;
    height: 75px;
    transition: all 0.3s ease;
}

.floating-quick-menu ul li:last-child {
    border-bottom: none;
}

.floating-quick-menu ul li a {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
    text-decoration: none;
    color: #333;
    transition: all 0.3s ease;
}

/* 아이콘 스타일 (FontAwesome 공통 적용) */
.floating-quick-menu ul li a i {
    font-size: 20px;
    margin-bottom: 6px;
    color: #555;
    transition: all 0.3s ease;
}

/* 텍스트 스타일 */
.floating-quick-menu ul li a span {
    font-size: 11px;
    font-weight: 500;
    letter-spacing: -0.5px;
}

/* 일반 메뉴 호버 시 반응 (RUVIX 브랜드 레드 스칼렛 톤 반영) */
.floating-quick-menu ul li:hover {
    background: #ff3333;
}
.floating-quick-menu ul li:hover a,
.floating-quick-menu ul li:hover a i {
    color: #fff !important;
}

/* 유튜브 메뉴 전용 호버 디자인 */
.floating-quick-menu ul li.menu-youtube:hover {
    background: #e52d27; /* 유튜브 고유 레드 컬러 */
}

/* 모바일 화면(768px 이하) 대응: 화면 하단에 고정 바 형태로 전환 */
@media (max-width: 768px) {
    .floating-quick-menu {
        right: 0;
        top: auto;
        bottom: 0;
        transform: none;
        width: 100%;
    }
    .floating-quick-menu ul {
        display: flex;
        border-radius: 0;
        box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
    }
    .floating-quick-menu ul li {
        flex: 1;
        height: 60px;
        border-bottom: none;
        border-right: 1px solid #f0f0f0;
    }
    .floating-quick-menu ul li:last-child {
        border-right: none;
    }
    .floating-quick-menu ul li a i {
        font-size: 16px;
        margin-bottom: 3px;
    }
    .floating-quick-menu ul li a span {
        font-size: 10px;
    }
}
</style>






<!-- ===============================================================
     MAIN CONTENT
================================================================ -->
<div class="wrapper">
    <div class="main">
        <div class="container">
            <div class="row">

                <?php if (element('use_sidebar', $layout)) { ?>
                <div class="col-md-9 col-sm-8 col-xs-12 mb20">
                <?php } ?>

                <!-- 본문 시작 -->
                <?php if (isset($yield)) echo $yield; ?>
                <!-- 본문 끝 -->

                <?php if (element('use_sidebar', $layout)) { ?>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="sidebar">
                        <?php $this->load->view(element('layout_skin_path', $layout) . '/sidebar'); ?>
                    </div>
                </div>
                <?php } ?>

            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.main -->
</div><!-- /.wrapper -->

<!-- ===============================================================
     FOOTER (Monoline 스타일)
================================================================ -->
<div class="footer" style="background-image:url(<?php echo base_url('assets/img/bg/footer.png'); ?>); background-size:cover;">
    <div class="container">
        <div class="row footer_bg">

            <!-- 로고 + 소개 + SNS -->
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="footer_logo">
                    <?php echo $this->cbconfig->item('site_logo') ? $this->cbconfig->item('site_logo') : '<span class="footer-site-title">' . html_escape($this->cbconfig->item('site_title')) . '</span>'; ?>
                    <p><?php echo $this->cbconfig->item('company_address') ? html_escape($this->cbconfig->item('company_address')) : ''; ?></p>
                </div>
                <div class="social_profile">
                    <ul>
                        <li><a href="#" class="f_facebook"><i class="fa fa-facebook" title="Facebook"></i></a></li>
                        <li><a href="#" class="f_twitter"><i class="fa fa-youtube" title="YouTube"></i></a></li>
                        <li><a href="#" class="f_instagram"><i class="fa fa-instagram" title="Instagram"></i></a></li>
                        <li><a href="#" class="f_linkedin"><i class="fa fa-linkedin" title="LinkedIn"></i></a></li>
                    </ul>
                </div>
            </div><!-- END COL -->

            <!-- 사이트 링크 -->
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="single_footer">
                    <h4>사이트 안내</h4>
                    <ul>
                        <li><a href="<?php echo document_url('aboutus'); ?>" title="회사소개">회사소개</a></li>
                        <li><a href="<?php echo document_url('provision'); ?>" title="이용약관">이용약관</a></li>
                        <li><a href="<?php echo document_url('privacy'); ?>" title="개인정보 취급방침">개인정보 취급방침</a></li>
                        <?php if ($this->cbconfig->item('open_currentvisitor')) { ?>
                        <li><a href="<?php echo site_url('currentvisitor'); ?>" title="현재접속자">현재접속자</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div><!-- END COL -->

            <!-- 회사 정보 -->
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="single_footer">
                    <h4>회사 정보</h4>
                    <ul>
                        <?php if ($this->cbconfig->item('company_owner')) { ?>
                        <li><span>대표 <?php echo html_escape($this->cbconfig->item('company_owner')); ?></span></li>
                        <?php } ?>
                        <?php if ($this->cbconfig->item('company_phone')) { ?>
                        <li><span>전화 <?php echo html_escape($this->cbconfig->item('company_phone')); ?></span></li>
                        <?php } ?>
                        <?php if ($this->cbconfig->item('company_fax')) { ?>
                        <li><span>팩스 <?php echo html_escape($this->cbconfig->item('company_fax')); ?></span></li>
                        <?php } ?>
                        <?php if ($this->cbconfig->item('company_reg_no')) { ?>
                        <li><span>사업자 <?php echo html_escape($this->cbconfig->item('company_reg_no')); ?></span></li>
                        <?php } ?>
                        <?php if ($this->cbconfig->item('company_retail_sale_no')) { ?>
                        <li><span>통신판매 <?php echo html_escape($this->cbconfig->item('company_retail_sale_no')); ?></span></li>
                        <?php } ?>
                    </ul>
                </div>
            </div><!-- END COL -->

            <!-- 포인트 랭킹 / 뉴스레터 -->
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="newsletter-form">
                    <h4>바로가기</h4>
                    <ul class="single_footer_link">
                        <li><a href="<?php echo site_url('pointranking'); ?>" title="포인트 전체랭킹">포인트 전체랭킹</a></li>
                        <li><a href="<?php echo site_url('pointranking/month'); ?>" title="포인트 월별랭킹">포인트 월별랭킹</a></li>
                        <li><a href="<?php echo site_url('levelup'); ?>" title="레벨업">레벨업</a></li>
                        <?php if ($this->member->is_admin() === 'super') { ?>
                        <li><a href="<?php echo site_url(config_item('uri_segment_admin')); ?>" title="관리자 페이지"><i class="fa fa-cog"></i> 관리자 페이지</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div><!-- END COL -->

        </div><!-- END ROW -->

        <!-- 카피라이트 -->
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="footer_copyright">
                    <p>
                        &copy; <?php echo date('Y'); ?> <?php echo html_escape($this->cbconfig->item('site_title')); ?>. All Rights Reserved.
                        <?php if ($this->cbconfig->item('company_admin_name')) { ?>
                        &nbsp;|&nbsp; 정보관리책임자: <?php echo html_escape($this->cbconfig->item('company_admin_name')); ?>
                        <?php } ?>
                    </p>
                    <!-- PC/모바일 전환 -->
                    <?php if ($this->cbconfig->get_device_view_type() === 'mobile') { ?>
                    <p><a href="<?php echo current_full_url(); ?>" class="btn btn-sm viewpcversion">PC 버전으로 보기</a></p>
                    <?php } elseif ($this->cbconfig->get_device_type() === 'mobile') { ?>
                    <p><a href="<?php echo current_full_url(); ?>" class="btn btn-sm viewmobileversion">모바일 버전으로 보기</a></p>
                    <?php } ?>
                </div>
            </div>
        </div>

    </div><!-- END CONTAINER -->
</div>
<!-- END FOOTER -->

<!-- ===============================================================
     모바일 사이드 메뉴 (CIBOARD 기존 방식 유지)
================================================================ -->
<?php if ($this->cbconfig->get_device_view_type() === 'mobile') { ?>
<div id="side_menu">
    <div class="side_wr add_side_wr">
        <div id="isroll_wrap" class="side_inner_rel">
            <div class="side_inner_abs">
                <div class="m_search">
                    <form name="mobile_header_search" id="mobile_header_search" action="<?php echo site_url('search'); ?>" onSubmit="return headerSearch(this);">
                        <input type="text" placeholder="Search" class="form-control per80" name="skeyword" accesskey="s" />
                    </form>
                </div>
                <div class="m_login">
                    <?php if ($this->member->is_member()) { ?>
                        <span><a href="<?php echo site_url('login/logout?url=' . urlencode(current_full_url())); ?>" class="btn btn-primary btn-xs" title="로그아웃"><i class="fa fa-sign-out"></i> 로그아웃</a></span>
                        <span><a href="<?php echo site_url('mypage'); ?>" class="btn btn-primary btn-xs" title="마이페이지"><i class="fa fa-user"></i> 마이페이지</a></span>
                    <?php } else { ?>
                        <span><a href="<?php echo site_url('login?url=' . urlencode(current_full_url())); ?>" class="btn btn-primary btn-xs" title="로그인"><i class="fa fa-sign-in"></i> 로그인</a></span>
                        <span><a href="<?php echo site_url('register'); ?>" class="btn btn-primary btn-xs" title="회원가입"><i class="fa fa-user"></i> 회원가입</a></span>
                    <?php } ?>
                </div>
                <ul class="m_board">
                    <?php if ($this->cbconfig->item('open_currentvisitor')) { ?>
                    <li><a href="<?php echo site_url('currentvisitor'); ?>" title="현재 접속자"><span class="fa fa-link"></span> 현재 접속자</a></li>
                    <?php } ?>
                    <?php if ($this->member->is_member()) { ?>
                    <li><a href="<?php echo site_url('notification'); ?>" title="나의 알림"><span class="fa fa-bell-o"></span> 알림 : <?php echo number_format((int) element('notification_num', $layout)); ?> 개</a></li>
                        <?php if ($this->cbconfig->item('use_note') && $this->member->item('mem_use_note')) { ?>
                        <li><a href="javascript:;" onClick="note_list();" title="나의 쪽지"><span class="fa fa-envelope"></span> 쪽지 : <?php echo number_format((int) $this->member->item('meta_unread_note_num')); ?> 개</a></li>
                        <?php } ?>
                        <?php if ($this->cbconfig->item('use_point')) { ?>
                        <li><a href="<?php echo site_url('mypage/point'); ?>" title="나의 포인트"><span class="fa fa-gift"></span> 포인트 : <?php echo number_format((int) $this->member->item('mem_point')); ?> 점</a></li>
                        <?php } ?>
                    <?php } ?>
                </ul>
                <ul class="m_menu">
                    <?php
                    if (element('menu', $layout)) {
                        $side_menu_options = array('ul_class' => 'dropdown-custom-menu', 'icon_class' => 'fa-caret-down', 'link_class' => 'text_link');
                        echo render_menu_accordion(element('menu', $layout), 0, $side_menu_counter, $side_menu_options);
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.hoverIntent.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.ba-outside-events.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/iscroll.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/mobile.sidemenu.js'); ?>"></script>
<?php } ?>

<!-- ===============================================================
     JS (body 하단 - Monoline 순서)
================================================================ -->
<!-- Bootstrap -->
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<!-- Modernizr -->
<script src="<?php echo base_url('assets/js/modernizr-2.8.3.min.js'); ?>"></script>
<!-- Owl Carousel -->
<script src="<?php echo base_url('assets/owlcarousel/js/owl.carousel.min.js'); ?>"></script>
<!-- Magnific Popup -->
<script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js'); ?>"></script>
<!-- MixItUp -->
<script src="<?php echo base_url('assets/js/jquery.mixitup.js'); ?>"></script>
<!-- Appear / Inview / Stellar / WOW -->
<script src="<?php echo base_url('assets/js/jquery.appear.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.inview.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.stellar.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/wow.min.js'); ?>"></script>
<!-- Menu / Sticky / Scroll -->
<script src="<?php echo base_url('assets/js/menu.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.sticky.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/scrolltopcontrol.js'); ?>"></script>
<!-- Scripts -->
<script src="<?php echo base_url('assets/js/scripts.js'); ?>"></script>

<!-- CIBOARD 세션/쿠키 처리 -->
<script type="text/javascript">
$(document).on('click', '.viewpcversion', function(){
    Cookies.set('device_view_type', 'desktop', { expires: 1 });
});
$(document).on('click', '.viewmobileversion', function(){
    Cookies.set('device_view_type', 'mobile', { expires: 1 });
});

// 헤더 검색
function headerSearch(f) {
    var skeyword = f.skeyword.value.replace(/(^\s*)|(\s*$)/g, '');
    if (skeyword.length < 2) {
        alert('2글자 이상으로 검색해 주세요');
        f.skeyword.focus();
        return false;
    }
    return true;
}
</script>

<?php echo element('popup', $layout); ?>
<?php echo $this->cbconfig->item('footer_script'); ?>
<!--
Layout Directory : <?php echo element('layout_skin_path', $layout); ?>,
Layout URL : <?php echo element('layout_skin_url', $layout); ?>,
Skin Directory : <?php echo element('view_skin_path', $layout); ?>,
Skin URL : <?php echo element('view_skin_url', $layout); ?>,
-->
</body>
</html>