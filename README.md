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
    git@gitlab.com:nikolay.r.borisov/webham.git:
        server_type: gitlab
        secret_token: fsdfsdf34234
        branch: refs/heads/master
        callbacks:
          -
            callback: \Webham\Devops\WebhookReceiverWorker\Plugin\PullPlugin::execute
            arguments: { branch: master, dir: '/etc/hosts' }
          -
            callback: \Webham\Devops\WebhookReceiverWorker\Plugin\PullPlugin::execute
            arguments: { branch: master, dir: '/etc/hosts' }
```
3. Use this file in the buildFromYml() method.


4. For local test:

```
php -S localhost:8000 -t web/
```
