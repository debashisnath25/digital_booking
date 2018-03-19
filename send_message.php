
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">
	<title>Dashboard | Digital Booking and Management</title>
    <?php include("metalinks.php");?>
</head>
<body class="app header-fixed left-sidebar-fixed right-sidebar-fixed right-sidebar-overlay right-sidebar-hidden">

    <!--===========header start===========-->
    <?php include("header.php");?>
    <!--===========header end===========-->

    <!--===========app body start===========-->
    <div class="app-body">
        <!--left sidebar start-->
        <?php include("sidebar.php");?>
        <!--left sidebar end-->

        <!--main contents start-->
        <main class="main-content">
            <div class="container">
                <!--page title start-->
                <div class="page-title pl-0">
                    <h4 class="mb-0"> 
                    </h4>
                </div>

                <div class="row">
                    <!--Report widget start-->
                    <div class=" col-md-12">
                        <div class="card card-shadow mb-4">
                            <div class="card-header">
                                <div class="card-title">
                                    Send Message
                                </div>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">To</label>&nbsp;&nbsp;<code>Tiger Nixon <i class="fa fa-times" aria-hidden="true"></i></code>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input">
                                            Check me out
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-info">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--Report widget end-->

                    <!--weather widget start-->
                    
                    <!--weather widget end-->
                </div>

            </div>
        </main>
        <!--main contents end-->

       

    </div>
    <!--===========app body end===========-->

   <?php
   include("footer.php");
   ?>

   
   


    <!--[if lt IE 9]>
    <script src="assets/vendor/modernizr.js"></script>
    <![endif]-->

    <!--init scripts-->
    
	
</body>
</html>
