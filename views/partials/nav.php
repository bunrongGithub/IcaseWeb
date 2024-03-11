<nav class=" mb-5 navbar navbar-expand-lg">
   <a class="navbar-brand text-logo" href="/">
      icase
   </a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
         <a class=" <?php if (urlIs('/')) echo 'actives' ?> nav-item nav-link  " href="/">Home<span class="sr-only"></span></a>
         <a class="  <?php if (urlIs('/services')) echo 'actives' ?> nav-item nav-link" href="/services">Services</a>
         <a class=" <?php if(urlIs('/pricing')) echo 'actives' ?> nav-item nav-link" href="/pricing">Pricing</a>
         <a class=" <?php if(urlIs('/about')) echo 'actives' ?> nav-item nav-link" href="/about">About</a>
      </div>
   </div>
</nav>