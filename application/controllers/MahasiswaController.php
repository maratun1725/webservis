<?php
/**
 * Controller mahasiswa_Mar'Atun Solehah_18.11.0017
 */


class MahasiswaController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('MahasiswaModel');
    }


    public function response($data)
    {
        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($data))
                ->_display();
        exit;
    }

    public function get_mahasiswa()
    {
        $data = $this->MahasiswaModel->get_mahasiswa();

        // success
        return $this->response([
            "error"     => false,
            "message"   => "Data tersedia..",
            "mahasiswa" => $data
    ]);

    }

    public function insert_mahasiswa()
    {
        $arrayData = [
                        'nim'       => $this->input->post('nim'),
                        'nama'      => $this->input->post('nama'),
                        'email'     => $this->input->post('email'),
                        'kelas'     => $this->input->post('kelas'),
                        'jurusan'   => $this->input->post('jurusan')         
                    ];

        $data = $this->MahasiswaModel->insert_mahasiswa($arrayData);

        if ($data == FALSE){
            return $this->response([
                "error"     => true,
                "message"   => "Gagal memasukkan data..",
            ]);
        }

        return $this->response([
            "error"        => false,
            "message"      => "Berhasil memasukan data..",
        ]);
    }

    public function update_mahasiswa()
    {
        $arrayId = ["id" => $this->input->post('id')];
        $arrayData = [
            'nim'       => $this->input->post('nim'),
            'nama'      => $this->input->post('nama'),
            'email'     => $this->input->post('email'),
            'kelas'     => $this->input->post('kelas'),
            'jurusan'   => $this->input->post('jurusan')  

        ];
        $data = $this->MahasiswaModel->update_mahasiswa($arrayId, $arrayData);

        if ($data == FALSE){
            return $this->response([
                "error"     => true, 
                "message"   => "Gagal memperbarui data..",
    
            ]);
        }

        return $this->response([
            "error" => false,
            "message"=> "Berhasil memperbarui data..",
        ]);
    }

    public function delete_mahasiswa()
    {
        $arrayId = ["id" => $this->input->post('id')];

        $data = $this->MahasiswaModel->delete_mahasiswa($arrayId);

        if ($data == FALSE){
            return $this->response([
                "error"     => true,
                "message"   => "Gagal menghapus data..",
            ]);
        }

        return $this ->response([
            "error"     => false, 
            "message"   => "Berhasil menghapus data..",
        ]);
    }

}

