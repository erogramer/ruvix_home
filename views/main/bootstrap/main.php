<div class="preloader">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>
<section id="home" class="home_video html-video">				
    <video class="text-center" muted="" autoplay="" loop="">
        <source type="video/webm" src="<?php echo base_url('assets/videos/video.webm'); ?>">
        <source type="video/mp4" src="<?php echo base_url('assets/videos/video.mp4'); ?>">
        Your browser does not support the video tag.
    </video>
    <div class="hero-text slider-caption text-center">
        <h2 style="color: #f74444">RUVIX</h2>
        <h2>Creative Solution Partner</h2>
        <p>미래를 선도하는 기업</p>        
    </div> 			
</section>	   


<section class="feature_area">
    <div class="container">    
        <div class="row feature_bg equal-height-wrapper">
            <div class="section-title text-center col-12">        
                <h2>What we do</h2>
                <p>RUVIX는 산업전반에 걸쳐서 공정개선 및 혁신과 그로 인한 생산성 및 경쟁력 제고를 창출해 나가는데 오랜 경험과 KNOW-HOW를 가진 전문 인재들이 모여서 차별화된 HIGH-END 제품과 서비스, 창의적인 솔루션을 다양하게 제공합니다.</p>
            </div>                    
            
            <div class="col-lg-3 col-sm-6 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                <div class="single_feature custom-feature-box">
                    <div class="feature_icon_box">
                        <img src="<?php echo base_url('assets/img/main-page/uv-curing-icon.png'); ?>" alt="UV 경화기 아이콘" />
                    </div>
                    <h4>UV 경화기</h4>
                    <p>UV경화(硬化)란 자외선이 가지고 있는 광화학적 특징을 이용하여 액체 상태의 페인트, 잉크, 접착제등을 딱딱하게 굳히는 작용을 말합니다.</p>
                    <a class="btn_one" href="<?php echo site_url('about'); ?>">자세히 보기</a>
                </div>
            </div>
            
            <div class="col-lg-3 col-sm-6 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
                <div class="single_feature custom-feature-box">
                    <div class="feature_icon_box">
                        <img src="<?php echo base_url('assets/img/main-page/dispenser-icon.png'); ?>" alt="Dispenser 아이콘" />
                    </div>
                    <h4>Dispenser &<br>가압탱크 system</h4>
                    <p>Dispenser & 가압탱크 system의 제품군으로는 VISCO TEC, 가압 Tank System, 탁상형 ROBOT, 공압용 Dispenser, 테프론튜브 등이 있습니다.</p>
                    <a class="btn_one" href="<?php echo site_url('about'); ?>">자세히 보기</a>
                </div>
            </div>
            
            <div class="col-lg-3 col-sm-6 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="single_feature custom-feature-box">
                    <div class="feature_icon_box">
                        <img src="<?php echo base_url('assets/img/main-page/sensor-icon.png'); ?>" alt="Sensor 아이콘" />
                    </div>
                    <h4>Sensor</h4>
                    <p>정밀 제어 및 계측을 위한 하이엔드 갭 센서 레이업입니다. 측정 대상물의 재질이나 형상에 구애받지 않고 가혹한 공정 환경에서도 최적의 성능과 안정적인 출력 특성을 보장합니다.</p>
                    <a class="btn_one" href="<?php echo site_url('about'); ?>">자세히 보기</a>
                </div>
            </div>
            
            <div class="col-lg-3 col-sm-6 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
                <div class="single_feature custom-feature-box">
                    <div class="feature_icon_box">
                        <img src="<?php echo base_url('assets/img/main-page/lense-icon.png'); ?>" alt="비전 검사용 렌즈 아이콘" />
                    </div>
                    <h4>비전 검사용 렌즈</h4>
                    <p>비전 검사용 렌즈의 제품군으로는 텔레센트릭 렌즈, 바이텔레센트릭 렌즈, 논텔레센트릭 렌즈, LED 조명, 할로겐 조명 등이 있습니다.</p>
                    <a class="btn_one" href="<?php echo site_url('about'); ?>">자세히 보기</a>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
/* 1. Flex 구조를 적용해 한 줄에 있는 모든 박스 높이를 자동 일치 */
.equal-height-wrapper {
    display: flex;
    flex-wrap: wrap;
}

/* 2. 각 박스 내부 요소들을 세로 배치하여 버튼 위치까지 아래로 일렬 정렬 */
.custom-feature-box {
    display: flex;
    flex-direction: column;
    height: 100%;
    min-height: 420px; /* 데스크톱 기준 최소 안정 높이 확보 */
    padding: 40px 25px 35px 25px !important;
    box-sizing: border-box;
}

