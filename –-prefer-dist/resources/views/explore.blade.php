<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>CrowdFundr - by ExpressPixel</title>
  <meta name="description" content="Write an awesome description for your new site here. You can edit this line in _config.yml. It will appear in your document head meta (for Google search resu...">

  
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="canonical" href="http://127.0.0.1:8000/explore">
  <link rel="alternate" type="application/rss+xml" title="CrowdFundr - by ExpressPixel" href="/feed.xml">
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
  <script src="javascripts/scrollPosStyler.js"></script>
  <!-- JavaScript -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.1/vue.min.js" ></script>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.4/vue.min.js"></script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">

  <link rel="stylesheet" href="css/main.css">



</head>
  <body>

    <nav class="navbar navbar-toggleable-sm navbar-light bg-primary fixed-top"  id="navbar" v-cloak >
  <div class="container top-nav" v-if="!search">

  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
  <a class="navbar-brand" href="/index">Booster</a>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto" >
      <li class="nav-item active">
        <a class="nav-link" href="/index">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/explore">Explore</a>
      </li>
      <li class="nav-item">
        <?php
if (Auth::check()) 
    // The user is logged in...
//echo Auth::user()->id;

      echo  '<a class="nav-link" href="/edit">Start a project</a>';

?>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about">About us</a>
      </li>
    </ul>
    <ul class="navbar-nav" >
      <li class="nav-item hidden-sm-down">
        <a class="nav-link" href="#" v-on:click.prevent="showSearchBar"><i class="fa fa-search" aria-hidden="true"></i></a>
      </li>
      <li class="nav-item hidden-sm-up">
        <a class="nav-link" href="#" v-on:click.prevent="showSearchBar">Search</a>
      </li>
      <li class="nav-item">
        <?php
if (!Auth::check()) 
    // The user is logged in...
//echo Auth::user()->id;
   echo  '<a class="nav-link" href="#" data-toggle="modal" data-target=".login-modal-lg">Login</a>';
else
	echo  '<a class="nav-link" href="/account-dashboard"  >Profile</a>';


        ?>
      </li>
      <li class="nav-item">
        <?php
if (!Auth::check()) 
    // The user is logged in...
//echo Auth::user()->id;
   echo  '<a class="nav-link"href="#" data-toggle="modal" data-target=".signup-modal-lg">Sign up</a>';

   else
   	echo  '<a class="nav-link" href="/logout/"  >logout</a>';

?>
      </li>
    </ul>
    <form class="form-inline" style="display: none">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
    </div>

    <div class="container" v-else>
  <div class="input-group search-bar">
  <span class="input-group-addon"><i class="icon-magnifier icons"></i></span>
  <input type="text" class="form-control form-control-lg" placeholder="Search">
  <span class="input-group-addon" ><a href="" class="text-muted" v-on:click.prevent="hideSearchBar"><i class="icon-close icons"></i></a></span>
</div>
    </div>

</nav>

    <div class="mt-5">
	<div class="container inner">
<br />
		<br />
		<div class="row">
			<div class="col-sm-12 text-center">
				<h3>Fund campaigns you love.</h3>
			</div>
		</div>
		<br />
				<div class="row">
			<div class="col-md-10 offset-md-1 text-center">
		<div class="row">
			<div class="col-sm-4">
				<!-- Large button groups (default and split) -->
				<div class="btn-group  btn-block">
				<button class="btn btn-secondary btn-lg  btn-block dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					All categories
				</button>
				<div class="dropdown-menu" style="width: 100%">
				<a class="dropdown-item" href="#">Action</a>
					
						<a class="dropdown-item" href="#art">Art</a>
					
						<a class="dropdown-item" href="#comics">Comics</a>
					
						<a class="dropdown-item" href="#crafts">Crafts</a>
					
						<a class="dropdown-item" href="#dance">Dance</a>
					
						<a class="dropdown-item" href="#design">Design</a>
					
						<a class="dropdown-item" href="#fashion">Fashion</a>
					
						<a class="dropdown-item" href="#film-video">Film & Video</a>
					
						<a class="dropdown-item" href="#food">Food</a>
					
						<a class="dropdown-item" href="#games">Games</a>
					
						<a class="dropdown-item" href="#journalism">Journalism</a>
					
						<a class="dropdown-item" href="#music">Music</a>
					
						<a class="dropdown-item" href="#photography">Photography</a>
					
						<a class="dropdown-item" href="#publishing">Publishing</a>
					
						<a class="dropdown-item" href="#technology">Technology</a>
					
						<a class="dropdown-item" href="#theater">Theater</a>
					
				</div>
				</div>
			</div>
			<div class="col-sm-4">
