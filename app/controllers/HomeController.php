<?php
// header("URL=....")
class HomeController
{
    public function index()
    {
        session_start();
        $data['title'] = "Login";
        if ( isset($_SESSION['login'])) {
            # code...
            $data["admin"] = $_SESSION['admin'];

            View::load("Admin/adminPanal",$data);
        }
        else {
            echo "Error: Please login<br>";
            echo "Back to  <a href=" ;
            url("home/loginPage");
            echo ">login page</a>";
        }   

    }
    public function loginPage()
    {
        # code...
        View::load("home");
    }

}