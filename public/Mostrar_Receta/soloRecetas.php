<?php 
echo '<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="../receta/receta_images/Cabrera.jpg" alt="" />
											<h2>$56</h2>
											<p>' . $mostrar['nombreReceta']. '</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
											<h2>Ingredientes</h2>
											<ul>
											     <li>'. $mostrar['ingredientes'] .'</li>
											</ul>
												<h2>$56</h2>
												<p>' . $mostrar['nombreReceta']. '</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>';
?>