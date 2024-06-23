<?php
    include 'connection.php';
    $c = $_POST['c'];
    $z = $c + 1;
    
?>

<div class="row" id="remove<?php echo $c;?>">
        <input type="hidden" name="kval[]" value="<?php echo $c;?>">
        <div class="col-3">
                <div class="form-group">
                  <label for="productnametype<?php echo $c;?>">Product Name: </label>
                  <input id="productname<?php echo $c;?>" type="text" name="productname[]" hidden required>
                  <input class="form-control" id="productnametype<?php echo $c;?>" oninput="addmoreproducttype(<?php echo $c;?>)" type="text" autocomplete="off">
                  <div id ="productlist<?php echo $c;?>"></div>
                </div>
        </div>
        <div class="col-3">
                <div class="form-group">
                  <label for="">Product Price: </label>
                  <input type="text" name="price[]" id="" class="form-control" required value="">
                </div>
        </div>
        <div class="col-3">
                <div class="form-group">
                  <label for="">Product Quantity: </label>
                  <input type="number" name="qty[]" id="qty<?php echo $c;?>" value="" class="form-control" onblur="calculateQty(<?php echo $c;?>)" required >
                </div>
        </div>
<!------------------------ New Add Total Product Quantity Start Section -------------------->
        
<div class="col-12">
        <div class="form-group bg-info">
           <label for="" class="text-white">Total In-Stock Quantity: </label>
           <input type="number" name="totalQty[]" id="totalQty<?php echo $c;?>"
                value="" class="form-control" required readonly="readonly">
           <input id="productSku<?php echo $c;?>" type="text" name="productSku[]" value="" hidden required>
           <input id="totalStockQty<?php echo $c;?>" type="text" value="" hidden required> 
        </div>        
</div>


<!------------------------ New Add Total Product Quantity End Section  -------------------->





        <div class="col-md-12" style="text-align:right;">
           <button type="button" class="btn btn-danger" onclick="addMoreRemove(<?php echo $c;?>)">Remove(-)</button><br>
        </div>
</div>
</span>
<span id="addmore<?php echo $z;?>">
<div class="row"></div></span>