<?php
include 'auth/database.php';
include 'nav.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hotel Booking</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" href="img/favicon.ico" sizes="16x16">

  <!-- fonts -->
  <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Karla:700,400' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>

  <!-- fontawesome -->
  <link rel="stylesheet" href="css/font-awesome.css" />

  <!-- bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />

  <!-- uikit -->
  <link rel="stylesheet" href="css/uikit.min.css" />

  <!-- animate -->
  <link rel="stylesheet" href="css/animate.css" />
  <link rel="stylesheet" href="css/datepicker.css" />
  <!-- Owl carousel 2 css -->
  <link rel="stylesheet" href="css/owl.carousel.css">
  <!-- rev slider -->
  <link rel="stylesheet" href="css/rev-slider/settings.css" />
  <!-- lightslider -->
  <link rel="stylesheet" href="css/lightslider.css">
  <!-- Theme -->
  <link rel="stylesheet" href="css/reset.css">

  <!-- custom css -->
  <link rel="stylesheet" href="style.css" />
  <!-- responsive -->
  <link rel="stylesheet" href="css/responsive.css" />

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!-- This Template Is Fully Coded By Aftab Zaman from swiftconcept.com -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body id="blog_page">

  <!-- start breadcrumb -->
  <section class="breadcrumb_main_area margin-bottom-80">
    <div class="container-fluid">
      <div class="row">
        <div class="breadcrumb_main nice_title">
          <h2>News</h2>
          <!-- special offer start -->
          <div class="special_offer_main">
            <div class="container">
              <div class="special_offer_sub">
                <img src="img/special-offer-yellow-main.png" alt="imf">
              </div>
            </div>
          </div>
          <!-- end offer start -->
        </div>
      </div>
    </div>
  </section>
  <!-- end breadcrunb -->

  <section class="blog_area">
    <div class="container">
      <div class="row">
        <?php
        $sql = "SELECT *  FROM `blog`";
        // $sql = "SELECT *  FROM `blog`";
        $result = mysqli_query($conn, $sql);
        $sno = 0;
        ?>
        <div class="col-md-12">

          <div class="row">

            <div class="clearfix blog_inner" data-uk-grid>
              <?php
              while ($row = mysqli_fetch_assoc($result)) {
                $sno = $sno + 1;
              ?>
                <div class="margin-bottom-30 col-md-4 col-sm-6 col-xs-12">

                  <div class="single_blog_style1">
                    <div class="style_blog_img_box">
                      <img src="img/blog-pic1.jpg" alt="img" />
                      <a class="style_b_link" href=""><i class="fa fa-link"></i></a>
                    </div>
                    <div class="at_love"><i class="fa fa-heart"></i></div>
                    <div class="blog_text_box">
                      <h5><?php echo $row["title"] ?> </h5>
                      <ul class="clearfix">
                        <li><a href="">By Admin |</a></li>
                        <li><a href="">3 Jan 2015 |</a></li>
                        <li><a href="">3 Comment</a></li>
                      </ul>
                      <p>
                        <?php
                        echo $row["short_description"]
                        ?>
                      </p>
                      <a href="<?= $row["sno"]; ?>">Read More</a>

                    </div>
                  </div>

                </div>
              <?php
              }
              ?>
            </div>

            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="load_more">
                  <a href="single-blog.php">Load More</a>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </div>
  </section>


  <!-- Edit modal -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit This Blog</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="about.php" method="POST">
          <div class="modal-body">
            <input type="hidden" name="snoEdit" id="snoEdit">
            <div class="form-group">
              <label for="title">Blog Title</label>
              <input type="text" class="form-control" id="titleEdit" name="titleEdit" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
              <label for="desc">Blog Description</label>
              <textarea class="form-control" id="descriptionEdit" name="descriptionEdit" rows="3"></textarea>
            </div>
          </div>
          <div class="modal-footer d-block mr-auto">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
 




































  <script>
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit");
        tr = e.target.parentNode.parentNode;
        title = tr.getElementsByTagName("td")[0].innerText;
        description = tr.getElementsByTagName("td")[1].innerText;
        console.log(title, description);
        titleEdit.value = title;
        descriptionEdit.value = description;
        snoEdit.value = e.target.id;
        console.log(e.target.id)
        $('#editModal').modal('toggle');
      })
    })

    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        sno = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this note!")) {
          console.log("yes");
          window.location = `about.php?delete=${sno}`;
          // TODO: Create a form and use post request to submit a form
        } else {
          console.log("no");
        }
      })
    })
  </script>





  <!-- jquery library -->
  <script src="js/vendor/jquery-1.11.2.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>

  <!-- uikit -->
  <script src="js/uikit.min.js"></script>
  <script src="js/grid.js"></script>
  <!-- easing -->
  <script src="js/jquery.easing.1.3.min.js"></script>
  <script src="js/datepicker.js"></script>
  <!-- scroll up -->
  <script src="js/jquery.scrollUp.min.js"></script>
  <!-- owlcarousel -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- lightslider -->
  <script src="js/lightslider.js"></script>
  <!-- wow Animation -->
  <script src="js/wow.min.js"></script>
  <!--Activating WOW Animation only for modern browser-->
  <!--[if !IE]><!-->
  <script type="text/javascript">
    new WOW().init();
  </script>
  <!--<![endif]-->

  <!--Oh Yes, IE 9+ Supports animation, lets activate for IE 9+-->
  <!--[if gte IE 9]>
            <script type="text/javascript">new WOW().init();</script>
        <![endif]-->

  <!--Opacity & Other IE fix for older browser-->
  <!--[if lte IE 8]>
            <script type="text/javascript" src="js/ie-opacity-polyfill.js"></script>
        <![endif]-->



  <!-- my js -->
  <script src="js/main.js"></script>

  <?php
  include 'footer.php';
  ?>
