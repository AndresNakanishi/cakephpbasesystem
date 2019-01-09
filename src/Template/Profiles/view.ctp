<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profile $profile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Profile'), ['action' => 'edit', $profile->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Profile'), ['action' => 'delete', $profile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profile->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Profiles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Profile'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Permission Profiles'), ['controller' => 'PermissionProfiles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Permission Profile'), ['controller' => 'PermissionProfiles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="profiles view large-9 medium-8 columns content">
    <h3><?= h($profile->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($profile->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($profile->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($profile->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Permission Profiles') ?></h4>
        <?php if (!empty($profile->permission_profiles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Permission Id') ?></th>
                <th scope="col"><?= __('Profile Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($profile->permission_profiles as $permissionProfiles): ?>
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
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($profile->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Profile Id') ?></th>
                <th scope="col"><?= __('Username') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Surname') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col"><?= __('Created At') ?></th>
                <th scope="col"><?= __('Updated At') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($profile->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->profile_id) ?></td>
                <td><?= h($users->username) ?></td>
                <td><?= h($users->email) ?></td>
                <td><?= h($users->name) ?></td>
                <td><?= h($users->surname) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->active) ?></td>
                <td><?= h($users->created_at) ?></td>
                <td><?= h($users->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
