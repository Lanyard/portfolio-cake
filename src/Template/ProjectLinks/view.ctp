<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Project Link'), ['action' => 'edit', $projectLink->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Project Link'), ['action' => 'delete', $projectLink->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projectLink->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Project Links'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project Link'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Links'), ['controller' => 'Links', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Link'), ['controller' => 'Links', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projectLinks view large-9 medium-8 columns content">
    <h3><?= h($projectLink->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Project') ?></th>
            <td><?= $projectLink->has('project') ? $this->Html->link($projectLink->project->title, ['controller' => 'Projects', 'action' => 'view', $projectLink->project->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Link') ?></th>
            <td><?= $projectLink->has('link') ? $this->Html->link($projectLink->link->id, ['controller' => 'Links', 'action' => 'view', $projectLink->link->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($projectLink->id) ?></td>
        </tr>
    </table>
</div>
