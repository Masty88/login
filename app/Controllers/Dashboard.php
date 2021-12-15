<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        $session = session();
        $ses_data = [
            'user_name' => $session->get('user_name'),
        ];
        echo "Welcome back, ".$session->get('user_name');
        echo view('dashboard',$ses_data);
    }
}
