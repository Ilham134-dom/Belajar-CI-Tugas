<?php

namespace App\Controllers;

use App\Models\ProdukKategoriModel;

class ProdukKategori extends BaseController
{
    protected $kategori;

    public function __construct()
    {
        $this->kategori = new ProdukKategoriModel();
    }

    public function index()
    {
        $data['kategori'] = $this->kategori->findAll();
        return view('v_Kategori', $data);
    }

    public function create()
    {
        $dataForm = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ];

        $this->kategori->insert($dataForm);
        return redirect()->to('kategori')->with('success', 'Kategori berhasil ditambahkan');
    }

    public function edit($id)
    {
        $dataKategori = $this->kategori->find($id);

        $dataForm = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'updated_at' => date("Y-m-d H:i:s"),
        ];

        $this->kategori->update($id, $dataForm);
        return redirect()->to('kategori')->with('success', 'Kategori berhasil diubah');
    }

    public function delete($id)
    {
        $this->kategori->delete($id);
        return redirect()->to('kategori')->with('success', 'Kategori berhasil dihapus');
    }
}
