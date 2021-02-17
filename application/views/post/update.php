<div class="container" style="padding-top: 30;">
  <?php foreach($post as $post){ ?>
  <div class="card mt-5">
    <h5 class="card-header">Update Artikel</h5>
      <div class="card-body">
        <form action="<?= base_url() ?>post/update/<?= $post['id_post'] ?>" method="POST">
          <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan judul" value="<?= $post['judul'] ?>">
            <?= form_error('judul', '<small class="text-danger">', '</small>')?>
          </div>
          <div class="form-group">
            <label for="isi">Isi</label>
            <textarea rows="10" class="form-control" name="isi" id="isi" placeholder="Masukkan isi"><?= $post['isi'] ?></textarea>
            <?= form_error('isi', '<small class="text-danger">', '</small>')?>
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
          <a href="<?= base_url() ?>home/view/<?= $post['id_post'] ?>" type="button" class="btn btn-warning">Batal</a>
        </form>
    </div>
  </div>
  <?php } ?>
</div>