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
        <li><?= $this->Html->link(__('Edit Bill'), ['action' => 'edit', $bill->id],array('class' => 'dropdown-item')) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bill'), ['action' => 'delete', $bill->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bill->id)],array('class' => 'dropdown-item')) ?> </li>
        <li><?= $this->Html->link(__('List Bills'), ['action' => 'index'],array('class' => 'dropdown-item')) ?> </li>
        <li><?= $this->Html->link(__('New Bill'), ['action' => 'add'],array('class' => 'dropdown-item')) ?> </li>
        <li><?= $this->Html->link(__('List Ref Bill Status'), ['controller' => 'RefBillStatus', 'action' => 'index'],array('class' => 'dropdown-item')) ?> </li>
        <li><?= $this->Html->link(__('New Ref Bill Status'), ['controller' => 'RefBillStatus', 'action' => 'add'],array('class' => 'dropdown-item')) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'],array('class' => 'dropdown-item')) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'],array('class' => 'dropdown-item')) ?> </li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index'],array('class' => 'dropdown-item')) ?> </li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add'],array('class' => 'dropdown-item')) ?> </li>
    </div>
</div>
<div class="bills view large-9 medium-8 columns content">
    <h3><?= h($bill->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ref Bill Status') ?></th>
            <td><?= $bill->has('ref_bill_status') ? $this->Html->link($bill->ref_bill_status->id, ['controller' => 'RefBillStatus', 'action' => 'view', $bill->ref_bill_status->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $bill->has('user') ? $this->Html->link($bill->user->id, ['controller' => 'Users', 'action' => 'view', $bill->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bill->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount Due') ?></th>
            <td><?= $this->Number->format($bill->amount_due) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount Outstanding') ?></th>
            <td><?= $this->Number->format($bill->amount_outstanding) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Payments') ?></h4>
        <?php if (!empty($bill->payments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Bill Id') ?></th>
                <th scope="col"><?= __('Amount Paid') ?></th>
                <th scope="col"><?= __('Amount Outstanding') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($bill->payments as $payments): ?>
            <tr>
                <td><?= h($payments->id) ?></td>
                <td><?= h($payments->bill_id) ?></td>
                <td><?= h($payments->amount_paid) ?></td>
                <td><?= h($payments->amount_outstanding) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Payments', 'action' => 'view', $payments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Payments', 'action' => 'edit', $payments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Payments', 'action' => 'delete', $payments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
