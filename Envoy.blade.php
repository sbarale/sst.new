@servers(['web' => 'root@smartsavings.today','localhost' => '127.0.0.1'])

@setup
$project_name = 'Smart Savings Today';
$project_url = 'http://smartsavings.today/';
$project_root = '/storage/vol1/sites/apps/smartsavings.today/';

$slack_hook = 'https://hooks.slack.com/services/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';
$slack_channel = '#deploy_bot';
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
version
put_app_down
pull_latest_changes
install_dependencies
put_app_up
@endmacro

@after
@slack($slack_hook, $slack_channel, "Envoy task $task ran on <$project_url|[$project_name]>")
@endafter

@task('version', ['on' => 'localhost'])
echo "-CURRENT- branch pushed to live\n"

if [ `git status --porcelain |wc -l` -ne 0 ]
then
echo "\nUncommited changes exist.\nPlease commit first.\n";
exit 1
fi
bumpversion patch
REVISION=`git rev-parse HEAD`
echo ${REVISION:0:9} > REVISION
git add REVISION
npm run production
git add .
git ci -am"Updated Revision and packed js code"
git push

@endtask