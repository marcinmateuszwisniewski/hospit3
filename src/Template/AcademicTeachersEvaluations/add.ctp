<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Academic Teachers Evaluations'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="academicTeachersEvaluations form large-9 medium-8 columns content">
    <?= $this->Form->create($academicTeachersEvaluation) ?>
    <fieldset>
        <legend><?= __('Add Academic Teachers Evaluation') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
