<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet" />

    <title>Add Room</title>
</head>

<body>
    <div class="container my-4">
        <h2>Add Room</h2>
        <form action="rooms.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title">Room Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="room_type">Room Type</label>
                    <select class="form-control" name="status">
                        <option value="1" selected="selected">Single Room</option> 
                        <option value="0">Double Room</option> 
                        <option value="0">Deluxe Room</option> 
                        <option value="0">Executive Room</option> 
                    </select>
            </div>

            <div class="mb-3">
                <label for="room_desc">Room Description</label>
                <input type="text" class="form-control" id="room_description" name="room_description" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="capacity">Capacity</label>
                <input type="text" class="form-control" id="capacity" name="capacity" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="base_price"> Amenities <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <!-- foreach -->
                        <div class="checkbox">
                            <label><input name="amenities_ids[]" type="checkbox" value="1">24-Hour Guest Reception</label>
                            <!-- <label><input name="amenities_ids[]" type="checkbox" value="amenities->id"> amenities->name </label> -->
                        </div>
                        <!-- end foreach -->
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="checkbox">
                            <label><input name="amenities_ids[]" type="checkbox" value="18">Electronics</label>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="checkbox">
                            <label><input name="amenities_ids[]" type="checkbox" value="10">Fancy Bathrobes</label>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="checkbox">
                            <label><input name="amenities_ids[]" type="checkbox" value="11">Fire distinguisher</label>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="checkbox">
                            <label><input name="amenities_ids[]" type="checkbox" value="6">Flexible Checkout</label>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="checkbox">
                            <label><input name="amenities_ids[]" type="checkbox" value="8">Free Breakfast</label>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="checkbox">
                            <label><input name="amenities_ids[]" type="checkbox" value="3">Free Wifi</label>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="checkbox">
                            <label><input name="amenities_ids[]" type="checkbox" value="5">Healthy Breakfast</label>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="checkbox">
                            <label><input name="amenities_ids[]" type="checkbox" value="16">Gymnasium</label>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="checkbox">
                            <label><input name="amenities_ids[]" type="checkbox" value="7">Mini-fridge</label>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="checkbox">
                            <label><input name="amenities_ids[]" type="checkbox" value="4">Parking</label>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="checkbox">
                            <label><input name="amenities_ids[]" type="checkbox" value="9">Premium Bedding</label>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="checkbox">
                            <label><input name="amenities_ids[]" type="checkbox" value="2">Room Service</label>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="checkbox">
                            <label><input name="amenities_ids[]" type="checkbox" value="17">TV</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="status">Status</label>
                    <select class="form-control" name="status">
                        <option value="1" selected="selected">Active</option>
                        <option value="0">Inactive</option>
                    </select>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="room_images"> Image</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input class="form-control" id="room_type_images" multiple="" name="room_type_images[]" type="file">
                </div>
            </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                    <button class="btn btn-primary" type="reset">Reset</button>
                    <button class="btn btn-success" type="submit">Submit</button>
                </form>    
                </div>
            </div>
        </form>
    </div>
   
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <label for="image">Choose image:</label>
        <input type="file" name="image" id="image" accept="image/*" required>
        <br>
        <input type="submit" value="Upload Image">
    </form>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS 
     -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

</body>

</html>