<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Courses Schedule'), ['action' => 'edit', $coursesSchedule->course_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Courses Schedule'), ['action' => 'delete', $coursesSchedule->course_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $coursesSchedule->course_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Courses Schedules'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Courses Schedule'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="coursesSchedules view large-9 medium-8 columns content">
    <h3><?= h($coursesSchedule->course_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Course ID') ?></th>
            <td><?= $this->Number->format($coursesSchedule->course_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Schedule ID') ?></th>
            <td><?= $this->Number->format($coursesSchedule->schedule_ID) ?></td>
        </tr>
    </table>
</div>
