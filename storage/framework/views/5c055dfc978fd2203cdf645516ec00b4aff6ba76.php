    <!--Header-Area Start-->
    <!-- <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-12">
                    <div class="header-social">
                        <ul>
                            <li>
                                <div class="social-bar">
                                    <ul>
                                        <?php if($socials): ?>
                                            <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a href="<?php echo e(@$social->data->social_link); ?>"><i
                                                            class="<?php echo e(@$social->data->social_icon); ?>"></i></a>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-12">
                    <div class="header-info">
                        <ul>
                            <li>
                                <i class="far fa-envelope"></i>
                                <span><?php echo e(@$general->email_from); ?></span>
                            </li>
                            <?php if($contact): ?>
                                <li>
                                    <i class="fas fa-phone"></i>
                                    <span><?php echo e($contact->data->phone); ?></span>
                                </li>
                            <?php endif; ?>
                            <?php if(auth()->guard()->check()): ?>
                                <li>
                                    <i class="fas fa-lock"></i>
                                    <a href="<?php echo e(route('user.dashboard')); ?>">Dashboard</a>
                                </li>
                            <?php else: ?>
                                <li>
                                    <i class="fas fa-lock"></i>
                                    <a href="<?php echo e(route('user.login')); ?>">Login</a> / <a
                                        href="<?php echo e(route('user.register')); ?>">Register</a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--Header-Area End-->

    <!--Menu Start-->
    <div id="strickymenu" class="menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="logo flex">
                        <a href="<?php echo e(route('home')); ?>"><img src="<?php echo e(getFile('logo', @$general->logo)); ?>"
                                alt="Logo"></a>
                    </div>
                </div>
                <div class="col-md-9 col-6">
                    <div class="main-menu">
                        <ul class="nav-menu">
                            <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($page->name == 'home'): ?>
                                    <li><a href="<?php echo e(route('home')); ?>"><?php echo e(ucwords($page->name)); ?></a>
                                    </li>
                                    <?php continue; ?>
                                <?php endif; ?>

                                <li><a href="<?php echo e(route('pages', $page->slug)); ?>"><?php echo e(ucwords($page->name)); ?></a>
                                </li>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           
                            <?php if($dropdown->isNotEmpty()): ?>

                                <li class="menu-item-has-children"><a href="javascript:void(0)">Pages</a>
                                    <ul class="sub-menu">
                                        <?php $__currentLoopData = $dropdown; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $drop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <li><a href="<?php echo e(route('pages', $drop->slug)); ?>"><?php echo e(ucwords($drop->name)); ?></a>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </ul>
                                </li>


                            <?php endif; ?>

                        </ul>
                    </div>

                    <!--Mobile Menu Icon Start-->
                    <div class="mobile-menuicon">
                        <span class="menu-bar" onclick="openNav()"><i class="fa fa-bars"
                                aria-hidden="true"></i></span>
                    </div>
                    <!--Mobile Menu Icon End-->
                </div>
            </div>
        </div>
    </div>

    <!--Mobile Menu Start-->
    <div class="mobile-menu">
        <div id="mySidenav" class="sidenav">
            <a href="<?php echo e(route('home')); ?>"><img src="<?php echo e(getFile('logo', @$general->logo)); ?>" alt=""></a>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

            <ul>
                <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($page->name == 'home'): ?>
                        <li><a href="<?php echo e(route('home')); ?>"><?php echo e(ucwords($page->name)); ?></a>
                        </li>
                        <?php continue; ?>
                    <?php endif; ?>

                    <li><a href="<?php echo e(route('pages', $page->slug)); ?>"><?php echo e(ucwords($page->name)); ?></a>
                    </li>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              
                <?php if($dropdown->isNotEmpty()): ?>

                    <li class="menu-item-has-children"><a href="javascript:void(0)">Pages</a>
                        <ul class="sub-menu">
                            <?php $__currentLoopData = $dropdown; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $drop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <li><a href="<?php echo e(route('pages', $drop->slug)); ?>"><?php echo e(ucwords($drop->name)); ?></a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </ul>
                    </li>


                <?php endif; ?>
                <?php if(auth()->guard()->check()): ?>
                    <li><a href="<?php echo e(route('user.dashboard')); ?>">Dashboard</a></li>
                <?php else: ?>
                    <li><a href="<?php echo e(route('user.login')); ?>">Login</a></li>
                    <li><a href="<?php echo e(route('user.register')); ?>">Register</a></li>
                <?php endif; ?>
            </ul>

            
        </div>
    </div>
    <!--Mobile Menu End-->

    <!--Menu End-->
<?php /**PATH C:\xampp\htdocs\newastro\resources\views/frontend/partials/header.blade.php ENDPATH**/ ?>