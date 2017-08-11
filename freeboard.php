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
								자유게시판
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									회원들이 자유롭게 글을 올릴 수 있는 게시판입니다.
								</small>
							</h1>
						</div>
						
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
						<div>
							<div class="btn-group" style="width:100%;text-align:center;margin:auto;">
								<div>
									<ul class="pagination" id="pagenation">
<!-- 										
										<li>
											<a href="#">
												<i class="ace-icon fa fa-angle-double-left"></i>
											</a>
										</li>

										<li class="active">
											<a href="#">1</a>
										</li>

										<li>
											<a href="#">2</a>
										</li>

										<li>
											<a href="#">3</a>
										</li>

										<li>
											<a href="#">4</a>
										</li>

										<li>
											<a href="#">5</a>
										</li>

										<li>
											<a href="#">
												<i class="ace-icon fa fa-angle-double-right"></i>
											</a>
										</li>
										 -->
									</ul>
								</div>
								<span class='pull-right'>
									<a href="./freeboard_write.php">
										<button class="btn btn-primary">글쓰기</button>
									</a>
								</span>
							</div>							
							
						</div>
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
				window.num_per_page = 10;
				var render_pagination = function(start, end, select) {
					console.log('render page', start, end, select);
					var page_html = [
						'<li class="page-evt" data-page="'+(select-1)+'">',
							'<a href="#">',
								'<i class="ace-icon fa fa-angle-double-left"></i>',
							'</a>',
						'</li>',
						];
					for (var i = start; i <= end; i++) {
						if (i === select) {
							page_html.push('<li class="page-evt active" data-page="'+i+'">' );
						} else {
							page_html.push('<li class="page-evt" data-page="'+i+'">' );
						}
						page_html.push('<a href="#">'+i+'</a>');
						page_html.push('</a>');
						page_html.push('</li>');
					}
					page_html.push([
						'<li class="page-evt" data-page="'+(select+1)+'">',
							'<a href="#">',
								'<i class="ace-icon fa fa-angle-double-right"></i>',
							'</a>',
						'</li>'
					].join(''));
					// console.log(page_html.join(''));
					$('#pagenation').html(page_html.join(''));
				}
				var fetch_data = function(skip, limit) {
					$.get('./freeboard_list_ajax.php', {
						skip: skip,
						limit: limit
					}, function(res) {
						var cnt = parseInt(res.cnt) || 0;
						var fin_page_num = (cnt-1)/window.num_per_page + 1;
						var start_page_num = 1;
						var cur_page_num = skip/window.num_per_page + 1;
						if (cur_page_num + 2 < fin_page_num) {
							fin_page_num = cur_page_num + 2;
						}
						if (cur_page_num - 2 > 1) {
							start_page_num = cur_page_num - 2;
						}
						render_pagination(start_page_num, fin_page_num, cur_page_num);
						var data = res.data || [];
						var total_dom = [];
						data.map(function(item) {

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
				}
				fetch_data(0, window.num_per_page);
				$(document).on('click', '.page-evt', function(e) {
					var page = $(this).data('page');
					fetch_data((page-1)*window.num_per_page, window.num_per_page);
					// console.log(page);
				});
				$(document).on('click', '.green', function(e) {
					var dom = $(this);
					var row = dom.parent().parent().parent();
					var no = row.find('td:first-child').text();
					location.href="./freeboard_modify.php?no=" + no;
				});
				
				$(document).on('click', '.red', function(e) {
					var accept = window.confirm('정말로 이 글을 삭제하시겠습니까?');
					if (accept) {
						var dom = $(this);
						var row = dom.parent().parent().parent();
						var no = row.find('td:first-child').text();
						location.href="./freeboard_delete_check.php?no=" + no;	
					} else {
						return;
					}
				});
			});
		</script>
	</body>
</html>
