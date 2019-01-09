<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PermissionProfile $permissionProfile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $permissionProfile->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $permissionProfile->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Permission Profiles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Permissions'), ['controller' => 'Permissions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Permission'), ['controller' => 'Permissions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Profiles'), ['controller' => 'Profiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Profile'), ['controller' => 'Profiles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="permissionProfiles form large-9 medium-8 columns content">
    <?= $this->Form->create($permissionProfile) ?>
    <fieldset>
        <legend><?= __('Edit Permission Profile') ?></legend>
        <?php
            echo $this->Form->control('permission_id', ['options' => $permissions]);
            echo $this->Form->control('profile_id', ['options' => $profiles]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
