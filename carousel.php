<?php include('partials/header.php'); ?>


<div class="row">
	<div class="col-mod-12">

		<ul class="breadcrumb">
			<li><a href="index.php">Dashboard</a></li>
			<li><a href="#">UI Elements</a></li>
			<li class="active">Carousel</li>
		</ul>
		
		<div class="form-group hiddn-minibar pull-right">
						<input type="text" class="form-control form-cascade-control nav-input-search" size="20" placeholder="Search through site" />

			<span class="input-icon fui-search"></span>
		</div>

		<h3 class="page-header"><i class="fa fa-coffee"></i> Carousel <i class="fa fa-info-circle animated bounceInDown show-info"></i> </h3>

				<blockquote class="page-information hidden">
					<p>
						The slideshow below shows a generic plugin and component for cycling through elements like a carousel. You can create a great slider with this.
					</p>
				</blockquote>

	</div>
</div>

<!-- Demo Panel -->
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		  <div id="carousel-example-captions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-captions" data-slide-to="0" class=""></li>
          <li data-target="#carousel-example-captions" data-slide-to="1" class=""></li>
          <li data-target="#carousel-example-captions" data-slide-to="2" class=""></li>
          <li data-target="#carousel-example-captions" data-slide-to="3" class=""></li>
          <li data-target="#carousel-example-captions" data-slide-to="4" class=""></li>
          <li data-target="#carousel-example-captions" data-slide-to="5" class=""></li>
          <li data-target="#carousel-example-captions" data-slide-to="6" class="active"></li>
        </ol>
          <div class="carousel-inner">
            <div class="item">
              <img src="images/carousel/imageOne.jpg" alt=""> 
              <div class="carousel-caption">
                <h3>First slide label</h3>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
              </div>
            </div>
            <div class="item">
              <img src="images/carousel/imageTwo.jpg" alt=""> 
              <div class="carousel-caption">
                <h3>Second slide label</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
            <div class="item">
              <img src="images/carousel/imageThree.jpg" alt=""> 
              <div class="carousel-caption">
                <h3>Second slide label</h3>
                <p>Third ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
            <div class="item">
              <img src="images/carousel/imageFour.jpg" alt=""> 
              <div class="carousel-caption">
                <h3>Fourth slide label</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
            <div class="item">
              <img src="images/carousel/imageFive.jpg" alt=""> 
              <div class="carousel-caption">
                <h3>Fifth slide label</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
            <div class="item">
              <img src="images/carousel/imageSix.jpg" alt=""> 
              <div class="carousel-caption">
                <h3>Sixth slide label</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
            <div class="item active">
              <img src="images/carousel/imageSeven.jpg" alt=""> 
              <div class="carousel-caption">
                <h3>Seventh slide label</h3>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
              </div>
            </div>
          </div>
        <a class="left carousel-control" href="#carousel-example-captions" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-captions" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>
</div>


<div class="footer">
                  © 2013 <a href="http://bootstrapguru.com">Bootstrap Guru</a>
                </div>

</div> <!-- /.content -->

