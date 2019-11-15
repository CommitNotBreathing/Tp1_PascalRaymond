<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?php
$this->extend('/Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
<li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $refBillStatus->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $refBillStatus->id)]
    )
    ?>
</li>
<li><?= $this->Html->link(__('List RefBillStatus'), ['action' => 'index']) ?></li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
        $this->Form->postLink(
            __('Delete'),
            ['action' => 'delete', $refBillStatus->id],
            ['confirm' => __('Are you sure you want to delete # {0}?', $refBillStatus->id)]
        )
        ?>
    </li>
    <li><?= $this->Html->link(__('List RefBillStatus'), ['action' => 'index']) ?></li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($refBillStatus); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['RefBillStatus']) ?></legend>
    <?php
    echo $this->Form->control('id');
    echo $this->Form->control('bill_status_description');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
