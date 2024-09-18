<?php
include('./includes/topbar.php');
?>


<div class="container" id="table_container">
    <h2>CABS</h2>
    <table class="table" id="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Car Name</th>
                <th scope="col">Car Number</th>
                <th scope="col">Category</th>
                <th scope="col">Total Seats</th>
                <th scope="col">Price/Km</th>
                <th scope="col">Image</th>
                <th scope="col">Status</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            $result = mysqli_query($connect, "select * from cabs");
            while ($data = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $data['car_name'] ?></td>
                    <td><?php echo $data['car_number'] ?></td>
                    <td><?php $id = $data['category'];
                        $q = mysqli_fetch_assoc(mysqli_query($connect, "select * from category where id = '$id' limit 1"));
                        echo $q['category_name'] ?></td>
                    <td><?php echo $data['seats'] ?></td>
                    <td><?php echo $data['price'] ?></td>
                    <td><img src="<?php echo $data['image'] ?>" width="150"></td>
                    <td><span class="p-2 rounded-lg text-white <?php echo $data['status']=='not available' ? 'bg-danger' : 'bg-success' ?>"><?php echo $data['status'] ?></span></td>
                    <td>
                        <!-- <img style="cursor: pointer;" onclick="edit_cabs(<?php echo $data['id'] ?>)" src="./icons/edit.svg" width="30" alt=""> -->
                        <a href="add_cabs.php?id=<?php echo $data['id'] ?>"><img src="./icons/edit.svg" alt="" width="30"></a>
                        <img style="cursor: pointer;" onclick="delete_cabs(<?php echo $data['id'] ?>)" src="./icons/delete.svg" width="30" alt="">
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<script>
    function delete_cabs(id) {
        if (confirm("Are you sure to delete a Cab?")) {
            var formData = new FormData();
            formData.append('action', 'delete-cabs');
            formData.append('id', id);

            $.ajax({
                url: '../ajax/ajaxhandler.php',
                type: 'POST',
                data: formData,
                dataType: 'json',
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.success) {
                        alert(response.success)

                        $('#table_container').load('list_cabs.php #table_container');
                    } else {
                        console.log("Error...");
                    }
                }
            })
        }
    }
</script>

<?php
include('./includes/footer.php');
?>