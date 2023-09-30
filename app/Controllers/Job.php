<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JobModel;
class Job extends BaseController
{
    public function index()
    {
       return view('job');
    }

    public function addJob()
    {
      $jobModel = new JobModel();
      $data = array(
        'companyName' => $this->request->getPost('companyName'),
        'jobTitle' => $this->request->getPost('jobTitle'),
        'jobLocation' => $this->request->getPost('jobLocation'),
        'jobDescription' => $this->request->getPost('jobDescription'),
      );
      $jobModel->insert($data);
    }

    public function listjob()
    {
        
        $jobModel = new JobModel();
        var_dump( $jobModel->findAll());
    }
}
