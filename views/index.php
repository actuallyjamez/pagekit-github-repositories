<div class="uk-width-medium-3-4 uk-container-center">
    <h3 class="uk-h2 uk-text-center"><?= $config['pageheadder'] ?></h3>
    <h4 class="uk-width-medium-4-6 uk-container-center uk-text-center"><?= $config['subtext'] ?></h4>
</div>

<br>
<?php
  $api = 'https://api.github.com/users/' . $config['ghusername'] . '/repos';
  $curl_token_auth = 'Authorization: token ' . $config['ghauthtoken'];
  $ch = curl_init($api);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('User-Agent: Awesome-Octocat-App', $curl_token_auth));
  $output = curl_exec($ch);
  curl_close($ch);
  $output = json_decode($output);
  ?>
<div class="uk-child-width-1-2@s uk-grid-match" uk-grid>
<?php
 foreach ($output as $repo): ?>
    <a href=<?= $repo->html_url ?> target=_blank style="text-decoration: none;">
        <div class="uk-card uk-card-default uk-card-hover uk-card-body">
            <h3 class="uk-card-title"> <?= $repo->name ?></h3>
            <p><?= $repo->description ?></p>
        </div>
    </a>
<?php endforeach;?>
</div>