<!-- Large button groups (default and split) -->
				<div class="btn-group  btn-block">
				<button class="btn btn-secondary btn-lg  btn-block dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					All project types
				</button>
				<div class="dropdown-menu" style="width: 100%">
					<a class="dropdown-item" href="#">Almost ending</a>
					<a class="dropdown-item" href="#">Finished</a>
					<a class="dropdown-item" href="#">Low funding</a>
					<a class="dropdown-item" href="#">Another action</a>
					<a class="dropdown-item" href="#">Something else here</a>
				</div>
				</div>
			</div>
			<div class="col-sm-4">
<!-- Large button groups (default and split) -->
				<div class="btn-group  btn-block">
				<button class="btn btn-secondary btn-lg  btn-block dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Trending
				</button>
				<div class="dropdown-menu" style="width: 100%">
				<a class="dropdown-item" href="#">Most popular</a>
					<a class="dropdown-item" href="#">Recently updated</a>
					<a class="dropdown-item" href="#">Featured</a>
				</div>
				</div>
			</div>
		</div>
		</div>
		</div>
		<br />
		<br />
		<a href="" class="float-right"  data-toggle="collapse" data-target="#filters">Toggle filters</a>
				<br />
<hr />
		<div id="filters" class="collapse in">

		<div class="row">
			<div class="col-sm-3">
				<h6>Percent funded</h6>
				<label class="custom-control custom-radio">
  					<input id="radio1" name="radio" type="radio" class="custom-control-input" checked>
  					<span class="custom-control-indicator"></span>
  					<span class="custom-control-description">All</span>
				</label><br />
				<label class="custom-control custom-radio">
  					<input id="radio1" name="radio" type="radio" class="custom-control-input">
  					<span class="custom-control-indicator"></span>
  					<span class="custom-control-description">0 - 25%</span>
				</label><br />
				<label class="custom-control custom-radio">
  					<input id="radio1" name="radio" type="radio" class="custom-control-input">
  					<span class="custom-control-indicator"></span>
  					<span class="custom-control-description">25 - 75%</span>
				</label><br />
				<label class="custom-control custom-radio">
  					<input id="radio1" name="radio" type="radio" class="custom-control-input">
  					<span class="custom-control-indicator"></span>
  					<span class="custom-control-description">75 - 100+%</span>
				</label>

			</div>
			<div class="col-sm-3">
				<h6>Goal type</h6>
				<label class="custom-control custom-radio">
  					<input id="radio1" name="radio_goal" type="radio" class="custom-control-input" checked>
  					<span class="custom-control-indicator"></span>
  					<span class="custom-control-description">All</span>
				</label><br />
								<label class="custom-control custom-radio">
  					<input id="radio1" name="radio_goal" type="radio" class="custom-control-input">
  					<span class="custom-control-indicator"></span>
  					<span class="custom-control-description">Fixed</span>
				</label><br />
								<label class="custom-control custom-radio">
  					<input id="radio1" name="radio_goal" type="radio" class="custom-control-input">
  					<span class="custom-control-indicator"></span>
  					<span class="custom-control-description">Flexible</span>
				</label><br />
			</div>
			<div class="col-sm-3">
				<h6>Location</h6>
								<label class="custom-control custom-radio">
  					<input id="radio1" name="radio_location" type="radio" class="custom-control-input" checked>
  					<span class="custom-control-indicator"></span>
  					<span class="custom-control-description">Everywhere</span>
				</label><br />
								<label class="custom-control custom-radio">
  					<input id="radio1" name="radio_location" type="radio" class="custom-control-input">
  					<span class="custom-control-indicator"></span>
  					<span class="custom-control-description">Near me</span>
				</label><br />
								<label class="custom-control custom-radio">
  					<input id="radio1" name="radio_location" type="radio" class="custom-control-input">
  					<span class="custom-control-indicator"></span>
  					<span class="custom-control-description">Flexible</span>
				</label><br />
			</div>
			<div class="col-sm-3">
				<h6>Project status</h6>
								<label class="custom-control custom-radio">
  					<input id="radio1" name="radio_project" type="radio" class="custom-control-input" checked>
  					<span class="custom-control-indicator"></span>
  					<span class="custom-control-description">All</span>
				</label><br />
								<label class="custom-control custom-radio">
  					<input id="radio1" name="radio_project" type="radio" class="custom-control-input">
  					<span class="custom-control-indicator"></span>
  					<span class="custom-control-description">Open</span>
				</label><br />
								<label class="custom-control custom-radio">
  					<input id="radio1" name="radio_project" type="radio" class="custom-control-input">
  					<span class="custom-control-indicator"></span>
  					<span class="custom-control-description">Ended</span>
				</label><br />

			</div>
		</div>
		</div>