<!-- .right-sidebar -->
<div class="right-sidebar right-sidebar-hidden">
	<div class="right-sidebar-holder">

		<!-- @Demo part only The part from here can be removed till end of the @demo  -->
		<a href="screens.php" class="btn btn-danger btn-block">Logout </a>


		<h4 class="page-header text-primary text-center">
			Theme Options
			<a  href="#"  class="theme-panel-close text-primary pull-right"><strong><i class="fa fa-times"></i></strong></a>
		</h4>

		<ul class="list-group theme-options">
			<li class="list-group-item" href="#">	
				<div class="checkbox">
					<label>
						<input type="checkbox" id="fixedNavbar" value=""> Fixed Top Navbar
					</label>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" id="fixedNavbarBottom" value=""> Fixed Bottom Navbar
					</label>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" id="boxed" value=""> Boxed Version
					</label>
				</div>
				
					<div class="form-group backgroundImage hidden" >
						<label class="control-label">Paste Image Url and then hit enter</label>
							<input type="text" class="form-control" id="backgroundImageUrl" />
					</div>
				<!-- 
				<div class="checkbox">
					<label>
						<input type="checkbox" id="responsive" value=""> Disable Responsiveness
					</label>
				</div> 
			-->			
		</li>
		<li class="list-group-item" href="#">Predefined Themes
			<ul class="list-inline predefined-themes"> 
				<li><a class="badge" style="background-color:#54b5df" data-color-primary="#54b5df" data-color-secondary="#2f4051" data-color-link="#FFFFFF"> &nbsp; </a></li>
				<li><a class="badge" style="background-color:#d85f5c" data-color-primary="#d85f5c" data-color-secondary="#f0f0f0" data-color-link="#474747"> &nbsp; </a></li>
				<li><a class="badge" style="background-color:#3d4a5d" data-color-primary="#3d4a5d" data-color-secondary="#edf0f1" data-color-link="#777e88"> &nbsp; </a></li>
				<li><a class="badge" style="background-color:#A0B448" data-color-primary="#A0B448" data-color-secondary="#485257" data-color-link="#AFB5AA"> &nbsp; </a></li>
				<li><a class="badge" style="background-color:#2FA2D1" data-color-primary="#2FA2D1" data-color-secondary="#484D51" data-color-link="#A5B1B7"> &nbsp; </a></li>
				<li><a class="badge" style="background-color:#2f343b" data-color-primary="#2f343b" data-color-secondary="#525a65" data-color-link="#FFFFFF"> &nbsp; </a></li>
			</ul>
		</li>
		<li class="list-group-item" href="#">Change Primary Color
			<div class="input-group colorpicker-component bscp" data-color="#54728c" data-color-format="hex" id="colr">
				<span class="input-group-addon"><i style="background-color: #54728c"></i></span>
				<input type="text" value="#54728c" id="primaryColor" readonly class="form-control" />

			</div>
		</li>
		<li class="list-group-item" href="#">Change LeftSidebar Background
			<div class="input-group colorpicker-component bscp" data-color="#f9f9f9" data-color-format="hex" id="Scolr">
				<span class="input-group-addon"><i style="background-color: #f9f9f9"></i></span>
				<input type="text" value="#f9f9f9" id="secondaryColor" readonly class="form-control" />

			</div>
		</li>
		<li class="list-group-item" href="#">Change Leftsidebar Link Color
			<div class="input-group colorpicker-component bscp" data-color="#54728c" data-color-format="hex" id="Lcolr">
				<span class="input-group-addon"><i style="background-color: #54728c"></i></span>
				<input type="text" value="#54728c" id="linkColor" readonly class="form-control" />

			</div>
		</li>
		<li class="list-group-item" href="#">Change RightSidebar Background
			<div class="input-group colorpicker-component bscp" data-color="#f9f9f9" data-color-format="hex" id="Rcolr">
				<span class="input-group-addon"><i style="background-color: #f9f9f9"></i></span>
				<input type="text" value="#f9f9f9" id="rightsidebarColor" readonly class="form-control" />

			</div>
		</li>
	</li>
</ul>
		<!-- /.@Demo part only The part to here can be removed   -->
<div id="bic_calendar_right" class="bg-white"></div>

<h4 class="page-header text-primary">Current Projects </h4>

<div class="list-group projects">
	<a class="list-group-item" href="#">	
		<p> Archon <span class="pull-right label bg-success">90%</span></p>
		<div class="progress progress-mini">
			<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
				<span class="sr-only">90% Complete</span>
			</div>
		</div>

	</a>
	<a class="list-group-item" href="#">	
		<p> Banshee <span class="pull-right label bg-warning">40%</span></p>
		<div class="progress progress-mini">
			<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
				<span class="sr-only">40% Complete</span>
			</div>
		</div>

	</a>
	<a class="list-group-item" href="#">	
		<p> Cascade <span class="pull-right label bg-primary">40%</span></p>
		<div class="progress progress-mini">
			<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
				<span class="sr-only">75% Complete</span>
			</div>
		</div>
	</a>
