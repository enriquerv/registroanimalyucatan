<?php

$word_title = 'Mascota';
$word_text = 'mascota';

return [
    // Title
    'module_title_s'        => $word_title,
    'module_title'          => $word_title.'s',

	// Tabs
	'tabs'              => [
        'general'      	    => 'General',
    ],

    // CRUD
    'crud'              => [
        'create'            => [
            'success'           => $word_title.' registrada con éxito',
            'error'             => 'Error al registrar la '.$word_text,
        ],
        'update'            => [
            'success'           => $word_title.' actualizada con éxito',
            'error'             => 'Error al actualizar la '.$word_text,
        ],
        'delete'            => [
            'success'           => $word_title.' eliminada con éxito',
            'error'             => 'Error al eliminar la '.$word_text,
        ],
        'restore'           => [
            'success'           => $word_title.' restaurada con éxito',
            'error'             => 'Error al restaurar la '.$word_text,
        ]
    ],
];
