<?php
$urlToLinkedListFilter = $this->Url->build([
    "controller" => "Villes",
    "action" => "getByProvinces",
    "_ext" => "json"
]);
echo $this->Html->scriptBlock('var urlToLinkedListFilter = "' . $urlToLinkedListFilter . '";', ['block' => true]);
echo $this->Html->script('Childrens/add', ['block' => 'scriptBottom']);
?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Children $children
 */
?>
<?php
$urlToNationalitechildAutocompletedemoJson = $this->Url->build([
    "controller" => "Nationalitechild",
    "action" => "findNationalite",
    "_ext" => "json"
]);
echo $this->Html->scriptBlock('var urlToAutocompleteAction = "' . $urlToNationalitechildAutocompletedemoJson . '";', ['block' => true]);
echo $this->Html->script('Nationalitechild/autocompletedemo', ['block' => 'scriptBottom']);
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Childrens'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="childrens form large-9 medium-8 columns content">
    <?= $this->Form->create($children)?>
    <fieldset>
        <legend><?= __('Add Children') ?></legend>
        <?php
            echo $this->Form->control('province_id', ['options' => $provinces]);
            echo $this->Form->control('ville_id', ['options' => $villes]);
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->input('gender', ['id' => 'autocomplete']);
            echo $this->Form->control('first_name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('age');
           // echo $this->Form->control('image');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
