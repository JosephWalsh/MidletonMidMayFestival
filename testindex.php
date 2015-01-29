<?php
   $pagetitle = 'Home Page - Midleton May Arts Festival';
   include('testheader.php');
?>

    <div class="container">
        <div class="row">
            <div class="box">
			
			    <div class="col-lg-12 text-center">
			        <h2 class="intro-text text-center">Welcome</h2>
                    <hr>
					<p style="text-align: center">A celebration of the Arts in Midleton. All events are <strong>free</strong>!</p><br>
				</div>
			    
                <div class="col-lg-6 text-center">
				
				<div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active"><img class="img-responsive img-full" src="img/team.gif" alt=""></div>
                            <div class="item"><img class="img-responsive img-full" src="img/busking.gif" alt=""></div>
                            <div class="item"><img class="img-responsive img-full" src="img/exhibitionLaunch.gif" alt=""></div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                </div>
			
			    <div class="col-lg-6" style="text-align: center">
				    <p>Event guide</p>
					<div class="eventDate"><p><a href="friday.php">Friday 16th</a></p></div>
					<div class="eventDate1"><p><a href="saturday.php">Saturday 17th</a></p></div>
					<div class="eventDate"><p><a href="sunday.php">Sunday 18th</a></p></div>
					<div class="eventDate1"><p><a href="other/filmSchedule.pdf">Film Schedule</a></p></div>
					<div class="eventDate"><p><a href="allEvents.php">All Events</a></p></div>
				</div>
				
				<div class="category"><p>&nbsp </p></div>
				
                <div class="col-lg-12" id="titlePageText">
				    <div class="category"><p>Browse by category: &nbsp </p></div>
					<div class="category"><p><a style="color:green;" href="art.php">&nbsp Fine Art &nbsp </a> | </p></div>
					<div class="category"><p><a style="color:DarkGoldenRod;" href="crafts.php">&nbsp Crafts &nbsp </a> | </p></div>
					<div class="category"><p><a style="color:red;" href="music.php">&nbsp Music &nbsp </a> | </p></div>
					<div class="category"><p><a style="color:orange;" href="film.php">&nbsp Film &nbsp </a> | </p></div>
					<div class="category"><p><a style="color:darkcyan;" href="literature.php">&nbsp Literature &nbsp </a> | </p></div>
					<div class="category"><p><a style="color:blue;" href="workshops.php">&nbsp Workshops</a></p></div>
				    <hr>
					<p>Visit our <a href="https://www.facebook.com/pages/Mid-may-festival/1452253211671919">Facebook</a> page for updates</p>
				</div>
				
            </div>
	    </div>
<?php	
   include('footer.php');
?>