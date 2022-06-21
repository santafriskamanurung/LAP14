<?php
namespace App\Controllers;

use App\Models\DataDiri;

class About extends BaseController
{
    public function __construct()
    {
       $this->data = new DataDiri();
    }
    
    public function index()
    {
        echo view('about/cv', ['data' => $this->data->first()]);
    }

    
    public function auth()
    {
        echo view('about/auth');
    }
    public function simpan()
    {
        $this->data->save(
            [
                'username' => $this->request->getVar('username'),
                'password' => $this->request->getVar('password'),

            ]
        );
        return redirect()->to('/About/auth');
    }
}