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
						스크린샷 업로드
					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select><div class="dropdown dropdown-colorpicker">		<a data-toggle="dropdown" class="dropdown-toggle"><span class="btn-colorpicker" style="background-color:#438EB9"></span></a><ul class="dropdown-menu dropdown-caret"><li><a class="colorpick-btn selected" style="background-color:#438EB9;" data-color="#438EB9"></a></li><li><a class="colorpick-btn" style="background-color:#222A2D;" data-color="#222A2D"></a></li><li><a class="colorpick-btn" style="background-color:#C6487E;" data-color="#C6487E"></a></li><li><a class="colorpick-btn" style="background-color:#D0D0D0;" data-color="#D0D0D0"></a></li></ul></div><div class="dropdown dropdown-colorpicker">		<a data-toggle="dropdown" class="dropdown-toggle"><span class="btn-colorpicker" style="background-color:#438EB9"></span></a><ul class="dropdown-menu dropdown-caret"><li><a class="colorpick-btn selected" style="background-color:#438EB9;" data-color="#438EB9"></a></li><li><a class="colorpick-btn" style="background-color:#222A2D;" data-color="#222A2D"></a></li><li><a class="colorpick-btn" style="background-color:#C6487E;" data-color="#C6487E"></a></li><li><a class="colorpick-btn" style="background-color:#D0D0D0;" data-color="#D0D0D0"></a></li></ul></div>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off">
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off">
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off">
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off">
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off">
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off">
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off">
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off">
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								새 스크린샷 업로드
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									새로운 스크린샷을 업로드합니다.
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
							
								<div class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="title"> 글 제목 </label>

										<div class="col-sm-9">
											<input type="text" id="title" placeholder="제목" class="col-xs-10 col-sm-5">
										</div>
									</div>
									<div class="widget-box">
										<div class="widget-header">
											<h4 class="widget-title">Custom File Input</h4>

											<div class="widget-toolbar">
												<a href="#" data-action="collapse">
													<i class="ace-icon fa fa-chevron-up"></i>
												</a>

												<a href="#" data-action="close">
													<i class="ace-icon fa fa-times"></i>
												</a>
											</div>
										</div>

										<div class="widget-body">
											<div class="widget-main">
												<!-- <div class="form-group">
													<div class="col-xs-12">
														<input type="file" id="id-input-file-2" />
													</div>
												</div> -->

												<div class="form-group">
													<div class="col-xs-12">
														<input multiple="" type="file" id="gallery_file_upload" />
													</div>
												</div>

												<label>
													<input type="checkbox" name="file-format" id="id-file-format" class="ace" />
													<span class="lbl"> Allow only images</span>
												</label>
											</div>
										</div>
									</div>

								

									<div class="space-4"></div>


									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<div class="btn btn-warning" id="cancel_write">
												<i class="fa fa-backward" aria-hidden="true"></i>
												취소
											</div>
											<div class="btn btn-danger" id="reset_write">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												초기화
											</div>

											&nbsp; &nbsp; &nbsp;
											<button class="btn btn-success" type="button" id="save_btn">
												<i class="ace-icon fa fa-check bigger-110"></i>
												저장
											</button>
											
										</div>
									</div>

									<hr>
	
								</div>

							</div><!-- /.col -->
						</div><!-- /.row -->
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
		<!-- page specific plugin scripts -->
		<script src="assets/js/jquery.colorbox.min.js"></script>
		<!-- <script src="assets/js/dropzone.min.js"></script> -->
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

				var $overflow = '';
				var colorbox_params = {
					rel: 'colorbox',
					reposition:true,
					scalePhotos:true,
					scrolling:false,
					previous:'<i class="ace-icon fa fa-arrow-left"></i>',
					next:'<i class="ace-icon fa fa-arrow-right"></i>',
					close:'&times;',
					current:'{current} of {total}',
					maxWidth:'100%',
					maxHeight:'100%',
					onOpen:function(){
						$overflow = document.body.style.overflow;
						document.body.style.overflow = 'hidden';
					},
					onClosed:function(){
						document.body.style.overflow = $overflow;
					},
					onComplete:function(){
						$.colorbox.resize();
					}
				};

				$('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);
				$("#cboxLoadingGraphic").html("<i class='ace-icon fa fa-spinner orange fa-spin'></i>");//let's add a custom loading icon


				$(document).one('ajaxloadstart.page', function(e) {
					$('#colorbox, #cboxOverlay').remove();
			   });
				
			
				$('#gallery_file_upload').ace_file_input({
					style: 'well',
					btn_choose: 'Drop files here or click to choose',
					btn_change: null,
					no_icon: 'ace-icon fa fa-cloud-upload',
					droppable: true,
					thumbnail: 'small'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button

					,
					preview_error : function(filename, error_code) {
						//name of the file that failed

					}
			
				}).on('change', function(){
					console.log($(this));
					console.log($(this).data('ace_input_files'));
					console.log($(this).data('ace_input_method'));

				});
				
				$('#save_btn').click(function(e) {
					var title = $('#title').val();
					var file_dom = $('#gallery_file_upload');
					var files_data = file_dom.data('ace_input_files');
					console.log('save btn clicked', files_data);
					if (files_data && files_data.length > 0) {
						var formData = new FormData();
						formData.append('title', title);
						formData.append('file_data', files_data[0]);
				
						$.ajax({
							url: './gallery_upload_check.php',
							data: formData,
							type: 'POST',
							contentType: false, 
							processData: false,
							success: function(res) {
								console.log(res);
							},
							error: function(xhr, status, error) {
								console.log('error', xhr, status, error);
							}
						});
					} else {
						alert('파일을 업로드하세요');
					}
				});
				

				/////

				
			
			});
		</script>
	</body>
</html>
