<?php 
   include('connection.php'); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>crm sales portal</title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" /> -->
        <link href="css/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <!-- <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script> -->
        <script src="js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
    <?php include('navbar.php'); ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
              <?php include('sidenav.php'); ?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h3 class="mt-4">All User Agent List</h3>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                All User Agent List
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            
                                            <th>id</th>
                                            <th>date</th>
                                            <th>username</th>
                                            <th>password</th>
                                            <th>type</th>
                                            <th>login status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $agentUserQuery = "SELECT * FROM salesusers";     
                                        $agentUserQueryExe = $con->query($agentUserQuery);
                                        foreach($agentUserQueryExe as $agentUserlist) {  
                                    ?>    
                                        <tr>
                                        <td><?php echo $agentUserlist['id']; ?></td>
                                            <td><?php echo $agentUserlist['date']; ?></td>
                                            <td><?php echo $agentUserlist['username']; ?></td>
                                            <td><?php echo $agentUserlist['password']; ?></td>
                                            <td><?php echo $agentUserlist['type']; ?></td>
                                            <td><?php echo $agentUserlist['login']; ?></td>
                                        </tr>
                                    <?php } ?>    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include("footer.php"); ?>
            </div>
        </div>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> -->
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script> -->
        <!-- <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script> -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script> -->
        <script src="js/simple-datatables.min.js"></script> 
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
