<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
   <div class="form-group">
      <div class="input-group mb-3">
         <input type="search" class="search-field form-control" placeholder="<?php echo esc_attr_x('Search Keyword', 'placeholder') ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'buson') ?>" />
         <div class="input-group-append">
            <button class="btns" type="button"><i class="ti-search"></i></button>
         </div>
      </div>
   </div>
   <button class="search-submit button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit" value="<?php echo esc_attr_x('Search', 'submit button') ?>"><?php echo esc_html__('Search', 'buson') ?></button>
</form>