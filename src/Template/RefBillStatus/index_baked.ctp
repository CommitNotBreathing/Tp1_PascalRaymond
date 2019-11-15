<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RefBillStatus[]|\Cake\Collection\CollectionInterface $RefBillStatus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New RefBillStatus'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="refBillStatus index large-9 medium-8 columns content">
    <h3><?= __('RefBillStatus') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('name') ?></th>
            <th scope="col"><?= $this->Paginator->sort('description') ?></th>
            <th scope="col"><?= $this->Paginator->sort('created') ?></th>
            <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($refBillStatuss as $refBillStatus): ?>
            <tr>
                <td><?= $this->Number->format($refBillStatus->id) ?></td>
                <td><?= h($refBillStatus->name) ?></td>
                <td><?= h($refBillStatus->description) ?></td>
                <td><?= h($refBillStatus->created) ?></td>
                <td><?= h($refBillStatus->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $refBillStatus->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $refBillStatus->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $refBillStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $refBillStatus->id)]) ?>
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
