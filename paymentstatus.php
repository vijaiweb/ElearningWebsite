<!-- start including header-->
<?php
include('./maininclude/header.php');
?>
<!--end including header-->
<!--Start  Course Page  Banner---->
<div class="container-fluid bg-dark">
    <div class="row">
        <img src="image/coursebanner.jpg" alt="course" style="height:500px; width:100%; 
        object-fit:cover;box-shadow:10px;"/>
    </div>
</div>
<!--End  Course Page  Banner---->

<!--start main content-->
<div class="container">
    <h2 class="text-center my-4">Payment Status</h2>
    <form method="post" action="">
        <div class="form-group row">
            <label class="offset-sm-3 col-form-label">Order ID:</label>
<div>
                <input type="text" class="form-control mx-3">
</div>
            <div>
                <input type="submit" class="btn btn-primary mx-4" value="View">
            </div>
</div>
    </form>
</div>
<!--end  main content-->

<!--start contact us---->

    <h2 class="text-center my-4">Contact Us</h2>

<?php
include('./contact.php');
?>

  
  <!--end contact us ----->
<!-- start including footer-->
<?php
include('./maininclude/footer.php');
?>
<!--end including footer-->