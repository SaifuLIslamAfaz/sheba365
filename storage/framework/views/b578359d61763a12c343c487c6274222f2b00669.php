
<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0 h6"><?php echo e(translate('Seller Withdraw Request')); ?></h5>
        </div>
        <div class="card-body">
            <table class="table aiz-table mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th><?php echo e(translate('Date')); ?></th>
                        <th><?php echo e(translate('Seller')); ?></th>
                        <th><?php echo e(translate('Total Amount to Pay')); ?></th>
                        <th><?php echo e(translate('Requested Amount')); ?></th>
                        <th><?php echo e(translate('Message')); ?></th>
                        <th><?php echo e(translate('Status')); ?></th>
                        <th width="15%"><?php echo e(translate('Options')); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $seller_withdraw_requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $seller_withdraw_request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(\App\Seller::find($seller_withdraw_request->user_id) != null && \App\Seller::find($seller_withdraw_request->user_id)->user != null): ?>
                            <tr>
                                <td><?php echo e(($key+1) + ($seller_withdraw_requests->currentPage() - 1)*$seller_withdraw_requests->perPage()); ?></td>
                                <td><?php echo e($seller_withdraw_request->created_at); ?></td>
                                <td>
                                    <?php if(\App\Seller::find($seller_withdraw_request->user_id) != null): ?>
                                        <?php echo e(\App\Seller::find($seller_withdraw_request->user_id)->user->name); ?> (<?php echo e(\App\Seller::find($seller_withdraw_request->user_id)->user->shop->name); ?>)
                                    <?php endif; ?>
                                </td>
                                <td><?php echo e(single_price(\App\Seller::find($seller_withdraw_request->user_id)->admin_to_pay)); ?></td>
                                <td><?php echo e(single_price($seller_withdraw_request->amount)); ?></td>
                                <td>
                                    <?php echo e($seller_withdraw_request->message); ?>

                                </td>
                                <td>
                                    <?php if($seller_withdraw_request->status == 1): ?>
                                    <span class="badge badge-inline badge-success"><?php echo e(translate('Paid')); ?></span>
                                    <?php else: ?>
                                    <span class="badge badge-inline badge-info"><?php echo e(translate('Pending')); ?></span>
                                    <?php endif; ?>
                                </td>
                                <td class="text-right">
    		                            <a class="btn btn-soft-primary btn-icon btn-circle btn-sm"  onclick="show_seller_payment_modal('<?php echo e($seller_withdraw_request->user_id); ?>','<?php echo e($seller_withdraw_request->id); ?>');" title="<?php echo e(translate('Pay Now')); ?>">
    		                                <i class="las la-money-bill"></i>
    		                            </a>
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm"  onclick="show_message_modal('<?php echo e($seller_withdraw_request->id); ?>');" title="<?php echo e(translate('Message View')); ?>">
    		                                <i class="las la-eye"></i>
    		                            </a>
    		                            <a href="<?php echo e(route('sellers.payment_history', encrypt($seller_withdraw_request->user_id))); ?>" class="btn btn-soft-primary btn-icon btn-circle btn-sm"  title="<?php echo e(translate('Payment History')); ?>">
    		                                <i class="las la-history"></i>
    		                            </a>
    		                        </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <div class="aiz-pagination">
                <?php echo e($seller_withdraw_requests->links()); ?>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('modal'); ?>
<!-- payment Modal -->
<div class="modal fade" id="payment_modal">
  <div class="modal-dialog">
    <div class="modal-content" id="payment-modal-content">

    </div>
  </div>
</div>


<!-- Message View Modal -->
<div class="modal fade" id="message_modal">
  <div class="modal-dialog">
    <div class="modal-content" id="message-modal-content">

    </div>
  </div>
</div>


<?php $__env->stopSection(); ?>



<?php $__env->startSection('script'); ?>
  <script type="text/javascript">
      function show_seller_payment_modal(id, seller_withdraw_request_id){
          $.post('<?php echo e(route('withdraw_request.payment_modal')); ?>',{_token:'<?php echo e(@csrf_token()); ?>', id:id, seller_withdraw_request_id:seller_withdraw_request_id}, function(data){
              $('#payment-modal-content').html(data);
              $('#payment_modal').modal('show', {backdrop: 'static'});
              $('.demo-select2-placeholder').select2();
          });
      }

      function show_message_modal(id){
          $.post('<?php echo e(route('withdraw_request.message_modal')); ?>',{_token:'<?php echo e(@csrf_token()); ?>', id:id}, function(data){
              $('#message-modal-content').html(data);
              $('#message_modal').modal('show', {backdrop: 'static'});
          });
      }
  </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/shebaco1/public_html/resources/views/backend/sellers/seller_withdraw_requests/index.blade.php ENDPATH**/ ?>