</body>

</html>
<?php
include 'auth/database.php';
include 'nav.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hotel Booking</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" href="img/favicon.ico" sizes="16x16">

  <!-- fonts -->
  <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Karla:700,400' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>

  <!-- fontawesome -->
  <link rel="stylesheet" href="css/font-awesome.css" />

  <!-- bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />

  <!-- uikit -->
  <link rel="stylesheet" href="css/uikit.min.css" />

  <!-- animate -->
  <link rel="stylesheet" href="css/animate.css" />
  <link rel="stylesheet" href="css/datepicker.css" />
  <!-- Owl carousel 2 css -->
  <link rel="stylesheet" href="css/owl.carousel.css">
  <!-- rev slider -->
  <link rel="stylesheet" href="css/rev-slider/settings.css" />
  <!-- lightslider -->
  <link rel="stylesheet" href="css/lightslider.css">
  <!-- Theme -->
  <link rel="stylesheet" href="css/reset.css">

  <!-- custom css -->
  <link rel="stylesheet" href="style.css" />
  <!-- responsive -->
  <link rel="stylesheet" href="css/responsive.css" />

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!-- This Template Is Fully Coded By Aftab Zaman from swiftconcept.com -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body id="blog_page">

  <!-- start breadcrumb -->
  <section class="breadcrumb_main_area margin-bottom-80">
    <div class="container-fluid">
      <div class="row">
        <div class="breadcrumb_main nice_title">
          <h2>News</h2>
          <!-- special offer start -->
          <div class="special_offer_main">
            <div class="container">
              <div class="special_offer_sub">
                <img src="img/special-offer-yellow-main.png" alt="imf">
              </div>
            </div>
          </div>
          <!-- end offer start -->
        </div>
      </div>
    </div>
  </section>
  <!-- end breadcrunb -->

  <section class="blog_area">
    <div class="container">
      <div class="row">
        <?php
        $sql = "SELECT *  FROM `blog`";
        $result = mysqli_query($conn, $sql);
        $sno = 0;
        ?>
        <div class="col-md-12">

          <div class="row">

            <div class="clearfix blog_inner" data-uk-grid>
              <?php
              while ($row = mysqli_fetch_assoc($result)) {
                $sno = $sno + 1;
              ?>
                <div class="margin-bottom-30 col-md-4 col-sm-6 col-xs-12">

                  <div class="single_blog_style1">
                    <div class="style_blog_img_box">
                      <img src="img/blog-pic1.jpg" alt="img" />
                      <a class="style_b_link" href=""><i class="fa fa-link"></i></a>
                    </div>
                    <div class="at_love"><i class="fa fa-heart"></i></div>
                    <div class="blog_text_box">
                      <h5><?php echo $row["title"] ?> </h5>
                      <ul class="clearfix">
                        <li><a href="">By Admin |</a></li>
                        <li><a href="">3 Jan 2015 |</a></li>
                        <li><a href="">3 Comment</a></li>
                      </ul>
                      <p>
                        <?php
                        echo $row["description"]
                        ?>
                      </p>
                      <a href="<?= $row["sno"]; ?>">Read More</a>

                    </div>
                  </div>

                </div>
              <?php
              }
              ?>
            </div>

            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="load_more">
                  <a href="single-blog.php">Load More</a>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </div>
  </section>


  <!-- Edit modal -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit This Blog</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="about.php" method="POST">
          <div class="modal-body">
            <input type="hidden" name="snoEdit" id="snoEdit">
            <div class="form-group">
              <label for="title">Blog Title</label>
              <input type="text" class="form-control" id="titleEdit" name="titleEdit" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
              <label for="desc">Blog Description</label>
              <textarea class="form-control" id="descriptionEdit" name="descriptionEdit" rows="3"></textarea>
            </div>
          </div>
          <div class="modal-footer d-block mr-auto">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php
  if ($insert) {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Your Blog Has Been Added Successfully.
        <button type='button' class='close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
  }
  ?>
  <?php
  if ($delete) {
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your Blog has been deleted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <?php
  if ($update) {
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your Blog has been updated successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>




































  <script>
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit");
        tr = e.target.parentNode.parentNode;
        title = tr.getElementsByTagName("td")[0].innerText;
        description = tr.getElementsByTagName("td")[1].innerText;
        console.log(title, description);
        titleEdit.value = title;
        descriptionEdit.value = description;
        snoEdit.value = e.target.id;
        console.log(e.target.id)
        $('#editModal').modal('toggle');
      })
    })

    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        sno = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this note!")) {
          console.log("yes");
          window.location = `about.php?delete=${sno}`;
          // TODO: Create a form and use post request to submit a form
        } else {
          console.log("no");
        }
      })
    })
  </script>





  <!-- jquery library -->
  <script src="js/vendor/jquery-1.11.2.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>

  <!-- uikit -->
  <script src="js/uikit.min.js"></script>
  <script src="js/grid.js"></script>
  <!-- easing -->
  <script src="js/jquery.easing.1.3.min.js"></script>
  <script src="js/datepicker.js"></script>
  <!-- scroll up -->
  <script src="js/jquery.scrollUp.min.js"></script>
  <!-- owlcarousel -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- lightslider -->
  <script src="js/lightslider.js"></script>
  <!-- wow Animation -->
  <script src="js/wow.min.js"></script>
  <!--Activating WOW Animation only for modern browser-->
  <!--[if !IE]><!-->
  <script type="text/javascript">
    new WOW().init();
  </script>
  <!--<![endif]-->

  <!--Oh Yes, IE 9+ Supports animation, lets activate for IE 9+-->
  <!--[if gte IE 9]>
            <script type="text/javascript">new WOW().init();</script>
        <![endif]-->

  <!--Opacity & Other IE fix for older browser-->
  <!--[if lte IE 8]>
            <script type="text/javascript" src="js/ie-opacity-polyfill.js"></script>
        <![endif]-->



  <!-- my js -->
  <script src="js/main.js"></script>

  <?php
  include 'footer.php';
  ?>
</body>

</html>