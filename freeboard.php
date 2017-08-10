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
자유게시판
					<div class="page-content">
						
						<table id="freeboard-table" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>

									<th>번호</th>
									<th>제목</th>
									<th class="hidden-480">조회수</th>

									<th>
										<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
										게시/수정시간
									</th>
									<th class="hidden-480">글쓴이</th>

									<th>기능</th>
								</tr>
							</thead>

							<tbody>
							</tbody>
						</table>
						<hr>
						<a href="./freeboard_write.php">
							<button class="btn btn-primary">글쓰기</button>
						</a>
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
			
				$.get('./freeboard_list_ajax.php', {
					skip: 0,
					limit: 10
				}, function(res) {
					console.log(res);
					var total_dom = [];
					res.map(function(item) {

						var row = [
							'<tr>',
								'<td>', item.item_no, '</td>',
								'<td>', '<a href="', './freeboard_view.php?no=', item.item_no , '">',
									item.title, '</a>',
								'</td>',
								'<td class="hidden-480">', item.hit, '</td>',
								'<td>', item.update_date, '</td>',
								'<td class="hidden-480">', '<span class="label label-warning">',
									item.writer_id, '</span>', '</td>',
								'<td>',
									'<div class="hidden-sm hidden-xs action-buttons">',
										'<a class="green" href="#">',
											'<i class="ace-icon fa fa-pencil bigger-130"></i>',
										'</a>',
										'<a class="red" href="#">',
											'<i class="ace-icon fa fa-trash-o bigger-130"></i>',
										'</a>',
									'</div>',
									'<div class="hidden-md hidden-lg">',
										'<div class="inline pos-rel">',
											'<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">',
												'<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>',
											'</button>',
											'<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">',
												'<li>',
													'<a href="#" class="tooltip-info" data-rel="tooltip" title="View">',
														'<span class="blue">',
															'<i class="ace-icon fa fa-search-plus bigger-120"></i>',
														'</span>',
													'</a>',
												'</li>',
												'<li>',
													'<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">',
														'<span class="green">',
															'<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>',
														'</span>',
													'</a>',
												'</li>',

												'<li>',
													'<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">',
														'<span class="red">',
															'<i class="ace-icon fa fa-trash-o bigger-120"></i>',
														'</span>',
													'</a>',
												'</li>',
											'</ul>',
										'</div>',
									'</div>',
								'</td>',
							'</tr>'
						].join('');
						total_dom.push(row);
						
					});
					$('#freeboard-table').find('tbody').html(total_dom.join(''));
				});
			});
		</script>
	</body>
</html>