<br />
<br />
				<div class="row">
			<div class="col-sm-12">
		<div class="row mt-2">
			






<?php

$id=session()->get('staffpick');

$break=0;
array_reverse($id, true);
foreach ($id[1] as $use) {


$break+=1;

$pro2=$id[0][0];
	foreach ($id[0] as $pro) {
		if($pro->id==$use->profileid)
			$pro2=$pro;
	}
					
					echo	'<div class="col-md-4 col-lg-3 col-sm-6 col-xs-3  col-12 swiper-slide">
							<div class="card box" >
	

<div style="width: 250px; height: 180px;">
<a href="/about/'.$use->id.'" class="thumbnaidl"><img height="80" width="100" style="height: 100%; width: 100%;" class="img-fluid" src="'.$use->projectimage.'" /></a>
</div>

	<div class="card-block" class="pb-1" style="position: relative; padding-bottom: 60px; min-height: 250px;">

				<h6><a href="/about/'.$use->id.'">'.$use->projecttitle.'</a></h6>
				<p class="text-muted">By <strong><a href="/about/'.$use->id.'" class="text-muted">'.$pro2->FirstName.'</a></strong></p>
				<p class="desc">'.$use->shortblurb.'</p>

				<div style="position: absolute; bottom: 10px; width: 86%; ">
				<div class="progress">
  					<div class="progress-bar" role="progressbar" style="width: '.$use->fundraised*100/$use->fundinggoal.'%" aria-valuenow="51" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<p class="mb-1">'.$use->fundraised*100/$use->fundinggoal.'% funded</p>
				</div>


</div>
<div class="card-footer text-muted">
	<div class="row ">
			<div class="col-12">
			</div>
			<div class="col-12">
				<div class="row">
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Backers</p>
						<h6 class="mt-0 mb-0"><strong>143</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Pledged</p>
						<h6 class="mt-0 mb-0"><strong>&dollar;'.$use->fundraised.'</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Days&nbsp;Left</p>
						<h6 class="mt-0 mb-0"><strong>15</strong></h6>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 
	
						</div>';
					
						

}

?>




				
				
				
				<div class="col-sm-3 mb-4">
					<div class="card box">
	<a href="http://127.0.0.1:8000/project" >
		<img src="http://i.expresspixel.com/unsplash.it/310/210?image=161" class="img-fluid hidden-xs-down"/>
		<img src="http://i.expresspixel.com/unsplash.it/610/210?image=161" class="img-fluid hidden-sm-up"/>
	</a>
	<div class="card-block" class="pb-1" style="position: relative; padding-bottom: 60px; min-height: 250px;">

				<h6><a href="http://127.0.0.1:8000/project">strategize transparent metrics</a></h6>
				<p class="text-muted">By <strong><a href="http://127.0.0.1:8000/project" class="text-muted">Susan Myers</a></strong></p>
				<p class="desc">The Law of True Life, Greatness, Power and Happiness</p>

				<div style="position: absolute; bottom: 10px; width: 86%; ">
				<div class="progress">
  					<div class="progress-bar" role="progressbar" style="width: 93%" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
				<p class="mb-1">93% funded</p>
				</div>


