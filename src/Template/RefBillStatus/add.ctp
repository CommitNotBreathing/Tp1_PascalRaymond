<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RefBillStatus $refBillStatus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ref Bill Status'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Bills'), ['controller' => 'Bills', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bill'), ['controller' => 'Bills', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="refBillStatus form large-9 medium-8 columns content">
    <?= $this->Form->create($refBillStatus) ?>
    <fieldset>
        <legend><?= __('Add Ref Bill Status') ?></legend>
        <?php
            echo $this->Form->control('bill_status_description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
