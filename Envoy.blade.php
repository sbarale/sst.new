@servers(['web' => 'root@smartsavings.today'])

@task('deploy')
cd /storage/vol1/sites/smartsavings.today/
git pull origin master
@endtask

@finished
@slack('https://hooks.slack.com/services/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', '#general','New deployment done!')
@endfinished
