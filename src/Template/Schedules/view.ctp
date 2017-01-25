<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Schedule'), ['action' => 'edit', $schedule->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Schedule'), ['action' => 'delete', $schedule->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $schedule->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Schedules'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Schedule'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="schedules view large-9 medium-8 columns content">
    <h3><?= h($schedule->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($schedule->ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Term ID') ?></th>
            <td><?= $this->Number->format($schedule->term_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Academic Teacher ID') ?></th>
            <td><?= $this->Number->format($schedule->academic_teacher_ID) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Courses') ?></h4>
        <?php if (!empty($schedule->courses)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('ID') ?></th>
                <th scope="col"><?= __('Code') ?></th>
                <th scope="col"><?= __('Room') ?></th>
                <th scope="col"><?= __('Start Hour') ?></th>
                <th scope="col"><?= __('Start Day') ?></th>
                <th scope="col"><?= __('Start Hour 2') ?></th>
                <th scope="col"><?= __('Start Day 2') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($schedule->courses as $courses): ?>
            <tr>
                <td><?= h($courses->ID) ?></td>
                <td><?= h($courses->code) ?></td>
                <td><?= h($courses->room) ?></td>
                <td><?= h($courses->start_hour) ?></td>
                <td><?= h($courses->start_day) ?></td>
                <td><?= h($courses->start_hour_2) ?></td>
                <td><?= h($courses->start_day_2) ?></td>
                <td><?= h($courses->name) ?></td>
                <td><?= h($courses->type) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Courses', 'action' => 'view', $courses->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Courses', 'action' => 'edit', $courses->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Courses', 'action' => 'delete', $courses->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $courses->ID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
