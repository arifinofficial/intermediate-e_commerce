<?php $__env->startSection('content'); ?>
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Create Product</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Create Product</li>
            </ol>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <form action="<?php echo e(route('admin.product.store')); ?>" class="" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <div class="row">
                                <label for="example-text-input" class="col-2 col-form-label">Name</label>
                                <div class="col-12">
                                    <input class="form-control" type="text" value="" name="name">
                                </div>
                        </div>                    
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="example-text-input" class="">Weight</label>
                            <input class="form-control" type="number" value="" name="weight">                      
                        </div>
                        <div class="form-group col-md-6">
                            <label for="example-text-input" class="">Stock</label>
                            <input class="form-control" type="number" value="" name="stock">                      
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="example-text-input" class="">Price</label>
                            <input class="form-control" type="text" value="" name="price">                      
                        </div>
                        <div class="form-group col-md-6">
                            <label for="example-text-input" class="">Discount</label>
                            <input class="form-control" type="text" value="" name="discount">                      
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                                <label for="example-text-input" class="col-3 col-form-label">Description</label>
                                <div class="col-12">
                                    <textarea name="description" id="" cols="50" rows="10"></textarea>
                                </div>
                        </div>                    
                    </div>
                    <div class="form-group">
                        <div class="row">
                                <label for="example-text-input" class="col-2 col-form-label">Image</label>
                                <div class="col-12">
                                    <input class="form-control" type="file" value="" name="image">
                                </div>
                        </div>                    
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="example-text-input" class="">Size</label>
                            <input class="form-control" type="text" value="" name="size">                      
                        </div>
                        <div class="form-group col-md-6">
                            <label for="example-text-input" class="">Color</label>
                            <input class="form-control" type="text" value="" name="color">                      
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01">Category</label>
                        </div>
                        <select name="category" class="custom-select" id="inputGroupSelect01">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Save</button>
                        <a href="<?php echo e(route('admin.category.index')); ?>" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>