<?php
include '../auth/database.php'
?>

<?php
$insert = false;
$update = false;
$delete = false;


if (isset($_GET['delete'])) {
  $sno = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM `contents` WHERE `sno` = $sno";
  $result = mysqli_query($conn, $sql);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['snoEdit'])) {
    //update the record
    $sno = $_POST["snoEdit"];
    $title = $_POST["titleEdit"];
    $long_desc = $_POST["descriptionEdit"];

    //sql query to be executed
    $sql = "UPDATE `contents` SET `title` = '$title' , `description` = '$long_desc' WHERE `contents` . `sno` = $sno;";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      $update = true;
    } else {
      echo "We could not update the record successfully";
    }
  } else {
    $title = $_POST["title"];
    $long_desc = $_POST["description"];

    //sql query to be executed
    $sql = "INSERT INTO `contents` (`title`, `description`) VALUES ('$title', '$long_desc')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
      // echo "The Record Has Been Inserted Successfully!<br>";
      $insert = true;
    } else {
      echo "The Record was not inserted because of this error--->" .
        mysqli_error($conn);
    }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>About Us</title>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <!-- include summernote css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- include summernote js-->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
</head>
<body>
    <?php 
        include "database.php";

        if(isset($_POST['submit'])){
            $title = $_POST['title'];
            $long_desc = $_POST['long_desc'];

            if($title != ''){
                mysqli_query($conn, "INSERT INTO contents(title,long_desc) VALUES('".$title."','".$long_desc."') ");
                header('location: ../about-us.php');
            }
        }
    ?>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white">
                        <h4>About Us- Hotel Sleekhive</h4>
                    </div>
                    <div class="card-body">
                        <form  action='about-us.php' method='post'>
                            <div class="mb-3">
                                <label><strong>Title :</strong></label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="mb-1">
                                <label><strong>Long Description :</strong></label>
                                <textarea id='makeMeSummernote' name='long_desc' class="form-control"></textarea><br>
                            </div>
                            <div class="d-flex justify-content-center">
                                <input type="submit" name="submit" value="Submit" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <!-- !-- Edit modal -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit this Content</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="../about-us.php" method="POST">
          <div class="modal-body">
            <input type="hidden" name="snoEdit" id="snoEdit">
            <div class="form-group">
              <label for="title">About Title</label>
              <input type="text" class="form-control" id="titleEdit" name="titleEdit" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
              <label for="desc">About Description</label>
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
        <strong>Success!</strong> Your Notes Has Been Added Successfully.
        <button type='button' class='close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
  }
  ?>
  <?php
  if ($delete) {
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been deleted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <?php
  if ($update) {
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been updated successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>

<hr>

<div class="container my-4">
    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">S.No</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>

        <?php
        $sql = "SELECT *  FROM `contents`";
        $result = mysqli_query($conn, $sql);
        $sno = 0;
        while ($row = mysqli_fetch_assoc($result)) {
          $sno = $sno + 1;
          echo "<tr>
        <th scope='row'>" . $sno . "</th>
        <td>" . $row['title'] . "</td>
        <td>" . $row['long_desc'] . "</td>
        <td> <button class='edit btn btn-sm btn-primary' id=" . $row['sno'], ">Edit</button> <button class='delete btn btn-sm btn-primary' id=d" . $row['sno'], ">Delete</button> </td>
      </tr>";
        }
        ?>
      </tbody>
    </table>
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
          window.location = `about-us.php?delete=${sno}`;
          // TODO: Create a form and use post request to submit a form
        } else {
          console.log("no");
        }
      })
    })
  </script>

<script>
    let table = new DataTable('#myTable');
</script>
    <!-- Script -->
    <script type="text/javascript">
        $('#makeMeSummernote').summernote({
            height:200,
        });
    </script>
</body>
</html>