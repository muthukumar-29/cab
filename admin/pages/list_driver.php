<?php
include('./includes/topbar.php');
?>


<div class="container" id="table_container">
    <h2>DRIVER</h2>
    <table class="table" id="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Driver Name</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Address</th>
                <th scope="col">Cab</th>
                <th scope="col">License</th>
                <th scope="col">Status</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            $result = mysqli_query($connect, "select * from driver");
            while ($data = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $data['name'] ?></td>
                    <td><?php echo $data['phone'] ?></td>
                    <td><?php echo $data['address'] ?></td>
                    <td><?php $id = $data['cab_id'];
                        $q = mysqli_fetch_assoc(mysqli_query($connect, "select * from cabs where id = '$id' limit 1"));
                        echo $q['car_name'] ?></td>
                    <td><img src="<?php echo $data['license'] ?>" width="150"></td>
                    <td><span class="p-2 rounded-lg text-white <?php echo $data['status']=='inactive' ? 'bg-danger' : 'bg-success' ?>"><?php echo $data['status'] ?></span></td>
                    <td>
                        <a href="add_driver.php?id=<?php echo $data['id'] ?>"><img src="./icons/edit.svg" alt="" width="30"></a>
                        <img style="cursor: pointer;" onclick="delete_cabs(<?php echo $data['id'] ?>)" src="./icons/delete.svg" width="30" alt="">
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<script>
    function delete_cabs(id) {
        if (confirm("Are you sure to delete the driver?")) {
            var formData = new FormData();
            formData.append('action', 'delete-driver');
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

                        $('#table_container').load('list_driver.php #table_container');
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