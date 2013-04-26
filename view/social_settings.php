<div id="wrap">
    <div class="full-content">
        <div id="post-body">
            <div class="one-full">
                <div class="title pad-right">
                    <h1><img src="<?=ADMIN_URL;?>images/icons/icon_pages_32.png" alt="" /> Social Sharing Settings</h1>
                    <div class="span8 well">
                        <p>Choose what services you would like your views to share with.</p>

                        <?
                        if ( input::post('author_profile') )
                            set::option('author_profile', input::post('author_profile'));
                        ?>

                        <form action="<?= BASE_URL ?>action/udpate_settings_post/"  class="form-stacked" method="post">

                            <input type="hidden" name="history" value="admin/settings_plugins/social_settings">

                            <fieldset>

                                <div class="control-group">
                                    <div class="controls">
                                        <label class="checkbox inline">
                                            <input type="hidden" id="social_facebook" value="" name="social_facebook" />
                                            <input type="checkbox" <? if ( get::option('social_facebook') != ''): echo 'checked'; endif; ?> id="social_facebook" value="facebook" name="social_facebook" /> Facebook
                                        </label>
                                        <label class="checkbox inline">
                                            <input type="hidden" id="social_google" value="" name="social_google" />
                                            <input type="checkbox" <? if ( get::option('social_google') != ''): echo 'checked'; endif; ?> id="social_google" value="google_plus" name="social_google" /> Google+
                                        </label>
                                        <label class="checkbox inline">
                                            <input type="hidden" id="social_twitter" value="" name="social_twitter" />
                                            <input type="checkbox" <? if ( get::option('social_twitter') != ''): echo 'checked'; endif; ?> id="social_twitter" value="twitter" name="social_twitter" /> Twitter
                                        </label>
                                        <label class="checkbox inline">
                                            <input type="hidden" id="social_stumble" value="" name="social_stumble" />
                                            <input type="checkbox" <? if ( get::option('social_stumble') != ''): echo 'checked'; endif; ?> id="social_stumble" value="stumbleupon" name="social_stumble" /> Stumbleupon
                                        </label>
                                    </div>
                                </div>

                            </fieldset>

                            <div class="form-actions">
                                <button class="btn btn-primary" type="submit">
                                    Save
                                </button>
                            </div>

                        </form>

                    </div>
                </div>
            </div><!-- .one-full -->
        </div><!-- .post-body -->
    </div><!-- .full-content -->
</div><!-- #wrap -->
