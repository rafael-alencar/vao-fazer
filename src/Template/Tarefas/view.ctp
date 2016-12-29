<div class="col-sm-3 col-md-2 sidebar">
  <ul class="nav nav-sidebar">
    <li><?= $this->Html->link($this->Html->tag('span','&nbsp;',['class'=>'glyphicon glyphicon-edit','aria-hidden'=>'true']).__('Edit'), ['action' => 'edit', $tarefa->id],['escape'=>false]) ?> </li>
        <li><?= $this->Form->postLink($this->Html->tag('span','&nbsp;',['class'=>'glyphicon glyphicon-trash','aria-hidden'=>'true']).__('Delete'), ['action' => 'delete', $tarefa->id], ['confirm' => __('Tem certeza que deseja excluir essa tarefa?'),'escape'=>false]) ?> </li>
        <li><?= $this->Html->link($this->Html->tag('span','&nbsp;',['class'=>'glyphicon glyphicon-list','aria-hidden'=>'true']).__('List Tarefas'), ['action' => 'index'],['escape'=>false]) ?> </li>
        <li><?= $this->Html->link($this->Html->tag('span','&nbsp;',['class'=>'glyphicon glyphicon-pushpin','aria-hidden'=>'true']).__('New Tarefa'), ['action' => 'add'],['escape'=>false]) ?> </li>
  </ul>
</div>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h2 class="sub-header"><?= h($tarefa->titulo) ?></h2>
    <?= $this->Text->autoParagraph(h($tarefa->descricao)); ?>

    <?php if (!$tarefa->finalizada): ?>
        <span class="label label-default"><?= __('To-do') ?></span>
    <?php else: ?>
        <span class="label label-success"><?= __('Finalizada') ?></span>
    <?php endif; ?>
</div>