</div>
<div class="card-footer text-muted">
	<div class="row ">
			<div class="col-12">
			</div>
			<div class="col-12">
				<div class="row">
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Backers</p>
						<h6 class="mt-0 mb-0"><strong>24</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Pledged</p>
						<h6 class="mt-0 mb-0"><strong>&dollar;50,000</strong></h6>
					</div>
					<div class="col-4 text-center">
						<p class="mt-0 mb-0">Days&nbsp;Left</p>
						<h6 class="mt-0 mb-0"><strong>15</strong></h6>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 
				</div>
				 
		</div>
	</div>
	</div>

		
				<div class="mt-5 pt-2 pb-2">

	<div class="container">

		<div class="row">

		

			<div class="col-md-10 offset-md-1  col--sm-12">
<div class="card ">
  <div class="card-block">
      <div class="row">
      <div class="col-md-8">
        <h4 class="card-title">We crowdfund amazing inventions</h4>
        <p class="card-text">Build your own crowdfunding or fundraising website. Raise money online or through your Facebook profile. Get started today.</p>
      </div>
        <div class="col-md-4 text-center">
            <br />
            <a href="http://127.0.0.1:8000/start" class="btn btn-primary btn-lg">Start your project <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
        </div>
        </div>
  </div>
</div>
			</div>
		</div>	
		</div>	
		</div>	
		</div>	
		</div>	


     
          <footer class="footer text-white mt-5">
		<div class="container">
			<div class="row mt-5">
			
				<div class="col-12">
<div class="row">

				<div class="col-4 col-md-3">
					<h5 class="mt-4 mb-4">About us</h5>
					<ul class="list-unstyled">

						
    <li><a href="http://127.0.0.1:8000/about">How it works</a></li>
    <li><a href="http://127.0.0.1:8000/about">About us</a></li>
    <li><a href="http://127.0.0.1:8000/about">Partners</a></li>
    <li><a href="http://127.0.0.1:8000/account-payment">Payment methods</a></li>
    <li><a href="http://127.0.0.1:8000/about">Glossary</a></li>
    <li><a href="http://127.0.0.1:8000/about">Blog</a></li>


					</ul>
				</div>
						
				<div class="col-4 col-md-3">
					<h5 class="mt-4 mb-4">Help</h5>
					<ul class="list-unstyled">
					<li><a class="transition-all navy-400 hover-navy-500" href="http://127.0.0.1:8000/typography">FAQ</a></li>
					<li><a class="transition-all navy-400 hover-navy-500" href="http://127.0.0.1:8000/typography">Typography</a></li>
					<li><a class="transition-all navy-400 hover-navy-500" href="http://127.0.0.1:8000/contact">Support</a></li>
					<li><a class="transition-all navy-400 hover-navy-500" href="http://127.0.0.1:8000/typography">Terms of Use</a></li>
					<li><a class="transition-all navy-400 hover-navy-500" href="http://127.0.0.1:8000/typography">Privacy Policy</a></li>
					<li><a class="transition-all navy-400 hover-navy-500" href="http://127.0.0.1:8000/typography">Cookie Policy</a></li>
					</ul>
				</div>
						
				<div class="col-4 col-md-3">
							<h5 class="mt-4 mb-4">Contact</h5>
							<p>
    CrowdFunding by ExpressPixel<br />
    32 Shire Oak Road<br />
    LN2 1ZU London<br />
    Tel: +1-202-555-0176<br />
    example@expresspixel.com<br />
</p>
				</div>

				<div class="col-12 col-md-3">
							<h5 class="mt-4 mb-4">Join us</h5>
