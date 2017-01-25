<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $coursesSchedule->course_ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $coursesSchedule->course_ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Courses Schedules'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="coursesSchedules form large-9 medium-8 columns content">
    <?= $this->Form->create($coursesSchedule) ?>
    <fieldset>
        <legend><?= __('Edit Courses Schedule') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
