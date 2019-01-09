<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PermissionProfile[]|\Cake\Collection\CollectionInterface $permissionProfiles
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Permission Profile'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Permissions'), ['controller' => 'Permissions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Permission'), ['controller' => 'Permissions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Profiles'), ['controller' => 'Profiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Profile'), ['controller' => 'Profiles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="permissionProfiles index large-9 medium-8 columns content">
    <h3><?= __('Permission Profiles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('permission_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('profile_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($permissionProfiles as $permissionProfile): ?>
            <tr>
                <td><?= $this->Number->format($permissionProfile->id) ?></td>
                <td><?= $permissionProfile->has('permission') ? $this->Html->link($permissionProfile->permission->name, ['controller' => 'Permissions', 'action' => 'view', $permissionProfile->permission->id]) : '' ?></td>
                <td><?= $permissionProfile->has('profile') ? $this->Html->link($permissionProfile->profile->name, ['controller' => 'Profiles', 'action' => 'view', $permissionProfile->profile->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $permissionProfile->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $permissionProfile->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $permissionProfile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $permissionProfile->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
