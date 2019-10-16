<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bill[]|\Cake\Collection\CollectionInterface $bills
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bill'), ['action' => 'add']) ?></li>
        <!--<li><?= $this->Html->link(__('List Ref Bill Status'), ['controller' => 'RefBillStatus', 'action' => 'index']) ?></li>-->
        <!--<li><?= $this->Html->link(__('New Ref Bill Status'), ['controller' => 'RefBillStatus', 'action' => 'add']) ?></li>-->
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bills index large-9 medium-8 columns content">
    <h3><?= __('Bills') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!--<th scope="col"><?= $this->Paginator->sort('id') ?></th>-->
                <th scope="col"><?= $this->Paginator->sort('ref_bill_status_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount_due') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount_outstanding') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bills as $bill): ?>
            <tr>
                <!--<td><?= $this->Number->format($bill->id) ?></td>-->
                <td><?= $bill->has('ref_bill_status') ? $this->Html->link($bill->ref_bill_status->id, ['controller' => 'RefBillStatus', 'action' => 'view', $bill->ref_bill_status->id]) : '' ?></td>
                <td><?= $bill->has('user') ? $this->Html->link($bill->user->id, ['controller' => 'Users', 'action' => 'view', $bill->user->id]) : '' ?></td>
                <td><?= $this->Number->format($bill->amount_due) ?></td>
                <td><?= $this->Number->format($bill->amount_outstanding) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $bill->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bill->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bill->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bill->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
