@servers(['web' => 'root@smartsavings.today'])

@setup
$project_name = 'Smart Savings Today';
$project_url = 'http://smartsavings.today/';
$project_root = '/storage/vol1/sites/smartsavings.today/';

$slack_hook = 'https://hooks.slack.com/services/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';
$slack_channel = '#general';
@endsetup

@task('put_app_up', ['on' => 'web'])
cd {{ $project_root }}

php artisan up
@endtask

@task('put_app_down', ['on' => 'web'])
cd {{ $project_root }}

php artisan down
@endtask

@task('pull_latest_changes', ['on' => 'web'])
cd {{ $project_root }}

git pull origin
@endtask

@task('install_dependencies', ['on' => 'web'])
cd {{ $project_root }}

composer install  --prefer-source --no-interaction --no-dev
@endtask

@task('clear_cache', ['on' => 'web'])
cd {{ $project_root }}

php artisan cache:clear
@endtask

@macro('update')
put_app_down
pull_latest_changes
install_dependencies
put_app_up
@endmacro

@after
@slack($slack_hook, $slack_channel, "Envoy task $task ran on <$project_url|[$project_name]>")
@endafter

