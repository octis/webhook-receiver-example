How to use this webhook receiver:
==============

Setup:
---------

1. Build the project.
```
composer install
```

2. Configure the *_repos_settings.yml file:
```
repos:
    -
      git_server_adapter: \Octis\Webhookreceiver\Plugin\GitServer\GitLabServerAdapter
      git_url: git@gitlab.com:nikolay.r.borisov/webham.git
      secret_token: ''
      actions:
          -
            trigger_branch: refs/heads/master
            callback: \Octis\Webhookreceiver\Plugin\Action\GitPull::execute
            arguments: { branch: master, dir: '/etc/hosts' }
          -
            trigger_branch: refs/heads/master
            callback: \Octis\Webhookreceiver\Plugin\GitPullPlugin::execute
            arguments: { branch: master, dir: '/etc/hosts' }
```
3. Use this file in the when instantiating the class.


4. For local test:

```
php -S localhost:8000 -t web/
```
