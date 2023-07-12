<?php View::load("Inc/header" , ["file_css" => "Assets/css/admin-page.css"])?>
<?php View::load("Inc/adminHeader",["admin" => $admin])?>

      <!-- content -->
      <section>
        <div>
          <i>%%</i>
          <a href="<?php url("admin/showProducts")?>"><h3>Products</h3></a>
        </div>
        <div>
          <i>%%</i>
          <a href="<?php url("admin/addProduct")?>"><h3>New Product</h3></a>
        </div>
      </section>