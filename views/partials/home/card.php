<?php foreach ($cards as $card) : ?>
   <div class="col-xs-12 mb-3 mt-5 pt-5 col-md-4 col-sm-6">
      <div style="box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px; background-color: #072a4d; " class="card text-white">
         <div class="card-body">
            <h4 class="card-title"><?=$card['card_title']?></h4>
            <p class="card-text"><?=$card['card_desc']?></p>
            <a href="#" class="btn btn-sm btn-primary">view</a>
         </div>
      </div>
   </div>
<?php endforeach; ?>