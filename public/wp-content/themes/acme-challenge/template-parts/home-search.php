<form action="<?php bloginfo('url'); ?>" class="form-inline" method="GET">
    <label for="" class="mr-2 d-none d-md-inline-block">Search for #</label>
    <div class="input-group">
        <input type="text" class="form-control form-control-lg d-block d-md-inline-block" name="s" value="<?php echo get_query_var('hashtag'); ?>" />
        <div class="input-group-append">
            <button class="btn btn-default" type="submit">
                <img src="<?php echo IMAGES; ?>/search.svg" alt="" />
            </button>
        </div>
    </div>
</form>