<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Framework'), ['action' => 'edit', $framework->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Framework'), ['action' => 'delete', $framework->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $framework->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Frameworks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Framework'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="frameworks view large-9 medium-8 columns content">
    <h3><?= h($framework->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($framework->ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Term ID') ?></th>
            <td><?= $this->Number->format($framework->term_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Submission Day') ?></th>
            <td><?= h($framework->submission_day) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Acceptation Day') ?></th>
            <td><?= h($framework->acceptation_day) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Accepted') ?></th>
            <td><?= $framework->accepted ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
