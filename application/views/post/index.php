<div class="container">
	<div class="row mt-5">
		<div class="card text-white bg-dark">
			<img src="<?= base_url() ?>assets/image/top_image.png"  class="card-img" style="width: 1120; height: 460;">
  			<div class="card-img-overlay">
  				<div style="padding-top: 100; padding-left: 30; padding-right: 700;">
  					<h1 class="card-title">Dunia Artikel</h1>
    				<p>Seseorang yang banyak bertindak dan membaca, akan banyak melihat dan mengetahui.</p>
    				<div class="btn-group col-10" role="group">
  						<a type="button" class="btn btn-danger">Gabung</a>
  						<a type="button" class="btn btn-outline-danger" href="<?= base_url() ?>post/tambah">Tulis Karyamu</a>
					</div>
  				</div>
  			</div>
		</div>
	</div>
	<div class="row mt-5">
		<h2>List Artikel</h2>
	</div><hr>
	<div class="row mt-3">
		<?php foreach($post as $post) { ?>
			<div class="col-md-4 mb-4">
				<div class="card" style="width: 18rem;">
					<a class="stretched-link" href="<?= base_url() ?>home/view/<?= $post['id_post'] ?>"></a>
  					<img src="<?= base_url() ?>assets/image/icon_artikel.jpg" class="card-img-top">
  					<div class="card-body">
    				<h5 class="card-title text-truncate"><?= $post['judul']; ?></h5>
    				<p style="-webkit-line-clamp:4; overflow:hidden; text-overflow:ellipsis; display:-webkit-box; -webkit-box-orient:vertical; text-align: justify;">
							<?= $post['isi']; ?>		
						</p>
  					</div>
				</div>
			</div>
		<?php } ?>
	</div>
	<div class="row mt-3">
		<div class="col">
			<?= $this->pagination->create_links(); ?>
		</div>
	</div>
</div>