/* 3. 제목 스타일 정렬 깨짐 방지 */
.custom-feature-box h4 {
    min-height: 48px; 
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 15px;
    font-size: 18px;
    line-height: 1.3;
}

/* 4. 본문 텍스트가 남는 공간을 채워주어 하단 버튼 위치를 고정시킴 */
.custom-feature-box p {
    flex-grow: 1;
    margin-bottom: 25px;
    font-size: 14px;
    line-height: 1.6;
    color: #666;
}

/* 5. 아이콘 컨테이너 크기 일치화 */
.feature_icon_box {
    height: 70px;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.feature_icon_box img {
    max-height: 100%;
    width: auto;
    object-fit: contain;
}

/* 모바일 화면에서는 플렉스 해제하여 순차적 배치 */
@media (max-width: 767px) {
    .equal-height-wrapper {
        display: block;
    }
    .custom-feature-box {
        min-height: auto;
        margin-bottom: 20px;
    }
}
</style>





<!--

<section data-stellar-background-ratio="0.3" class="counter_feature section-padding">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-3 col-sm-6 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                <div class="single-project">
                    <img src="<?php echo base_url('assets/img/icon/counter-1.png'); ?>" alt="icon" />
                    <h2 class="counter-num">32652</h2>
                    <h4>Happy Customers</h4>
                </div>							
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
                <div class="single-project">
                    <img src="<?php echo base_url('assets/img/icon/counter-2.png'); ?>" alt="icon" />
                    <h2 class="counter-num">21821</h2>
                    <h4>Project Done</h4>
                </div>
            </div><div class="col-lg-3 col-sm-6 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="single-project">
                    <img src="<?php echo base_url('assets/img/icon/counter-3.png'); ?>" alt="icon" />
                    <h2 class="counter-num">5660</h2>
                    <h4>In Business</h4>
                </div>
            </div><div class="col-lg-3 col-sm-6 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
                <div class="single-project single-project-mrnone">
                    <img src="<?php echo base_url('assets/img/icon/counter-4.png'); ?>" alt="icon" />
                    <h2 class="counter-num">11859</h2>
                    <h4>Support Cases</h4>
                </div>					
            </div></div><div class="row text-center">						
            <div class="col-lg-8 offset-lg-2 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="video_btn" style="background-image: url(<?php echo base_url('assets/img/bg/video-bg.jpg'); ?>);  background-size:cover; background-position: center center;">
                    <a class="video-play" href="https://www.youtube.com/watch?v=alswD2tCc_Q"><i class="ti-video-clapper"></i></a>
                </div>	
            </div>						
        </div></div></section>
<section class="why_choose_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                <div class="single_why_choose">
                    <h2>We create <br /> amazing digital <br /> products</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type specimen book. It is a long established fact that a reader. It was popularised in the with the release.</p>
                    <a class="btn_one" href="<?php echo site_url('about'); ?>">Learn More</a>
                </div>							
            </div><div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                <div class="single_why_choose_img">
                    <img src="<?php echo base_url('assets/img/home-office.png'); ?>" class="img-fluid" alt="about-image" />
                </div>							
            </div></div></div></section>
<section id="portfolio" class="portfolio_area section-padding">
    <div class="container-fluid">
        <div class="section-title text-center">
            <h2>Latest Works</h2>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
        </div>	
        <div class="col-lg-12 text-center">
            <div class="portfolio_filter">
                <ul>
                    <li class="active filter" data-filter="all">All</li>
                    <li class="filter" data-filter=".branding">Branding</li>
                    <li class="filter" data-filter=".webtemplate">Web Template</li>
                    <li class="filter" data-filter=".seo">SEO</li>
                    <li class="filter" data-filter=".digital">Digital Marketing</li>
                </ul>
            </div>
        </div>					
        <div class="portfolio-grid">									
            <div class="row">									
                <div class="col-lg-4 col-sm-6 col-xs-12 portfolio-item mix webtemplate seo">
                    <div class="single-gallery">
                        <img src="<?php echo base_url('assets/img/portfolio/1.jpg'); ?>" class="img-fluid" alt="gallery Image">
                        <a href="<?php echo base_url('assets/img/portfolio/1.jpg'); ?>" class="gallery_enlarge_icon"><i class="ti-eye"></i></a>
                        <h4><a href="<?php echo site_url('portfolio/project/1'); ?>">View Project</a></h4>
                    </div>
                </div><div class="col-lg-4 col-sm-6 col-xs-12 portfolio-item mix branding">
                    <div class="single-gallery">
                        <img src="<?php echo base_url('assets/img/portfolio/2.jpg'); ?>" class="img-fluid" alt="gallery Image">
                        <a href="<?php echo base_url('assets/img/portfolio/2.jpg'); ?>" class="gallery_enlarge_icon"><i class="ti-eye"></i></a>
                        <h4><a href="<?php echo site_url('portfolio/project/2'); ?>">View Project</a></h4>
                    </div>
                </div><div class="col-lg-4 col-sm-6 col-xs-12 portfolio-item  mix webtemplate digital">
                    <div class="single-gallery">
                        <img src="<?php echo base_url('assets/img/portfolio/3.jpg'); ?>" class="img-fluid" alt="gallery Image">
                        <a href="<?php echo base_url('assets/img/portfolio/3.jpg'); ?>" class="gallery_enlarge_icon"><i class="ti-eye"></i></a>
                        <h4><a href="<?php echo site_url('portfolio/project/3'); ?>">View Project</a></h4>
                    </div>
                </div><div class="col-lg-6 col-sm-6 col-xs-12 portfolio-item  mix digital seo">
                    <div class="single-gallery">
                        <img src="<?php echo base_url('assets/img/portfolio/4.jpg'); ?>" class="img-fluid" alt="gallery Image">
                        <a href="<?php echo base_url('assets/img/portfolio/4.jpg'); ?>" class="gallery_enlarge_icon"><i class="ti-eye"></i></a>
                        <h4><a href="<?php echo site_url('portfolio/project/4'); ?>">View Project</a></h4>
                    </div>
                </div><div class="col-lg-6 col-sm-6 col-xs-12 portfolio-item mix webtemplate seo">
                    <div class="single-gallery">
                        <img src="<?php echo base_url('assets/img/portfolio/5.jpg'); ?>" class="img-fluid" alt="gallery Image">
                        <a href="<?php echo base_url('assets/img/portfolio/5.jpg'); ?>" class="gallery_enlarge_icon"><i class="ti-eye"></i></a>
                        <h4><a href="<?php echo site_url('portfolio/project/5'); ?>">View Project</a></h4>
                    </div>
                </div></div><div class="col-lg-12 text-center">
                <div class="portfolio_btn">
                    <a class="btn_one" href="<?php echo site_url('portfolio'); ?>">View More</a>
                </div>
            </div></div>
    </div></section>
<section class="skills_area section-padding" style="background-image: url(<?php echo base_url('assets/img/bg/skill-bg.jpg'); ?>);  background-size:cover;background-position:center;">   
    <div class="container">				
        <div class="row">					
            <div class="col-lg-5 col-sm-8 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
                <div class="skill_bg">
                    <div class="skill_content">
                        <h2>Generating New Ideas. Solving Big Problems</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard ever since the when an unknown printer.</p>
                    </div>	
                    <div class="skill_bar">
                        <div class="progress-bar-linear">
                            <p class="progress-bar-text">Web Design
                                <span>85%</span>
                            </p>
                            <div class="progress-bar">
                                <span data-percent="85"></span>
                            </div>
                        </div>
                        <div class="progress-bar-linear">
                            <p class="progress-bar-text">Branding
                                <span>70%</span>
                            </p>
                            <div class="progress-bar">
                                <span data-percent="70"></span>
                            </div>
                        </div>	
                        <div class="progress-bar-linear">
                            <p class="progress-bar-text">Mobile App
                                <span>60%</span>
                            </p>
                            <div class="progress-bar">
                                <span data-percent="60"></span>
                            </div>
                        </div>						
                    </div>
                </div>
            </div></div></div></section>
<div class="promotional_area section-padding">
    <div class="container">				
        <div class="row">						
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="promotional_content">
                    <img src="<?php echo base_url('assets/img/team-image.jpg'); ?>" class="img-fluid" alt="team-image" />
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div></div></div></div>
<div class="testimonial_area section-padding">
    <div class="container">
        <div class="section-title text-center">
            <h2>From Our client</h2>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
        </div>				
        <div class="row">					
            <div class="col-lg-10 offset-lg-1 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                        <div class="single_testimonial">
                            <div class="testimonial_img">
                                <img src="<?php echo base_url('assets/img/testimonial/1.jpg'); ?>" alt="testimonial-image" />
                            </div>
                            <p>Sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore.</p>
                            <h4>Alex Chohan</h4>
                            <h5>Director, Accurate themes</h5>
                        </div>
                    </div><div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
                        <div class="single_testimonial">
                            <div class="testimonial_img">
                                <img src="<?php echo base_url('assets/img/testimonial/2.jpg'); ?>" alt="testimonial-image" />
                            </div>
                            <p>Sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore.</p>
                            <h4>Johnson Brown</h4>
                            <h5>Marketing Head, Spyro themes</h5>
                        </div>
                    </div><div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                        <div class="single_testimonial">
                            <div class="testimonial_img">
                                <img src="<?php echo base_url('assets/img/testimonial/3.jpg'); ?>" alt="testimonial-image" />
                            </div>
                            <p>Sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore.</p>
                            <h4>Devid Miller</h4>
                            <h5>Founder, theme ocean</h5>
                        </div>
                    </div><div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
                        <div class="single_testimonial">
                            <div class="testimonial_img">
                                <img src="<?php echo base_url('assets/img/testimonial/4.jpg'); ?>" alt="testimonial-image" />
                            </div>
                            <p>Sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore.</p>
                            <h4>Maya Khan</h4>
                            <h5>Chairman, Web template</h5>
                        </div>
                    </div></div>
            </div>
        </div></div></div>

-->


<section class="blog_area section-padding">
    <div class="container">
        <div class="section-title text-center">
            <h2>제품소개 및 시연영상</h2>
            <!-- <p>RUVIX의 제품을 소개 및 시연.</p> -->
        </div>              
        <div class="row text-center">                   
            
            <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                <div class="home_single_blog">
                    
                    <div class="ratio-wrapper">
                        <iframe src="https://www.youtube.com/embed/n08F_bkDI0g?si=l4wiLCLxUoyl8Tno" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    
                    <div class="home_blog_content">
                        <div class="blog_title_info">
                            <h2><a href="<?php echo site_url('blog/view/1'); ?>">제목을 좀 써주고요</a></h2>
                            <span>August 31, 2026 날짜는 지울까?</span>
                            <span><a href="<?php echo site_url('blog/category/marketing'); ?>">UV 경화기</a></span>
                        </div>
                        <p>설명을 좀 써줄까요? 이 동영상은 영국에서 처음시작되어 일년에 한바퀴를 돌면서 받는 사람에게 행운을 주었고 지금은 당신에게로 옮겨진 이 편지는 4일 안에 당신 곁을...</p>
                        <a class="home_b_btn" href="<?php echo site_url('blog/view/1'); ?>">더보기</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                <div class="home_single_blog">
                    
                    <div class="ratio-wrapper">
                        <iframe src="https://www.youtube.com/embed/gagIrjQZCn8?si=irFvwSHR2ryQW1dG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    
                    <div class="home_blog_content">
                        <div class="blog_title_info">
                            <h2><a href="<?php echo site_url('blog/view/1'); ?>">제목을 좀 써주고요</a></h2>
                            <span>August 31, 2026 날짜는 지울까?</span>
                            <span><a href="<?php echo site_url('blog/category/marketing'); ?>">UV 경화기</a></span>
                        </div>
                        <p>설명을 좀 써줄까요? 이 동영상은 영국에서 처음시작되어 일년에 한바퀴를 돌면서 받는 사람에게 행운을 주었고 지금은 당신에게로 옮겨진 이 편지는 4일 안에 당신 곁을...</p>
                        <a class="home_b_btn" href="<?php echo site_url('blog/view/1'); ?>">더보기</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                <div class="home_single_blog">
                    
                    <div class="ratio-wrapper">
                        <iframe src="https://www.youtube.com/embed/8K94tobuvCw?si=AgiAQSFKqXG739PE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    
                    <div class="home_blog_content">
                        <div class="blog_title_info">
                            <h2><a href="<?php echo site_url('blog/view/1'); ?>">제목을 좀 써주고요</a></h2>
                            <span>August 31, 2026 날짜는 지울까?</span>
                            <span><a href="<?php echo site_url('blog/category/marketing'); ?>">UV 경화기</a></span>
                        </div>
                        <p>설명을 좀 써줄까요? 이 동영상은 영국에서 처음시작되어 일년에 한바퀴를 돌면서 받는 사람에게 행운을 주었고 지금은 당신에게로 옮겨진 이 편지는 4일 안에 당신 곁을...</p>
                        <a class="home_b_btn" href="<?php echo site_url('blog/view/1'); ?>">더보기</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                <div class="home_single_blog">
                    
                    <div class="ratio-wrapper">
                        <iframe src="https://www.youtube.com/embed/n08F_bkDI0g?si=l4wiLCLxUoyl8Tno" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    
                    <div class="home_blog_content">
                        <div class="blog_title_info">
                            <h2><a href="<?php echo site_url('blog/view/1'); ?>">제목을 좀 써주고요</a></h2>
                            <span>August 31, 2026 날짜는 지울까?</span>
                            <span><a href="<?php echo site_url('blog/category/marketing'); ?>">UV 경화기</a></span>
                        </div>
                        <p>설명을 좀 써줄까요? 이 동영상은 영국에서 처음시작되어 일년에 한바퀴를 돌면서 받는 사람에게 행운을 주었고 지금은 당신에게로 옮겨진 이 편지는 4일 안에 당신 곁을...</p>
                        <a class="home_b_btn" href="<?php echo site_url('blog/view/1'); ?>">더보기</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                <div class="home_single_blog">
                    
                    <div class="ratio-wrapper">
                        <iframe src="https://www.youtube.com/embed/gagIrjQZCn8?si=irFvwSHR2ryQW1dG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    
                    <div class="home_blog_content">
                        <div class="blog_title_info">
                            <h2><a href="<?php echo site_url('blog/view/1'); ?>">제목을 좀 써주고요</a></h2>
                            <span>August 31, 2026 날짜는 지울까?</span>
                            <span><a href="<?php echo site_url('blog/category/marketing'); ?>">UV 경화기</a></span>
                        </div>
                        <p>설명을 좀 써줄까요? 이 동영상은 영국에서 처음시작되어 일년에 한바퀴를 돌면서 받는 사람에게 행운을 주었고 지금은 당신에게로 옮겨진 이 편지는 4일 안에 당신 곁을...</p>
                        <a class="home_b_btn" href="<?php echo site_url('blog/view/1'); ?>">더보기</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                <div class="home_single_blog">
                    
                    <div class="ratio-wrapper">
                        <iframe src="https://www.youtube.com/embed/8K94tobuvCw?si=AgiAQSFKqXG739PE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    
                    <div class="home_blog_content">
                        <div class="blog_title_info">
                            <h2><a href="<?php echo site_url('blog/view/1'); ?>">제목을 좀 써주고요</a></h2>
                            <span>August 31, 2026 날짜는 지울까?</span>
                            <span><a href="<?php echo site_url('blog/category/marketing'); ?>">UV 경화기</a></span>
                        </div>
                        <p>설명을 좀 써줄까요? 이 동영상은 영국에서 처음시작되어 일년에 한바퀴를 돌면서 받는 사람에게 행운을 주었고 지금은 당신에게로 옮겨진 이 편지는 4일 안에 당신 곁을...</p>
                        <a class="home_b_btn" href="<?php echo site_url('blog/view/1'); ?>">더보기</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>


<style>
/* 모든 블로그 박스 안의 ratio-wrapper 유연화 */
.home_single_blog .ratio-wrapper {
    position: relative;
    width: 100% !important;
    padding-top: 56.25% !important; /* 16:9 황금비율 고정 */
    overflow: hidden;
    border-radius: 4px;
    background: #000; /* 영상 로딩 전 검은색 배경 매너 배치 */
}

/* ratio-wrapper 내부에 있는 모든 iframe을 프레임에 꽉 차게 일치화 */
.home_single_blog .ratio-wrapper iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100% !important;
    height: 100% !important;
    border: 0;
}
</style>