<ul class="social-network social-circle">
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook fa-fw"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter fa-fw"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin fa-fw"></i></a></li>
                    </ul>		
				</div>


				</div>
				</div>
				
				
			</div>
			<br />			
			<br />			
			<p class="text-center">Copyright &copy;  2017, CrowdFunding by ExpressPixel.com</p>
		</div>
      </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->


	<script>
		var eventTime = moment().add(8, 'hours'); // Timestamp - Sun, 21 Apr 2013 13:00:00 GMT
		var currentTime = 1366547400; // Timestamp - Sun, 21 Apr 2013 12:30:00 GMT
		var diffTime = eventTime - currentTime;
		var duration = moment.duration(diffTime*1000, 'milliseconds');
		var interval = 1000;

		setInterval(function(){
		  duration = moment.duration(duration - interval, 'milliseconds');
			$('#current_time').text(moment().format('MMMM Do YYYY, h:mma'));
		}, interval);
	</script>
  </body>
</html>

<!--
<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <span class="text-muted">&copy; CrowdFundr - by ExpressPixel</span>
      </div>
      
      <div class="col-md-4">
        <ul class="social-media-list">
          
          <li>
            <a href="https://github.com/jekyll"><span class="icon icon--github"><svg viewBox="0 0 16 16" width="16px" height="16px"><path fill="#828282" d="M7.999,0.431c-4.285,0-7.76,3.474-7.76,7.761 c0,3.428,2.223,6.337,5.307,7.363c0.388,0.071,0.53-0.168,0.53-0.374c0-0.184-0.007-0.672-0.01-1.32 c-2.159,0.469-2.614-1.04-2.614-1.04c-0.353-0.896-0.862-1.135-0.862-1.135c-0.705-0.481,0.053-0.472,0.053-0.472 c0.779,0.055,1.189,0.8,1.189,0.8c0.692,1.186,1.816,0.843,2.258,0.645c0.071-0.502,0.271-0.843,0.493-1.037 C4.86,11.425,3.049,10.76,3.049,7.786c0-0.847,0.302-1.54,0.799-2.082C3.768,5.507,3.501,4.718,3.924,3.65 c0,0,0.652-0.209,2.134,0.796C6.677,4.273,7.34,4.187,8,4.184c0.659,0.003,1.323,0.089,1.943,0.261 c1.482-1.004,2.132-0.796,2.132-0.796c0.423,1.068,0.157,1.857,0.077,2.054c0.497,0.542,0.798,1.235,0.798,2.082 c0,2.981-1.814,3.637-3.543,3.829c0.279,0.24,0.527,0.713,0.527,1.437c0,1.037-0.01,1.874-0.01,2.129 c0,0.208,0.14,0.449,0.534,0.373c3.081-1.028,5.302-3.935,5.302-7.362C15.76,3.906,12.285,0.431,7.999,0.431z"/></svg>
</span><span class="username">jekyll</span></a>

          </li>
          

          
          <li>
            <a href="https://twitter.com/jekyllrb"><span class="icon icon--twitter"><svg viewBox="0 0 16 16" width="16px" height="16px"><path fill="#828282" d="M15.969,3.058c-0.586,0.26-1.217,0.436-1.878,0.515c0.675-0.405,1.194-1.045,1.438-1.809c-0.632,0.375-1.332,0.647-2.076,0.793c-0.596-0.636-1.446-1.033-2.387-1.033c-1.806,0-3.27,1.464-3.27,3.27 c0,0.256,0.029,0.506,0.085,0.745C5.163,5.404,2.753,4.102,1.14,2.124C0.859,2.607,0.698,3.168,0.698,3.767 c0,1.134,0.577,2.135,1.455,2.722C1.616,6.472,1.112,6.325,0.671,6.08c0,0.014,0,0.027,0,0.041c0,1.584,1.127,2.906,2.623,3.206 C3.02,9.402,2.731,9.442,2.433,9.442c-0.211,0-0.416-0.021-0.615-0.059c0.416,1.299,1.624,2.245,3.055,2.271 c-1.119,0.877-2.529,1.4-4.061,1.4c-0.264,0-0.524-0.015-0.78-0.046c1.447,0.928,3.166,1.469,5.013,1.469 c6.015,0,9.304-4.983,9.304-9.304c0-0.142-0.003-0.283-0.009-0.423C14.976,4.29,15.531,3.714,15.969,3.058z"/></svg>
