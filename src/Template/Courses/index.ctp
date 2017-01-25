<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Course'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Schedules'), ['controller' => 'Schedules', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Schedule'), ['controller' => 'Schedules', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="courses index large-9 medium-8 columns content">
    <h3><?= __('Courses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('room') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start_hour') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start_day') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start_hour_2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start_day_2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($courses as $course): ?>
            <tr>
                <td><?= $this->Number->format($course->ID) ?></td>
                <td><?= h($course->code) ?></td>
                <td><?= h($course->room) ?></td>
                <td><?= h($course->start_hour) ?></td>
                <td><?= h($course->start_day) ?></td>
                <td><?= h($course->start_hour_2) ?></td>
                <td><?= h($course->start_day_2) ?></td>
                <td><?= h($course->name) ?></td>
                <td><?= h($course->type) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $course->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $course->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $course->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $course->ID)]) ?>
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
