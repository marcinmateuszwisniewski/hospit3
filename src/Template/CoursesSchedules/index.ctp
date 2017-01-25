<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Courses Schedule'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="coursesSchedules index large-9 medium-8 columns content">
    <h3><?= __('Courses Schedules') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('course_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('schedule_ID') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($coursesSchedules as $coursesSchedule): ?>
            <tr>
                <td><?= $this->Number->format($coursesSchedule->course_ID) ?></td>
                <td><?= $this->Number->format($coursesSchedule->schedule_ID) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $coursesSchedule->course_ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coursesSchedule->course_ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $coursesSchedule->course_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $coursesSchedule->course_ID)]) ?>
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
