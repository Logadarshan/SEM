<?php include 'controller/EditReturn_ctrl.php'; ?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Manage Return Book</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

	<style>
		.container1{
		min-height: 10vh;
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: column;
		color: #6c757d;
		}

		.container1 form {
		width: 500px;
		padding: 10px;
		border-radius: 10px;
		box-shadow: 0 4px 8px 0 #00aea6f0, 0 6px 20px 0 #00aea6f0;
    background-color:#ddd;
		}

    .form-group{
      color:black;
    }

    #ReturnStatus{
    width: 100%;
    height: 38px;
    border-radius:5px;
    border-color:white

  }
	</style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center align-items-center">
        <div class="col-xl-11 d-flex align-items-center justify-content-between">
          <h1 class="logo"><a href="../login/librarian.php">Library Management System</a></h1>
          
          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="../login/librarian.php">Home</a></li>
			  <li class="dropdown"><a href="#"><span>Menu</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="../manage_book_record.php">Manage Book Record</a></li>
                  <li><a href="../manage_user/ManageUser.php">Manage User</a></li>
				  <li><a href="../manageFineModule/manageFineModule.php">Manage Fine</a></li>
				  <li><a href="managereserv.php">Manage Reservation</a></li>
				  <li><a href="../viewReport/ReportMain.php">Report</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="../login/logout_controller.php?logout">Log Out</a></li>
                </ul>
              </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= hero Section ======= -->
  <section id="hero">
    <div class="hero-container">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(assets/img/book/book1.jpg)">
            <div class="carousel-container">
              <div class="container">
  
                <div class="container1">
              <form action="controller/EditReturn_ctrl.php" method="post">
                
              <h5 style="color: black" class="display-4 text-center">Update</h5><hr>
              <?php if (isset($_GET['error'])) { ?>
              <div class="alert alert-danger" role="alert">
                <?php echo $_GET['error']; ?>
                </div>
              <?php } ?>
              <div class="form-group">
                          <label for="BorrowerName">Borrower Name</label>
                          <input type="text" 
                                class="form-control" 
                                id="BorrowerName" 
                                name="BorrowerName" 
                                value="<?=$row['BorrowerName']; ?>">
                        </div>

                        <div class="form-group">
                          <label for="BookName">Book Name</label>
                          <input type="text" 
                                class="form-control" 
                                id="BookName" 
                                name="BookName"
                                value="<?=$row['BookName']; ?>"
                          >
                          </div>
                        
                        <div class="form-group">
                          <label for="BorrowDate">Borrow Date</label>
                          <input type="date" 
                                class="form-control" 
                                id="BorrowDate" 
                                name="BorrowDate"  
                                value="<?=$row['BorrowDate']; ?>">
                        </div>

                        <div class="form-group">
                          <label for="ReturnDate">Return Date</label>
                          <input type="date" 
                                class="form-control" 
                                id="ReturnDate" 
                                name="ReturnDate" 
                                value="<?=$row['ReturnDate']; ?>"
                          >
                        </div>

                        <div class="form-group">
                          <label for="ReturnStatus">Return Status</label><br>
                          <select id="ReturnStatus" 
                                  name="ReturnStatus">
                            <option value="return">Return</option>
                            <option value="not return">Not return</option>
                          </select>
                        </div>

              <input type="text" 
                    name="ReturnBookID"
                    value="<?=$row['ReturnBookID']?>"
                    hidden >
              <br>
              <button type="submit" 
                    class="btn btn-primary"
                    name="update">Update</button>
                <a href="viewReturn.php" class="btn btn-primary">View</a>
              </form>

			  </div>
            </div>
          </div>
        </div>

    </div>
  </section><!-- End Hero Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>LIBRARY MANAGEMENT SYSTEM</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
      -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>