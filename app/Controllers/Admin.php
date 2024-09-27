<?php
namespace App\Controllers;

use App\Models\CompanyModel;
use App\Models\TeamModel;
use App\Models\ContactModel;
use App\Models\HeroModel;

class Admin extends BaseController
{
    // Dashboard view
    public function index()
    {
        $this->checkLogin(); // Ensure login is checked

        $data['title'] = 'All In One Store - Admin';
        return view('admin/dashboard', $data);
    }

    public function editCompany()
    {
        $this->checkLogin(); // Ensure login is checked

        $companyModel = new CompanyModel();
        $data['company'] = $companyModel->first();
        return view('admin/edit_company', $data);
    }

    public function updateCompany()
    {
        $this->checkLogin(); // Ensure login is checked

        $companyModel = new CompanyModel();
        
        // Update the company record with the POST data
        $companyModel->update(1, $this->request->getPost());
    
        // Redirect back to the admin dashboard after updating the company
        return redirect()->to('/admin');
    }
    
    public function listTeam()
    {
        $this->checkLogin(); // Ensure login is checked

        $teamModel = new TeamModel();
        $data['title'] = 'All In One Store - Team Management';
        $data['team'] = $teamModel->findAll();
        return view('admin/team', $data);
    }

    public function addTeam()
    {
        $this->checkLogin(); // Ensure login is checked

        return view('admin/add_team');
    }

    public function editTeam($id)
    {
        $this->checkLogin(); // Ensure the user is logged in

        $teamModel = new TeamModel();
        $data['member'] = $teamModel->find($id);

        if (!$data['member']) {
            return redirect()->to('/admin/listTeam')->with('error', 'Team member not found.');
        }

        return view('admin/edit_team', $data);
    }

    // Method to save team member information
    public function saveTeam()
    {
        $this->checkLogin(); // Ensure the user is logged in

        $teamModel = new TeamModel();

        // Prepare the data for insertion
        $data = [
            'name' => $this->request->getPost('name'),
            'role' => $this->request->getPost('role'),
            'email' => $this->request->getPost('email'),
            'company_id' => 1 // Replace with the actual company_id if needed
        ];

        // Handle image upload
        $file = $this->request->getFile('image');

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newFileName = $file->getRandomName();
            
            // Ensure the directory exists
            if (!is_dir(FCPATH . 'uploads/team_pics')) {
                mkdir(FCPATH . 'uploads/team_pics', 0777, true);
            }

            // Attempt to move the uploaded file
            if ($file->move(FCPATH . 'uploads/team_pics', $newFileName)) {
                // If the file is moved successfully, update the image field
                $data['image'] = $newFileName;
            } else {
                // Log any error related to file movement
                return $this->response->setStatusCode(500)->setBody($file->getErrorString());
            }
        }

        // Save the team member in the database
        if (!$teamModel->save($data)) {
            return redirect()->back()->with('error', 'Failed to add team member.');
        }

