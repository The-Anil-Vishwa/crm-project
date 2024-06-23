<?php 
  include("connection.php");
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sales Portal crm</title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" /> -->

        <link href="css/styles.css" rel="stylesheet" />
        <!-- <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script> -->
        <script src="js/all.js" crossorigin="anonymous"></script>
      </head>
    <body class="sb-nav-fixed">
        <?php include("navbar.php"); ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php include("sidenav.php"); ?>
            </div>`
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h5 class="mt-4">ADD CUSTOMER REQUIRE FIELD</h5>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">DATA</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header" style="background: blue;color:white">
                                <i class="fas fa-user-tag"></i>
                               <span>Add Customer Data</span> 
                            </div>
                            <div class="card-body">
                                   <table class="table table-striped">
                                      <tbody>
                                         <tr>
                                            <td colspan="1">
                                               <form class="well form-horizontal" method="post" action="add_data.php">
                                                  <fieldset>
                                                     <div class="form-group">
                                                        <label class="col-md-4 control-label">First Name</label>
                                                        <div class="col-md-12 inputGroupContainer">
                                                           <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="firstName" name="firstName" class="form-control" required="true" value="" type="text"></div>
                                                        </div>
                                                     </div>
                                                     <div class="form-group">
                                                        <label class="col-md-4 control-label">Last Name</label>
                                                        <div class="col-md-12 inputGroupContainer">
                                                           <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="lastName" name="lastName" class="form-control" required="true" value="" type="text"></div>
                                                        </div>
                                                     </div>
                                                     <div class="form-group">
                                                        <label class="col-md-4 control-label">Address</label>
                                                        <div class="col-md-12 inputGroupContainer">
                                                           <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="address" name="address"  class="form-control" required="true" value="" type="text"></div>
                                                        </div>
                                                     </div>
                                                     <div class="form-group">
                                                        <label class="col-md-4 control-label">Shipping Address</label>
                                                        <div class="col-md-12 inputGroupContainer">
                                                           <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="shippingaddress" name="shippingaddress"  class="form-control" required="true" value="" type="text"></div>
                                                        </div>
                                                     </div>
                                                     <div class="form-group">
                                                        <label class="col-md-4 control-label">City</label>
                                                        <div class="col-md-12 inputGroupContainer">
                                                           <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="city" name="city"  class="form-control" required="true" value="" type="text"></div>
                                                        </div>
                                                     </div>
                                                     <div class="form-group">
                                                        <label class="col-md-4 control-label">State</label>
                                                        <div class="col-md-12 inputGroupContainer">
                                                           <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="state" name="state"  class="form-control" required="true" value="" type="text"></div>
                                                        </div>
                                                     </div>
                                                     <div class="form-group">
                                                        <label class="col-md-4 control-label">Postal Code/ZIP</label>
                                                        <div class="col-md-12 inputGroupContainer">
                                                           <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="postcode" name="postalcode"  class="form-control" required="true" value="" type="text"></div>
                                                        </div>
                                                     </div>
                                                     
                                                     <div class="form-group">
                                                        <label class="col-md-4 control-label">Country</label>
                                                        <div class="col-md-12 inputGroupContainer">
                                                           <div class="input-group">
                                                              <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                                              <input name="country" class="form-control" required="true" value="india" type="text">
                                                           </div>
                                                        </div>
                                                     </div>
                                                     
                                                     <div class="form-group">
                                                        <label class="col-md-4 control-label">Phone Number</label>
                                                        <div class="col-md-12 inputGroupContainer">
                                                           <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input id="phoneNumber" name="phoneNumber"  class="form-control" required="true" value="" type="text"></div>
                                                        </div>
                                                     </div>
                                                     
                                                     
                                                     <br>
                                                     <span style="color:red"; ><b>PRODUCT DETAIL</b></span>
                                                     <br>
                                                     <br>
                                                     
                                                   <div class="dynamicinput"">  
                                                      <div class="row">
                                                         <div class="form-group col-md-4">
                                                            <label class="col-md-4 control-label">Product Name</label>
                                                            <div class="col-md-12 inputGroupContainer">
                                                               <div class="input-group">
                                                               <input name="productname[]" class="form-control" required="true" value="" type="text">
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="form-group col-md-4">
                                                            <label class="col-md-4 control-label">Product Price</label>
                                                            <div class="col-md-12 inputGroupContainer">
                                                               <div class="input-group">
                                                                  <input name="price[]" class="form-control" required="true" value="" type="text">
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="form-group col-md-4">
                                                            <label class="col-md-4 control-label">Product Qunaity</label>
                                                            <div class="col-md-12 inputGroupContainer">
                                                                  <div class="input-group">
                                                                     <input name="qty[]" class="form-control" required="true" value="" type="text">
                                                                  </div>
                                                            </div>
                                                         </div>
                                                      </div>   
                                                   </div>   
                                                         <br>
                                                         <div style="float:right;">
                                                            <a  class='btn btn-success list_add_button'  >Add More(+)</a>
                                                         </div>
                                                   </fieldset>
                                                   <br>
                                                   <div style="float:left;">
                                                     <input class='btn btn-primary' type="submit" value="submit" name="submit" />
                                                   </div>
                                               </form>
                                            </td>
                                         </tr>
                                      </tbody>
                                   </table>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include("footer.php"); ?>
            </div>
        </div>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> -->
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script> -->
        <script src="js/datatables-simple-demo.js"></script>
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    </body>
</html>

<script>
$(document).ready(function(){
   var x = 0;
   var maxField = 10;
      
      $('.list_add_button').click(function(){
         //console.log('insinde');
    if(x < maxField){ 
        x++;
        var fieldHTML = '<div class="row"><div class="form-group col-md-4"><label class="col-md-4 control-label">Product Name</label><div class="col-md-12 inputGroupContainer"><div class="input-group"><input name="productname[]" class="form-control" required="true" value="" type="text"></div></div></div><div class="form-group col-md-4"><label class="col-md-4 control-label">Product Price</label><div class="col-md-12 inputGroupContainer"><div class="input-group"><input name="price[]" class="form-control" required="true" value="" type="text"></div></div></div><div class="form-group col-md-4"><label class="col-md-4 control-label">Product Qunaity</label><div class="col-md-12 inputGroupContainer"><div class="input-group"><input name="qty[]" class="form-control" required="true" value="" type="text"></div></div></div><div><a href="javascript:void(0);" class="btn btn-danger removebutton" style="float:right; id="removemore" >Remove More(-)</a></div></div>';
        $('.dynamicinput').append(fieldHTML);
    }
    });

    
    $('.dynamicinput').on('click', '.removebutton', function()
    {
      $(this).closest('div.row').remove();
       x--;
    });
});
</script>
