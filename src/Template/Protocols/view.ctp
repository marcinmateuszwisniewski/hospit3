<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Protocol'), ['action' => 'edit', $protocol->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Protocol'), ['action' => 'delete', $protocol->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $protocol->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Protocols'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Protocol'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="protocols view large-9 medium-8 columns content">
    <h3><?= h($protocol->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($protocol->ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hour') ?></th>
            <td><?= $this->Number->format($protocol->hour) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Discussion Day') ?></th>
            <td><?= h($protocol->discussion_day) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Commital Day') ?></th>
            <td><?= h($protocol->commital_day) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Evaluation Day') ?></th>
            <td><?= h($protocol->evaluation_day) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Discussed') ?></th>
            <td><?= $protocol->discussed ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