</span><span class="username">jekyllrb</span></a>

          </li>
          
        </ul>
      </div>
    </div>
  </div>
</footer>-->
    




<div class="modal fade login-modal-lg" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content" style="background: transparent; border: none;">

            <div class="modal-body">

            <div class="row">

                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12  pull-right">
                            <h4  style="color: #fff; font-weight: 100;">Login</h4>
                            <a href="#" data-dismiss="modal" style="position: absolute; top: 0; right: 0;"><i class="icon-close icons" aria-hidden="true" style="color: #fff; font-size: 26px"></i></a>
                            <div class="card mt-3" style="background: #fff; padding: 10px">
                              <h6 style="color: #000;font-weight: 100;">Already have an account</h6>
                                <p>Please login to continue.</p><br />
                                <form>
                                    <div class="form-group row">
                                      <div class="col-sm-12">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <div class="col-sm-12">
                                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2s"></label>
                                      <div class="col-sm-10">
                                        <div class="form-check">
                                          <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox"> Remember me
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                    <br /><br />
                                    <div class="form-group row">
                                      <div class="offset-sm-3 col-sm-6 text-center">
                                        <a href="http://127.0.0.1:8000/account-dashboard" class="btn btn-primary btn-block">Sign in</a>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <div class="offset-sm-2 col-sm-8 text-center">
                                        <a href="" class="mt-2">Forgotten your password</a>
                                      </div>
                                    </div>
                                  </form>                            
                              </div>	 		
                        </div>	 		
                    </div>	 		
                </div>	 		

            </div>
            </div>
    </div>
  </div>
</div>

<div class="modal fade signup-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background: transparent; border: none;">

            <div class="modal-body">

            <div class="row">

                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-11 col-sm-12">
                            <h4  style="color: #fff; font-weight: 100;">Register</h4>
                                                        <a href="#" data-dismiss="modal" style="position: absolute; top: 0; right: 0;"><i class="icon-close icons" aria-hidden="true" style="color: #fff; font-size: 26px"></i></a>

                            <div class="card  mt-3" style="background: #fff; padding: 10px">
                              <h6 style="color: #000">New to CrowdFunding?</h6>
                                <p>A crowdfunding account is required to continue.</p>

                                <form role="form">
                                    <div class="form-group">
                                        <input type="email" class="form-control " placeholder="Enter email">
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                          <div class="form-group">
                                              <input type="text" class="form-control"placeholder="First name">
                                          </div>
                                        </div>
                                        
                                        <div class="col-6">
                                          <div class="form-group">
                                              <input type="text" class="form-control"placeholder="Last name">
                                          </div>
                                        </div>
                                      </div>
                                    <div class="row">
                                        <div class="col-6">
                                          <div class="form-group">
                                              <input type="password" class="form-control"placeholder="Password">
                                          </div>
                                        </div>
                                        
                                        <div class="col-6">
                                          <div class="form-group">
                                              <input type="password" class="form-control"placeholder="Confirm password">
                                          </div>
                                        </div>
                                      </div>
                                  
                                  <div class="text-center">
                                    <br /><br />
                                    <p>By signing up you agree to our terms and conditions and privacy policy</p>                          
                                    <a href="http://127.0.0.1:8000/account-dashboard" class="btn btn-primary">Create account</a><br /><br />
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

 		

            </div>
            </div>
    </div>
  </div>
</div>
<script>


var app = new Vue({
  el: '#navbar',
  data: {
    search: false
  },
  methods: {
    showSearchBar: function () {
      this.search = true;
    },
    hideSearchBar: function () {
      this.search = false;
    }
  }
})

</script>
  </body>
</html>