<div id="contact" class="contact_area section-padding">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="section-title-white">제품 문의</h2>
            <p class="section-title-white">루비스의 제품 및 기타 궁금한 사항을 남겨주세요. 빠르고 친절한 응답을 약속드리겠습니다.</p>
        </div>				
        <div class="row">					
            <div class="offset-lg-1 col-lg-10 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
                <div class="contact">
                    <form class="form" name="enq" method="post" action="<?php echo site_url('contact/send'); ?>" onsubmit="return validation();">
                        <div class="row">                            
                            <div class="form-group col-md-12">
                                <input type="text" name="Subject" class="form-control" placeholder="제목" required="required">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="이름" required="required">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="company" class="form-control" placeholder="회사명" required="required">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="department" class="form-control" placeholder="부서" required="required">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="position" class="form-control" placeholder="직책" required="required">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="tel" placeholder="연락처" required="required" oninput="formatPhoneNumber(this)" maxlength="13">
                                <p class="section-title-white">*연락처는 숫자만 입력해 주세요. 전화번호 형식으로 자동변환됩니다.</p>
                                <br>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="이메일" required="required">
                            </div>                            
                            <div class="form-group col-md-12">
                                <textarea rows="6" name="message" class="form-control" placeholder="내용을 입력해 주세요" required="required"></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" value="Send message" name="submit" id="submitButton" class="contact_btn" title="Submit Your Message!">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function formatPhoneNumber(input) {
    // 1. 숫자가 아닌 모든 문자(공백, 한글, 영문 등)를 실시간으로 완전히 삭제
    let rawStr = input.value.replace(/[^0-9]/g, '');
    
    let formattedStr = '';
    
    // 2. 서울 지역번호(02) 케이스 핸들링
    if (rawStr.startsWith('02')) {
        if (rawStr.length <= 2) {
            formattedStr = rawStr;
        } else if (rawStr.length <= 5) { // 02-123
            formattedStr = rawStr.replace(/(\d{2})(\d+)/, '$1-$2');
        } else if (rawStr.length <= 9) { // 02-123-4567
            formattedStr = rawStr.replace(/(\d{2})(\d{3,4})(\d+)/, '$1-$2-$3');
        } else { // 02-1234-5678 (최대 10자리 국선 패턴 제한)
            formattedStr = rawStr.substr(0, 10).replace(/(\d{2})(\d{4})(\d{4})/, '$1-$2-$3');
        }
    } 
    // 3. 전국 대표번호 (1588, 1644 등 국번 없는 8자리 번호) 케이스 핸들링
    else if (rawStr.length === 8 && (rawStr.startsWith('15') || rawStr.startsWith('16') || rawStr.startsWith('18'))) {
        formattedStr = rawStr.replace(/(\d{4})(\d{4})/, '$1-$2');
    }
    // 4. 일반 휴대폰 번호 및 타 지역번호 (010, 031, 051 등 3자리 시작) 케이스 핸들링
    else {
        if (rawStr.length <= 3) {
            formattedStr = rawStr;
        } else if (rawStr.length <= 7) { // 010-1234
            formattedStr = rawStr.replace(/(\d{3})(\d+)/, '$1-$2');
        } else if (rawStr.length <= 11) { // 010-123-4567 또는 010-1234-5678
            formattedStr = rawStr.replace(/(\d{3})(\d{3,4})(\d{4})/, '$1-$2-$3');
        } else { // 11자리가 넘어가는 무효 패턴은 11자리에서 컷팅
            formattedStr = rawStr.substr(0, 11).replace(/(\d{3})(\d{4})(\d{4})/, '$1-$2-$3');
        }
    }
    
    // 최종 가공된 스트링을 인풋 필드에 동기화
    input.value = formattedStr;
}
</script>








