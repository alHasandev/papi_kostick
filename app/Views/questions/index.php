<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<section class="row mb-3">
  <div class="col-12 text-right">
    <a href="/soal/create" class="btn btn-primary">Tambah</a>
  </div>
</section>

<section class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Detail Aspek Nilai pada PAPI Kostick Tes</h3>

        <div class="card-tools">
          <ul class="pagination pagination-sm float-right">
            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
          </ul>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body p-0">
        <table class="table table-striped">
          <tbody>
            <?php if (!count($questions)) : ?>
              <tr>
                <th style="width: 50px;">0</th>
                <td colspan="3">
                  Belum ada data...
                </td>
              </tr>
            <?php endif; ?>
            <?php foreach ($questions as $i => $data) : ?>
              <tr>
                <th style="width: 50px;"><?= $i + 1 ?></th>
                <td>
                  <div>A. <?= $data['a_declaration'] ?> (<?= $data['a_code'] ?>)</div>
                  <div>B. <?= $data['b_declaration'] ?> (<?= $data['b_code'] ?>)</div>
                </td>
                <td class="text-right">
                  <form action="/soal/delete/<?= $data['id'] ?>" method="post" onsubmit="return confirm('Apakah anda yakin akan menghapus data ini?')">
                    <a href="/soal/edit/<?= $data['id'] ?>" class="btn btn-sm btn-success mr-2">
                      <i class="fas fa-edit"></i>
                    </a>
                    <button class="btn btn-sm btn-danger">
                      <i class="fas fa-trash-alt"></i>
                    </button>
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</section>

<?= $this->endSection() ?>