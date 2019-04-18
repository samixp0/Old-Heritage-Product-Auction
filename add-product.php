<?php include ("includes/header.php");?>
    
<?php
$msg='';
include('server.php');
if(isset($_POST['upload'])) 
{
    $fnm= $_FILES["pimage"]["name"];
    $dst="./product_image/".$fnm;
    if(move_uploaded_file($_FILES["pimage"]["tmp_name"],$dst)){
        $msg= "Upload Successfully";
    }
    else
    {
        $msg= "There was a problem uploading image";
    }
    
    
    mysqli_query($db,"INSERT INTO product VALUES('','$_POST[product_name]',$_POST[product_baseprice],'$_POST[product_aid]','$_POST[require_per_bid]',$_POST[incremental_price],'$dst')");
}
?>
    <div class="container">
        <div class="card border-danger">
            <div class="card-header bg-danger text-white">
                <strong><i class="fa fa-plus"></i> Add New Product</strong>
            </div>
            <div class="card-body">
                <form action="add-product.php" method="post" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="Product Name" class="col-form-label">Product Name</label>
                            <input type="text" class="form-control"  name="product_name" placeholder="Name" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="product_baseprice" class="col-form-label">Product BasePrice</label>
                            <input type="text" class="form-control"  name="product_baseprice" placeholder="Base Price" >
                        </div>
                        
                    </div>
                       <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="product_aid" class="col-form-label">Product Auction Id</label>
                            <input type="text" class="form-control"  name="product_aid" placeholder="Auction Id" >
                        </div>
                         <div class="form-group col-md-6">
                            <label for="Require Bid" class="col-form-label">Require Per Bid</label>
                            <input type="number" class="form-control" name="require_per_bid" placeholder="Credit Require" >
                        </div>
                    </div>
                    <div class="form-row">
                       
                        <div class="form-group col-md-6">
                            <label for="Incremental price" class="col-form-label">Incremental Price</label>
                            <input type="number" class="form-control" name="incremental_price"  placeholder="$" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="image" class="col-form-label">Image</label>
                            <input type="file" class="form-control" name="pimage"  >
                        </div>
                    </div>
                   
                    <button type="submit" class="btn btn-success" name="upload"><i class="fa fa-check-circle"></i> Upload</button>
                </form>
            </div>
        </div>
        <!-- End create form -->
        <br>
    </div><!-- /.container -->




<?php include ("includes/footer.php");?>
