<?php
include('./includes/topbar.php');

$result = mysqli_query($connect, "SELECT * FROM settings WHERE id=1 LIMIT 1");
$data = mysqli_fetch_assoc($result);
?>

<div class="container">
    <h2>SETTINGS</h2>
    <div>
        <form id="settings-form">
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
            <div class="form-group">
                <label for="username" class="font-style-bold">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Username" value="<?php echo isset($data['username']) ? $data['username'] : ''; ?>">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="<?php echo isset($data['email']) ? $data['email'] : ''; ?>">
            </div>

            <div class="form-group">
                <label for="phone_number" class="font-style-bold">Phone Number</label>
                <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="Phone Number" value="<?php echo isset($data['phone']) ? $data['phone'] : ''; ?>">
            </div>

            <div class="form-group">
                <label for="address" class="font-style-bold">Address</label>
                <input type="text" name="address" id="address" class="form-control" placeholder="Address" value="<?php echo isset($data['address']) ? $data['address'] : ''; ?>">
            </div>

            <div class="form-group">
                <label for="site_name" class="font-style-bold">Site Name</label>
                <input type="text" name="site_name" id="site_name" class="form-control" placeholder="Site Name" value="<?php echo isset($data['site_name']) ? $data['site_name'] : ''; ?>">
            </div>

            <?php if (isset($data['logo'])) { ?>
                <img src="<?php echo $data['logo']; ?>" width="100"><br><br>
            <?php } ?>

            <div class="form-group">
                <label for="image" class="font-style-bold">Image</label><br>
                <input type="file" name="logo" id="logo">
                <?php if (isset($data['logo'])) { ?>
                    <input type="hidden" name="existing_logo" value="<?php echo $data['logo']; ?>">
                <?php } ?>
            </div>

            <div class="form-group">
                <label for="location">Location</label>
                <textarea rows="5" name="location" id="location" class="form-control" placeholder="Location"><?php echo isset($data['location']) ? $data['location'] : ''; ?></textarea>
            </div>

            <div class="form-group">
                <label for="about_us" class="font-style-bold">About Us</label>
                <textarea class="form-control" id="summernote" name="aboutus" placeholder="About Us"><?php echo isset($data['aboutus']) ? $data['aboutus'] : ''; ?></textarea>
            </div>

            <input type="submit" value="Save" class="btn btn-success">
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 300,
            placeholder: 'Start typing here...',
        });
    });

    $(document).ready(function() {
        $('#settings-form').on('submit', function(event) {
            event.preventDefault();

            var formData = new FormData(this);
            formData.append('action', 'update-settings')

            $.ajax({
                url: '../ajax/ajaxhandler.php',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(response) {
                    console.log(response)
                    if (response.success) {
                        alert(response.success);
                        $('#settings-form')[0].reset();
                    } else {
                        alert(response.failed);
                    }
                }
            })
        })
    })
</script>

<?php
include('./includes/footer.php');
?>