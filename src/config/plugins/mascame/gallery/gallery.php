<?php

return array(
	'plugin' => 'Mascame\Artificer\Plugins\Gallery\GalleryPlugin',

	'routes' => function () {
		Route::get('plugin/{slug}/page/configuration', array('as' => 'artificer.plugin.gallery.configuration', 'uses' => '\Mascame\Artificer\Plugins\Gallery\GalleryController@configuration'));
	}
);