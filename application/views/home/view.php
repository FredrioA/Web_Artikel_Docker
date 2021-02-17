<div class="container" style="padding-top: 30;">
	<div class="row mt-5">
	<?php foreach($post as $post){ ?>
		<div class="card col-md-9">
			<div class="card-body" style="padding-bottom: 10">
				<h2 class="card-title"><?= $post['judul'] ?></h2><hr>
				<img src="<?= base_url() ?>assets/image/icon_view.jpg" style="width: 780; height: 400;"><hr>
				<p  style="text-align: justify"><?= $post['isi'] ?></p>
			</div>
		</div>
	<?php }?>
		<div class="col-md" style="margin-left: 40">
			<div class="row">
				<div class="card" style="height: auto; padding: 20; width: 240;">
					<center><h6>Artikel Terbaru</h6></center><hr>
					<?php foreach($npost as $npost){ ?>
					<a href="<?= base_url() ?>home/view/<?= $npost['id_post'] ?>" style="text-align: justify; color: black;"><?= $npost['judul'] ?></a><hr>
					<?php }?>
				</div>
			</div>
			<div class="row mt-3">
				<div class="card" style="height: 180; padding: 20; width: 240;">
					<center><h6>Setting Artikel</h6></center>
  					<a href="<?= base_url() ?>post/update/<?= $post['id_post'] ?>" class="btn btn-primary" type="button">Edit</a><br>
  					<a href="<?= base_url() ?>post/hapus/<?= $post['id_post'] ?>" class="btn btn-danger" type="button" onclick="return confirm('Yakin ingin menghapus Artikel ini?')">Hapus</a>
				</div>
			</div>
		</div>
	</div>
		

</div>