

<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <h3 class="mb-0 h6"><?php echo e(translate('Seller Payments')); ?></h3>
    </div>
    <div class="card-body">
        <table class="table aiz-table mb-0">
            <thead>
                <tr>
                    <th>#</th>
                    <th><?php echo e(translate('Date')); ?></th>
                    <th><?php echo e(translate('Seller')); ?></th>
                    <th><?php echo e(translate('Amount')); ?></th>
                    <th><?php echo e(translate('Payment Details')); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(\App\Seller::find($payment->seller_id) != null && \App\Seller::find($payment->seller_id)->user != null): ?>
                        <tr>
                            <td><?php echo e($key+1); ?></td>
                            <td><?php echo e($payment->created_at); ?></td>
                            <td>
                                <?php if(\App\Seller::find($payment->seller_id) != null): ?>
                                    <?php echo e(\App\Seller::find($payment->seller_id)->user->name); ?> (<?php echo e(\App\Seller::find($payment->seller_id)->user->shop->name); ?>)
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php echo e(single_price($payment->amount)); ?>

                            </td>
                            <td><?php echo e(ucfirst(str_replace('_', ' ', $payment->payment_method))); ?> <?php if($payment->txn_code != null): ?> (TRX ID : <?php echo e($payment->txn_code); ?>) <?php endif; ?></td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="aiz-pagination">
              <?php echo e($payments->links()); ?>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/shebaco1/public_html/resources/views/backend/sellers/payment_histories/index.blade.php ENDPATH**/ ?>