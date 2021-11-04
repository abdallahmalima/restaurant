<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Price List</h1>

<table id="customers">
  <tr>
    <th>Name</th>
    <th>Disk</th>
    <th>Emails</th>
  </tr>
  <?php $__currentLoopData = $prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td><?php echo e($price->name); ?></td>
    <td><?php echo e($price->disk); ?></td>
    <td><?php echo e($price->emails); ?></td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
 
</table>
<?php if(Auth::user()->image): ?>
<img src="<?php echo e(asset(Auth::user()->image->url)); ?>" alt="..." height="250px" weight="100px" class="img-thumbnail">
 <?php endif; ?>
</body>
</html>


<?php /**PATH D:\projects\web\laravel\my_web1\resources\views/prices/pdf/index_test.blade.php ENDPATH**/ ?>