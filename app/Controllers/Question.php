<?php

namespace App\Controllers;

use \App\Models\QuestionModel;
use App\Models\AspectModel;

class Question extends BaseController
{
  public function __construct()
  {
    $this->model = new QuestionModel();
  }

  public function index()
  {
    // Siapkan meta data untuk halaman
    $data['page'] = [
      'title' => 'Soal PAPI Kostick',
      'route' => 'Soal',
    ];

    // Siapkan daftar aspek
    $data['questions'] = $this->model->findAll();

    return view('questions/index', $data);
  }

  public function create()
  {
    // Siapkan meta data untuk halaman
    $data['page'] = [
      'title' => 'Soal PAPI Kostick',
      'route' => 'Soal',
    ];

    // Siapkan data untuk list aspects
    $Aspect = new AspectModel();
    $data['aspects'] = $Aspect->findAll();

    return view('questions/create', $data);
  }

  public function save()
  {
    // Simpan data ke table questions
    $data = [
      'a_code' => $this->request->getPost('a_code'),
      'b_code' => $this->request->getPost('b_code'),
      'a_declaration' => $this->request->getPost('a_declaration'),
      'b_declaration' => $this->request->getPost('b_declaration')
    ];

    $this->model->insert($data);

    return redirect()->to('/soal');
  }

  public function edit($id = "")
  {
    // Siapkan meta data untuk halaman
    $data['page'] = [
      'title' => 'Soal PAPI Kostick',
      'route' => 'Soal',
    ];

    // Siapkan data untuk list aspects
    $Aspect = new AspectModel();
    $data['aspects'] = $Aspect->findAll();

    $question = $this->model->find($id);
    if (!$question) return redirect()->to('aspek');

    $data['question'] = $question;

    return view('questions/edit', $data);
  }

  public function update($id = "")
  {
    // Simpan data ke table questions
    $data = [
      'a_code' => $this->request->getPost('a_code'),
      'b_code' => $this->request->getPost('b_code'),
      'a_declaration' => $this->request->getPost('a_declaration'),
      'b_declaration' => $this->request->getPost('b_declaration')
    ];

    $this->model->update($id, $data);

    return redirect()->to('/soal');
  }

  public function delete($id = "")
  {
    // Hapus data berdasarkan id
    $this->model->delete($id);

    return redirect()->to('/soal');
  }
}
