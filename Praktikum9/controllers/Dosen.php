<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function index()
    {
        //load model + bikin objek
        $this->load->model('Dosen_model', 'dsn1');

        //cara membuat objek 1 + cara pake class model
        $this->dsn1->id = 1;
        $this->dsn1->nidn = '0101';
        $this->dsn1->nama = 'Fahri Syaputra';
        $this->dsn1->gender = 'L';
        $this->dsn1->tmp_lahir = 'Bogor';
        $this->dsn1->tgl_lahir = '1990-03-23';
        $this->dsn1->pendidikan = 's2';

        //load model + bikin objek 2
        $this->load->model('Dosen_model', 'dsn2');

        $this->dsn2->id = 2;
        $this->dsn2->nidn = '0102';
        $this->dsn2->nama = 'Annisa M';
        $this->dsn2->gender = 'P';
        $this->dsn2->tmp_lahir = 'Jakarta';
        $this->dsn2->tgl_lahir = '1993-01-22';
        $this->dsn2->pendidikan = 's2';

        //load model + bikin objek 3
        $this->load->model('Dosen_model', 'dsn3');

        $this->dsn3->id = 3;
        $this->dsn3->nidn = '0103';
        $this->dsn3->nama = 'Any senpai';
        $this->dsn3->gender = 'P';
        $this->dsn3->tmp_lahir = 'Depok';
        $this->dsn3->tgl_lahir = '1995-09-12';
        $this->dsn3->pendidikan = 's1';

        //siapin objek dlm array
        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];

        //siapin data buat ditampilin di view
        $data['list_dsn'] = $list_dsn;

        //tampilin ke view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/index', $data);
        $this->load->view('layout/footer');
    }
    /*public function index()
    {
        $this->load->model('dosen_model', 'dsn');
        $list_dsn = $this->dsn->getAll();

        $data['list_dsn'] = $list_dsn;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/index', $data);
        $this->load->view('layout/footer');
    }*/
    public function create()
    {
        $data['judul'] = 'Form Kelola Data Dosen';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/create', $data);
        $this->load->view('layout/footer');
    }

    public function save()
    {
        $this->load->model('dosen_model', 'dosen');

        $this->dosen->nidn = $this->input->post('nidn');
        $this->dosen->nama = $this->input->post('nama');
        $this->dosen->gender = $this->input->post('jk');
        $this->dosen->tmp_lahir = $this->input->post('tmp_lahir');
        $this->dosen->tgl_lahir = $this->input->post('tgl_lahir');
        $this->dosen->pendidikan = $this->input->post('pendidikan');
        //die(print_r($this->dosen));
        $data['dosen'] = $this->dosen;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/view', $data);
        $this->load->view('layout/footer');
    }
    /*public function view()
    {
        $_nidn = $this->input->get('id');
        $this->load->model('dosen_model', 'dsn');
        $data['dsn'] = $this->dsn->findById($_nidn);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/view', $data);
        $this->load->view('layout/footer');
    }*/
};
