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

            header('Location: http://localhost/');
        } else {
            $this->pageNotFound();
        }
    }

    public function remove($id)
    {
        if (is_numeric($id)) {
            $Activities = $this->model('Activities');
            $activitiesData = $Activities::findById($id);

            $this->view('activity/remove', ['activity' => $activitiesData]);
        } else {
            $this->pageNotFound();
        }
    }

    public function delete()
    {
        if (isset($_POST) && !empty($_POST)) {
            $id = $_POST['id'];
            $Activities = $this->model('Activities');
            $Activities::delete($id);

            header('Location: http://localhost/');
        } else {
            $this->pageNotFound();
        }
    }
}
