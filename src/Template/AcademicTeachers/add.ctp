<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Academic Teachers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Evaluations'), ['controller' => 'Evaluations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evaluation'), ['controller' => 'Evaluations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="academicTeachers form large-9 medium-8 columns content">
    <?= $this->Form->create($academicTeacher) ?>
    <fieldset>
        <legend><?= __('Add Academic Teacher') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('surname');
            echo $this->Form->input('national_identification_number');
            echo $this->Form->input('occupation');
            echo $this->Form->input('degree');
            echo $this->Form->input('department');
            echo $this->Form->input('evaluations._ids', ['options' => $evaluations]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
