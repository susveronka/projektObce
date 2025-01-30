<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Obce Zlínského kraje</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <?php $nav = array( 
      'class' => 'nav-link' ); 
    ?> 
    <?php foreach($kraj as $navitem):?> <link><?= anchor("popisObci/". $navitem->kod, $navitem->nazev, ['class' => 'btn btn-primary']); ?> </link>
    </ul>
    <?php endforeach; ?>
  </div>
 
  
</nav>