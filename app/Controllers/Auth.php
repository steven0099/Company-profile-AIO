<?php
namespace App\Controllers;

use App\Models\AdminModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function loginSubmit()
    {
        $model = new AdminModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Find the admin by email
        $admin = $model->where('email', $email)->first();

        if ($admin && password_verify($password, $admin['password'])) {
            // Set session
            session()->set([
                'loggedIn' => true,
                'adminName' => $admin['name']
            ]);
            return redirect()->to('/admin'); // Redirect to admin page
        } else {
            // Return to login page with error
            return redirect()->back()->with('error', 'Invalid login credentials.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
?>