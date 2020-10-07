<?php

$categories = [
    [
        'id' => 1,
        'name' => 'News',
        'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc non blandit massa enim nec dui nunc mattis enim. Sapien faucibus et molestie ac feugiat sed lectus vestibulum mattis. Tellus in hac habitasse platea dictumst vestibulum rhoncus est pellentesque. Quis vel eros donec ac odio tempor. Aliquet sagittis id consectetur purus. Et tortor at risus viverra. Nunc non blandit massa enim nec. Blandit libero volutpat sed cras ornare arcu dui vivamus. Arcu odio ut sem nulla. Rhoncus dolor purus non enim praesent elementum facilisis leo vel. Ornare arcu dui vivamus arcu felis bibendum ut tristique et. Vel fringilla est ullamcorper eget nulla. Turpis tincidunt id aliquet risus feugiat in ante. Id aliquet lectus proin nibh nisl condimentum id venenatis a. Nibh ipsum consequat nisl vel pretium. Cras fermentum odio eu feugiat pretium. Morbi tempus iaculis urna id volutpat lacus laoreet.</p>',
    ],

    [
        'id' => 2,
        'name' => 'Sports',
        'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eget egestas purus viverra accumsan. Sed viverra ipsum nunc aliquet bibendum enim facilisis. Magna eget est lorem ipsum. Mi ipsum faucibus vitae aliquet. Consequat id porta nibh venenatis cras sed felis eget. Lacinia at quis risus sed vulputate. Urna neque viverra justo nec. Elementum nisi quis eleifend quam adipiscing. Dolor purus non enim praesent. Ut consequat semper viverra nam.</p>',
    ],

    [
        'id' => 3,
        'name' => 'Culture',
        'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque. Ipsum consequat nisl vel pretium lectus quam id leo. Nisl tincidunt eget nullam non nisi. Arcu cursus euismod quis viverra nibh cras pulvinar. Sit amet commodo nulla facilisi nullam. Condimentum id venenatis a condimentum vitae sapien pellentesque habitant morbi. Ridiculus mus mauris vitae ultricies leo integer malesuada nunc vel. Ut etiam sit amet nisl purus in mollis. Posuere morbi leo urna molestie at. Bibendum at varius vel pharetra. Tellus integer feugiat scelerisque varius morbi enim nunc. Mi ipsum faucibus vitae aliquet nec ullamcorper. Mattis nunc sed blandit libero volutpat sed cras. Dui sapien eget mi proin sed libero enim sed faucibus. Cursus risus at ultrices mi tempus imperdiet nulla. Suspendisse ultrices gravida dictum fusce ut placerat orci nulla pellentesque. Vitae suscipit tellus mauris a diam maecenas sed enim ut. Volutpat commodo sed egestas egestas. Ac turpis egestas sed tempus urna.</p>',
    ],
];

function findCategoryById(int $id): array {
    global $categories;
    foreach ($categories as $category) {
        if ($category['id'] === $id) {
            return $category;
        }
    }
    throw new Error('Category #' . $id . ' could not be found.');
}
