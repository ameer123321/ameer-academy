<?php $__env->startSection('content'); ?>

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5><?php echo e(json_decode($banner->content)->title); ?></h5>
                            <h1><?php echo e(json_decode($banner->content)->subtitle); ?></h1>
                            <p><?php echo e(json_decode($banner->content)->desc); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-3 align-self-center">
                    <div class="single_feature_text ">
                        <h2>Awesome <br> Feature</h2>
                        <p>Set have great you male grass yielding an yielding first their you're
                            have called the abundantly fruit were man </p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-layers"></i></span>
                            <h4>Better Future</h4>
                            <p>Set have great you male grasses yielding yielding first their to
                                called deep abundantly Set have great you male</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-new-window"></i></span>
                            <h4>Qualified Trainers</h4>
                            <p>Set have great you male grasses yielding yielding first their to called
                                deep abundantly Set have great you male</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part single_feature_part_2">
                            <span class="single_service_icon style_icon"><i class="ti-light-bulb"></i></span>
                            <h4>Job Oppurtunity</h4>
                            <p>Set have great you male grasses yielding yielding first their to called deep
                                abundantly Set have great you male</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->

    <!-- member_counter counter start -->
    <section class="member_counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter"><?php echo e($courses_count); ?></span>
                        <h4>courses</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter"><?php echo e($trainers_count); ?></span>
                        <h4>trainers</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter"><?php echo e($students_count); ?></span>
                        <h4>students</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- member_counter counter end -->

    <!--::review_part start::-->
    <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p><?php echo e(json_decode($cuorses_content->content)->title); ?></p>
                        <h2><?php echo e(json_decode($cuorses_content->content)->subtitle); ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-sm-6 col-lg-4">
                        <div class="single_special_cource">
                        <img src="<?php echo e(asset('uploads/corses/'.$c->img)); ?>" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="<?php echo e(route('front.cay', $c->cat->id)); ?>" class="btn_4"><?php echo e($c->cat->name); ?></a>
                            <h4>$<?php echo e($c->price); ?></h4>
                            <a href="<?php echo e(route('front.show', [$c->cat->id,$c->id])); ?>"><h3><?php echo e($c->name); ?></h3></a>
                            <p><?php echo e($c->small_desc); ?></p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="<?php echo e(asset('uploads/trainers/'. $c->trainer->img)); ?>" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><?php echo e($c->trainer->name); ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </section>
    <!--::blog_part end::-->
    <!--::review_part start::-->
    <section class="testimonial_part padding_top pb-7">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>tesimonials</p>
                        <h2>Happy Students</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="textimonial_iner owl-carousel">
                        <?php $__currentLoopData = $tests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="testimonial_slider">
                                <div class="row">
                                    <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                        <div class="testimonial_slider_text">
                                            <p><?php echo e($t ->desc); ?></p>
                                            <h4><?php echo e($t ->name); ?></h4>
                                                <?php if($t->spec !== null): ?>
                                                    <h5><?php echo e($t ->spec); ?></h5>
                                                <?php endif; ?>
                                        </div>
                                    </div>
                                 <div class="col-lg-4 col-xl-2 col-sm-4">
                                        <div class="testimonial_slider_img">
                                            <img src="<?php echo e(asset('uploads/tests/'. $t->img)); ?>" alt="#">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--::blog_part end::-->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ameer-academy\resources\views/front/index.blade.php ENDPATH**/ ?>