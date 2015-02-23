<form class="navbar-form" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
        <div class="input-group">
            <input type="text" class="form-control" value="<?php the_search_query(); ?>" placeholder="Search" name="s" id="s">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
            </div>
        </div>
</form>