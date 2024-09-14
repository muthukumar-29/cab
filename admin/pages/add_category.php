<?php
include('./includes/topbar.php');
?>

<div class="container">
    <h2>CAB CATEGORY</h2>
    <form id="add-category-form">
        <!-- <div class="form-group">
            <label for="car_name">Car Name</label>
            <input type="text" name="car_name" id="car_name" class="form-control" placeholder="car name">
        </div> -->
        <div class="form-group">
            <label for="category">Cateory Name</label>
            <input type="text" name="category" id="category" class="form-control" placeholder="category name">
        </div>
        <input type="submit" value="Add" class="btn btn-success text-center">
    </form>
</div><br>

<div class="container" id="table_container">
    <table class="table" id="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <!-- <th scope="col">Car Name</th> -->
                <th scope="col">Category</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            $result = mysqli_query($connect, "select * from category");
            while ($data = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php
                        echo $i++; ?></td>
                    <td><?php echo $data['category_name'] ?></td>
                    <td><img style="cursor: pointer;" onclick="category_delete(<?php echo $data['id'] ?>)" src="./icons/delete.svg" width="30"></td>
                </tr>

            <?php } ?>

        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#add-category-form').on('submit', function(event) {
            event.preventDefault();

            // var formData = $(this).serialize();
            // formData += '&action=add-category';

            var formData = new FormData(this);
            formData.append('action','add-category');

            $.ajax({
                url: '../ajax/ajaxhandler.php',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(response) {
                    console.log(response);
                    if (response.success) {
                        alert(response.success);
                        $('#add-category-form')[0].reset();

                        $("#table_container").load('add-category.php #table')
                    } else {
                        alert("Error...");
                    }
                }
            });
        });
    });

    function category_delete(id) {

        if (confirm("Are you sure to delete the Category?")) {
            $.ajax({
                url: '../ajax/ajaxhandler.php',
                type: 'POST',
                data: {
                    action: 'delete-category',
                    id: id
                },
                dataType: 'json',
                success: function(response) {
                    console.log(response)
                    if (response.success) {
                        alert(response.success);
                        
                        if (response.error == 0) {
                            $("#table_container").load('add-category.php #table');
                        }
                    } else {
                        alert("Error:", response.failed);
                    }
                }
            })
        }
    };
</script>

<?php
include('./includes/footer.php');
?>