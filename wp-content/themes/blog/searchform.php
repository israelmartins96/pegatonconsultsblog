<?php if (is_404()): ?>

    <form method="get" action="<?php echo home_url(); ?>">
        <div class="form-group clearfix">
            <input type="search" name="s" value="<?php get_search_query(); ?>" placeholder="Search Here..." required="">
            <button type="submit" id="search-btn" class="theme-btn"><span class="flaticon-search"></span></button>
        </div>
    </form>

<?php else: ?>

    <form method="get" action="<?php echo home_url(); ?>">
        <div class="form-group">
            <input type="search" name="s" value="<?php get_search_query(); ?>" placeholder="Search Here..." required="">
            <button type="submit" id="search-btn"><span class="icon flaticon-magnifying-glass-1"></span></button>
        </div>
    </form>

<?php endif; ?>