<div class="partner-logo section-padding">
    <div class="container">										
        <div class="row text-center">
            <div class="col-lg-2 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                <div class="single_logo single_logo_bm">
                    <a href="#"><img src="<?php echo base_url('assets/img/partner/p_vtec.png'); ?>" alt="" class="img-fluid" style="width:200%;"></a>
                </div>						
            </div><div class="col-lg-2 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
                <div class="single_logo">
                    <a href="#"><img src="<?php echo base_url('assets/img/partner/p_iwa.png'); ?>" alt="" class="img-fluid" style="width:200%;"></a>
                </div>						
            </div><div class="col-lg-2 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                <div class="single_logo single_logo_bm">
                    <a href="#"><img src="<?php echo base_url('assets/img/partner/p_panasonic.png'); ?>" alt="" class="img-fluid" style="width:200%;"></a>
                </div>						
            </div><div class="col-lg-2 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
                <div class="single_logo">
                    <a href="#"><img src="<?php echo base_url('assets/img/partner/p_moritex.png'); ?>" alt="" class="img-fluid" style="width:200%;"></a>
                </div>						
            </div><div class="col-lg-2 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="0">
                <div class="single_logo">
                    <a href="#"><img src="<?php echo base_url('assets/img/partner/p_mejiro.png'); ?>" alt="" class="img-fluid" style="width:200%;"></a>
                </div>						
            </div><div class="col-lg-2 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s" data-wow-offset="0">
                <div class="single_logo">
                    <a href="#"><img src="<?php echo base_url('assets/img/partner/p_aec.png'); ?>" alt="" class="img-fluid" style="width:200%;"></a>
                </div>						
            </div>
        </div>
    </div>
</div>