
<div class="container" style="padding-top: 30;">
  <div class="card mt-5">
    <h5 class="card-header">Tambah Baru</h5>
      <div class="card-body">
        <form action="<?= base_url() ?>post/tambah" method="POST">
          <div class="form-group">
            <label for="judul">Judul</label>
          <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan judul" value="<?= set_value('judul');?>">
          <?= form_error('judul', '<small class="text-danger">', '</small>')?>
          </div>
          <div class="form-group">
            <label for="isi">Isi</label>
            <textarea rows="10" class="form-control" name="isi" id="isi" placeholder="Masukkan isi"><?= set_value('isi');?></textarea>
            <?= form_error('isi', '<small class="text-danger">', '</small>')?>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  </div>
</div>