<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bill $bill
 */

?>
<div class="dropdown show">
    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Menu
    </a>

    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

        <a><?= $this->Html->link(__('List Bills'), ['action' => 'index'],array('class' => 'dropdown-item')) ?></a>
        <a><?= $this->Html->link(__('List Ref Bill Status'), ['controller' => 'RefBillStatus', 'action' => 'index'],array('class' => 'dropdown-item')) ?></a>
        <a><?= $this->Html->link(__('New Ref Bill Status'), ['controller' => 'RefBillStatus', 'action' => 'add'],array('class' => 'dropdown-item')) ?></a>
        <a><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'],array('class' => 'dropdown-item')) ?></a>
        <a><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'],array('class' => 'dropdown-item')) ?></a>
        <a><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index'],array('class' => 'dropdown-item')) ?></a>
        <a><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add'], array('class' => 'dropdown-item')) ?></a>
    </div>
</div>
<div class="bills form large-9 medium-8 columns content">
    <?= $this->Form->create($bill) ?>
    <fieldset>
        <legend><?= __('Add Bill') ?></legend>
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
