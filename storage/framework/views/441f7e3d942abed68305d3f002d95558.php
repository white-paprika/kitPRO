

<?php
    $page_scss = 'resources/scss/pages/products.scss';
?>

<?php $__env->startSection('content'); ?>
<section class="products">
    <div class="_container">
        <div class="products__body">
            <h1><?php echo e($category->name); ?></h1>
            
            <div class="breadcrumbs">
                <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $breadcrumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('categories.index', ['category'=> $breadcrumb['slug']])); ?>" class="breadcrumb"> <?php echo e($breadcrumb['name']); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="products__cards">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('products.show', ['category'=> $category->slug, 'product'=> $product->slug])); ?>" class="products__card card">
                        <div class="content-wrap">
                            <img src="Content/Product/thumbnails/<?php echo e($product->thumbnail); ?>" alt="<?php echo e($product->slug); ?> thumbnail">
    
                            <p class="card__name"><?php echo e($product->name); ?></p>
    
                            <div class="rat-art-price-wrap">
                                <img src="img/rating-stars.svg" alt="рейтинг">
                                
                                <p class="articul">Артикул: BCJ-XJ-TRC</p>
        
                                <p class="price"><?php echo e($product->price); ?> <?php echo e($product->type->name == 'prodazha' ? '₽/шт' : '₽/смен'); ?></p>
                            </div>
                        </div>
                        
                        <span class="btn btn-normal btn-primary add-to-cart-btn">В корзину</span>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\maksi\Desktop\Мои_сайты\kitprotv\resources\views/product/index.blade.php ENDPATH**/ ?>