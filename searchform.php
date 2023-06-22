<form class="p-search c-flex--center" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <input type="search" class="p-search__input c-icon--musimegane c-input--search" value="<?php if(is_search()){ echo esc_attr(get_search_query());} ?>" name="s" id="s">
    <input type="submit" class="p-search__button c-button__search c-color--Gray" name="submit" value="検索">
</form>