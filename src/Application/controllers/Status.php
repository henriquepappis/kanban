<?php

use Application\core\Controller;

class Status extends Controller
{
  public function index()
  {
    $Status = $this->model('Status');
    $data = $Status::findAll();
    $this->view('status/index', ['statuss' => $data]);
  }

  public function show($id = null)
  {
    if (is_numeric($id)) {
      $Status = $this->model('Status');
      $data = $Status::findById($id);
      $this->view('status/show', ['status' => $data]);
    } else {
      $this->pageNotFound();
    }
  }

  public function getAllStatus()
  {
    $Status = $this->model('Status');
    $data = $Status::findAll();

    return $data['allStatus'];
  }
}
