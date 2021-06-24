<!--widget-latest-posts-->
<div class="widget ">
    <div class="section-title">
        <h5>Latest Posts</h5>
    </div>
    <ul class="widget-latest-posts">
    <?php
    $counter=1;
    foreach($latests as $key=> $latest):?>
        <li class="last-post">
            <div class="image">
            <?=@$this->Html->image($latest->image,[
                            "alt"=>"post cover",
                            'url'=>['controller'=>'Blog', 'action'=>'view',$latest->id]
                        ]) ?>
            </div>
            <div class="nb"><?= $counter++?></div>
            <div class="content">
                <p>
                <?= $this->Html->link($latest->title, ['controller'=>'Blog','action' => 'view', $latest->id]) ?>
                </p>
                <small>
                    <span class="icon_clock_alt"></span><?= h($latest->created) ?></small>
            </div>
        </li>
    <?php endforeach; ?>
    </ul>
</div>
<!--/-->
