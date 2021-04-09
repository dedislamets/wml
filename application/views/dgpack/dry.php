<style type="text/css">
	.p-10{
		padding: 10px;
	}
	.bloc_left_price {
	    color: #c01508;
	    text-align: center;
	    font-weight: bold;
	    font-size: 150%;
	}
	.category_block li:hover {
	    background-color: #007bff;
	}
	.category_block li:hover a {
	    color: #ffffff;
	}
	.category_block li a {
	    color: #343a40;
	}
	.add_to_cart_block .price {
	    color: #c01508;
	    text-align: center;
	    font-weight: bold;
	    font-size: 200%;
	    margin-bottom: 0;
	}
	.add_to_cart_block .price_discounted {
	    color: #343a40;
	    text-align: center;
	    text-decoration: line-through;
	    font-size: 140%;
	}
	.product_rassurance {
	    padding: 10px;
	    margin-top: 15px;
	    background: #ffffff;
	    border: 1px solid #6c757d;
	    color: #6c757d;
	}
	.product_rassurance .list-inline {
	    margin-bottom: 0;
	    text-transform: uppercase;
	    text-align: center;
	}
	.product_rassurance .list-inline li:hover {
	    color: #343a40;
	}
	.reviews_product .fa-star {
	    color: gold;
	}
	.pagination {
	    margin-top: 20px;
	}
	.breadcrumb{
		background-color :#033a71
	}
	.card-text{
		line-height: 20px;
	}
	.card{
		margin-bottom: 10px;
	}
	
</style>
<div class="row p-10">
	<div class="" style="width: 100%;padding: 0 100px;">
	    <div class="row">
	        <div class="col">
	            <nav aria-label="breadcrumb">
	                <ol class="breadcrumb">
	                    <li class="breadcrumb-item"><a href="<?= base_url()?>dgpack">Home</a></li>
	                    <li class="breadcrumb-item"><a href="#">Products</a></li>
	                    <li class="breadcrumb-item active" aria-current="page">Dry Ice</li>
	                </ol>
	            </nav>
	        </div>
	    </div>
	</div>
	<div class="" style="padding:0 100px;">
	    <div class="row">
	        <div class="col-12 col-sm-3">
	            <div class="card bg-light mb-3">
	                <div class="card-header bg-primary text-white text-uppercase" style="background-color: #a91605"><i class="fa fa-list"></i> Our Products</div>
	                <ul class="list-group category_block">
	                    <li class="list-group-item"><a href="<?= base_url()?>dgpack/products">UN Packaging</a></li>
	                    <li class="list-group-item"><a href="<?= base_url()?>dgpack/single">Single Packaging</a></li>
	                    <li class="list-group-item"><a href="<?= base_url()?>dgpack/wooden">Wooden Box</a></li>
	                    <li class="list-group-item"><a href="<?= base_url()?>dgpack/innerpack">Inner Packaging</a></li>
	                    <li class="list-group-item"><a href="<?= base_url()?>dgpack/vermiculite">Vermiculite</a></li>
	                    <li class="list-group-item"><a href="<?= base_url()?>dgpack/dry-ice">Dry Ice</a></li>
	                    <li class="list-group-item"><a href="<?= base_url()?>dgpack/labels">Hazzard & Handling Labels</a></li>
	                </ul>
	            </div>
	            
	        </div>
	        <div class="col">
	        	<div class="row">
	        		<div class="col-lg-12">
		                <div class="section-tittle text-center mb-40 sec-title center">
		                    <h2>Dry Ice</h2>
		                </div>
		            </div>
		            <div class="col-lg-12">
		            	<img src="<?= base_url()?>assets/img/dgpack/product/Screenshot_12.png" style="width: 100%; margin-bottom: 10px;">
		            </div>
	        		<div class="masonry">
					  <div class="grid">
					    <img src="<?= base_url()?>assets/img/dgpack/product/DGP-Pathopak-P4-ver2.jpg">
					    <div class="grid__body">
					      <div class="relative">
					        <a class="grid__link" target="_blank" href="/" ></a>
					        <h1 class="grid__title">DGP Pathopack</h1>
					      </div>
					      <div class="mt-auto" >
					        <span class="grid__tag">#tag1</span>
					      </div>
					    </div>
					  </div>
					  <div class="grid">
					    <img src="<?= base_url()?>assets/img/dgpack/product/Gel-Packs.jpg">
					    <div class="grid__body">
					      <div class="relative">
					        <a class="grid__link" target="_blank" href="/" ></a>
					        <h1 class="grid__title">DGP PATHOPOUCH Gell Pack</h1>
					      </div>
					      <div class="mt-auto" >
					        <span class="grid__tag">#tag2</span>
					      </div>
					    </div>
					  </div>
					  <div class="grid">
					    <img src="<?= base_url()?>assets/img/dgpack/product/Dry-Ice-edited.jpg">
					    <div class="grid__body">
					      <div class="relative">
					        <a class="grid__link" target="_blank" href="/" ></a>
					        <h1 class="grid__title">DGP BIOTHERM 5,10,25,45,70</h1>
					      </div>
					      <div class="mt-auto" >
					        <span class="grid__tag">#tag3</span>
					      </div>
					    </div>
					  </div>
					  
					  
					</div>
	        	</div>
	        </div>

	    </div>
	</div>
</div>