</div>
<h4 class="page-header">Contacts</h4>
<div class="list-group contact-list">
					<a class="list-group-item">
						<img src="images/profiles/one.png" class="chat-user-avatar" alt="">
						Jane Doe
						<i class="fa fa-circle"></i>
					</a>
					<a class="list-group-item contact">
						<img src="images/profiles/two.png" class="chat-user-avatar" alt="">
						Jenny
						<i class="fa fa-circle online"></i>
					</a>
					<a class="list-group-item contact">
						<img src="images/profiles/three.png" class="chat-user-avatar" alt="">
						Vijay
						<i class="fa fa-circle busy"></i>
					</a>
					<a class="list-group-item">
						<img src="images/profiles/four.png" class="chat-user-avatar" alt="">
						Nikky
						<i class="fa fa-circle offline"></i>
					</a>
					<a class="list-group-item contact">
						<img src="images/profiles/five.png" class="chat-user-avatar" alt="">
						John
						<i class="fa fa-circle"></i>
					</a>
					<a class="list-group-item contact">
						<img src="images/profiles/six.png" class="chat-user-avatar" alt="">
						Anusha
						<i class="fa fa-circle"></i>
					</a>
					<a class="list-group-item">
						<img src="images/profiles/seven.png" class="chat-user-avatar" alt="">
						Antony
						<i class="fa fa-circle offline"></i>
					</a>
					<a class="list-group-item contact">
						<img src="images/profiles/eight.png" class="chat-user-avatar" alt="">
						Fana
						<i class="fa fa-circle busy"></i>
					</a>
					<a class="list-group-item contact">
						<img src="images/profiles/nine.png" class="chat-user-avatar" alt="">
						Chris
						<i class="fa fa-circle offline"></i>
					</a>
					<a class="list-group-item">
						<img src="images/profiles/ten.png" class="chat-user-avatar" alt="">
						Sandy
						<i class="fa fa-circle online"></i>
					</a>
					<a class="list-group-item contact">
						<img src="images/profiles/eleven.png" class="chat-user-avatar" alt="">
						Ajay
						<i class="fa fa-circle"></i>
					</a>
					<a class="list-group-item contact">
						<img src="images/profiles/twelve.png" class="chat-user-avatar" alt="">
						Sanju
						<i class="fa fa-circle"></i>
					</a>
				</div>
			</div>


</div>	<!-- /.right-sidebar-holder -->
</div>  <!-- /.right-sidebar -->


</div> <!-- /.box-holder -->
</div><!-- /.site-holder -->


</div> <!-- /.box-holder -->
</div><!-- /.site-holder -->



<!-- Load JS here for Faster site load =============================-->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="js/less-1.5.0.min.js"></script>
<script src="js/jquery.ui.touch-punch.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.js"></script>
<script src="js/bootstrap-switch.js"></script>
<script src="js/jquery.tagsinput.js"></script>
<script src="js/jquery.placeholder.js"></script>
<script src="js/bootstrap-typeahead.js"></script>
<script src="js/application.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/jquery.sortable.js"></script>
<script type="text/javascript" src="js/jquery.gritter.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/skylo.js"></script>
<script src="js/prettify.min.js"></script>
<script src="js/jquery.noty.js"></script>
<script src="js/bic_calendar.js"></script>
<script src="js/jquery.accordion.js"></script>
<script src="js/theme-options.js"></script>

<script src="js/bootstrap-progressbar.js"></script>
<script src="js/bootstrap-progressbar-custom.js"></script>
<script src="js/bootstrap-colorpicker.min.js"></script>
<script src="js/bootstrap-colorpicker-custom.js"></script>

<!-- Core Jquery File  =============================-->
<script src="js/core.js"></script>


</body>
</html>