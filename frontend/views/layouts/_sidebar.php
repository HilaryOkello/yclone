<?php use yii\bootstrap4\Nav;

 ?>

<aside class="shadow">
	<?php echo Nav::widget([
    'options' => [
        'class' => 'd-flex flex-column nav-pills'
    ],
    'items' => [
        [
            'label' => 'Home',
            'url' => ['/video/index']
        ],
        [
            'label' => 'History',
            'url' => ['/video/history']
        ]
                    
        
    ]
]) ?>
</aside>


<!--  <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active">
    Cras justo odio
  </a>
  <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
  <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
  <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a>
</div> -->