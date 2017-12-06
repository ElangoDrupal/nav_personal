<?php


function portfolio_zymphonies_theme_preprocess_page(&$vars) {
  // Remove 'Promoted to front page' nodes
		if (isset($vars['node']->type)) {
		// If the content type's machine name is "my_machine_name" the file
		// name will be "page--my-machine-name.tpl.php".
		$vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
  }
}


// function THEME_preprocess_page(&$vars, $hook) {

// }
// }


