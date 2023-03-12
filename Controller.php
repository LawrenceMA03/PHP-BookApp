<?php
session_start();
include_once 'Model/Model.php';


class Controller {
    public $model;
        
    /**
     * __construct
     *
     * @return void
     */
    public function __construct() {
        $this->model = new Model();
    }
    
    public function invoke() {
        if (isset($_GET['book'])) {
            //Show requested book
            $book = $this->model->getBook($_GET['book']);
            include 'View/viewbook.php';
        } else if (isset($_GET['admin'])) {
            if (isset($_SESSION['adminUser'])) {
                //Show admin screen
                include 'View/admin.php';
            } else if (isset($_POST['username']) && isset($_POST['password'])) {
              $validLogin = $this->model->checkLogin($_POST['username'], $_POST['password']);
              if ($validLogin) {
                $_SESSION['adminUser'] = $_POST['username'];
                //Show admin screen
                include 'View/admin.php';  
              } else {
                //Show login screen
                $loginError = true;
                include 'View/login.php';
              }
            } else {
                //Show login screen
                include 'View/login.php';
            }
        } else if (isset($_GET['addBook'])) {
            $this->model->addBook($_POST['title'], $_POST['author'], $_POST['description']);
            $books = $this->model->getBookList();
            include 'View/booklist.php';
        } else if (isset($_GET['logout'])) {
            session_destroy();
            $books = $this->model->getBookList();
            include 'View/booklist.php';
        } else {
            $books = $this->model->getBookList();
            include 'View/booklist.php';
        }
    }
}
