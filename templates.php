<?php
/*
*doctype file: html.php
*header content: header.php
*footer content: footer.php
*user profile: user-profile.php
*ranking: ranking.php
*sent weibo:block-weibo.php
*weibo feed:weibo-feed.php
*comments: comments.php
+==============================+
*page home:index.php
*page login: login.php
*/
?>

<?php include("html.php")?>
<body>
	<div class="wrapper">
		<?php include("header.php")?>
		<!-- end header content -->
		<div id="page">
			<div class="container clearfix">
				<div class="container-wrapper">
					<div class="container-inner">
						<div id="main-content" class="clearfix">
							<div class="content fl">
								Main contnet 
							</div>	 
							<!-- end main contnet -->
							<div class="sidebar fl" id="second-sidebar">
								Right sidebar content 
							</div>
							<!-- end second sidebar content -->
						</div>
						<!-- end main content -->
						<div id="first-sidebar" class="sidebar clearfix">
							left side bar
						</div>					
						<!-- end first-sidebar content -->
					</div>
				</div>				
			</div>
		</div>
		<!-- end page content -->
		<?php include("footer.php")?>
		<!-- end footer content -->
	</div>	
</body>
</html>