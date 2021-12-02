<?php include("inc/header.php") ?>
<!-- Page Header Ends -->

<!-- Page Body Start-->
<?php include("inc/sidebar.php") ?>
<!-- Page Sidebar Ends-->

<!-- Right sidebar Start-->
<?php include("inc/right_sidebar.php") ?>
<!-- Right sidebar Ends-->
<!-- Right sidebar Ends-->

<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Add Products
                            <small>Bigdeal Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Digital</li>
                        <li class="breadcrumb-item active">Add Product</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <form id="form" action="inc/ajax/manage_product.php" method="POST" enctype="multipart/form-data">
            <div class="row product-adding">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>General</h5>
                        </div>

                        <div class="card-body">
                            <div class="digital-add needs-validation">
                                <div class="form-group">
                                    <label for="validationCustom01" class="col-form-label pt-0"><span>*</span> Title</label>
                                    <input class="form-control title" name="title" id="validationCustom01" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <label for="validationCustomtitle" class="col-form-label pt-0"><span>*</span> SKU</label>
                                    <input class="form-control sku" name="sku" id="validationCustomtitle" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label"><span>*</span> Categories</label>
                                    <select class="custom-select form-control cat_id" name="cat_id" required="">
                                        <option value="">--Select--</option>
                                        <option value="1">eBooks</option>
                                        <option value="2">Graphic Design</option>
                                        <option value="3">3D Impact</option>
                                        <option value="4">Application</option>
                                        <option value="5">Websites</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Sort Summary</label>
                                    <textarea rows="5" name="short_desc" class="shortSummery" cols="12"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="validationCustom02" class="col-form-label"><span>*</span> Product Price</label>
                                    <input class="form-control mrp" name="mrp" id="validationCustom02" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <label for="validationCustom02" class="col-form-label"><span>*</span> Product Price</label>
                                    <input class="form-control price" name="selling_price" id="validationCustom02" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label"><span>*</span> Status</label>
                                    <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                        <label class="d-block" for="edo-ani">
                                            <input class="radio_animated" id="edo-ani" type="radio" name="rdo-ani">
                                            Enable
                                        </label>
                                        <label class="d-block" for="edo-ani1">
                                            <input class="radio_animated" id="edo-ani1" type="radio" name="rdo-ani">
                                            Disable
                                        </label>
                                    </div>
                                </div>
                                <label class="col-form-label pt-0"> Product Image</label>

                                <input type="file" name="image" class="dz-message needsclick productImage">

                                </input>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Add Description</h5>
                        </div>
                        <div class="card-body">
                            <div class="digital-add needs-validation">
                                <div class="form-group mb-0">
                                    <div class="">
                                        <textarea name="description" class="description" id="summernote" cols="30" rows="10"></textarea>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5>Meta Data</h5>
                        </div>
                        <div class="card-body">
                            <div class="digital-add needs-validation">
                                <div class="form-group">
                                    <label for="validationCustom05" class="col-form-label pt-0"> Meta Title</label>
                                    <input class="form-control metaTitle" name="meta_title" id="validationCustom05" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <label for="validationCustom05" class="col-form-label pt-0"> Meta Title</label>
                                    <input class="form-control metaTitle" name="meta_keyword" id="validationCustom05" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Meta Description</label>
                                    <textarea class="metaDescription" name="meta_desc" rows="4" cols="12"></textarea>
                                </div>
                                <div class="form-group mb-0">
                                    <div class="product-buttons text-center">
                                        <button type="button" id="addPost" onclick="addProduct();" class="btn btn-primary">Add</button>
                                        <button type="button" class="btn btn-light">Discard</button>
                                        <p id="response"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Container-fluid Ends-->

</div>

<!-- footer start-->
<?php include("inc/footer.php") ?>