<div class="stbody">
  <div class="stimg stimgR"><?php print $fields['field_user_picture']->content; ?></div>
  <div class="sttext">
    <h3 class="title"><?php print $fields['name']->raw; ?></h3>
    <div class="user-atten clearfix">
      <div class="user-points">
        <span class="label"><?php print $fields['points']->label; ?></span>
        <i class="points-num"><?php print $fields['points']->raw; ?></i>
      </div>
      <div class="user-badges">
        <span class="label"><?php print $fields['user_badges_html_1']->label; ?></span>
        <i class="badges-level"><?php print $fields['user_badges_html_1']->content; ?></i>
      </div>
    </div>
  </div>
</div>
<!-- end user profile content -->

<div class="user-badges-name mbm"><?php print $fields['user_badges_html']->content; ?></div>

<div class="badgebox">
  <ul class="unstyled clearfix">
    <li><img src="http://www.w3cplus.com/sites/default/files/styles/user_picture/public/pictures/picture-1-1347153884.jpg" alt="" width="24" height="24"></li>
    <li><img src="http://www.w3cplus.com/sites/default/files/styles/user_picture/public/pictures/picture-1-1347153884.jpg" alt="" width="24" height="24"></li>
    <li><img src="http://www.w3cplus.com/sites/default/files/styles/user_picture/public/pictures/picture-1-1347153884.jpg" alt="" width="24" height="24"></li>
    <li><img src="http://www.w3cplus.com/sites/default/files/styles/user_picture/public/pictures/picture-1-1347153884.jpg" alt="" width="24" height="24"></li>
    <li><img src="http://www.w3cplus.com/sites/default/files/styles/user_picture/public/pictures/picture-1-1347153884.jpg" alt="" width="24" height="24"></li>
  </ul>
</div>
<!-- end badgebox content -->

<ul class="user-nums unstyled clearfix">
  <li><span><?php print $fields['count']->label; ?>：</span><a href=""><?php print $fields['count']->content; ?></a></li>
  <li><span>关注：</span><a href="">60</a></li>
</ul>
