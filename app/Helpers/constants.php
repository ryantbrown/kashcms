<?php

// Config items
defined('KASH_URI') or define('KASH_URI', app('config')->get('kash.uri'));
defined('KASH_PREFIX') or define('KASH_PREFIX', app('config')->get('kash.prefix'));

// App namespaces
defined('KASH_PROVIDERS') or define('KASH_PROVIDERS', 'Kash\Providers\Admin');
defined('KASH_HELPERS') or define('KASH_HELPERS', 'Kash\Helpers');
defined('KASH_HANDLERS') or define('KASH_HANDLERS', 'Kash\Handlers');
defined('KASH_EXCEPTIONS') or define('KASH_EXCEPTIONS', 'Kash\Exceptions');

// Http namespaces
defined('KASH_CONTROLLERS') or define('KASH_CONTROLLERS', 'Kash\Http\Controllers\Admin');
defined('KASH_MIDDLEWARE') or define('KASH_MIDDLEWARE', 'Kash\Http\Middlware');
defined('KASH_REQUESTS') or define('KASH_REQUESTS', 'Kash\Http\Requests\Admin');
defined('KASH_ROUTES') or define('KASH_ROUTES', 'Kash\Http\Routes\Admin');

// Data namespaces
defined('KASH_MODELS') or define('KASH_MODELS', 'Kash\Models\Admin');
defined('KASH_REPOSITORIES') or define('KASH_REPOSITORIES', 'Kash\Repositories\Admin');

// Resource items
defined('VIEWS') or define('VIEWS', 'admin');
defined('ASSETS') or define('ASSETS', '/assets/admin/');
