<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<section class="row">
  <div class="col-md-6 mx-auto">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Tambah Aspek Nilai PAPI Kostick Tes</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="/aspek/save" method="POST">
        <div class="card-body">
          <div class="row">
            <div class="col-md-2">
              <div class="form-group">
                <label for="code">Kode</label>
                <input type="text" name="code" class="form-control" id="code" placeholder="N" minlength="1" maxlength="1">
              </div>
            </div>
            <div class="col-md-10">
              <div class="form-group">
                <label for="description">Keterangan Nilai Aspek</label>
                <input type="text" name="description" class="form-control" id="description" placeholder="Keterangan...">
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer text-right">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
</section>

<?= $this->endSection() ?>