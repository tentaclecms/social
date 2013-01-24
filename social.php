<?
/**
name: Social Media
url: http://adampatterson.ca/
version: 1.0
description: Social media sharing
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
        <script type='text/javascript' src='http://platform.twitter.com/widgets.js?ver=3.5'></script>
        <script type='text/javascript' src='http://apis.google.com/js/plusone.js?ver=3.5'></script>
        <div class="bottomcontainerBox" style="">
            <div style="float:left; width:85px;padding-right:10px; margin:4px 4px 4px 4px;height:30px;">
                <iframe src="http://www.facebook.com/plugins/like.php?href=<?= urlencode(HISTORY) ?>&amp;layout=button_count&amp;show_faces=false&amp;width=85&amp;action=like&amp;font=verdana&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:85px; height:21px;"></iframe></div>
            <div style="float:left; width:85px;padding-right:10px; margin:4px 4px 4px 4px;height:30px;">
                <g:plusone size="medium" href="<?= HISTORY ?>"></g:plusone>
            </div>
            <div style="float:left; width:85px;padding-right:10px; margin:4px 4px 4px 4px;height:30px;">
                <!-- <a href="http://twitter.com/share" class="twitter-share-button" data-url="--><?//= HISTORY ?><!--"  data-text="test" data-count="horizontal" data-via="adampatterson"></a>-->
                <a href="http://twitter.com/share" class="twitter-share-button" data-url="<?= HISTORY ?>"  data-count="horizontal"></a>
            </div>
            <div style="float:left; width:85px;padding-right:10px; margin:4px 4px 4px 4px;height:30px;"><script src="http://www.stumbleupon.com/hostedbadge.php?s=1&amp;r=<?= HISTORY ?>"></script></div>
        </div>
        <div style="clear:both"></div>
        <div style="padding-bottom:4px;"></div>
<? endif;
    }

}