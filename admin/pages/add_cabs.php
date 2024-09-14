<?php
include('./includes/topbar.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($connect, "SELECT * FROM cabs WHERE id='$id' LIMIT 1");
    $data = mysqli_fetch_assoc($result);
}
?>

<div class="container">
    <h2>MANAGE CABS</h2>
    <div>
        <form id="add-cabs-form" enctype="multipart/form-data">
            <?php if (isset($data['id'])) { ?>
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            <?php } ?>

            <div class="form-group">
                <label for="car_name" class="font-style-bold">Car Name</label>
                <input type="text" name="car_name" id="car_name" class="form-control" placeholder="Car Name with Model" value="<?php echo isset($data['car_name']) ? $data['car_name'] : ''; ?>">
            </div>

            <div class="form-group">
                <label for="car_no" class="font-style-bold">Car Number</label>
                <input type="text" name="car_no" id="car_no" class="form-control" placeholder="Car Number" value="<?php echo isset($data['car_number']) ? $data['car_number'] : ''; ?>">
            </div>

            <div class="form-group">
                <label for="category" class="font-style-bold">Category</label>
                <select name="category" id="category" class="form-control">
                    <option value="" disabled selected>Select</option>

                    <?php if (isset($data['category'])) { ?>
                        <option selected value="<?php echo $data['category']; ?>">
                            <?php
                            $id = $data['category'];
                            $q = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM category WHERE id = '$id' LIMIT 1"));
                            echo $q['category_name'];
                            ?>
                        </option>
                    <?php } ?>

                    <?php
                    $q1 = mysqli_query($connect, 'SELECT * FROM category');
                    while ($data1 = mysqli_fetch_assoc($q1)) {
                    ?>
                        <option value="<?php echo $data1['id'] ?>"><?php echo $data1['category_name'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="seats">Total Seats</label><br>
                <input class="form-control" type="number" name="seats" id="seats" placeholder="Total Seats" min="1" value="<?php echo isset($data['seats']) ? $data['seats'] : ''; ?>">
            </div>

            <div class="form-group">
                <label for="price">Price / Kilometer</label><br>
                <input class="form-control" type="number" name="price" id="price" placeholder="Price / Kilometer" min="0" value="<?php echo isset($data['price']) ? $data['price'] : ''; ?>">
            </div>

            <?php if (isset($data['image'])) { ?>
                <img src="<?php echo $data['image']; ?>" width="100"><br><br>
            <?php } ?>

            <div class="form-group">
                <label for="image" class="font-style-bold">Image</label><br>
                <input type="file" name="image" id="image">
                <?php if (isset($data['image'])) { ?>
                    <input type="hidden" name="existing_image" value="<?php echo $data['image']; ?>">
                <?php } ?>
            </div>

            <div class="form-group">
                <label for="status" class="font-style-bold">Status</label>
                <select name="status" id="status" class="form-control">

                    <?php if (isset($data['status'])) { ?>
                        <option selected value="<?php echo $data['status']; ?>"><?php echo $data['status'] ?></option>
                    <?php } ?>
                    <option value="available">Available</option>
                    <option value="not available">Not Available</option>

                </select>
            </div>

            <input type="submit" value="Save" class="btn btn-success">
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#add-cabs-form').on('submit', function(event) {
            event.preventDefault();

            var formData = new FormData(this);

            if ($('input[name="id"]').length > 0) {
                formData.append('action', 'edit-cabs');
            } else {
                formData.append('action', 'add-cabs');
            }

            $.ajax({
                url: '../ajax/ajaxhandler.php',
                type: 'POST',
                data: formData,
                dataType: 'json',
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response);
                    if (response.success) {
                        alert(response.success);
                        window.location.href = "list_cabs.php";
                    } else {
                        alert(response.error || 'An error occurred');
                    }
                }
            });
        });
    });
</script>

<?php include('./includes/footer.php'); ?>