<?php

/**
 * Simple array caching in PHP
 * @author Gonzalo Chacaltana <gchacaltanab@outlook.com>
 */
// Array to decode
$array = array('Blogs' => array(
        'programming' => array(
            'nettust' => array(
                'url' => 'http://net.tutsplus.com/',
                'title' => 'Web development tutorials, from beginner to advanced | Nettuts+',
                'description' => 'Nettuts+ is a blog and community for Web Development tutorials. Learn php, JavaScript, WordPress, HTML5, CSS, Ruby and much more.'
            ),
            'davss' => array(
                'url' => 'http://davss.com/',
                'title' => 'Web development, enterprise systems integration, APIs | David Sadowski',
                'description' => 'A creative and approachable web developer with over 10 years of hands-on experience and a keen interest in application design, back-end development as well as project management. I am confident with diverse modern technologies constantly looking for opportunities to progress &hellip; Continue reading &rarr;'
            ),
            'solocodigoweb' => array(
                'url' => 'http://www.solocodigoweb.com/',
                'title' => 'Solo Código Web - blog de programación web',
                'description' => 'SoloCodigoWeb.com, es un blog de programación web, donde encontrarás artículos sobre python, php, mysql, django, javascript, ruby y todo lo relacionado al desarrollo web'
            ),
            'desarrolloweb' => array(
                'title' => 'Desarrollo Web, Tu mejor ayuda para aprender a hacer webs.',
                'url' => 'http://www.desarrolloweb.com/',
                'description' => 'Todo lo que pueden necesitar los programadores y diseñadores web para aprender o profundizar en el desarrollo de webs. Manuales, buscador de recursos, ayudas, programas... Cientos de páginas para webmasters y diseñadores web.'
            )
        )
    )
);
// Save array as json file
file_put_contents('blogs-cached.json', json_encode($array));
// Retrieve json and decode to array
$blogCached = json_decode(file_get_contents('blogs-cached.json'), true);
print_r($blogCached);
?>
