<p class="instruction"><?php echo __('Give this link to the person you want to share this file with') ?></p>
<p id="share-link"><a href="<?php echo isset($downloadUrl) ? $downloadUrl . '"><br><big><big>' . $downloadUrl . '</big></big><br><br>' : '">' ?></a></p>
                      <p class="instruction"><?php echo __('or share using:') ?></p>
<ul id="share-destinations">
    <?php if (in_array('email', $sharing_destinations)): ?>
        <li class="email"   ><a href="<?php echo isset($downloadUrl) ? $downloadUrl . '/email' : '' ?>" data-url="%url%/email"><?php echo __('your email') ?></a></li>
    <?php endif; ?>
    <?php if (in_array('facebook', $sharing_destinations)): ?>
        <li class="facebook"><a href="" target="_blank" data-url="http://www.facebook.com/sharer.php?u=%url%&t=%filename%"><?php echo __('Facebook') ?></a></li>
    <?php endif; ?>
    <?php if (in_array('twitter', $sharing_destinations)): ?>
        <script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
        <div>
            <a href="http://twitter.com/share" class="twitter-share-button"
               data-url="<?php echo $downloadUrl; ?>"
               data-text="<?php echo $filename; ?>"
               data-related="twitter,twitfond"
               data-count="vertical"
               data-lang="fr">Tweeter</a>
        </div>
        <!--<li class="twitter" ><a href="" target="_blank" data-url="http://twitter.com/home?status=%filename% %url%"><?php echo __('Twitter') ?></a></li>-->
    <?php endif; ?>
</ul>
<div class="cleartboth"></div>
