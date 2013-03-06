<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

<div class="wrapper">
  <div id="header" rel="header">
    <div class="container clearfix">
      <h1 id="logo" class="fl pts mrs"><a href="<?php print $front_page; ?>" class="ir icon icon-logo"><?php print $site_name; ?></a></h1>
      <!-- end logo -->
      <ul id="nav" class="clearfix unstyled fl" rel="navigation">
        <li><a href="#" title="校园操场" class="active">校园操场</a></li>
        <li class="haschild">
          <a href="#" title="校园社区">校园社区</a>
          <ol class="sub-menu unstyled">
            <li><a href="#">sub menu</a></li>
            <li><a href="#">sub menu</a></li>
            <li><a href="#">sub menu</a></li>
            <li><a href="#">sub menu</a></li>
            <li><a href="#">sub menu</a></li>
          </ol>
        </li>
        <li class="haschild">
          <a href="#" title="校园知识">校园知识</a>
          <ol class="sub-menu unstyled">
            <li><a href="#">sub menu</a></li>
            <li><a href="#">sub menu</a></li>
            <li><a href="#">sub menu</a></li>
            <li><a href="#">sub menu</a></li>
            <li><a href="#">sub menu</a></li>
          </ol>
        </li>
        <li class="haschild">
          <a href="#" title="校园博客">校园博客</a>
          <ol class="sub-menu unstyled">
            <li><a href="#">sub menu</a></li>
            <li><a href="#">sub menu</a></li>
            <li><a href="#">sub menu</a></li>
            <li><a href="#">sub menu</a></li>
            <li><a href="#">sub menu</a></li>
          </ol>
        </li>
      </ul>
      <!-- end nav menu -->

      <form action="" method="post" class="search-form fl pr">
        <input type="text" class="form-text" placeholder="找人" />
        <button class="icon ir icon-search" type="submit">搜索</button>
      </form>
      <!-- end search form -->

      <ul class="secondary-menu unstyled clearfix fl">
        <li><a href="#"><i class="icon ir icon-account">用户</i></a></li>
        <li><a href="#"><i class="icon ir icon-msg">信息</i></a><i class="msg-num">1</i></li>
        <li><a href="#"><i class="icon ir icon-logout">退出</i></a></li>
      </ul>
      <!-- end secondary menu -->
    </div>
  </div>
  <?php print render($page['header']); ?>
  <!-- end header content -->
  <?php print $messages; ?>
  <?php print render($page['help']); ?>
  <div id="page" class="clearfix">
    <div class="container">
      <div class="container-wrapper">
        <div class="container-inner">
          <div id="main-content" class="clearfix">
            <div class="content fl">
              <?php print render($page['content']); ?>
            </div>
            <!-- end main contnet -->
            <?php if($page['sidebar_second']): ?>
              <div class="sidebar fl" id="second-sidebar">
                <?php print render($page['sidebar_second']); ?>
              </div>
            <?php endif; ?>
            <!-- end second sidebar content -->
          </div>
          <!-- end main content -->
          <?php if($page['sidebar_first']): ?>
            <div id="first-sidebar" class="sidebar clearfix">
              <?php print render($page['sidebar_first']); ?>
            </div>
          <?php endif; ?>
          <!-- end first-sidebar content -->
        </div>
      </div>
    </div>
  </div>
  <!-- end page content -->

  <div id="footer">
    <div class="footer-col">
      <div class="container clearfix phs">
        <div class="block-wrapper clearfix">
          <?php print render($page['footer']); ?>
        </div>
      </div>
    </div>
    <!-- end footer col -->

    <div class="footer-copyright pvs">
      <div class="container clearfix pr">
        <?php print render($page['footer_copyright']); ?>
      </div>
    </div>
    <!-- end footer copyright -->
  </div>
  <!-- end footer content -->
</div>