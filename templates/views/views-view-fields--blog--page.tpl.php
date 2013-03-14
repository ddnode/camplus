<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<div class="blog-list">
  <div class="submmitted">
    <div class="ym"><?php print format_date($fields['created']->raw, 'custom', 'Y年m月'); ?></div>
    <div class="day"><span><?php print format_date($fields['created']->raw, 'custom', 'd'); ?></span>日</div>
  </div>
  <div class="stbody blog-list-header">
    <div class="stimg stimgL avatar">
      <?php print $fields['picture']->content; ?>
    </div>
    <!-- end user avatar -->
    <div class="sttext">
      <div class="title"><?php print $fields['name']->content; ?></div>
      <h3 class="blog-title"><?php print $fields['title']->content; ?></h3>
    </div>
  </div>
  <!-- end blog  list header -->
  <div class="blog-list-body">
    <?php print $fields['body']->content; ?>
  </div>
  <!-- end blog list body -->
  <div class="blog-list-footer clearfix">
    <ul class="clearfix unstyled blog-handle fr">
      <li><a href="#"><i class="icon icon-like"></i>赞好(<span class="like-num">20</span>)</a></li>
      <li><a href="#">收藏</a></li>
      <li><a href="#">举报</a></li>
      <li><a href="#">小明的博客</a></li>
      <li><a href="#">回应</a></li>
    </ul>
    <div class="blog-from fl">
      <a href="#">今天 22:27</a>
    </div>
  </div>
  <!-- end blog list footer -->
</div>
<!-- blog list -->
