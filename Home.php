<?php
namespace App\Controllers;

use App\Models\CompanyModel;
use App\Models\TeamModel;
use App\Models\ContactModel;
use App\Models\HeroModel;

class Home extends BaseController
{
    public function index()
    {
        $companyModel = new CompanyModel();
        $teamModel = new TeamModel();
        $contactModel = new ContactModel();
        $heroModel = new HeroModel();
        $admin = session()->get('admin');

        $data['title'] = 'All In One Store - Home';
        $data['heroSlides'] = $heroModel->orderBy('slide_order', 'ASC')->findAll();
        $data['company'] = $companyModel->first();
        $data['team'] = $teamModel->findAll();
        $data['contact'] = $contactModel->first();
        $data['isLoggedIn'] = session()->get('loggedIn') === true; // Updated variable name

        return view('landing_page', $data);
    }
}
?>
