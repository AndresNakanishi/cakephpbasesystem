<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Permission $permission
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $permission->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $permission->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Permissions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Permission Functions'), ['controller' => 'PermissionFunctions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Permission Function'), ['controller' => 'PermissionFunctions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Permission Profiles'), ['controller' => 'PermissionProfiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Permission Profile'), ['controller' => 'PermissionProfiles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="permissions form large-9 medium-8 columns content">
    <?= $this->Form->create($permission) ?>
    <fieldset>
        <legend><?= __('Edit Permission') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
