<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $evaluation->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $evaluation->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Evaluations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Academic Teachers'), ['controller' => 'AcademicTeachers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Academic Teacher'), ['controller' => 'AcademicTeachers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="evaluations form large-9 medium-8 columns content">
    <?= $this->Form->create($evaluation) ?>
    <fieldset>
        <legend><?= __('Edit Evaluation') ?></legend>
        <?php
            echo $this->Form->input('academic_teacher_ID');
            echo $this->Form->input('framework_ID');
            echo $this->Form->input('protocol_ID');
            echo $this->Form->input('final_note');
            echo $this->Form->input('room');
            echo $this->Form->input('academic_teachers._ids', ['options' => $academicTeachers]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
