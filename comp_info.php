<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>BoB Ent.</title>
		<?php
			include_once('./include/no_not_logined.php');
			include_once('./templates/dependencies.php');
		?>
		
	</head>

	<body class="no-skin">
		<?php 
			include_once("./templates/main_nav_bar.php");
		?>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar      h-sidebar                navbar-collapse collapse          ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>
<!-- 
				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div>
				 -->

				<!-- main_nav_menu.php -->
				<?php 
					
					include_once("./templates/main_nav_menu.php");
				?>
				
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="page-content">
						<div class="page-header">
							<h1>
								회사 소개
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									BoB Entertainment와 그 서비스들을 소개합니다.
								</small>
							</h1>
						</div>
						<img src="./img/logo_md.png" alt="회사로고" style="float: left;padding-right: 27px;"/> 
						<h1>
						BoB 엔터테인먼트, 최고를 꿈꾸다
						</h1>
						<p class="lead">
							Best of the Best Entertainment, 줄여서 BoB 엔터테인먼트는 세계 최고의 게임 개발, 운영사를 꿈꾸고 있습니다.
							BoB Entertainment는 막강한 자본력과 기술력을 앞세워 PC, 모바일 게임시장에 진출한 외국게임에 대항하고 민족의 문화 창작 능력을 증진하고 우리민족의 뛰어난 문화역량을 발휘하여 전 세계에 우리의 우수한 문화역량 과시를 그 목표로 열심히 노를 젓고 있습니다.
						</p>
						
						<h2>
							BoB의 비전
						</h2>
						<p class="lead">
							BoB 엔터테인먼트의 비전은 "Dive into the World" 입니다. 국내 시장에서 시작해서 세계속의 BoB Ent, 세계속의 기업으로 나아가기 위한 노력들을 하고 있습니다.<br><br>

									1) Better: 더 나은 서비스를 추구하는 기업<br>
									2) Open-minded: 열린 마음으로 사용자와 소통하는 기업<br>
									3) Bright: 게임 산업의 미래를 밝게 비추는 기업<br>
						</p>
						<img src="./img/janghere.jpg" style="float: right;"/>
						<h1>
							대표이사 인사말
						</h1>
						<p class="lead">
							안녕하십니까 BoB 엔터테인먼트의 대표이사 장그래입니다. 일개 고졸 개발자에서 지금 BoB 엔터테인먼트의 CEO가 되기까지, 험난하고 굴곡이 많은 길을 걸어왔습니다. 어렸을때 해 오던 수 많은 게임들이 저에게 모티베이션이 되어 지금의 자리에 있게 해주었습니다. 저는 이제 지금까지 제가 쌓아온 것들을 디딤돌 삼아, 세계속의 BoB 엔터, 세계속의 한국을 보여줄 수 있는 최고의 게임 서비스 개발 및 서비스 회사가 되고자 합니다.
						</p>
					</div>
					
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<?php
					include_once("./templates/main_footer.php");
				?>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 var $sidebar = $('.sidebar').eq(0);
			 if( !$sidebar.hasClass('h-sidebar') ) return;
			
			 $(document).on('settings.ace.top_menu' , function(ev, event_name, fixed) {
				if( event_name !== 'sidebar_fixed' ) return;
			
				var sidebar = $sidebar.get(0);
				var $window = $(window);
			
				//return if sidebar is not fixed or in mobile view mode
				var sidebar_vars = $sidebar.ace_sidebar('vars');
				if( !fixed || ( sidebar_vars['mobile_view'] || sidebar_vars['collapsible'] ) ) {
					$sidebar.removeClass('lower-highlight');
					//restore original, default marginTop
					sidebar.style.marginTop = '';
			
					$window.off('scroll.ace.top_menu')
					return;
				}
			
			
				 var done = false;
				 $window.on('scroll.ace.top_menu', function(e) {
			
					var scroll = $window.scrollTop();
					scroll = parseInt(scroll / 4);//move the menu up 1px for every 4px of document scrolling
					if (scroll > 17) scroll = 17;
			
			
					if (scroll > 16) {			
						if(!done) {
							$sidebar.addClass('lower-highlight');
							done = true;
						}
					}
					else {
						if(done) {
							$sidebar.removeClass('lower-highlight');
							done = false;
						}
					}
			
					sidebar.style['marginTop'] = (17-scroll)+'px';
				 }).triggerHandler('scroll.ace.top_menu');
			
			 }).triggerHandler('settings.ace.top_menu', ['sidebar_fixed' , $sidebar.hasClass('sidebar-fixed')]);
			
			 $(window).on('resize.ace.top_menu', function() {
				$(document).triggerHandler('settings.ace.top_menu', ['sidebar_fixed' , $sidebar.hasClass('sidebar-fixed')]);
			 });
			
			
			});
		</script>
	</body>
</html>
