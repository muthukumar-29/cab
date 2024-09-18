<?php
include('./includes/topbar.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = mysqli_fetch_assoc(mysqli_query($connect, "select * from packages where id='$id'"));
}
?>

<div class="container">
    <h1>TOUR PACKAGES</h1>

    <form id="add-packages-form">
        <?php if (isset($_GET['id'])) { ?>
            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
        <?php } ?>

        <div class="form-group">
            <label for="name">Package Name</label>
            <input type="text" name="name" id="" class="form-control" placeholder="Package Name" value="<?php echo isset($data['name']) ? $data['name'] : '' ?>">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="" rows="5" class="form-control" placeholder="Description"><?php echo isset($data['description']) ? $data['description'] : '' ?></textarea>
        </div>
        <div class="form-group">
            <label for="duration">Duration (In Days)</label>
            <input type="number" name="duration" id="" class="form-control" min='1' placeholder="Duration" value="<?php echo isset($data['duration']) ? $data['duration'] : '' ?>">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" id="" class="form-control" min='0' placeholder="Price" value="<?php echo isset($data['price']) ? $data['price'] : '' ?>">
        </div>
        <div class="form-group">
            <label for="places">Places</label>
            <input type="text" name="places" id="" class="form-control" placeholder="Places" value="<?php echo isset($data['place']) ? $data['place'] : '' ?>">
        </div>

        <?php if (isset($data['image'])) { ?>
            <img src="<?php echo $data['image']; ?>" width="100"><br><br>
        <?php } ?>

        <div class="form-group">
            <label for="image">Image</label><br>
            <input type="file" name="image" id="">
            <?php
            if (isset($data['image'])) { ?>
                <input type="hidden" name="existing_image" id="existing_image" value="<?php echo $data['image'] ?>">
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

        <input type="submit" value="Save" name="save" class="btn btn-success">
    </form>
</div>

<script>
    $(document).ready(function() {
        $('#add-packages-form').on('submit', function(event) {
            event.preventDefault();

            var formData = new FormData(this);
            if ($('input[name="id"]').length > 0) {
                formData.append('action', 'edit-package');
            } else {
                formData.append('action', 'add-packages');
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
                        window.location.href = 'list_packages.php';
                    } else {
                        console.log("Failed...")
                    }
                }
            })
        })
    })
</script>

<?php
include('./includes/footer.php');
?>