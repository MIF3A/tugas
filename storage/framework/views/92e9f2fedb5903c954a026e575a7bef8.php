    <!--[if BLOCK]><![endif]--><?php if($hero): ?>
        <section id="hero" class="d-flex flex-column justify-content-center align-items-center" style="background: url('assets/img/<?php echo e($hero->image); ?>') top center;">
            <div class="hero-container" data-aos="fade-in">
                <h1><?php echo e($hero->title); ?></h1>
                <p>I'm <span class="typed" data-typed-items="<?php echo e($hero->skill); ?>"></span></p>
            </div>
        </section>
    <?php else: ?>
        <section id="hero" class="d-flex flex-column justify-content-center align-items-center" style="background: url('assets/img/hero-bg.jpg') top center;">
            <div class="hero-container" data-aos="fade-in">
                <h1>Uray Naufal</h1>
                <p>I'm <span class="typed" data-typed-items="Laravel Developer"></span></p>
            </div>
        </section>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]--><?php /**PATH C:\laragon\www\uraynaufal\storage\framework\views/ce105b136fef2a6ed61fa83c74d76787.blade.php ENDPATH**/ ?>