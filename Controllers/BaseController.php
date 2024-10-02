<?php
namespace App\Controllers;

use CodeIgniter\Controller; // Ensure you're importing the CodeIgniter Controller class
use App\Models\CompanyModel;

class BaseController extends Controller
{
    protected $companyData;

    public function __construct()
    {
        $this->setCompanyData();
    }

    protected function setCompanyData()
    {
        $companyModel = new CompanyModel();
        $this->companyData = $companyModel->find(1); // Adjust as necessary to fetch your company data
    }
}
