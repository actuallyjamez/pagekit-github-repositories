<?php
namespace Pagekit\Repo\Controller;
use Pagekit\Application as App;

class RepoController
{
    public function indexAction()
    {
      $module = App::module('github-user-repos');
      $config = $module->config;
      return [
        '$view' => [
          'title' => 'Repositories',
          'name' => 'repo:/views/index.php'
        ],
        'message' => 'github Repositories','config' => $config['ghconfig'],
      ];
    }


   /**
   * @Access(admin=true)
   */
    public function settingsAction()
    {
      $module = App::module('github-user-repos');
      $config = $module->config;
      return [
        '$view' => [
          'title' => 'GitHub Repositories',
          'name' => 'repo:/views/admin/index.php'
        ],
        '$data' => $config,
        'message' => 'github Repositories',
        'ghusername' => $config['ghusername'],
        'ghauthtoken' => $config['ghauthtoken']
      ];
    }

    /**
    * @Access(admin=true)
    * @Request({"ghconfig": "array"}, csrf=true)
    */
    public function saveAction($ghconfig)
    {
      App::config('github-user-repos')->set('ghconfig', $ghconfig);

      return ['success' => true];
    }
}
