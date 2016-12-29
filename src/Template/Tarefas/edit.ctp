<div class="col-sm-3 col-md-2 sidebar">
  <ul class="nav nav-sidebar">
    <li><?= $this->Form->postLink($this->Html->tag('span','&nbsp;',['class'=>'glyphicon glyphicon-trash','aria-hidden'=>'true']).__('Delete'),['action' => 'delete', $tarefa->id],['confirm' => __('Tem certeza que deseja excluir essa tarefa?'),'escape'=>false]) ?></li>
    <li><?= $this->Html->link($this->Html->tag('span','&nbsp;',['class'=>'glyphicon glyphicon-list','aria-hidden'=>'true']).__('List Tarefas'), ['action' => 'index'],['escape'=>false]) ?></li>
  </ul>
</div>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <?= $this->Flash->render() ?>
    <?= $this->Form->create($tarefa) ?>
    <fieldset>
        <legend><?= __('Edit Tarefa') ?></legend>
        <div class="form-group"><?= $this->Form->input('titulo',['label'=>__('Título'),'class'=>'form-control']) ?></div>
        <div class="form-group"><?= $this->Form->input('descricao',['label'=>__('Descrição'),'class'=>'form-control']) ?></div>
        <div class="form-group"><?= $this->Form->input('finalizada',['type'=>'checkbox']) ?></div>
    </fieldset>
    <?= $this->Form->button(__('Save'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
