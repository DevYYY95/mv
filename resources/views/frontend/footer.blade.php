<div class="footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 no-padding">
				<hr>
			</div>
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
				<center>
					<img src="{{asset('upload/logo-cp-footer.png')}}" alt="logo" class="img-responsive">
				</center>
			</div>
			<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 no-padding">
				<hr>
			</div>
		</div>
		<div class="row social-link">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<center>
					<ul class="list-inline">
						<li><a href=""><i class="fa fa-facebook"></i></a></li>
						<li><a href=""><i class="fa fa-twitter"></i></a></li>
						<li><a href=""><i class="fa fa-instagram"></i></a></li>
						<li><a href=""><i class="fa fa-linkedin"></i></a></li>
						<li><a href=""><i class="fa fa-pinterest-p"></i></a></li>
						<li><a href=""><i class="fa fa-whatsapp"></i></a></li>
						<li><a href=""><i class="fa fa-google"></i></a></li>
					</ul>
				</center>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
				<p>Copyright 2018 &copy; Cinema Point Co.,Ltd. All Right Reserved.</p>
				<p>
					The content and images used on this site are copyright protected and copyrights vests with the respective owners. The usage of the content and images on this website is intended to promote the works and no endorsement of the artist shall be implied.
				</p>
				<p>Unauthorized use is prohibited and punishable by law.</p>
			</div>
		</div>
	</div>
</div>



<script src="{{asset('js/jquery.min.js')}}"></script> 
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/select2.min.js')}}"></script>
<script text="text/javascript">
	$(document).ready(function(){
		$(".signup").click(function(){
    		$("#myModal").hide();
		});
		$(".signup").click(function(){
    		$(".modal-backdrop").hide();
		});
		$(".signup").click(function(){
    		$("body").removeAttr("style");
		});
	});
  $('#myTabs a').click(function (e) {
    e.preventDefault()
    $(this).tab('show')
  });
</script>



</body>
</html>