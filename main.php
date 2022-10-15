<?php
$produits = [
	0 => ['designation' => "des1", 'categorie' => "cat1", 'qS' => 15,"prixU"=>220,"Pormo"=>10,"image"=>"images/about.jpg"],
	1 => ['designation' => "des1", 'categorie' => "cat2", 'qS' => 15,"prixU"=>220,"Pormo"=>10,"image"=>"images/item-7.jpg"],
	2 => ['designation' => "des2", 'categorie' => "cat3", 'qS' => 15,"prixU"=>220,"Pormo"=>10,"image"=>"images/item-6.jpg"]

];

?>
<div class="colorlib-product">
			<div class="container">
				
				<div class="row row-pb-lg">
					<div class="col-md-12">
						<table class="table table-hover">
							<thead>
								<tr>
								<th scope="col">#</th>
								<th scope="col">Désignation</th>
								<th scope="col">Catégorie</th>
								<th scope="col">Quantité de Stock</th>
								<th scope="col">Prix unitaire</th>
								<th scope="col">Promo %</th>
								<th scope="col"> Image</th>
								<th scope="col"> Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
										foreach ($produits as $key => $value) {
										

								?>
								<tr>
								<th scope="row"><?php  echo $key ?></th>
								<td><?php  echo $value['designation'] ?></td>
								<td><?php  echo $value['categorie'] ?></td>
								<td><?php  echo $value['qS'] ?></td>
								<td><?php  echo $value['prixU'] ?></td>
								<td><?php  echo $value['Pormo'] ?></td>
								<td> <img width="80px" height="80px" src="<?php  echo $value['image'] ?>"/></td>
								<td> <img width="20px" height="20px" alt="show" src="images/show.png"/> &nbsp <img width="20px" height="20px" alt="edit" src="images/edit.jpg"/> &nbsp <img width="20px" height="20px" alt="delete" src="images/delete.jpg"/></td>

								</tr>
								<?php

										}
								?>
							</tbody>
						</table>
							</div>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
