<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bills'), ['controller' => 'Bills', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bill'), ['controller' => 'Bills', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Childrens'), ['controller' => 'Childrens', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Children'), ['controller' => 'Childrens', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($user->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($user->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($user->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($user->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($user->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Verifié') ?></th>
            <td><?= $user->verifié ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Bills') ?></h4>
        <?php if (!empty($user->bills)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Ref Bill Status Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Amount Due') ?></th>
                <th scope="col"><?= __('Amount Outstanding') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->bills as $bills): ?>
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
    <div class="related">
        <h4><?= __('Related Childrens') ?></h4>
        <?php if (!empty($user->childrens)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Gender') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Age') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->childrens as $childrens): ?>
            <tr>
                <td><?= h($childrens->id) ?></td>
                <td><?= h($childrens->user_id) ?></td>
                <td><?= h($childrens->gender) ?></td>
                <td><?= h($childrens->first_name) ?></td>
                <td><?= h($childrens->last_name) ?></td>
                <td><?= h($childrens->age) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Childrens', 'action' => 'view', $childrens->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Childrens', 'action' => 'edit', $childrens->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Childrens', 'action' => 'delete', $childrens->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childrens->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
