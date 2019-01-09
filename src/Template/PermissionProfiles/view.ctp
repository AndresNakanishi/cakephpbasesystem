<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PermissionProfile $permissionProfile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Permission Profile'), ['action' => 'edit', $permissionProfile->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Permission Profile'), ['action' => 'delete', $permissionProfile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $permissionProfile->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Permission Profiles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Permission Profile'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Permissions'), ['controller' => 'Permissions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Permission'), ['controller' => 'Permissions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Profiles'), ['controller' => 'Profiles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Profile'), ['controller' => 'Profiles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="permissionProfiles view large-9 medium-8 columns content">
    <h3><?= h($permissionProfile->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Permission') ?></th>
            <td><?= $permissionProfile->has('permission') ? $this->Html->link($permissionProfile->permission->name, ['controller' => 'Permissions', 'action' => 'view', $permissionProfile->permission->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profile') ?></th>
            <td><?= $permissionProfile->has('profile') ? $this->Html->link($permissionProfile->profile->name, ['controller' => 'Profiles', 'action' => 'view', $permissionProfile->profile->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($permissionProfile->id) ?></td>
        </tr>
    </table>
</div>
