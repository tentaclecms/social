<div id="wrap">
    <div class="full-content">
        <div id="post-body">
            <div class="one-full">
                <div class="title pad-right">
                    <h1><img src="<?=ADMIN_URL;?>images/icons/icon_pages_32.png" alt="" /> Social Sharing Settings</h1>
                    <div class="span8 well">
                        <p>Choose what services that you would like your views to share with.</p>

                        <?
                        if ( input::post('author_profile') )
                            set::option('author_profile', input::post('author_profile'));
                        ?>

                        <form action="<?= HISTORY ?>" method="post" class="form-stacked">

                            <input type="hidden" name="history" value="admin/settings_plugins/analytic_settings">

                            <fieldset>

                                <div class="control-group">
                                    <label class="control-label" for="blogname">Tracking Code</label>
                                    <div class="controls">
                                        <label class="checkbox inline">
                                            <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
                                        </label>
                                        <label class="checkbox inline">
                                            <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
                                        </label>
                                        <label class="checkbox inline">
                                            <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
                                        </label>

                                        <?= get::option('tracking_code', '') ?>
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
