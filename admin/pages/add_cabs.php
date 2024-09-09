<?php
include('./includes/topbar.php');
?>

<div class="container">
    <h2>MANAGE CABS</h2>
    <div>
        <form action="">
            <div class="form-group">
                <label for="car_name" class="font-style-bold">CAR NAME</label>
                <input type="text" name="car_name" id="" class="form-control" placeholder="Cab Name with Model">
            </div>
            <div class="form-group">
                <label for="image" class="font-style-bold">IMAGE</label><br>
                <input type="file" name="image" id="">
            </div>
            <div class="form-group">
                <label for="category" class="font-style-bold">CATEGORY</label>
                <select name="category" id="" class="form-control">
                    <option value="" disabled selected>Select</option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
            </div>
        </form>
    </div>
</div>

<?php
include('./includes/footer.php');
?>