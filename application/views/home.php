<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div id="slide">
	<h2>Get Bright Future from Higher Education</h2>
	<p>6,181 graduates from different degree programs<br/></p>
	<a href="#" class="btn btn-warning btn-lg">Degree Programs</a>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-7">
			<div class="row">
				<div class="col-sm-12">
					<div id="section-programs" class="carousel slide" data-ride="carousel">
						<a href="#" title=""><h3 class="text-center" id="programs-header">Higher Education Programs</h3></a>
					    <ol class="carousel-indicators">
					       <li data-target="#section-programs" data-slide-to="0" class="active" style="background-color: #007373"></li>
					       <li data-target="#section-programs" data-slide-to="1" style="background-color: #007373"></li>
					       <li data-target="#section-programs" data-slide-to="2" style="background-color: #007373"></li>
					    </ol>
					    <div class="carousel-inner">
					    	<?php
					      		foreach ($programs as $i => $program) {
					      			echo '<div class="item '.($i == 0 ? "active" : "").' program-item">';
									echo '<a href="#" title="">';
					      			echo '<img src="'.$program->logo.'" alt="'.$program->shortname.'" style="height: 150px;">';
									echo '<div class="carousel-caption" style="left: 35%; right: 10%;">';
					      			echo '<h3>'.$program->fullname.'</h3>';
									echo '<p>'.$program->authority.'</p>';  
					      			echo '</div>';
					      			echo '</a>';
									echo '<a href="#" class="btn btn-warning btn-lg more-programs">More Info</a>';
									echo '</div>';
					      		}
					      	?>
						</div>
					    <a class="left carousel-control" href="#section-programs" data-slide="prev" style="color: #007373">
					      	<span class="glyphicon glyphicon-chevron-left"></span>
					      	<span class="sr-only">Previous</span>
					    </a>
					    <a class="right carousel-control" href="#section-programs" data-slide="next" style="color: #007373">
					      	<span class="glyphicon glyphicon-chevron-right"></span>
					      	<span class="sr-only">Next</span>
					    </a>
				  	</div>
				</div>
				<div class="col-sm-12">
					<div class="row">
			            <div id="section-branches" class="carousel slide" data-ride="carousel">
							<a href="#"><h3 class="text-center" id="branches-header">Branches</h3></a>
							<div class="carousel-inner">
								<?php 
									foreach ($branches as $key => $values) {
										echo '<div class="item '.($key == 0 ? "active" : "").'">';
											foreach ($values as $branch) {
												echo '<a href="#">';
												echo '<div class="col-md-4 col-sm-6">';
												echo '<div class="branch-item">';
												echo '<h3 class="branch-header text-center">' . $branch->name . '</h3>';
												echo '<hr/>';
												echo '<h4 class="text-center branch-address">' . $branch->postno . ', ' . $branch->street . '</h4>';
												echo '<p class="text-center branch-tel">' . $branch->tel1 . '</p>';
												echo '</div>';
												echo '<a href="#" class="btn btn-warning btn-lg more-branches">More Info</a>';
												echo '</div>';
												echo '</a>';
											}
										echo '</div>';
									}
								?>
			                </div>
			                <a class="left carousel-control" href="#section-branches" role="button" data-slide="prev" style="color: #007373">
			                    <span class="glyphicon glyphicon-chevron-left"></span>
			                </a>
			                <a class="right carousel-control" href="#section-branches" role="button" data-slide="next" style="color: #007373">
			                    <span class="glyphicon glyphicon-chevron-right"></span>
			                </a>
			            </div>
		        	</div>
				</div>
			</div>
		</div>
		<div class="col-sm-5">
			<div id="section-news">
				<a href="#"><h3 class="text-center" id="news-header">News</h3></a>
				<ul class="news-list">
					<li class="news-item">
						<span class="news-caption"><strong>News 01</strong></span>
						<a href="#" title="" class="news-summery">RENEWAL OF REGISTRATION FOR THE YEAR 2020</a>
						<span class="news-date text-right"><small>December 17, 2019</small></span>
					</li>
					<li class="news-item">
						<span class="news-caption"><strong>News 02</strong></span>
						<a href="#" title="" class="news-summery">RENEWAL OF REGISTRATION FOR THE YEAR 2020. RENEWAL OF REGISTRATION FOR THE YEAR 2020.</a>
						<span class="news-date text-right"><small>December 17, 2019</small></span>
					</li>
					<li class="news-item">
						<span class="news-caption"><strong>News 03</strong></span>
						<a href="#" title="" class="news-summery">RENEWAL OF REGISTRATION FOR THE YEAR 2020. RENEWAL OF REGISTRATION FOR THE YEAR 2020.</a>
						<span class="news-date text-right"><small>December 17, 2019</small></span>
					</li>
					<li class="news-item">
						<span class="news-caption"><strong>News 04</strong></span>
						<a href="#" title="" class="news-summery">RENEWAL OF REGISTRATION FOR THE YEAR 2020. RENEWAL OF REGISTRATION FOR THE YEAR 2020.</a>
						<span class="news-date text-right"><small>December 17, 2019</small></span>
					</li>
					<li class="news-item">
						<span class="news-caption"><strong>News 05</strong></span>
						<a href="#" title="" class="news-summery">RENEWAL OF REGISTRATION FOR THE YEAR 2020. RENEWAL OF REGISTRATION FOR THE YEAR 2020.</a>
						<span class="news-date text-right"><small>December 17, 2019</small></span>
					</li>
				</ul>
				<div class="text-center">
					<a href="" title="" class="btn btn-primary" id="view-all-news">View All News</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
    <div class="row">
        <div id="section-teams" class="carousel slide" data-ride="carousel">
	        <h3 class="text-center" id="teams-header">Our Teams</h3>       
	        <div class="carousel-inner">
				<?php
					foreach ($teams as $key => $values) {
						echo '<div class="item '.($key == 0 ? "active" : "").'">';
							foreach ($values as $team) {
								echo '<a href="#">';
								echo '<div class="col-md-4 col-sm-6">';
								echo '<div class="teams-item" style="background-image: url('. $team->photo .'); background-size: cover;">';
								echo '<h3 class="team-header text-center">' . $team->name . '</h3>';
								echo '<hr/>';
								echo '<h4 class="text-center team-address">' . $team->branch . '</h4>';
								echo '<p class="text-center team-tel">' . $team->designation . '</p>';
								echo '</div>';
								echo '<a href="#" class="btn btn-warning btn-lg more-team">More Info</a>';
								echo '</div>';
								echo '</a>';
							}
						echo '</div>';
					}
				?>
			</div>
	        <a class="left carousel-control" href="#section-teams" role="button" data-slide="prev" style="color: #007373">
	            <span class="glyphicon glyphicon-chevron-left"></span>
	        </a>
	        <a class="right carousel-control" href="#section-teams" role="button" data-slide="next" style="color: #007373">
	            <span class="glyphicon glyphicon-chevron-right"></span>
	        </a>
	    </div>
    </div>
</div>
