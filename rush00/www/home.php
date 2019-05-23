<style>
	.card-deck .card {
		min-width: 220px;
	}
</style>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center" style="max-width: 700px">
	<h1 class="display-4">Pricing</h1>
	<p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
</div>

<div class="container" stlye="max-width: 960px">
	<div class="card-deck mb-3 text-center">
		<div class="card mb-4 shadow-sm">
		<div class="card-header">
			<h4 class="my-0 font-weight-normal">Frais de port gratuit</h4>
		</div>
		<div class="card-body">
			<h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
			<ul class="list-unstyled mt-3 mb-4">
				<li>10 users included</li>
				<li>2 GB of storage</li>
				<li>Email support</li>
				<li>Help center access</li>
			</ul>
		</div>
		<div class="card-footer">
			<button type="button" class="btn btn-lg btn-block btn-outline-primary">S'inscire!</button>
		</div>
		</div>
		<?php
			if (!isset($_GET['cat'])) {
				global $con;
				$get_pro = "select * from products order by RAND() LIMIT 0,3";
				$run_pro = mysqli_query($con, $get_pro);
				while ($row_pro = mysqli_fetch_array($run_pro)) {
					$pro_id = $row_pro['product_id'];
					$pro_cat = $row_pro['product_cat'];
					$pro_brand = $row_pro['product_brand'];
					$pro_title = $row_pro['product_title'];
					$pro_price = $row_pro['product_price'];
					$pro_desc = $row_pro['product_desc'];
					echo "
					<div class='card mb-4 shadow-sm'>
						<div class='card-header'>
							<h4 class='my-0 font-weight-normal'>$pro_title</h4>
						</div>
						<div class='card-body'>
							<h1 class='card-title pricing-card-title'>$$pro_price</h1>
							<ul class='list-unstyled mt-3 mb-4'>
								<li>$pro_desc</li>
								</ul>
						</div>
						<div class='card-footer'>
							<a href='index.php?cart=$pro_id'><button type='button' class='btn btn-lg btn-block btn-outline-primary'>Ajouter au panier</button></a>
						</div>
					</div>
					";
				}
			}
		?>
	</div>
</div>
