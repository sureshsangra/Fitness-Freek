<script type="text/javascript">
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
<div class="container">	
	<div class="row">
		<div class="col-md-12 text-center top-bottom-space-s">
		<img src=<?php echo site_url("images/logo.png") ?>>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
<form class="form-inline">
  <div class="form-group">
    			<h4 class="molot" ><a href= <?php echo site_url("explore/gaming-anime-geek-t-shirts-india") ?> >Tees</a><small>&nbsp;/&nbsp;</small><a href= <?php echo site_url("explore/gaming-anime-geek-coffee-mugs-india") ?> >Coffee Mugs</a><small>&nbsp;/&nbsp;</small><a href= <?php echo site_url("explore/gaming-anime-geek-posters-india") ?> >Posters</a>
                	</h4>
  </div>
</form>
		</div>
		<div class="col-md-6">
		<h4>
			<span class="pull-right">
				<a class="molot" data-toggle="tooltip" target="_blank" title="Kingdom of gamers geeks and otaku kinights" data-placement="top" href= 'http://psychostore.in/blog' > Psycho Realm </a> 
	            	<small>/</small>
	            	<a class="molot" data-toggle="tooltip" title="See what people are saying about us" data-placement="top" href= <?php echo site_url('feedback')?> > Reviews </a>
	            	<small>/</small>
	            	<a class="molot" data-toggle="tooltip" title="Gaming in India" data-placement="right" href= <?php echo site_url('insights')?> > Statistics </a>
            </span>
        </h4>
		</div>
	</div>
	<div class="row well">
		<div class="col-md-12">
			<?php $data['products'] = $products; $this->load->view('catalog',$data);?>
		</div>
	</div>

	<?php $data['tag_name'] = 'psychofamous'; echo $this->load->view('view_product_instagram', $data); ?>

	<div class="row top-bottom-space">
		<div class="col-md-12">
		<h2 class="molot">Any Comments?</h2>
		<h5>We would love to hear what you think about us or drop us some <a href= <?php echo site_url('auth/saysomething')?> >feedback</a>.</h5>
		<hr>
			<?php $this->load->view('disqus_script')?>
		</div>
	</div>	
</div>