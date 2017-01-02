<?php
// Routes

$app->get('/[{name}]', function ($request, $response, $args) {
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/page/{page:[12]}', function (\Slim\Http\Request $request, \Slim\Http\Response $response, $args) {

    $args['content'] = $request->getAttribute('page') == 2 ?
        "Fusce volutpat odio id vestibulum egestas. Mauris et ultricies purus, sed facilisis felis. Duis convallis sodales mattis. Proin blandit ullamcorper euismod. In euismod urna purus, id aliquet lectus lobortis condimentum. Nunc luctus lacus et ligula viverra, in volutpat ante vestibulum. Nulla facilisis ornare ligula eget semper. Integer in felis ac turpis egestas tristique. Nam in nibh rhoncus, condimentum justo eu, finibus ex. Cras consequat sem at odio dictum tincidunt. Donec arcu nisl, hendrerit eget luctus in, pharetra ut nisi. Pellentesque lobortis magna est, vitae hendrerit ex eleifend et. Aliquam mattis vehicula bibendum." :
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis quam tortor, at ullamcorper ipsum ultrices a. Aenean blandit ex vel est pretium auctor. Sed ut tortor sed dolor rutrum venenatis sed id lectus. Sed nec lectus gravida, tempor odio id, imperdiet urna. Curabitur congue suscipit auctor. Cras iaculis odio arcu, nec efficitur augue fringilla nec. Vestibulum laoreet tincidunt nibh, nec pulvinar urna pellentesque sit amet. Curabitur auctor massa eget mi imperdiet porta. Quisque malesuada quis velit vitae maximus. Proin diam ante, facilisis eu lacus ut, venenatis lobortis nisl. Vivamus vitae sagittis ipsum, nec efficitur ipsum. Mauris sed velit leo. Vestibulum magna ipsum, sollicitudin id mi non, fermentum dignissim felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nunc nisl, gravida in semper eu, vehicula et augue.";

//    if ($this->request->hasHeader('X-PJAX')) {
//        return $response->write($args['content']);
//    }

    return $this->renderer->render($response, 'page.phtml', $args);
});
