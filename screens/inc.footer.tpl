	</div>

	<div class="container">

	<hr>

	<footer>
	    <div class="row">
	    	<div class="row text-center">
			<img src="https://src.24fin.com/images/icon/dbd.png">
		</div>
		<div class="col-lg-12 text-center margin-top-10">
		    <p>Copyright &copy; 2015 Remax (Thailand) Co.,Ltd. All rights reserved.</p>
		</div>
	    </div>
	</footer>

	</div>
	<!-- /.container -->

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment-with-locales.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js"></script>
	{if isset($is_use_lazy_load) && $is_use_lazy_load}
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>
	{/if}
	<!-- script src="//cdnjs.cloudflare.com/ajax/libs/masonry/3.2.1/masonry.pkgd.min.js"></script-->
	<script src="{$system_url}/scripts/js.cookie"></script>
	<script src="{$system_url}/scripts/main"></script>
	{if file_exists('js/'|cat:$filename|cat:'.js') }<script type="text/javascript" src="{$system_url}/scripts/{$filename}"></script>{/if}

    </body>
</html>