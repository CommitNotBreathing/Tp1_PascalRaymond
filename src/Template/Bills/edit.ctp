<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bill $bill
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bill->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bill->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Bills'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ref Bill Status'), ['controller' => 'RefBillStatus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ref Bill Status'), ['controller' => 'RefBillStatus', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bills form large-9 medium-8 columns content">
    <?= $this->Form->create($bill) ?>
    <fieldset>
        <legend><?= __('Edit Bill') ?></legend>
        <?php
            echo $this->Form->control('ref_bill_status_id', ['options' => $refBillStatus]);
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('amount_due');
            echo $this->Form->control('amount_outstanding');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
