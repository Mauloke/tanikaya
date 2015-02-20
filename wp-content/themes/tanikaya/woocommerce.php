<?php get_header(); ?>
<div class="row">
	<div class="col-md-12" id="produk-head-container">
        <div id="backdrop-produk">
            <div class="row">
                <div class="col-md-10 col-md-offset-2">
                    <div class="jumbotron">
                      <h1>Tentang Kami</h1>
                      <p><a class="btn btn-primary btn-lg" href="<?php echo do_shortcode("[download_data id='76' data='download_link']"); ?>">DOWNLOAD COMPANY PROFILE</a></p>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>



    <div id="blog" class="container">
    	<div class="row">
        	<div class="col-md-12">
			<?php woocommerce_content(); ?>
            </div>
        </div>
	</div>

<!-- End Loop -->
