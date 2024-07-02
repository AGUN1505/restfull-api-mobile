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

    public function show($id = null)
    {
        $model = new BeritaModel();
        $data = $model->where('id', $id)->first();
        if (is_null($data)) {
            return $this->failNotFound('data not found');
        }
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

    public function update($id = null)
    {
        $model = new BeritaModel();
        $data = [
            'judul' => $this->request->getVar('judul'),
            'isi' => $this->request->getVar('isi'),
            'gambar' => $this->request->getVar('gambar')
        ];
        $model->update($id, $data);
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'Data Updated'
            ]
        ];
        return $this->respond($response);
    }

    public function delete($id = null)
    {
        $model = new BeritaModel();
        $data = $model->find($id);
        if ($data) {
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data Deleted'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('data not found');
        }
    }
}
