			</div>
		</div>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>../js/bootstrap.min.js"></script>
		<script>
			$(document).ready(function(){
				$('.list').on('change', function() {
					window.location = "<?php echo base_url(); ?>index.php/home/index/"+this.value;
				});
				$(".delete-btn").click(function(e) {
					e.preventDefault();
					$.post('<?php echo base_url(); ?>index.php/note/delete/'+$(this).attr("href"), function(data) {
					  window.location = "<?php echo current_url(); ?>";
					});
				});
				$(".add-btn").click(function(e) {
					var note = $("#note").val();
					var owner = $("#owner").val();
					var client = $("#clients").val();
					e.preventDefault();
					$.post('<?php echo base_url(); ?>index.php/note/add/'+note+'/'+owner+'/'+client+'/', function(data) {
					  window.location = "<?php echo current_url(); ?>";
					});
				});
			});
		</script>
	</body>
</html>