<?php

    $content = content('breadcrumb.content');

?>
<!--Banner Start-->
<div class="banner-area flex" style="background-image:url(<?php echo e(getFile('breadcrumb',@$content->data->image)); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner-text">
                    <h1><?php echo e(changeDynamic($pageTitle)); ?></h1>
                    <ul>
                        <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                        <li><span><?php echo e(changeDynamic($pageTitle)); ?></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Banner End--><?php /**PATH C:\xampp\htdocs\newastro\resources\views/frontend/sections/breadcrumb.blade.php ENDPATH**/ ?>