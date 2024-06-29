<?php

namespace App\Controllers;

// use App\Controllers\BaseController;
// use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\BeritaModel;

class Api extends BaseController
{
    use ResponseTrait;
    public function index()
    {
        $model = new BeritaModel();
        $data = $model->orderBy('id', 'DESC')->findAll();
        return $this->respond(['message' => 'success', 'data' => $data]);
    }

    public function create()
    {
        $model = new BeritaModel();
        $data = [
            'judul' => $this->request->getVar('judul'),
            'isi' => $this->request->getVar('isi'),
            'gambar' => $this->request->getVar('gambar')
        ];
        $model->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data Saved'
            ]
        ];
        return $this->respond(['pesan' => 'berhasil', 'data' => $data]);
    }
}
