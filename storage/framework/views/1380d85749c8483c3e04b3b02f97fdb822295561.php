<button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
    <i class="fe fe-menu navbar-toggler-icon"></i>
  </button>
  <a class="" href="<?php echo e(route('logout')); ?>"
  onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
   <?php echo e(__('Keluar')); ?>

</a>

<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
   <?php echo csrf_field(); ?>
</form>
  <?php /**PATH /var/www/html/pialang/resources/views/includes/navbar.blade.php ENDPATH**/ ?>