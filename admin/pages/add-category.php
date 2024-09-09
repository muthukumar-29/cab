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

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <!-- <th scope="col">Car Name</th> -->
                <th scope="col">Category</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>

        <tbody>

        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#add-category-form').on('submit', function(event) {
            event.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                url: '../ajax/category.php',
                type: 'POST',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        alert(response.success);
                        $('#add-category-form')[0].reset();
                    } else {
                        alert("Error:", response.failed);
                    }
                },
                // error: function(xhr, status, error) {
                //     console.error("AJAX Error: " + status + error);
                // }
            });
        });
    });
</script>

<?php
include('./includes/footer.php');
?>