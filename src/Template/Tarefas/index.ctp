<div class="col-sm-3 col-md-2 sidebar">
  <ul class="nav nav-sidebar">
    <li><?= $this->Html->link($this->Html->tag('span','&nbsp;',['class'=>'glyphicon glyphicon-pushpin','aria-hidden'=>'true']).__('New Tarefa'), ['action' => 'add'],['escape'=>false]) ?></li>
  </ul>
</div>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <?= $this->Flash->render() ?>
  <h1 class="page-header"><?= __('Tarefas') ?></h1>

  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('titulo',__('Tarefa')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('finalizada',__('Status')) ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tarefas as $tarefa): ?>
            <tr>
                <td><?= $this->Html->link(h($tarefa->titulo), ['action' => 'view', $tarefa->id]) ?></td>
                <td>
                    <?php if (!$tarefa->finalizada): ?>
                        <span class="label label-default"><?= __('To-do') ?></span>
                    <?php else: ?>
                        <span class="label label-success"><?= __('Finalizada') ?></span>
                    <?php endif; ?>
                </td>
                <td class="actions">
                    <?= $this->Html->link(
                        $this->Html->tag('span',null,['class'=>'glyphicon glyphicon-edit','aria-hidden'=>'true']),
                        ['action' => 'edit', $tarefa->id],
                        ['escape'=>false,'title'=>__('Edit'),'data-toggle'=>'tooltip','data-placement'=>'top']
                    ) ?>
                    <?= $this->Form->postLink(
                        $this->Html->tag('span',null,['class'=>'glyphicon glyphicon-trash','aria-hidden'=>'true']),
                        ['action' => 'delete', $tarefa->id],
                        ['confirm' => __('Tem certeza que deseja excluir essa tarefa?'),'escape'=>false,'title'=>__('Delete'),'data-toggle'=>'tooltip','data-placement'=>'top']
                    ) ?>
                    <?php if (!$tarefa->finalizada): ?>
                        <?= $this->Form->postLink(
                            $this->Html->tag('span',null,['class'=>'glyphicon glyphicon-ok','aria-hidden'=>'true']),
                            ['action' => 'finalizar', $tarefa->id],
                            ['confirm' => __('Tem certeza que deseja marcar essa tarefa como finalizada?'),'escape'=>false,'title'=>__('Marcar como finalizada'),'data-toggle'=>'tooltip','data-placement'=>'top']
                        )?>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $this->element('paginacao'); ?>
  </div>
</div>