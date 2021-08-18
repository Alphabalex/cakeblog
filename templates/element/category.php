<div class="widget">
    <div class="section-title">
    <h5>Categories</h5>
    </div>
    <ul class="widget-categories">
    <?php foreach($categories as $key=> $category):?>
    <?php if(!empty($category->posts)):?>
    <li>
        <a href="<?=$this->Url->build(['controller'=>'Blog', 'action'=>'category',$category->id])?>" class="categorie"><?= $category->title?></a>
        <span class="ml-auto"><?=count($category->posts).' Posts'?></span>
    </li>
    <?php endif; ?>
    <?php endforeach; ?>
    </ul>
</div>