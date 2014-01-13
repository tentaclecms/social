<?
/**
name: Social Media
url: http://adampatterson.ca/
version: 1.0
description: Social sharing
author:
   name: Adam Patterson
   url: http://adampatterson.ca/
*/

event::on('theme_content', 'social::show');
event::on('plugin_navigation', 'social::settings_nav', 8);

class social {

    static function settings_nav() {
        $nav[] = array(
            'title'     => 'Social Sharing',
            'rout'      => 'social_settings',
            'uri'       => 'social/view'
        );

        return $nav;
    }

    static function show()
    {
        if ( IS_POST ): ?>

        <div class="bottomcontainerBox">

            <? if ( get::option('social_facebook') != ''): ?>
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=109400307719";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script>

                <div style="float:left; width:85px;padding-right:10px; margin:4px 4px 4px 4px;height:30px;">
                    <div class="fb-like" data-href="<?=HISTORY ?>" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false"></div>
                </div>
            <? endif; ?>
            <? if ( get::option('social_google') != ''): ?>
            <script type='text/javascript' src='http://apis.google.com/js/plusone.js?ver=3.5'></script>
            <div style="float:left; width:85px;padding-right:10px; margin:4px 4px 4px 4px;height:30px;">
                <g:plusone size="medium" href="<?= HISTORY ?>"></g:plusone>
            </div>
            <? endif; ?>

            <? if ( get::option('social_twitter') != ''): ?>
                <script type='text/javascript' src='http://platform.twitter.com/widgets.js?ver=3.5'></script>
                <div style="float:left; width:85px;padding-right:10px; margin:4px 4px 4px 4px;height:30px;">
                    <!-- <a href="http://twitter.com/share" class="twitter-share-button" data-url="--><?//= HISTORY ?><!--"  data-text="test" data-count="horizontal" data-via="adampatterson"></a>-->
                    <a href="http://twitter.com/share" class="twitter-share-button" data-url="<?= HISTORY ?>"  data-count="horizontal" <? if ( get::option('social_twitter_name') != '' ) echo 'data-via="'.get::option('social_twitter_name').'"';?>></a>
                </div>
            <? endif; ?>

            <? if ( get::option('social_stumble') != ''): ?>
                <div style="float:left; width:85px;padding-right:10px; margin:4px 4px 4px 4px;height:30px;"><script src="http://www.stumbleupon.com/hostedbadge.php?s=1&amp;r=<?= HISTORY ?>"></script></div>
            <? endif; ?>

        </div>
        <div style="clear:both"></div>
        <div style="padding-bottom:4px;"></div>
<? endif;
    }

}