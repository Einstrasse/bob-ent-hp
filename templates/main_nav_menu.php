				<?php
					$arr = explode("/", $_SERVER['SCRIPT_FILENAME']);
					$current_file_name = end($arr);
				?>

				<ul class="nav nav-list">
					<li class="hover <?php
							   if ($current_file_name == 'index.php') {
								   echo "open active";
							   }
							   ?>">
						<a href="index.php">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> 메인화면 </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover <?php
							   if ($current_file_name == 'comp_info.php') {
								   echo "open active";
							   }
							   ?>">
						<a href="comp_info.php">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								회사 소개
							</span>

						</a>

						
					</li>

					<li class="hover <?php
							   if ($current_file_name == 'freeboard.php' || $current_file_name == 'freeboard_write.php' || $current_file_name == 'freeboard_view.php') {
								   echo "open active";
							   }
							   ?>">
						<a href="freeboard.php">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> 자유 게시판 </span>
						</a>

						<b class="arrow"></b>
					</li>
<!-- 
					<li class="hover">
						<a href="calendar.html">
							<i class="menu-icon fa fa-calendar"></i>

							<span class="menu-text">
								Calendar

								<span class="badge badge-transparent tooltip-error" title="2 Important Events">
									<i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
								</span>
							</span>
						</a>

						<b class="arrow"></b>
					</li>
 -->
					
					<li class="hover <?php
							   if ($current_file_name == 'gallery.php') {
								   echo "open active";
							   }
							   ?>">
						<a href="gallery.php">
							<i class="menu-icon fa fa-picture-o"></i>
							<span class="menu-text"> 스크린샷 갤러리 </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-tag"></i>
							<span class="menu-text"> More Pages </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="hover">
								<a href="profile.html">
									<i class="menu-icon fa fa-caret-right"></i>
									User Profile
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="inbox.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Inbox
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="pricing.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Pricing Tables
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="invoice.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Invoice
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="timeline.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Timeline
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="search.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Search Results
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="email.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Email Templates
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="login.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Login &amp; Register
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="hover">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-file-o"></i>

							<span class="menu-text">
								Other Pages

								<span class="badge badge-primary">5</span>
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="hover">
								<a href="faq.html">
									<i class="menu-icon fa fa-caret-right"></i>
									FAQ
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="error-404.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Error 404
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="error-500.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Error 500
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="grid.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Grid
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="blank.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Blank Page
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
				</ul>