<div class="container">
	<div class="row">
		<?php 
			if (!empty($jobs))
			{
				foreach ($jobs as $row)
				{
					echo '<div class="col-md-3">';
						echo '<div class="well">';
							echo '<a href="'.site_url('company/view_job/'.$row['job_slug']).'"><h6 class="title-title title-left" >'.$row['job_title'].'</h6></a>';
							echo '<ul class="list-unstyled text-left">';
								echo '<li>'.$row['job_location'].'</li>';
								echo '<li><strong class="text-primary">Php '.number_format($row['job_salary'], 2).'</strong></li>';
								echo '<li>'.substr($row['job_description'],0,100).'</li>';
							echo '</ul>';
						echo '</div>';
					echo '</div>';
				}
			}
			else{
				echo '<div class="container">
					 	<div class="jumbotron text-center">
					 		<h4>There seems to be none right now  <i class="icon-minisad"></i></h4>
					 	</div>
					 </div>';
			}
				
		 ?>
		 
		<!-- <div class="col-md-3">
			<div class="well">
				<h6 class="title-title title-left">title</h6>
				<ul class="list-unstyled text-left">
					<li>location</li>
					<li><strong class="text-primary">salary</strong></li>
					<li>desciption</li>
				</ul>
			</div>
		</div> -->
	</div>
</div>