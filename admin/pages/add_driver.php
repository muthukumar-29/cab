<?php
include('./includes/topbar.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = mysqli_fetch_assoc(mysqli_query($connect, "select * from driver where id='$id'"));
}
?>

<div class="container">
    <h2>MANAGE DRIVER</h2>
    <div>
        <form id="add-driver-form">
            <?php if (isset($_GET['id'])) { ?>
                <input type="hidden" name="id" id="id" value="<?php echo $_GET['id'] ?>">
            <?php }
            ?>

            <div class="form-group">
                <label for="driver_name">Driver Name</label>
                <input class="form-control" type="text" name="driver_name" id="driver_name" placeholder="Driver Name" value="<?php echo isset($data['name']) ? $data['name'] : '' ?>">
            </div>
            <div class="form-group">
                <label for="phone">Driver Phone Number</label>
                <input class="form-control" type="text" name="phone" id="phone" placeholder="Driver Phone Number" value="<?php echo isset($data['phone']) ? $data['phone'] : '' ?>">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input class="form-control" type="text" name="address" id="address" placeholder="Address" value="<?php echo isset($data['address']) ? $data['address'] : '' ?>">
            </div>
            <div class="form-group">
                <label for="cab" class="font-style-bold">Cab</label>
                <select name="cab" id="cab" class="form-control">
                    <option value="" disabled selected>Select</option>

                    <?php if (isset($data['cab_id'])) { ?>
                        <option selected value="<?php echo $data['cab_id'] ?>">
                            <?php
                            $cab_id = $data['cab_id'];
                            $q = mysqli_fetch_assoc(mysqli_query($connect, "select * from cabs where id='$cab_id' limit 1"));
                            echo $q['car_name']
                            ?>
                        </option>
                    <?php } ?>
                    <?php
                    $q1 = mysqli_query($connect, 'select * from cabs');
                    while ($data1 = mysqli_fetch_assoc($q1)) {
                    ?>
                        <option value="<?php echo $data1['id'] ?>"><?php echo $data1['car_name'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <?php if (isset($data['license'])) { ?>
                <img src="<?php echo $data['license']; ?>" width="100"><br><br>
            <?php } ?>

            <div class="form-group">
                <label for="license">License</label><br>
                <input type="file" name="license" id="license">
                <?php
                if (isset($data['license'])) { ?>
                    <input type="hidden" name="existing_image" id="existing_image" value="<?php echo $data['license'] ?>">
                <?php } ?>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="" class="form-control">
                    <?php if (isset($data['status'])) { ?>
                        <option selected value="<?php echo $data['status'] ?>">
                            <?php
                            echo $data['status'];
                            ?>
                        </option>
                    <?php } ?>

                    <option value="active">active</option>
                    <option value="inactive">inactive</option>
                </select>
            </div>

            <input type="submit" value="Save" class="btn btn-success">
        </form>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#add-driver-form').on('submit', function(event) {
            event.preventDefault();

            var formData = new FormData(this);

            if ($('input[name="id"]').length > 0) {
                formData.append('action', 'edit-driver');
            } else {
                formData.append('action', 'add-driver');
            }

            $.ajax({
                url: '../ajax/ajaxhandler.php',
                type: 'POST',
                data: formData,
                dataType: 'json',
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.success) {
                        alert(response.success);
                        window.location.href = 'list_driver.php';
                    } else {
                        console.log("Driver insertion Failed...!");
                    }
                }
            })
        })
    })
</script>

<?php
include('./includes/footer.php');
?>