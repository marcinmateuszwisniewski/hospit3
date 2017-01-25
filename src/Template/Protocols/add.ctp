<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Protocols'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="protocols form large-9 medium-8 columns content">
    <?= $this->Form->create($protocol) ?>
    <fieldset>
        <legend><?= __('Add Protocol') ?></legend>
        <?php
            echo $this->Form->input('discussed');
            echo $this->Form->input('discussion_day', ['empty' => true]);
            echo $this->Form->input('commital_day', ['empty' => true]);
            echo $this->Form->input('evaluation_day', ['empty' => true]);
            echo $this->Form->input('hour');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
