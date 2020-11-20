<?php

use Application\core\Controller;

class Activity extends Controller
{
    public function index()
    {
        $Activities = $this->model('Activities');
        $data = $Activities::findAll();
        $this->view('activity/index', ['activities' => $data]);
    }

    public function new()
    {
        $Users = $this->model('Users');
        $usersData = $Users::findAll();

        $Status = $this->model('Status');
        $statusData = $Status::findAll();

        $this->view('activity/new', ['users' => $usersData, 'allStatus' => $statusData]);
    }

    public function show($id = null)
    {
        if (is_numeric($id)) {
            $Activities = $this->model('Activities');
            $activitiesData = $Activities::findById($id);

            $Users = $this->model('Users');
            $usersData = $Users::findAll();

            $Status = $this->model('Status');
            $statusData = $Status::findAll();

            $this->view('activity/show', ['activity' => $activitiesData, 'users' => $usersData, 'allStatus' => $statusData]);
        } else {
            $this->pageNotFound();
        }
    }

    public function save()
    {
        if (isset($_POST) && !empty($_POST)) {
            $Activities = $this->model('Activities');
            $Activities::save($_POST);

            $data = $Activities::findAll();
            $this->view('activity/index', ['activities' => $data]);
        } else {
            $this->pageNotFound();
        }
    }
}
