<?php View::load("Inc/header" , ["file_css" => "Assets/css/useres.css"])?>
<section>
    <form action="" class="search">
        <input autofocus type="text" placeholder="username" maxlength="20" />
        <button>Search</button>
        </form>

    <table class="users">
        <thead>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Date</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </thead>
        <tbody>
            <?php foreach($products as $row):  ?>
                    <tr>
                        
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['price']; ?> <b class="float-right"> $ </b></td>
                        <td ><?php echo $row['quantity']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td>
                            <a href="<?php url('admin/editProduct/'.$row['id']); ?>" >Edit</a>
                        </td>
                        <td>
                            <a href="<?php url('admin/delProduct/'.$row['id']); ?>" >Delete</a>
                        </td>
                    </tr>
                <?php  endforeach; ?>
        </tbody>
    </table>
</section>