        return redirect()->to('/admin/listTeam')->with('success', 'Team member added successfully.');
    }

    // Method to update team member information
    public function updateTeam($id)
    {
        $this->checkLogin(); // Ensure the user is logged in

        $teamModel = new TeamModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'role' => $this->request->getPost('role'),
            'email' => $this->request->getPost('email')
        ];

        // Handle image upload
        $file = $this->request->getFile('image');
        
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newFileName = $file->getRandomName();
            
            // Ensure the directory exists
            if (!is_dir(FCPATH . 'uploads/team_pics')) {
                mkdir(FCPATH . 'uploads/team_pics', 0777, true);
            }

            // Attempt to move the uploaded file
            if ($file->move(FCPATH . 'uploads/team_pics', $newFileName)) {
                // If the file is moved successfully, update the image field
                $data['image'] = $newFileName;
            } else {
                // Log any error related to file movement
                return $this->response->setStatusCode(500)->setBody($file->getErrorString());
            }
        }

        // Update the team member in the database
        if (!$teamModel->update($id, $data)) {
            return redirect()->back()->with('error', 'Failed to update team member.');
        }

        return redirect()->to('/admin/listTeam')->with('success', 'Team member updated successfully.');
    }

    public function deleteTeam($id)
    {
        $this->checkLogin(); // Ensure login is checked

        $teamModel = new TeamModel();
        $teamModel->delete($id);
        return redirect()->to('/admin/listTeam');
    }

    public function editContact()
    {
        $this->checkLogin(); // Ensure login is checked

        $contactModel = new ContactModel();
        $data['contact'] = $contactModel->first();
        return view('admin/edit_contact', $data);
    }

    public function updateContact()
    {
        $this->checkLogin(); // Ensure login is checked

        $contactModel = new ContactModel();
        $contactModel->update(1, $this->request->getPost());
        return redirect()->to('/admin/editContact');
    }

    // Helper function to check if the user is logged in
    private function checkLogin()
    {
        if (!session()->get('loggedIn')) {
            // Redirect to login page if not logged in
            return redirect()->to('/auth/login')->send();
        }
    }

    public function listHeroSlides()
    {
        $this->checkLogin(); // Ensure login is checked

        $heroModel = new HeroModel();
        $data['heroSlides'] = $heroModel->findAll();
        $data['title'] = 'All In One Store - Hero Management';
        return view('admin/list_hero_slide', $data);
    }

    public function addHeroSlide()
    {
        $this->checkLogin(); // Ensure login is checked

        return view('admin/add_hero_slide');
    }

    // Method to save hero slide
    public function saveHeroSlide()
    {
        $this->checkLogin(); // Ensure login is checked

        $heroModel = new HeroModel();

        // Prepare data for the hero slide
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'slide_order' => $this->request->getPost('slide_order')
        ];

        // Handle image upload
        $image = $this->request->getFile('image');
        
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $newFileName = $image->getRandomName();
            
            // Ensure the directory exists
            if (!is_dir(FCPATH . 'uploads/hero_images')) {
                mkdir(FCPATH . 'uploads/hero_images', 0777, true);
            }

            // Attempt to move the uploaded file
            if ($image->move(FCPATH . 'uploads/hero_images', $newFileName)) {
                // If the file is moved successfully, update the image field
                $data['image'] = $newFileName;
            } else {
                // Log any error related to file movement
                return $this->response->setStatusCode(500)->setBody($image->getErrorString());
            }
        }

        // Save the hero slide in the database
        $heroModel->save($data);

        return redirect()->to('/admin/listHeroSlides')->with('success', 'Hero slide added successfully.');
    }

    public function deleteHeroSlide($id)
    {
        $this->checkLogin(); // Ensure login is checked

        $heroModel = new HeroModel();
        $heroModel->delete($id);

        return redirect()->to('/admin/listHeroSlides');
    }

    // Method to update hero slide
    public function updateHeroSlide($id)
    {
        $this->checkLogin(); // Ensure login is checked

        $heroModel = new HeroModel();

        // Prepare data for updating the hero slide
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'slide_order' => $this->request->getPost('slide_order')
        ];

        // Handle image upload
        $image = $this->request->getFile('image');
        
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $newFileName = $image->getRandomName();
            
            // Ensure the directory exists
            if (!is_dir(FCPATH . 'uploads/hero_images')) {
                mkdir(FCPATH . 'uploads/hero_images', 0777, true);
            }

            // Attempt to move the uploaded file
            if ($image->move(FCPATH . 'uploads/hero_images', $newFileName)) {
                // If the file is moved successfully, update the image field
                $data['image'] = $newFileName;
            } else {
                // Log any error related to file movement
                return $this->response->setStatusCode(500)->setBody($image->getErrorString());
            }
        }

        // Update the hero slide in the database
        $heroModel->update($id, $data);

        return redirect()->to('/admin/listHeroSlides')->with('success', 'Hero slide updated successfully.');
    }
}