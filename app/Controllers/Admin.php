<?php
namespace App\Controllers;

use App\Models\CompanyModel;
use App\Models\TeamModel;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin/dashboard');
    }

    public function editCompany()
    {
        $companyModel = new CompanyModel();
        $data['company'] = $companyModel->first();
        return view('admin/edit_company', $data);
    }

    public function updateCompany()
    {
        $companyModel = new CompanyModel();
        $companyModel->update(1, $this->request->getPost());
        return redirect()->to('/admin/editCompany');
    }

    public function listTeam()
    {
        $teamModel = new TeamModel();
        $data['team'] = $teamModel->findAll();
        return view('admin/team', $data);
    }

    public function addTeam()
    {
        return view('admin/add_team');
    }

    public function saveTeam()
    {
        $teamModel = new TeamModel();
        $teamModel->save($this->request->getPost());
        return redirect()->to('/admin/listTeam');
    }

    public function deleteTeam($id)
    {
        $teamModel = new TeamModel();
        $teamModel->delete($id);
        return redirect()->to('/admin/listTeam');
    }
}

public function editContact()
{
    $contactModel = new ContactModel();
    $data['contact'] = $contactModel->first();
    return view('admin/edit_contact', $data);
}

public function updateContact()
{
    $contactModel = new ContactModel();
    $contactModel->update(1, $this->request->getPost());
    return redirect()->to('/admin/editContact');
}
?>