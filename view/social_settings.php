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

                        <form action="<?= HISTORY ?>" method="post" class="form-stacked">

                            <input type="hidden" name="history" value="admin/settings_plugins/social_settings">

                            <fieldset>

                                <div class="control-group">
                                    <div class="controls">
                                        <label class="checkbox inline">
                                            <input type="checkbox" id="social_facebook" value="facebook" name="social_sharing" /> Facebook
                                        </label>
                                        <label class="checkbox inline">
                                            <input type="checkbox" id="social_google" value="google_plus" name="social_sharing" /> Google+
                                        </label>
                                        <label class="checkbox inline">
                                            <input type="checkbox" id="social_twitter" value="twitter" name="social_sharing" /> Twitter
                                        </label>
                                        <label class="checkbox inline">
                                            <input type="checkbox" id="social_stumble" value="stumbleupon" name="social_sharing" /> Stumbleupon
                                        </label>

                                        <?= get::option('social_sharing', '') ?>
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
