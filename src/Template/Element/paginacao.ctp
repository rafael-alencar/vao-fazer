<nav aria-label="Page navigation">
    <div class="paginator" >
        <ul class="pagination">
            <?= $this->Paginator->first('<span class="glyphicon glyphicon-backward" aria-hidden="true"></span>',['escape'=>false]) ?>
            <?= $this->Paginator->prev('<span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span>',['escape'=>false]) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next('<span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>',['escape'=>false]) ?>
            <?= $this->Paginator->last('<span class="glyphicon glyphicon-forward" aria-hidden="true"></span>',['escape'=>false]) ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</nav>