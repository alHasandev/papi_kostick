<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<section class="row">
  <div class="col-md-6 mx-auto">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Soal</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="/soal/update/<?= $question['id'] ?>" method="POST">
        <div class="card-body">
          <div class="form-group">
            <label for="a_code">Pilihan A</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="a_code_label"><?= $question['a_code'] ?></span>
              </div>
              <select name="a_code" id="a_code" class="form-control" onchange="setCodeLabel(this)">
                <?php foreach ($aspects as $data) : ?>
                  <option value="<?= $data['code'] ?>" <?= $question['a_code'] === $data['code'] ? 'selected' : '' ?>>
                    <?= $data['description'] ?> (<?= $data['code'] ?>)
                  </option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">A</span>
              </div>
              <input type="text" name="a_declaration" class="form-control" placeholder="Deklarasi..." value="<?= $question['a_declaration'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="b_code">Pilihan B</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="b_code_label"><?= $question['b_code'] ?></span>
              </div>
              <select name="b_code" id="b_code" class="form-control" onchange="setCodeLabel(this)">
                <?php foreach ($aspects as $data) : ?>
                  <option value="<?= $data['code'] ?>" <?= $question['b_code'] === $data['code'] ? 'selected' : '' ?>>
                    <?= $data['description'] ?> (<?= $data['code'] ?>)
                  </option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">B</span>
              </div>
              <input type="text" name="b_declaration" class="form-control" placeholder="Deklarasi..." value="<?= $question['b_declaration'] ?>">
            </div>
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer text-right">
          <a href="/soal" class="mr-3">Kembali</a>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
</section>

<script>
  function setCodeLabel(select) {
    const part = select.getAttribute('id');
    const code = select.value ? select.value : '?';
    document.querySelector(`#${part}_label`).textContent = code;
  }
</script>

<?= $this->endSection() ?>