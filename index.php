<html>
<head>
	<title></title>

	<!--Custom CSS-->
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<!--Bootstrap CSS-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/gallery.css">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!--Script-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</head>
<body background="images/bg.png">
	<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="home.php"></a>
            </div>
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">LifeLine Forum</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            	<!--
                <ul class="nav navbar-nav navbar-left">
                    <li><a href=""><span class="glyphicon glyphicon-list"></span> Topics</a></li>
                </ul>
            -->
                <div>
					<form class="navbar-form navbar-right" method="POST"role="search" action="pages/login.php">
					<div class="form-group">
					<input type="text" class="form-control" name="username"placeholder="Username">
					<input type="password" class="form-control" name="password"placeholder="Password">
					</div>
					<button type="submit" class="btn btn-success">Login</button>
					</form>
				</div>
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
			<div class="container" style="margin:6% auto;">
				<div class="container">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="https://dt.azadicdn.com/wp-content/uploads/2014/11/post-confessions-anonymously.png?200" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDqSK3ZPXcdFg_23Rzo5bH1EAkRSVJGTrTdlrsfRYI1xJ5sVyA" alt="" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="http://i0.wp.com/happynewyearwala.com/wp-content/uploads/2018/02/happy-confession-day-2018-check-confession-day-images-messages-quotes-wishes-sms-greeting-cards-valentine-week-2018.png" alt=" " style="width:100%;">
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
				
				<div class="col-sm-4 col-md-8">
					
					
					<center><h2 style="font-style: italic;"><b >Discuss with your friends</b></h2></center>
					<p style="text size:;font-size: 18px;font-style: italic;">Confession website acts as an area that is your personal, anonymous, everyday diary. A place that is fully dedicated to your secret confessions, whether good or bad, shameful or embarrassing. Just say it out loud.</p>
					<div class="col-sm-4 col-md-6" style="background:#5cb85c;">
					<h4><center><b>Why we are best?</b></center></h4>
					<p>"Imagine yourself in a room, alone. you take a piece of paper and you start writing your deepest fears, your wildest fantasies, your craziest memories. no one to judge, no one physically there to criticize, just you and your confessions"</p>
				</div>
				<div class="col-sm-4 col-md-6">
					<img src="https://mymodernmet.com/wp/wp-content/uploads/archive/bppFhRCGJZFTmkaa35vy_1082103153.jpeg" class="img-responsive	img-rounded">
          <h4><center> <b>Story's</b></center></h4>
				</div>
				</div>
				
				



				 <div class="col-sm-5 col-md-4 pull-right">

                   <div class="row">
                   
						<form method="POST" class="form-signin" action="functions/register.php">
								<h3 class="text-center">Signup Here!</h3>
							<input type="text"  name="fname"placeholder="First Name"class="form-control" required>
							<input type="text" name="lname"placeholder="Last Name"class="form-control" required>
							<select class="form-control" name="gender"required>
								<option>Gender</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
							<input type="text" placeholder="Username" name="username"class="form-control" required>
							<input type="password" placeholder="Password" name="password" class="form-control" required>
							<input type="submit" value="Signup" class="btn btn-success" style="width:100%;">
						</form>
				</div>
			</div>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<section>
  <div class="container gal-container">
    <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#1">
          <img src="https://www.quotemaster.org/images/74/743bc1bb99bc7914d259c956316e17ca.png">
        </a>
        <div class="modal fade" id="1" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="https://www.quotemaster.org/images/74/743bc1bb99bc7914d259c956316e17ca.png">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the first one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#2">
          <img src="http://www.quotehd.com/imagequotes/authors65/scottish-proverb-quote-open-confession-is-good-for-the-soul.jpg">
        </a>
        <div class="modal fade" id="2" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="http://www.quotehd.com/imagequotes/authors65/scottish-proverb-quote-open-confession-is-good-for-the-soul.jpg">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the second one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#3">
          <img src="https://kcdn.christianquotes.info/wp-content/uploads/2013/06/GOOD_sm.jpg">
        </a>
        <div class="modal fade" id="3" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="https://kcdn.christianquotes.info/wp-content/uploads/2013/06/GOOD_sm.jpg">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the third one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#4">
          <img src="https://www.quotemaster.org/images/bd/bde47990f8b372b00b5c137f6a67bc1b.jpg">
        </a>
        <div class="modal fade" id="4" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="https://www.quotemaster.org/images/bd/bde47990f8b372b00b5c137f6a67bc1b.jpg">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the fourth one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#5">
          <img src="http://img.picturequotes.com/2/694/693480/confession-quote-1-picture-quote-1.jpg">
        </a>
        <div class="modal fade" id="5" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="http://img.picturequotes.com/2/694/693480/confession-quote-1-picture-quote-1.jpg">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the fifth one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#6">
          <img src="https://i.pinimg.com/originals/7e/a0/b3/7ea0b3333ee01b90c35ba81efbf0743c.jpg">
        </a>
        <div class="modal fade" id="6" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="https://i.pinimg.com/originals/7e/a0/b3/7ea0b3333ee01b90c35ba81efbf0743c.jpg">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the sixth one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#7">
          <img src="https://data.whicdn.com/images/59797056/large.jpg">
        </a>
        <div class="modal fade" id="7" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="https://data.whicdn.com/images/59797056/large.jpg">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the seventh one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#8">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZF4VFC936pllbItSDBkZT36weKIZuvv54ewxz1mZb2kVDo-gOxg">
        </a>
        <div class="modal fade" id="8" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZF4VFC936pllbItSDBkZT36weKIZuvv54ewxz1mZb2kVDo-gOxg">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the eighth one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#9">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOTuR_7e3x2UZR19hYwgTBKDjK8bCWXXMoSC85qdcJ4Fh_lZFObQ">
        </a>
        <div class="modal fade" id="9" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOTuR_7e3x2UZR19hYwgTBKDjK8bCWXXMoSC85qdcJ4Fh_lZFObQ">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the ninth one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#10">
          <img src="https://www.straight.com/sites/all/themes/straight2014/assets/img/header-confessions-home.jpg">
        </a>
        <div class="modal fade" id="10" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="https://www.straight.com/sites/all/themes/straight2014/assets/img/header-confessions-home.jpg">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the tenth one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#11">
          <img src="https://cdn.someecards.com/someecards/usercards/-runners-confession-no-training-plan-no-motivation--d08fe.png">
        </a>
        <div class="modal fade" id="11" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="https://cdn.someecards.com/someecards/usercards/-runners-confession-no-training-plan-no-motivation--d08fe.png">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the leventh one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#12">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBiuymcZLyp_UIG8R9OY1fm1ThX3koptYQI13O_BDTS3KcdT3j">
        </a>
        <div class="modal fade" id="12" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBiuymcZLyp_UIG8R9OY1fm1ThX3koptYQI13O_BDTS3KcdT3j">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the 12th one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#13">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5ydyVeK4nfo5OYxvXDTKF8ajPvKb_40xD2bkRYuvjfydPLawy">
        </a>
        <div class="modal fade" id="13" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5ydyVeK4nfo5OYxvXDTKF8ajPvKb_40xD2bkRYuvjfydPLawy">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the 13th one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#14">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkllpiiUUnn0lPn9tXj1hQlAtSLrviMSzJAqjeGXALFkAlmP9N">
        </a>
        <div class="modal fade" id="14" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkllpiiUUnn0lPn9tXj1hQlAtSLrviMSzJAqjeGXALFkAlmP9N">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the 14th one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#15">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7EErkZcxq0umuHRga0sw_0-TsEE1NTxwZ1ZJXyeHq4VoZ76Rdkg">
        </a>
        <div class="modal fade" id="15" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7EErkZcxq0umuHRga0sw_0-TsEE1NTxwZ1ZJXyeHq4VoZ76Rdkg">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the 15th one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#16">
          <img src="http://investment-mantra.co.in/wp-content/uploads/2017/05/Confessions-HQ.jpg">
        </a>
        <div class="modal fade" id="16" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="http://investment-mantra.co.in/wp-content/uploads/2017/05/Confessions-HQ.jpg">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the 16th one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
		</div>

<hr>
    <div class="footer">
		<nav align="center">
			<ul class="nav navbar-nav">
				<li><a href="">About</a></li>
				<li><a href="">Developers</a></li>
				<li><a href="">Terms and Conditions</a></li>
			</ul>
		</nav>
	</div>

</body>
</html>