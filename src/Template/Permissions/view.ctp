<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Permission $permission
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Permission'), ['action' => 'edit', $permission->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Permission'), ['action' => 'delete', $permission->id], ['confirm' => __('Are you sure you want to delete # {0}?', $permission->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Permissions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Permission'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Permission Functions'), ['controller' => 'PermissionFunctions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Permission Function'), ['controller' => 'PermissionFunctions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Permission Profiles'), ['controller' => 'PermissionProfiles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Permission Profile'), ['controller' => 'PermissionProfiles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="permissions view large-9 medium-8 columns content">
    <h3><?= h($permission->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($permission->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($permission->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Permission Functions') ?></h4>
        <?php if (!empty($permission->permission_functions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Permission Id') ?></th>
                <th scope="col"><?= __('Function Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($permission->permission_functions as $permissionFunctions): ?>
            <tr>
                <td><?= h($permissionFunctions->id) ?></td>
                <td><?= h($permissionFunctions->permission_id) ?></td>
                <td><?= h($permissionFunctions->function_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PermissionFunctions', 'action' => 'view', $permissionFunctions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PermissionFunctions', 'action' => 'edit', $permissionFunctions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PermissionFunctions', 'action' => 'delete', $permissionFunctions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $permissionFunctions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Permission Profiles') ?></h4>
        <?php if (!empty($permission->permission_profiles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Permission Id') ?></th>
                <th scope="col"><?= __('Profile Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($permission->permission_profiles as $permissionProfiles): ?>
            <tr>
                <td><?= h($permissionProfiles->id) ?></td>
                <td><?= h($permissionProfiles->permission_id) ?></td>
                <td><?= h($permissionProfiles->profile_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PermissionProfiles', 'action' => 'view', $permissionProfiles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PermissionProfiles', 'action' => 'edit', $permissionProfiles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PermissionProfiles', 'action' => 'delete', $permissionProfiles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $permissionProfiles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
