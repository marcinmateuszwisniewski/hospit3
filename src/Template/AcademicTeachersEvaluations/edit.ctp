<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $academicTeachersEvaluation->evaluation_ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $academicTeachersEvaluation->evaluation_ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Academic Teachers Evaluations'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="academicTeachersEvaluations form large-9 medium-8 columns content">
    <?= $this->Form->create($academicTeachersEvaluation) ?>
    <fieldset>
        <legend><?= __('Edit Academic Teachers Evaluation') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
