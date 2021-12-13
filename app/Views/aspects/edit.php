<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<section class="row">
  <div class="col-md-6 mx-auto">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Aspek Nilai PAPI Kostick Tes</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="/aspek/update/<?= $aspect['id'] ?>" method="POST">
        <div class="card-body">
          <div class="row">
            <div class="col-md-2">
              <div class="form-group">
                <label for="code">Kode</label>
                <input type="text" name="code" class="form-control" id="code" placeholder="N" minlength="1" maxlength="1" value="<?= $aspect['code'] ?>">
              </div>
            </div>
            <div class="col-md-10">
              <div class="form-group">
                <label for="description">Keterangan Nilai Aspek</label>
                <input type="text" name="description" class="form-control" id="description" placeholder="Keterangan..." value="<?= $aspect['description'] ?>">
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer text-right">
          <a href="/aspek" class="mr-4">Kembali</a>
          <button type="submit" class="btn btn-primary">Ubah</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
</section>

<?= $this->endSection() ?>