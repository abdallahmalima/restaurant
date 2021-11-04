

<?php $__env->startSection('content'); ?>
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Testimonies</h1>
            <a href="<?php echo e(route('testimonies.create')); ?>" class="btn btn-tool bg-info float-sm-right">
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
          <h3 class="card-title">Testimonies</h3>

          <div class="card-tools">
            <form class="form-inline ml-3" method="GET" action="<?php echo e(route('testimonies.search')); ?>">
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
                          Testimony Title
                      </th>
                      <th style="width: 30%">
                          Testimony Description
                      </th>
                      <th style="width: 20%">
                        Actions
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <?php $__empty_1 = true; $__currentLoopData = $testimonies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimony): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                  <tr>
                      <td>
                          #
                      </td>
                      <td>
                          <a>
                            <?php echo e($testimony->title); ?>

                          </a>
                          <br/>
                          <small>
                              <?php echo e($testimony->created_at->diffForHumans()); ?>

                          </small>
                      </td>
                      <td>
                        <?php echo e(Str::limit($testimony->description,19)); ?>

                      </td>
                      <td class="project-actions text-right">
                          
                          <form method="POST" action="<?php echo e(route('testimonies.destroy',$testimony)); ?>">
                            <a class="btn btn-info btn-sm" href="<?php echo e(route('testimonies.edit',$testimony)); ?>">
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
          <div class="d-flex justify-content-center pt-3">
            <?php echo $testimonies->links(); ?>

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
<?php echo $__env->make('layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\web\laravel\my_web1\resources\views/testimonies/index.blade.php ENDPATH**/ ?>