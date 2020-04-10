<!DOCTYPE html>
<html lang="fr_FR">
  <head>
      <meta charset="utf-8" />
        <!--      Fontawesome   -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
      <link rel="stylesheet" href="/css/style.css"/>
        <!--      Script du CDN TinyMCE-->
      <script src="https://cdn.tiny.cloud/1/hgsrcotr84d8b32tbwy0opsqe12o7cimt1j2ne74vioz1qhi/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
      <title>Mon blog d'auteur</title>
  </head>
  
  <body>
      <script src="/burgermenu.js"></script>

      <header>
          <h1 id="titre_accueil">Le blog de Jean Forteroche</h1>
          <div class="menu_entete">
              <ul class="list_menu_entete" id="liste_menu_entete_backend">
                  <li class="bouton_menu_backend"><i class="fas fa-book-open"></i></li>
                  <li class="bouton_menu_backend">Sommaire</li>
                  <li class="bouton_menu_backend">Déconnexion</li>
              </ul>
          </div>
          <div class="icone_burgermenu"><i class="fas fa-bars"></i></div>

      </header>

      <section class="corps_de_page">
          <h1>Ceci est le layout commun à toutes les pages du backend</h1>
          <h2>Ici se trouve le haut de page</h2>


          <?= $content ?>


          <h2>Ici se trouve le bas de page</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin et dolor ligula. Duis eget aliquet turpis. Sed non mattis odio. Sed quam lacus, porta vitae orci in, pellentesque luctus nibh. Vivamus lobortis nisi id eros vulputate semper. Duis vitae orci ut sapien tincidunt ultricies. Duis condimentum dui imperdiet, euismod enim pretium, pharetra orci. Cras porttitor massa non varius condimentum.

              Donec eu massa venenatis, iaculis turpis volutpat, sagittis magna. Ut sollicitudin ultricies ex non feugiat. Pellentesque fringilla odio ex, quis posuere odio facilisis eu. Cras sollicitudin orci odio, vel ornare nisi faucibus sit amet. Morbi nibh nisl, dignissim id posuere vitae, laoreet ut nisi. Morbi in scelerisque urna. Quisque in justo sagittis dui malesuada iaculis eu et leo. Sed elementum ex non urna tempor, ac hendrerit velit auctor. Sed id justo nibh. In purus ligula, malesuada bibendum dui commodo, posuere sollicitudin erat. Suspendisse rhoncus neque ullamcorper ligula porttitor, sed molestie tellus facilisis. Aliquam interdum tristique justo, sed finibus sapien vehicula ac. Cras eget tellus at risus ullamcorper facilisis. Proin vel viverra nulla. Curabitur nec vulputate massa. Nullam commodo sed turpis sed ornare.

              Sed eu tellus urna. Integer imperdiet porta condimentum. Nam tincidunt lorem vel arcu auctor, tempor accumsan eros facilisis. Vestibulum pellentesque leo ac augue viverra tincidunt. Nam quam lorem, elementum quis tellus at, tempor feugiat ligula. Donec condimentum enim vel pellentesque porttitor. In sed porttitor massa, sodales mollis nibh. Nunc aliquet fringilla neque vitae placerat. Suspendisse blandit risus sed orci euismod pellentesque.

              Maecenas ac libero quis magna dictum pulvinar eget ut massa. In placerat lectus vitae leo maximus luctus. Vestibulum aliquet suscipit cursus. Duis vel sem tincidunt, dignissim lacus eget, sollicitudin diam. Donec non porttitor risus. Integer mollis, nisi sed interdum euismod, felis lorem vulputate felis, vel commodo elit arcu at neque. Praesent quis malesuada augue, eu mattis nunc. Aenean et aliquam lorem. Donec eu justo nulla. Suspendisse potenti.

              In in massa in ex commodo consequat vel vitae quam. Proin ac massa felis. Proin pellentesque efficitur scelerisque. Aenean varius sagittis enim id ultricies. Duis id convallis orci. Sed bibendum nisl et leo egestas cursus. Aliquam sit amet ligula eu lorem tincidunt efficitur a eget nibh. Nunc quis accumsan sapien, et ultrices sapien.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin et dolor ligula. Duis eget aliquet turpis. Sed non mattis odio. Sed quam lacus, porta vitae orci in, pellentesque luctus nibh. Vivamus lobortis nisi id eros vulputate semper. Duis vitae orci ut sapien tincidunt ultricies. Duis condimentum dui imperdiet, euismod enim pretium, pharetra orci. Cras porttitor massa non varius condimentum.

              Donec eu massa venenatis, iaculis turpis volutpat, sagittis magna. Ut sollicitudin ultricies ex non feugiat. Pellentesque fringilla odio ex, quis posuere odio facilisis eu. Cras sollicitudin orci odio, vel ornare nisi faucibus sit amet. Morbi nibh nisl, dignissim id posuere vitae, laoreet ut nisi. Morbi in scelerisque urna. Quisque in justo sagittis dui malesuada iaculis eu et leo. Sed elementum ex non urna tempor, ac hendrerit velit auctor. Sed id justo nibh. In purus ligula, malesuada bibendum dui commodo, posuere sollicitudin erat. Suspendisse rhoncus neque ullamcorper ligula porttitor, sed molestie tellus facilisis. Aliquam interdum tristique justo, sed finibus sapien vehicula ac. Cras eget tellus at risus ullamcorper facilisis. Proin vel viverra nulla. Curabitur nec vulputate massa. Nullam commodo sed turpis sed ornare.

              Sed eu tellus urna. Integer imperdiet porta condimentum. Nam tincidunt lorem vel arcu auctor, tempor accumsan eros facilisis. Vestibulum pellentesque leo ac augue viverra tincidunt. Nam quam lorem, elementum quis tellus at, tempor feugiat ligula. Donec condimentum enim vel pellentesque porttitor. In sed porttitor massa, sodales mollis nibh. Nunc aliquet fringilla neque vitae placerat. Suspendisse blandit risus sed orci euismod pellentesque.

              Maecenas ac libero quis magna dictum pulvinar eget ut massa. In placerat lectus vitae leo maximus luctus. Vestibulum aliquet suscipit cursus. Duis vel sem tincidunt, dignissim lacus eget, sollicitudin diam. Donec non porttitor risus. Integer mollis, nisi sed interdum euismod, felis lorem vulputate felis, vel commodo elit arcu at neque. Praesent quis malesuada augue, eu mattis nunc. Aenean et aliquam lorem. Donec eu justo nulla. Suspendisse potenti.

              In in massa in ex commodo consequat vel vitae quam. Proin ac massa felis. Proin pellentesque efficitur scelerisque. Aenean varius sagittis enim id ultricies. Duis id convallis orci. Sed bibendum nisl et leo egestas cursus. Aliquam sit amet ligula eu lorem tincidunt efficitur a eget nibh. Nunc quis accumsan sapien, et ultrices sapien.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin et dolor ligula. Duis eget aliquet turpis. Sed non mattis odio. Sed quam lacus, porta vitae orci in, pellentesque luctus nibh. Vivamus lobortis nisi id eros vulputate semper. Duis vitae orci ut sapien tincidunt ultricies. Duis condimentum dui imperdiet, euismod enim pretium, pharetra orci. Cras porttitor massa non varius condimentum.

              Donec eu massa venenatis, iaculis turpis volutpat, sagittis magna. Ut sollicitudin ultricies ex non feugiat. Pellentesque fringilla odio ex, quis posuere odio facilisis eu. Cras sollicitudin orci odio, vel ornare nisi faucibus sit amet. Morbi nibh nisl, dignissim id posuere vitae, laoreet ut nisi. Morbi in scelerisque urna. Quisque in justo sagittis dui malesuada iaculis eu et leo. Sed elementum ex non urna tempor, ac hendrerit velit auctor. Sed id justo nibh. In purus ligula, malesuada bibendum dui commodo, posuere sollicitudin erat. Suspendisse rhoncus neque ullamcorper ligula porttitor, sed molestie tellus facilisis. Aliquam interdum tristique justo, sed finibus sapien vehicula ac. Cras eget tellus at risus ullamcorper facilisis. Proin vel viverra nulla. Curabitur nec vulputate massa. Nullam commodo sed turpis sed ornare.

              Sed eu tellus urna. Integer imperdiet porta condimentum. Nam tincidunt lorem vel arcu auctor, tempor accumsan eros facilisis. Vestibulum pellentesque leo ac augue viverra tincidunt. Nam quam lorem, elementum quis tellus at, tempor feugiat ligula. Donec condimentum enim vel pellentesque porttitor. In sed porttitor massa, sodales mollis nibh. Nunc aliquet fringilla neque vitae placerat. Suspendisse blandit risus sed orci euismod pellentesque.

              Maecenas ac libero quis magna dictum pulvinar eget ut massa. In placerat lectus vitae leo maximus luctus. Vestibulum aliquet suscipit cursus. Duis vel sem tincidunt, dignissim lacus eget, sollicitudin diam. Donec non porttitor risus. Integer mollis, nisi sed interdum euismod, felis lorem vulputate felis, vel commodo elit arcu at neque. Praesent quis malesuada augue, eu mattis nunc. Aenean et aliquam lorem. Donec eu justo nulla. Suspendisse potenti.

              In in massa in ex commodo consequat vel vitae quam. Proin ac massa felis. Proin pellentesque efficitur scelerisque. Aenean varius sagittis enim id ultricies. Duis id convallis orci. Sed bibendum nisl et leo egestas cursus. Aliquam sit amet ligula eu lorem tincidunt efficitur a eget nibh. Nunc quis accumsan sapien, et ultrices sapien.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin et dolor ligula. Duis eget aliquet turpis. Sed non mattis odio. Sed quam lacus, porta vitae orci in, pellentesque luctus nibh. Vivamus lobortis nisi id eros vulputate semper. Duis vitae orci ut sapien tincidunt ultricies. Duis condimentum dui imperdiet, euismod enim pretium, pharetra orci. Cras porttitor massa non varius condimentum.

              Donec eu massa venenatis, iaculis turpis volutpat, sagittis magna. Ut sollicitudin ultricies ex non feugiat. Pellentesque fringilla odio ex, quis posuere odio facilisis eu. Cras sollicitudin orci odio, vel ornare nisi faucibus sit amet. Morbi nibh nisl, dignissim id posuere vitae, laoreet ut nisi. Morbi in scelerisque urna. Quisque in justo sagittis dui malesuada iaculis eu et leo. Sed elementum ex non urna tempor, ac hendrerit velit auctor. Sed id justo nibh. In purus ligula, malesuada bibendum dui commodo, posuere sollicitudin erat. Suspendisse rhoncus neque ullamcorper ligula porttitor, sed molestie tellus facilisis. Aliquam interdum tristique justo, sed finibus sapien vehicula ac. Cras eget tellus at risus ullamcorper facilisis. Proin vel viverra nulla. Curabitur nec vulputate massa. Nullam commodo sed turpis sed ornare.

              Sed eu tellus urna. Integer imperdiet porta condimentum. Nam tincidunt lorem vel arcu auctor, tempor accumsan eros facilisis. Vestibulum pellentesque leo ac augue viverra tincidunt. Nam quam lorem, elementum quis tellus at, tempor feugiat ligula. Donec condimentum enim vel pellentesque porttitor. In sed porttitor massa, sodales mollis nibh. Nunc aliquet fringilla neque vitae placerat. Suspendisse blandit risus sed orci euismod pellentesque.

              Maecenas ac libero quis magna dictum pulvinar eget ut massa. In placerat lectus vitae leo maximus luctus. Vestibulum aliquet suscipit cursus. Duis vel sem tincidunt, dignissim lacus eget, sollicitudin diam. Donec non porttitor risus. Integer mollis, nisi sed interdum euismod, felis lorem vulputate felis, vel commodo elit arcu at neque. Praesent quis malesuada augue, eu mattis nunc. Aenean et aliquam lorem. Donec eu justo nulla. Suspendisse potenti.

              In in massa in ex commodo consequat vel vitae quam. Proin ac massa felis. Proin pellentesque efficitur scelerisque. Aenean varius sagittis enim id ultricies. Duis id convallis orci. Sed bibendum nisl et leo egestas cursus. Aliquam sit amet ligula eu lorem tincidunt efficitur a eget nibh. Nunc quis accumsan sapien, et ultrices sapien.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin et dolor ligula. Duis eget aliquet turpis. Sed non mattis odio. Sed quam lacus, porta vitae orci in, pellentesque luctus nibh. Vivamus lobortis nisi id eros vulputate semper. Duis vitae orci ut sapien tincidunt ultricies. Duis condimentum dui imperdiet, euismod enim pretium, pharetra orci. Cras porttitor massa non varius condimentum.

              Donec eu massa venenatis, iaculis turpis volutpat, sagittis magna. Ut sollicitudin ultricies ex non feugiat. Pellentesque fringilla odio ex, quis posuere odio facilisis eu. Cras sollicitudin orci odio, vel ornare nisi faucibus sit amet. Morbi nibh nisl, dignissim id posuere vitae, laoreet ut nisi. Morbi in scelerisque urna. Quisque in justo sagittis dui malesuada iaculis eu et leo. Sed elementum ex non urna tempor, ac hendrerit velit auctor. Sed id justo nibh. In purus ligula, malesuada bibendum dui commodo, posuere sollicitudin erat. Suspendisse rhoncus neque ullamcorper ligula porttitor, sed molestie tellus facilisis. Aliquam interdum tristique justo, sed finibus sapien vehicula ac. Cras eget tellus at risus ullamcorper facilisis. Proin vel viverra nulla. Curabitur nec vulputate massa. Nullam commodo sed turpis sed ornare.

              Sed eu tellus urna. Integer imperdiet porta condimentum. Nam tincidunt lorem vel arcu auctor, tempor accumsan eros facilisis. Vestibulum pellentesque leo ac augue viverra tincidunt. Nam quam lorem, elementum quis tellus at, tempor feugiat ligula. Donec condimentum enim vel pellentesque porttitor. In sed porttitor massa, sodales mollis nibh. Nunc aliquet fringilla neque vitae placerat. Suspendisse blandit risus sed orci euismod pellentesque.

              Maecenas ac libero quis magna dictum pulvinar eget ut massa. In placerat lectus vitae leo maximus luctus. Vestibulum aliquet suscipit cursus. Duis vel sem tincidunt, dignissim lacus eget, sollicitudin diam. Donec non porttitor risus. Integer mollis, nisi sed interdum euismod, felis lorem vulputate felis, vel commodo elit arcu at neque. Praesent quis malesuada augue, eu mattis nunc. Aenean et aliquam lorem. Donec eu justo nulla. Suspendisse potenti.

              In in massa in ex commodo consequat vel vitae quam. Proin ac massa felis. Proin pellentesque efficitur scelerisque. Aenean varius sagittis enim id ultricies. Duis id convallis orci. Sed bibendum nisl et leo egestas cursus. Aliquam sit amet ligula eu lorem tincidunt efficitur a eget nibh. Nunc quis accumsan sapien, et ultrices sapien.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin et dolor ligula. Duis eget aliquet turpis. Sed non mattis odio. Sed quam lacus, porta vitae orci in, pellentesque luctus nibh. Vivamus lobortis nisi id eros vulputate semper. Duis vitae orci ut sapien tincidunt ultricies. Duis condimentum dui imperdiet, euismod enim pretium, pharetra orci. Cras porttitor massa non varius condimentum.

              Donec eu massa venenatis, iaculis turpis volutpat, sagittis magna. Ut sollicitudin ultricies ex non feugiat. Pellentesque fringilla odio ex, quis posuere odio facilisis eu. Cras sollicitudin orci odio, vel ornare nisi faucibus sit amet. Morbi nibh nisl, dignissim id posuere vitae, laoreet ut nisi. Morbi in scelerisque urna. Quisque in justo sagittis dui malesuada iaculis eu et leo. Sed elementum ex non urna tempor, ac hendrerit velit auctor. Sed id justo nibh. In purus ligula, malesuada bibendum dui commodo, posuere sollicitudin erat. Suspendisse rhoncus neque ullamcorper ligula porttitor, sed molestie tellus facilisis. Aliquam interdum tristique justo, sed finibus sapien vehicula ac. Cras eget tellus at risus ullamcorper facilisis. Proin vel viverra nulla. Curabitur nec vulputate massa. Nullam commodo sed turpis sed ornare.

              Sed eu tellus urna. Integer imperdiet porta condimentum. Nam tincidunt lorem vel arcu auctor, tempor accumsan eros facilisis. Vestibulum pellentesque leo ac augue viverra tincidunt. Nam quam lorem, elementum quis tellus at, tempor feugiat ligula. Donec condimentum enim vel pellentesque porttitor. In sed porttitor massa, sodales mollis nibh. Nunc aliquet fringilla neque vitae placerat. Suspendisse blandit risus sed orci euismod pellentesque.

              Maecenas ac libero quis magna dictum pulvinar eget ut massa. In placerat lectus vitae leo maximus luctus. Vestibulum aliquet suscipit cursus. Duis vel sem tincidunt, dignissim lacus eget, sollicitudin diam. Donec non porttitor risus. Integer mollis, nisi sed interdum euismod, felis lorem vulputate felis, vel commodo elit arcu at neque. Praesent quis malesuada augue, eu mattis nunc. Aenean et aliquam lorem. Donec eu justo nulla. Suspendisse potenti.

              In in massa in ex commodo consequat vel vitae quam. Proin ac massa felis. Proin pellentesque efficitur scelerisque. Aenean varius sagittis enim id ultricies. Duis id convallis orci. Sed bibendum nisl et leo egestas cursus. Aliquam sit amet ligula eu lorem tincidunt efficitur a eget nibh. Nunc quis accumsan sapien, et ultrices sapien.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin et dolor ligula. Duis eget aliquet turpis. Sed non mattis odio. Sed quam lacus, porta vitae orci in, pellentesque luctus nibh. Vivamus lobortis nisi id eros vulputate semper. Duis vitae orci ut sapien tincidunt ultricies. Duis condimentum dui imperdiet, euismod enim pretium, pharetra orci. Cras porttitor massa non varius condimentum.

              Donec eu massa venenatis, iaculis turpis volutpat, sagittis magna. Ut sollicitudin ultricies ex non feugiat. Pellentesque fringilla odio ex, quis posuere odio facilisis eu. Cras sollicitudin orci odio, vel ornare nisi faucibus sit amet. Morbi nibh nisl, dignissim id posuere vitae, laoreet ut nisi. Morbi in scelerisque urna. Quisque in justo sagittis dui malesuada iaculis eu et leo. Sed elementum ex non urna tempor, ac hendrerit velit auctor. Sed id justo nibh. In purus ligula, malesuada bibendum dui commodo, posuere sollicitudin erat. Suspendisse rhoncus neque ullamcorper ligula porttitor, sed molestie tellus facilisis. Aliquam interdum tristique justo, sed finibus sapien vehicula ac. Cras eget tellus at risus ullamcorper facilisis. Proin vel viverra nulla. Curabitur nec vulputate massa. Nullam commodo sed turpis sed ornare.

              Sed eu tellus urna. Integer imperdiet porta condimentum. Nam tincidunt lorem vel arcu auctor, tempor accumsan eros facilisis. Vestibulum pellentesque leo ac augue viverra tincidunt. Nam quam lorem, elementum quis tellus at, tempor feugiat ligula. Donec condimentum enim vel pellentesque porttitor. In sed porttitor massa, sodales mollis nibh. Nunc aliquet fringilla neque vitae placerat. Suspendisse blandit risus sed orci euismod pellentesque.

              Maecenas ac libero quis magna dictum pulvinar eget ut massa. In placerat lectus vitae leo maximus luctus. Vestibulum aliquet suscipit cursus. Duis vel sem tincidunt, dignissim lacus eget, sollicitudin diam. Donec non porttitor risus. Integer mollis, nisi sed interdum euismod, felis lorem vulputate felis, vel commodo elit arcu at neque. Praesent quis malesuada augue, eu mattis nunc. Aenean et aliquam lorem. Donec eu justo nulla. Suspendisse potenti.

              In in massa in ex commodo consequat vel vitae quam. Proin ac massa felis. Proin pellentesque efficitur scelerisque. Aenean varius sagittis enim id ultricies. Duis id convallis orci. Sed bibendum nisl et leo egestas cursus. Aliquam sit amet ligula eu lorem tincidunt efficitur a eget nibh. Nunc quis accumsan sapien, et ultrices sapien.</p>
      </section>

      <footer>
          <div class="copyright"><i class="far fa-copyright"></i>Jean Forteroche</div>
      </footer>
  </body>
</html>

