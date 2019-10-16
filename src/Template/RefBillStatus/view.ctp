<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RefBillStatus $refBillStatus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ref Bill Status'), ['action' => 'edit', $refBillStatus->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ref Bill Status'), ['action' => 'delete', $refBillStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $refBillStatus->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ref Bill Status'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ref Bill Status'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bills'), ['controller' => 'Bills', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bill'), ['controller' => 'Bills', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="refBillStatus view large-9 medium-8 columns content">
    <h3><?= h($refBillStatus->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Bill Status Description') ?></th>
            <td><?= h($refBillStatus->bill_status_description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($refBillStatus->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Bills') ?></h4>
        <?php if (!empty($refBillStatus->bills)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Ref Bill Status Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Amount Due') ?></th>
                <th scope="col"><?= __('Amount Outstanding') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($refBillStatus->bills as $bills): ?>
            <tr>
                <td><?= h($bills->id) ?></td>
                <td><?= h($bills->ref_bill_status_id) ?></td>
                <td><?= h($bills->user_id) ?></td>
                <td><?= h($bills->amount_due) ?></td>
                <td><?= h($bills->amount_outstanding) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Bills', 'action' => 'view', $bills->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Bills', 'action' => 'edit', $bills->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Bills', 'action' => 'delete', $bills->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bills->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
