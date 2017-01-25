<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $framework->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $framework->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Frameworks'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="frameworks form large-9 medium-8 columns content">
    <?= $this->Form->create($framework) ?>
    <fieldset>
        <legend><?= __('Edit Framework') ?></legend>
        <?php
            echo $this->Form->input('term_ID');
            echo $this->Form->input('submission_day', ['empty' => true]);
            echo $this->Form->input('accepted');
            echo $this->Form->input('acceptation_day', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
