
	<div class="footer">
		<div class="container">
			<div class="content">
				<?php 
					echo "<pre>";
					print_r($this->session->all_userdata());
					echo "</pre>";
				 ?>
			</div>
		</div>
	</div>





    <!-- /.container -->    <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    <script src="<?php echo base_url('assets/js/vendor/jquery.min.js'); ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/js/vendor/video.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/flat-ui.min.js'); ?>"></script>

  </body>
</html>