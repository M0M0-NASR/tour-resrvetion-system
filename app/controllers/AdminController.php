<?php

class AdminController
{
    public function login()
    {        
        $admin = new AdminModel();
        $usr = $_POST['username']; 
        $pass = $_POST['pass']; 
        $admin->data = $admin->getUser( $usr , $pass ); 
        if( ! is_null($admin->data))
        {
            session_start();
            $_SESSION['login'] = true;
            $_SESSION['admin'] = $admin->data;
            header("REFRESH:0;URL=../");
        }
        else
        {
            echo "Error";
        }
    }

    public function logout()
    {
        $u = urlr("home/loginPage");
        header("REFRESH:0;URL=$u");
        session_abort();
        // session_destroy();
    }

    public function showProducts()
    {
        $product = new ProductModel();
        $data["products"] = $product->getProducts();
        View::load("Admin/Products",$data);
    }

    public function editProduct($id)
    {
        session_start();
        $product = new ProductModel();
        $data["product"] = $product->getRow($id);
        $data["admin"] = $_SESSION['admin'];
        View::load("Admin/productPage",$data);
        

    }
    public function saveProduct()
    {
        if(isset($_POST["save"]))
        {
            session_start();
            $values = Array(
                "name"     => $_POST["name"],
                "quantity" => $_POST["quantity"],
                "price"    => $_POST["price"],
                "date"     => $_POST["date"]
            );
            $product = new ProductModel();
            try {
                //code...
                $result = $product->insertProduct($values);
                $data["succes"] = "Added Successfully";
            } catch (\Throwable $th) {
                //throw $th;
                $data["succes"] = "Error:  Not Added Successfully";
            }

            $data["admin"] = $_SESSION['admin'];
            View::load("Admin/addProduct", $data);
        
        }
    }


    public function updateProduct()
    {
        if(isset($_POST["save"]))
        {
            $data = Array(
                "name"     => $_POST["name"],
                "quantity" => $_POST["quantity"],
                "price"    => $_POST["price"],
                "date"     => $_POST["date"]
            );
            $product = new ProductModel();
            try {
                //code...
                $product->updateRow($_POST['id'], $data);     
                $data["succes"] = "Added Successfully";
            } catch (\Throwable $th) {
                //throw $th;
                session_start();
                $data["succes"] = "Error:  Not Added Successfully";
            }
        }
    }


    public function delProduct($id)
    {
        $product = new ProductModel();
        $result = $product->deleteRow($id);
        if (isset($result)) {
            # code...
            echo "yes";
        }
        else{
            echo 'false';
        }
        
    }


    public function addProduct()
    {
        session_start();
        $data["admin"] = $_SESSION['admin'];
        View::load("Admin/addProduct",$data);
    }


}
?>