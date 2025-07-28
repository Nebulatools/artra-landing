<?php
function configureRoutes($router) {
    $router->add('/', ['controller' => 'Controller', 'action' => 'index']);
    $router->add('/home', ['controller' => 'Controller', 'action' => 'home']);
    $router->add('/artworks', ['controller' => 'Controller', 'action' => 'artworks']);
    $router->add('/artists', ['controller' => 'Controller', 'action' => 'artists']);
    $router->add('/how-we-do-it', ['controller' => 'Controller', 'action' => 'hwdi']);
    $router->add('/catalogue', ['controller' => 'Controller', 'action' => 'catalogue']);
    $router->add('/frames', ['controller' => 'Controller', 'action' => 'frames']);
    $router->add('/gallery', ['controller' => 'Controller', 'action' => 'gallery']);
    
    $router->add('/blog', ['controller' => 'Controller', 'action' => 'blog']);
    $router->add('/blog/{slug}', ['controller' => 'Controller', 'action' => 'blog']);
}
?>