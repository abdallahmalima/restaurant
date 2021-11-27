

<?php $__env->startSection('content'); ?>
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Second Sections</h1>
            <a href="<?php echo e(route('ssections.create')); ?>" class="btn btn-tool bg-info float-sm-right">
                <i class="fas fa-plus"></i></a>
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Second Sections</h3>

          <div class="card-tools">
            <form class="form-inline ml-3" method="GET" action="<?php echo e(route('ssections.search')); ?>">
                <div class="input-group input-group-sm bg-info">
                  <input class="form-control form-control-navbar" name="keyword" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
                
              </form>

              
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 20%">
                          Name
                      </th>
                      <th style="width: 30%">
                          Description
                      </th>
                      <th style="width: 20%">
                        Actions
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <?php $__empty_1 = true; $__currentLoopData = $ssections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ssection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                  <tr>
                      <td>
                          #
                      </td>
                      <td>
                          <a>
                            <?php echo e($ssection->title); ?>

                          </a>
                          <br/>
                          <small>
                              <?php echo e($ssection->created_at->diffForHumans()); ?>

                          </small>
                      </td>
                      <td>
                        <?php echo e(Str::limit($ssection->description,19)); ?>

                      </td>
                      <td class="project-actions text-right">
                          
                          <form method="POST" action="<?php echo e(route('ssections.destroy',$ssection)); ?>">
                            <a class="btn btn-info btn-sm" href="<?php echo e(route('ssections.edit',$ssection)); ?>">
                                <i class="fas fa-pencil-alt"></i> 
                            </a>
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                          <button onclick="return confirm('Are you Sure you to delete this ?')" class="btn btn-danger btn-sm" type="submit">
                              <i class="fas fa-trash"></i>
                          </button>
                        </form>
                      </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                  <tr><td colspan="4" class="text-center">Records Not Found</td></tr>
                    
                  <?php endif; ?>
                  
              </tbody>
          </table>
          <div class="d-flex justify-content-center pt-3 ">
            <?php echo $ssections->links(); ?>

         </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\web\laravel\progress\my_web1\resources\views/ssections/index.blade.php ENDPATH**/ ?>