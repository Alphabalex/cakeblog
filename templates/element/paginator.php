<?php
$paginator=$this->Paginator->setTemplates([
    'number'=>'<li><a href="{{url}}">{{text}}</a></li>',
    'current'=>'<li class="active"><a href="{{url}}">{{text}}</a></li>',
    'first'=>'<li><a href="{{url}}"><i class="arrow_carrot-2left"></i></a></li>',
    'last'=>'<li><a href="{{url}}"><i class="arrow_carrot-2right"></i></a></li>',
    'prevActive'=>'<li><a href="{{url}}"><i class="arrow_carrot-left"></i></a></li>',
    'nextActive'=>'<li><a href="{{url}}"><i class="arrow_carrot-right"></i></a></li>'
]);
?>
<!--pagination-->
<div class="col-lg-12">
    <div class="pagination mt--10">
        <ul class="list-inline">
            <?php
            echo $paginator->first();
            if($paginator->hasPrev()){
                echo $paginator->prev();
            }
            echo $paginator->numbers();
            if($paginator->hasNext()){
                echo $paginator->next();
            }
            echo $paginator->last();
            ?>
        </ul>
    </div>
    <p class="text-center"><?= $paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} post(s) out of {{count}} total')) ?></p>
    <!--/-->
</div>