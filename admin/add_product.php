<div id="page-wrapper">

  <div class="container-fluid">

    <div class="col-md-12">

      <div class="row">
        <h1 class="page-header">Add Product</h1>
      </div>

      <form action="" method="post" enctype="multipart/form-data">

        <div class="col-md-8">

          <div class="form-group">
            <label for="title">Product Title </label>
            <input type="text" name="title" class="form-control"  
            placeholder="Product name" required>
          </div>


          <div class="form-group">
            <label for="description_short">Short Description </label>
            <input type="text" name="description_short" class="form-control"  
            placeholder="Product short description" required>
          </div>


          <div class="form-group">
            <label for="description">Full Description</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Product full description" required></textarea>
          </div>



         <div class="form-group row">
            <div class="col-xs-3">
              <label for="price">Product Price</label>
              <input type="number" name="price" class="form-control" size="60" required min="0" value="1">
            </div>
          </div>


        </div><!--col-md-8-->


        <!-- SIDEBAR-->
        <aside id="admin_sidebar" class="col-md-4">


         <div class="form-group">
           <!--<input type="submit" name="draft" class="btn btn-warning btn-lg" value="Draft">-->
           <input type="submit" name="publish" class="btn btn-primary btn-lg" value="Publish">
         </div>


         <!-- Product Categories-->
         <div class="form-group">
           <label for="cat_id">Product Category</label>
           <select name="cat_id" class="form-control">

            <?php 
            
              $categories = get_categories();

              foreach ($categories as $cat) {
                ?>
                <option value="<?= $cat['id'] ?>">
                  <?= $cat['title'] ?>
                </option>
                <?php
              }      
            
            ?>            

          </select>


        </div>



         <hr>


        <div class="form-group">
          <label for="quantity">Quantity</label>
          <input type="number" name="quantity" class="form-control" min="0" value="1" required>
        </div>




        <hr>



        <!-- Product Image -->
        <div class="form-group">
          <label for="product-title">Product Image</label>
          <input type="file" name="image" class="form-control" required>
        </div>


        </aside><!--SIDEBAR-->



      </form>

    </div> <!-- col-md-12 -->

  </div> <!-- /.container-fluid -->

</div> <!-- /#page-wrapper -->



<?php 

  add_product();      

?>