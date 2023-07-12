
<?php View::load("Inc/header" , ["file_css" => "Assets/css/reset-bio.css"])?>
<?php View::load("Inc/adminHeader",["admin" => $admin])?>


<div class="info">


        <?php echo isset($succes)? "<h2></h2>" : "" ?>
        <form action=<?php url("admin/updateProduct")?> method="POST">
          <div class="labels">
            <label for="">Name</label>
            <label for="">Price</label>
            <label for="">Quantity</label>
            <label for="">Data</label>
            
          </div>
          <div class="inputs">
            <input name="id" hidden value= <?php echo $product["id"]?>>
            <input name="name" type="text" value= <?php echo $product["name"]?> />
            <input name="price" type="text" value= <?php echo $product["price"]?> />
            <input name="quantity" type="text" value= <?php echo $product["quantity"]?> />
            <input name="date" type="date" value= <?php echo $product["date"]?> />
            <div class="btns">
                <input name="save" type="submit" value="Save" />
                <input type="reset" value="Reset" />
            </div>
          </div>
          <!-- id="" /> -->
        </form>
</div>