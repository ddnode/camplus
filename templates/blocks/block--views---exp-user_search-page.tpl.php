<?php

/**
 * @file
 * Theme implementation to display search form.
 */
?>
<form action="<?php print url('search/user'); ?>" method="get" class="search-form fl pr">
  <input type="text" class="form-text" name="search_api_views_fulltext" placeholder="找人" />
  <button class="icon ir icon-search" type="submit">搜索</button>
</form>
