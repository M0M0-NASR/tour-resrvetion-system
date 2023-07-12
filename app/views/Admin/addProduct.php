<?php

View::load("Inc/header");
View::load("Inc/adminHeader",["admin" => $admin]);

?>

<div class="content">
    <?php echo isset($succes)? "<h2> $succes</h2>" : "<h2> $succes</h2>" ?>
        
    <form action=<?php url("admin/saveProduct")?> method="POST">
            <div class="labels">
                <label for="">Name</label>
                <label for="">Price</label>
                <label for="">Quantity</label>
                <label for="">Data</label>
            </div>
            <div class="inputs">
                <input name="name" type="text"  />
                <input name="price" type="text" />
                <input name="quantity" type="text" />
                <input name="date" type="date"  />
                <div class="btns">
                    <input name="save" type="submit" value="Save" />
                    <input type="reset" value="Reset" />
                </div>
            </div>        
        </form>
</div>