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
        <li><?= $this->Html->link(__('New Nationalitechild'), ['action' => 'add']) ?></li>
    </ul>
</nav>

<?= $this->Form->create('Nationalitechild') ?>
<fieldset>
    <legend><?= __('Search Nationalitechild') ?></legend>
    <?php
    echo $this->Form->input('name', ['id' => 'autocomplete']);
    ?>
</fieldset>
<?= $this->Form->end() ?>
