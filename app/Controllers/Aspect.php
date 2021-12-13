<?php

namespace App\Controllers;

use \App\Models\AspectModel;

class Aspect extends BaseController
{
  public function __construct()
  {
    $this->model = new AspectModel();
  }

  public function index()
  {
    // Siapkan meta data untuk halaman
    $data['page'] = [
      'title' => 'Aspek Nilai Tes',
      'route' => 'Aspek',
    ];

    // Siapkan daftar aspek
    $data['aspects'] = $this->model->findAll();

    return view('aspects/index', $data);
  }

  public function create()
  {
    // Siapkan meta data untuk halaman
    $data['page'] = [
      'title' => 'Aspek Nilai Tes',
      'route' => 'Aspek',
    ];

    return view('aspects/create', $data);
  }

  public function save()
  {
    // Simpan data ke table aspects
    $data = [
      'code' => $this->request->getPost('code'),
      'description' => $this->request->getPost('description')
    ];

    $this->model->insert($data);

    return redirect()->to('/aspek');
  }

  public function edit($id = "")
  {
    // Siapkan meta data untuk halaman
    $data['page'] = [
      'title' => 'Aspek Nilai Tes',
      'route' => 'Aspek',
    ];

    $aspect = $this->model->find($id);
    if (!$aspect) return redirect()->to('aspek');

    $data['aspect'] = $aspect;

    return view('aspects/edit', $data);
  }

  public function update($id = "")
  {
    // Simpan data ke table aspects
    $data = [
      'code' => $this->request->getPost('code'),
      'description' => $this->request->getPost('description')
    ];

    $this->model->update($id, $data);

    return redirect()->to('/aspek');
  }

  public function delete($id = "")
  {
    // Hapus data berdasarkan id
    $this->model->delete($id);

    return redirect()->to('/aspek');
  }
}
