<?php
namespace App\Controllers;

use App\Models\CompanyModel;
use App\Models\TeamModel;
use App\Models\ContactModel;

class Home extends BaseController
{
public function index()
{
    $companyModel = new CompanyModel();
    $teamModel = new TeamModel();
    $contactModel = new ContactModel();

    $data['company'] = $companyModel->first();
    $data['team'] = $teamModel->findAll();
    $data['contact'] = $contactModel->first();

    return view('landing_page', $data);
}
}
?>