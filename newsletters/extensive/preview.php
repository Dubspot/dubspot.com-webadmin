<?php
include 'functions.php';
$json = json_decode(file_get_contents(latestVersion()),true);
$link_tracking = "?c1=Newsletter&amp;source=" . date('My') . "&amp;kw=" . date('My') . "_" . $json['short_name'];
$image_folder = 'http://dubspot.s3.amazonaws.com/Newsletters/' . strtolower("2014-".date('m')."-extensive");
?>


<html>
  <head>
      <meta http-equiv="Content Type" content="text/html; charset=utf-8">
      <title>Dubspot Newsletter | <?php echo date('F Y') ?></title>
      <link rel="stylesheet" href="">
  </head>
  <body bgcolor="#ffffff" style="">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff" style="font-family: Helvetica, Arial, sans-serif;">
      <tbody>
        <tr>
          <td>
            <table class="container" width="800" align="center" border="0" cellpadding="0" cellspacing="0" style="background: #f4f4f4;">
              <tbody>

                <!--=======================================================
                =                         HEADER Row                      =
                =========================================================-->

                <tr>
                  <td>
                    <table class="header" width="825" align="center" border="0" cellpadding="0" cellspacing="0">
                      <tbody>
                        <tr>
                          <td class="logo" valign="top" bgcolor="#FFFFFF">
                            <a href="http://www.dubspot.com/<?php echo $link_tracking ?>">
                              <img id="logo" src="http://dubspot.com/email-images/icons/dubspot_on_white.jpg">
                            </a>
                          </td>
                          <td class="social" valign="bottom" bgcolor="#FFFFFF" style="padding-left: 144px;">
                            <table border="0" cellspacing="0" cellpadding="1" style="width: 110px; margin-left: 141px;">
                              <tbody>
                                <tr>
                                  <td width="19">
                                    <a href="http://www.facebook.com/DubSpot" style="text-decoration:none;">
                                      <img src="http://www.dubspot.com/email-images/icons/social_fb.jpg" style="display:block; outline:none; border:none;" height="30" width="19">
                                    </a>
                                  </td>
                                  <td width="6">
                                    <div style="line-height:30px; font-size:1px; color:#FFFFFF; background-color:#FFFFFF;">.</div>
                                  </td>
                                  <td width="18">
                                    <a href="http://www.twitter.com/dubspot" style="text-decoration:none;">
                                      <img src="http://www.dubspot.com/email-images/icons/social_tw.jpg" style="display:block; outline:none; border:none;" height="30" width="18">
                                    </a>
                                  </td>
                                  <td width="7">
                                    <div style="line-height:30px; font-size:1px; color:#FFFFFF; background-color:#FFFFFF;">.</div>
                                  </td>
                                  <td width="18">
                                    <a href="http://www.youtube.com/user/DubSpot" style="text-decoration:none;">
                                      <img src="http://www.dubspot.com/email-images/icons/social_yt.jpg" style="display:block; outline:none; border:none;" height="30" width="18">
                                    </a>
                                  </td>
                                  <td width="6">
                                    <div style="line-height:30px; font-size:1px; color:#FFFFFF; background-color:#FFFFFF;">.</div>
                                  </td>
                                  <td width="18">
                                    <a href="http://soundcloud.com/dubspot" style="text-decoration:none;">
                                      <img src="http://www.dubspot.com/email-images/icons/social_sc.jpg" style="display:block; outline:none; border:none;" height="30" width="18">
                                    </a>
                                  </td>
                                  <td width="6">
                                    <div style="line-height:30px; font-size:1px; color:#FFFFFF; background-color:#FFFFFF;">.</div>
                                  </td>
                                  <td width="18">
                                    <a href="http://www.instagram.com/dubspot" style="text-decoration:none;">
                                      <img src="http://www.dubspot.com/email-images/icons/social_in.jpg" style="display:block; outline:none; border:none;" height="30" width="19">
                                    </a>
                                  </td>
                                  <td width="65">
                                    <div style="line-height:30px; font-size:1px; color:#FFFFFF; background-color:#FFFFFF;">.</div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                            <div style="color:#FFFFFF;background-color:#FFFFFF;line-height:5px;font-size:1px;">.</div>
                            <div style="color:#000000;background-color:#FFFFFF;line-height:12px;font-size:12px;font-family: Helvetica, Arial, sans-serif; padding-left: 0px;">

                              Dubspot Open House - Sundays 11am + 12pm

                            </div>
                            <div style="color:#FFFFFF;background-color:#FFFFFF;line-height:15px;font-size:1px;">.</div>
                            <!-- Social End -->
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>

                <!--========== End of HEADER Row  ===========-->










                <!--=======================================================
                =                       BLACK BAR Row                     =
                =========================================================-->

                <tr>
                  <td valign="middle" bgcolor="#000000" width="800" style="color: white; text-align: right; padding-right: 48px; padding-top: 10px; padding-bottom: 10px;font-family: Helvetica, Arial, sans-serif;">
                    <h1 style="font-weight: 500; font-size: 17px; margin: 0;">

                      Dubspot Newsletter |  <?php echo date('F Y') ?>

                    </h1>
                  </td>
                </tr>

                <!--=============== End of BLACK BAR Row  ================-->








                <tr>
                  <td class="spacer" bgcolor="#f4f4f4" height="15"></td>
                </tr>









                <!--=======================================================
                =                       MAIN CONTENT Row                  =
                =========================================================-->

                <tr>
                  <td>
                    <table class="main-content" border="0" cellpadding="0" cellspacing="10">
                      <tbody>
                        <tr>
                          <td id="feat-article" valign="top" bgcolor="#000000" height="400">
                            <div class="ribbon" style="background: <?php echo $json['hex_color'] ?>; height: 30px; margin-top: 0; text-align: left; padding-left: 24px;">
                              <h2 style="font-size: 16px; padding-top: 7px; margin-top: 0;">

                                <?php echo $json['main_story_ribbon'] ?>

                              </h2>
                            </div>

                            <table id="featured-article" border="0" cellpadding="0" cellspacing="0" style="padding: 12px;">
                              <tbody>
                                <tr>
                                  <td style="text-align: center;">
                                    <a href="<?php echo $json['main_story_link'] ?><?php echo $link_tracking ?>">
                                      <img src="<?php echo $image_folder ?>/main_01.jpg" width="437" style="margin: 0 auto;" alt="">
                                    </a>
                                  </td>
                                </tr>

                                <tr>
                                  <td style="padding-left: 4px;">
                                    <a href="<?php echo $json['main_story_link'] ?><?php echo $link_tracking ?>" style="color: <?php echo $json['hex_color'] ?>; text-decoration: none;">
                                      <h3 style="margin: 8px 0 0 0; font-weight: 500;">

                                        <?php echo $json['main_story_headline'] ?>

                                      </h3>
                                    </a>
                                  </td>
                                </tr>

                                <tr>
                                  <td style="color: #FFFFFF; padding-left: 4px;">
                                    <p style="margin: 8px 0 0 0; font-size: 13px; line-height: 18px;font-weight: 300;">

                                      <?php echo $json['main_story_body'] ?>

                                      <br>
                                      <a href="<?php echo $json['main_story_link'] ?><?php echo $link_tracking ?>" style="color: <?php echo $json['hex_color'] ?>;">
                                        Learn More
                                      </a>
                                    </p>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>

                          <td class="horizontal-spacer" valign="top" bgcolor="#f4f4f4" height="25"></td>

                          <td class="main-sidebar" valign="top" bgcolor="#FFFFFF" height="400">
                            <table border="0" cellspacing="0" cellpadding="0">
                              <tbody>
                                <tr>
                                  <td id="main-sidebar-top" valign="top" bgcolor="#000000" height="195">
                                    <div class="ribbon" style="background: <?php echo $json['hex_color'] ?>; height: 30px; text-align: left; padding-left: 24px;">
                                      <h2 style="font-size: 16px; padding-top: 7px; margin-top: 0;">

                                        <?php echo $json['main_story_right_ribbon'] ?>

                                      </h2>
                                    </div>
                                    <table border="0" cellspacing="0" cellpadding="0" style="padding: 12px;">
                                      <tbody>
                                        <tr>
                                          <td style="text-align: center;">
                                            <a href="<?php echo $json['main_story_right_link'] ?><?php echo $link_tracking ?>" style="color: <?php echo $json['hex_color'] ?>; text-decoration: none;">
                                              <img src="<?php echo $image_folder ?>/main_02.jpg" width="300" style="margin: 0 auto;" alt="">
                                            </a>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td style="color: <?php echo $json['hex_color'] ?>; padding-left: 4px;">
                                            <a href="<?php echo $json['main_story_right_link'] ?><?php echo $link_tracking ?>" style="color: <?php echo $json['hex_color'] ?>; text-decoration: none;">
                                              <h3 style="margin: 8px 0 0 0; line-height: 24px; font-weight: 500;">

                                                <?php echo $json['main_story_right_headline'] ?>

                                              </h3>
                                            </a>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td style="color: #FFFFFF; padding-left: 4px;">
                                            <p style="margin: 8px 0 0 0; padding-bottom: px; font-size: 13px; line-height: 18px; font-weight: 300;">

                                              <?php echo $json['main_story_right_body'] ?>

                                            </p>
                                            <a style="color: <?php echo $json['hex_color'] ?>; margin-top: 0; font-size: 13px;" href="<?php echo $json['main_story_right_link'] ?><?php echo $link_tracking ?>">

                                              Learn More

                                            </a>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="vertical-spacer" valign="top" bgcolor="#f4f4f4" width="275" height="10"></td>
                                </tr>

                                <tr>
                                  <td id="main-sidebar-bottom" valign="top" bgcolor="#000000" width="275">

                                    <div class="ribbon" style="background: <?php echo $json['hex_color'] ?>; height: 30px; text-align: left; padding-left: 24px;">
                                      <h2 style="font-size: 16px; padding-top: 7px; margin-top: 0;">

                                        <?php echo $json['events_ribbon'] ?>

                                      </h2>
                                    </div>

                                    <table border="0" cellspacing="0" cellpadding="0" style="padding: 0 10px 0 10px;">
                                      <tbody>

                                        <tr>
                                          <td style="margin-right: 12px; padding: 11px 0 8px 2px; border-bottom: 2px solid #333333;">
                                            <a href="<?php echo $json['event_1_link'] ?><?php echo $link_tracking ?>" style="color: #e5b717; text-decoration: none;">
                                             <img src="<?php echo $image_folder ?>/sidebar_events_01.jpg" width="75" height="75" alt="">
                                            </a>
                                          </td>
                                          <td valign="top" style="padding: 11px 0 10px 12px; border-bottom: 2px solid #333333; ">
                                            <a href="<?php echo $json['event_1_link'] ?><?php echo $link_tracking ?>" style="color: white; text-decoration: none;">
                                              <h6 style="font-size: 13px; margin: 0 0 3px 0; line-height: 17px;">

                                                <?php echo $json['event_1_headline'] ?>

                                              </h6>
                                            </a>
                                            <p style="color: white; font-size: 13px; margin: 0 0 3px 0; line-height: 17px;">

                                              <?php echo $json['event_1_body'] ?>

                                            </p>
                                           <a style="color: <?php echo $json['hex_color'] ?>; margin-top: 0; font-size: 13px;" href="<?php echo $json['event_1_link'] ?><?php echo $link_tracking ?>">

                                              Learn More

                                            </a>
                                          </td>
                                        </tr>

                                        <?php if(!empty($json['event_2_headline'])) { ?>
                                        <tr>
                                          <td style="margin-right: 12px; padding: 9px 0 8px 2px; border-bottom: 2px solid #333333;">
                                            <a href="<?php echo $json['event_2_link'] ?><?php echo $link_tracking ?>" style="color: #e5b717; text-decoration: none;">
                                             <img src="<?php echo $image_folder ?>/sidebar_events_02.jpg" width="75" height="75" alt="">
                                            </a>
                                          </td>
                                          <td valign="top" style="padding: 9px 0 10px 12px; border-bottom: 2px solid #333333; ">
                                            <a href="<?php echo $json['event_2_link'] ?><?php echo $link_tracking ?>" style="color: white; text-decoration: none;">
                                              <h6 style="font-size: 13px; margin: 0 0 3px 0; line-height: 17px;">

                                                <?php echo $json['event_2_headline'] ?>

                                              </h6>
                                            </a>
                                            <p style="color: white; font-size: 13px; margin: 0 0 3px 0; line-height: 17px;">

                                              <?php echo $json['event_2_body'] ?>

                                            </p>
                                           <a style="color: <?php echo $json['hex_color'] ?>; margin-top: 0; font-size: 13px;" href="<?php echo $json['event_2_link'] ?><?php echo $link_tracking ?>">

                                              Learn More

                                            </a>
                                          </td>
                                        </tr>
                                        <?php  } ?>

                                        <?php if(!empty($json['event_3_headline'])) { ?>
                                        <tr>
                                          <td style="margin-right: 12px; padding: 9px 0 8px 2px; border-bottom: 2px solid #333333;">
                                            <a href="<?php echo $json['event_3_link'] ?><?php echo $link_tracking ?>" style="color: #e5b717; text-decoration: none;">
                                             <img src="<?php echo $image_folder ?>/sidebar_events_03.jpg" width="75" height="75" alt="">
                                            </a>
                                          </td>
                                          <td valign="top" style="padding: 9px 0 10px 12px; border-bottom: 2px solid #333333; ">
                                            <a href="<?php echo $json['event_3_link'] ?><?php echo $link_tracking ?>" style="color: white; text-decoration: none;">
                                              <h6 style="font-size: 13px; margin: 0 0 3px 0; line-height: 17px;">

                                                <?php echo $json['event_3_headline'] ?>

                                              </h6>
                                            </a>
                                            <p style="color: white; font-size: 13px; margin: 0 0 3px 0; line-height: 17px;">

                                              <?php echo $json['event_3_body'] ?>

                                            </p>
                                           <a style="color: <?php echo $json['hex_color'] ?>; margin-top: 0; font-size: 13px;" href="<?php echo $json['event_3_link'] ?><?php echo $link_tracking ?>">

                                              Learn More

                                            </a>
                                          </td>
                                        </tr>
                                        <?php  } ?>


                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>

                <!--============= End of MAIN CONTENT Row  ==============-->









                <tr>
                  <td class="spacer" bgcolor="#f4f4f4" height="15"></td>
                </tr>










                <!--=======================================================
                =                        COURSES Row                      =
                =========================================================-->

                <tr>
                  <td>
                    <table align="center" border="0" cellpadding="0" cellspacing="">
                      <tbody>
                        <tr>
                          <td class="courses" align="right" valign="top" bgcolor="#000000" height="400">

                            <div class="ribbon" style="background: <?php echo $json['hex_color'] ?>; height: 30px; text-align: left; padding-left: 24px;">
                              <h2 style="font-size: 16px; padding-top: 7px; margin-top: 0;">

                                UPCOMING COURSES

                              </h2>
                            </div>

                            <table id="upcoming-courses" border="0" cellspacing="0" cellpadding="0" width="798" style="margin: 0; padding: 8px;">
                              <tr>
                                <td>
                                  <table border="0" cellspacing="0" cellpadding="0" style="padding: 8px;">
                                    <tbody>
                                      <tr>
                                        <td style="padding: 4px 0 0 4px; vertical-align: top;" >
                                          <img src="<?php echo $image_folder ?>/_icons/<?php echo $json['course_1_icon'] ?>.png" width="33" height="33" alt="" style="padding-top: 4px;">
                                        </td>
                                        <td valign="top" style="color:white; padding: 0 0 0 10px; ">
                                          <a href="<?php echo $json['course_1_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none;">
                                            <h5 style="color: <?php echo $json['hex_color'] ?>; margin: 5px 0 1px 0; font-size:17px; font-weight: 600;">

                                              <?php echo $json['course_1_name'] ?>

                                            </h5>
                                          </a>
                                          <p style="font-size: 13px; margin: 0 0 3px 0; line-height: 17px;">
                                            <a href="<?php echo $json['course_1_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none; color: white; font-weight: 400;">

                                              <strong>NYC:</strong> <?php echo $json['course_1_ny_dates'] ?>
                                              <br>
                                              <strong>LA:</strong> <?php echo $json['course_1_la_dates'] ?>
                                              <br>
                                              <strong>Online:</strong> <?php echo $json['course_1_online_dates'] ?>


                                            </a>
                                          </p>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                                <td>
                                  <table border="0" cellspacing="0" cellpadding="0" style="padding: 8px;">
                                    <tbody>
                                      <tr>
                                        <td style="padding: 4px 0 0 4px; vertical-align: top;" >
                                          <img src="<?php echo $image_folder ?>/_icons/<?php echo $json['course_2_icon'] ?>.png" width="33" height="33" alt="" style="padding-top: 4px;">
                                        </td>
                                        <td valign="top" style="color:white; padding: 0 0 0 10px; ">
                                          <a href="<?php echo $json['course_2_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none;">
                                            <h5 style="color: <?php echo $json['hex_color'] ?>; margin: 5px 0 1px 0; font-size:17px; font-weight: 600;">

                                              <?php echo $json['course_2_name'] ?>

                                            </h5>
                                          </a>
                                          <p style="font-size: 13px; margin: 0 0 3px 0; line-height: 17px;">
                                            <a href="<?php echo $json['course_2_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none; color: white; font-weight: 400;">

                                              <strong>NYC:</strong> <?php echo $json['course_2_ny_dates'] ?>
                                              <br>
                                              <strong>LA:</strong> <?php echo $json['course_2_la_dates'] ?>
                                              <br>
                                              <strong>Online:</strong> <?php echo $json['course_2_online_dates'] ?>

                                            </a>
                                          </p>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>

                              <tr>
                                <td>
                                  <table border="0" cellspacing="0" cellpadding="0" style="padding: 8px;">
                                    <tbody>
                                      <tr>
                                        <td style="padding: 4px 0 0 4px; vertical-align: top;" >
                                          <img src="<?php echo $image_folder ?>/_icons/<?php echo $json['course_3_icon'] ?>.png" width="33" height="33" alt="" style="padding-top: 4px;">
                                        </td>
                                        <td valign="top" style="color:white; padding: 0 0 0 10px; ">
                                          <a href="<?php echo $json['course_3_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none;">
                                            <h5 style="color: <?php echo $json['hex_color'] ?>; margin: 5px 0 1px 0; font-size:17px; font-weight: 600;">

                                              <?php echo $json['course_3_name'] ?>

                                            </h5>
                                          </a>
                                          <p style="font-size: 13px; margin: 0 0 3px 0; line-height: 17px;">
                                            <a href="<?php echo $json['course_3_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none; color: white; font-weight: 400;">

                                              <strong>NYC:</strong> <?php echo $json['course_3_ny_dates'] ?>
                                              <br>
                                              <strong>LA:</strong> <?php echo $json['course_3_la_dates'] ?>
                                              <br>
                                              <strong>Online:</strong> <?php echo $json['course_3_online_dates'] ?>

                                            </a>
                                          </p>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                                <td>
                                  <table border="0" cellspacing="0" cellpadding="0" style="padding: 8px;">
                                    <tbody>
                                      <tr>
                                        <td style="padding: 4px 0 0 4px; vertical-align: top;" >
                                          <img src="<?php echo $image_folder ?>/_icons/<?php echo $json['course_4_icon'] ?>.png" width="33" height="33" alt="" style="padding-top: 4px;">
                                        </td>
                                        <td valign="top" style="color:white; padding: 0 0 0 10px; ">
                                          <a href="<?php echo $json['course_4_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none;">
                                            <h5 style="color: <?php echo $json['hex_color'] ?>; margin: 5px 0 1px 0; font-size:17px; font-weight: 600;">

                                              <?php echo $json['course_4_name'] ?>

                                            </h5>
                                          </a>
                                          <p style="font-size: 13px; margin: 0 0 3px 0; line-height: 17px;">
                                            <a href="<?php echo $json['course_4_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none; color: white; font-weight: 400;">

                                              <strong>NYC:</strong> <?php echo $json['course_4_ny_dates'] ?>
                                              <br>
                                              <strong>LA:</strong> <?php echo $json['course_4_la_dates'] ?>
                                              <br>
                                              <strong>Online:</strong> <?php echo $json['course_4_online_dates'] ?>

                                            </a>
                                          </p>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>

                              <tr>
                                <td>
                                  <table border="0" cellspacing="0" cellpadding="0" style="padding: 8px;">
                                    <tbody>
                                      <tr>
                                        <td style="padding: 4px 0 0 4px; vertical-align: top;" >
                                          <img src="<?php echo $image_folder ?>/_icons/<?php echo $json['course_5_icon'] ?>.png" width="33" height="33" alt="" style="padding-top: 4px;">
                                        </td>
                                        <td valign="top" style="color:white; padding: 0 0 0 10px; ">
                                          <a href="<?php echo $json['course_5_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none;">
                                            <h5 style="color: <?php echo $json['hex_color'] ?>; margin: 5px 0 1px 0; font-size:17px; font-weight: 600;">

                                              <?php echo $json['course_5_name'] ?>

                                            </h5>
                                          </a>
                                          <p style="font-size: 13px; margin: 0 0 3px 0; line-height: 17px;">
                                            <a href="<?php echo $json['course_5_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none; color: white; font-weight: 400;">

                                              <strong>NYC:</strong> <?php echo $json['course_5_ny_dates'] ?>
                                              <br>
                                              <strong>LA:</strong> <?php echo $json['course_5_la_dates'] ?>
                                              <br>
                                              <strong>Online:</strong> <?php echo $json['course_5_online_dates'] ?>

                                            </a>
                                          </p>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                                <td>
                                  <table border="0" cellspacing="0" cellpadding="0" style="padding: 8px;">
                                    <tbody>
                                      <tr>
                                        <td style="padding: 4px 0 0 4px; vertical-align: top;" >
                                          <img src="<?php echo $image_folder ?>/_icons/<?php echo $json['course_6_icon'] ?>.png" width="33" height="33" alt="" style="padding-top: 4px;">
                                        </td>
                                        <td valign="top" style="color:white; padding: 0 0 0 10px; ">
                                          <a href="<?php echo $json['course_6_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none;">
                                            <h5 style="color: <?php echo $json['hex_color'] ?>; margin: 5px 0 1px 0; font-size:17px; font-weight: 600;">

                                              <?php echo $json['course_6_name'] ?>

                                            </h5>
                                          </a>
                                          <p style="font-size: 13px; margin: 0 0 3px 0; line-height: 17px;">
                                            <a href="<?php echo $json['course_6_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none; color: white; font-weight: 400;">

                                              <strong>NYC:</strong> <?php echo $json['course_6_ny_dates'] ?>
                                              <br>
                                              <strong>LA:</strong> <?php echo $json['course_6_la_dates'] ?>
                                              <br>
                                              <strong>Online:</strong> <?php echo $json['course_6_online_dates'] ?>

                                            </a>
                                          </p>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>

                              <tr>
                                <td>
                                  <table border="0" cellspacing="0" cellpadding="0" style="padding: 8px;">
                                    <tbody>
                                      <tr>
                                        <td style="padding: 4px 0 0 4px; vertical-align: top;" >
                                          <img src="<?php echo $image_folder ?>/_icons/<?php echo $json['course_7_icon'] ?>.png" width="33" height="33" alt="" style="padding-top: 4px;">
                                        </td>
                                        <td valign="top" style="color:white; padding: 0 0 0 10px; ">
                                          <a href="<?php echo $json['course_7_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none;">
                                            <h5 style="color: <?php echo $json['hex_color'] ?>; margin: 5px 0 1px 0; font-size:17px; font-weight: 600;">

                                              <?php echo $json['course_7_name'] ?>

                                            </h5>
                                          </a>
                                          <p style="font-size: 13px; margin: 0 0 3px 0; line-height: 17px;">
                                            <a href="<?php echo $json['course_7_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none; color: white; font-weight: 400;">

                                              <strong>NYC:</strong> <?php echo $json['course_7_ny_dates'] ?>
                                              <br>
                                              <strong>LA:</strong> <?php echo $json['course_7_la_dates'] ?>
                                              <br>
                                              <strong>Online:</strong> <?php echo $json['course_7_online_dates'] ?>

                                            </a>
                                          </p>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                                <td>
                                  <table border="0" cellspacing="0" cellpadding="0" style="padding: 8px;">
                                    <tbody>
                                      <tr>
                                        <td style="padding: 4px 0 0 4px; vertical-align: top;" >
                                          <img src="<?php echo $image_folder ?>/_icons/<?php echo $json['course_8_icon'] ?>.png" width="33" height="33" alt="" style="padding-top: 4px;">
                                        </td>
                                        <td valign="top" style="color:white; padding: 0 0 0 10px; ">
                                          <a href="<?php echo $json['course_8_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none;">
                                            <h5 style="color: <?php echo $json['hex_color'] ?>; margin: 5px 0 1px 0; font-size:17px; font-weight: 600;">

                                              <?php echo $json['course_8_name'] ?>

                                            </h5>
                                          </a>
                                          <p style="font-size: 13px; margin: 0 0 3px 0; line-height: 17px;">
                                            <a href="<?php echo $json['course_8_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none; color: white; font-weight: 400;">

                                              <strong>NYC:</strong> <?php echo $json['course_8_ny_dates'] ?>
                                              <br>
                                              <strong>LA:</strong> <?php echo $json['course_8_la_dates'] ?>
                                              <br>
                                              <strong>Online:</strong> <?php echo $json['course_8_online_dates'] ?>

                                            </a>
                                          </p>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>

                              <tr>
                                <td>
                                  <table border="0" cellspacing="0" cellpadding="0" style="padding: 8px;">
                                    <tbody>
                                      <tr>
                                        <td style="padding: 4px 0 0 4px; vertical-align: top;" >
                                          <img src="<?php echo $image_folder ?>/_icons/<?php echo $json['course_9_icon'] ?>.png" width="33" height="33" alt="" style="padding-top: 4px;">
                                        </td>
                                        <td valign="top" style="color:white; padding: 0 0 0 10px; ">
                                          <a href="<?php echo $json['course_9_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none;">
                                            <h5 style="color: <?php echo $json['hex_color'] ?>; margin: 5px 0 1px 0; font-size:17px; font-weight: 600;">

                                              <?php echo $json['course_9_name'] ?>

                                            </h5>
                                          </a>
                                          <p style="font-size: 13px; margin: 0 0 3px 0; line-height: 17px;">
                                            <a href="<?php echo $json['course_9_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none; color: white; font-weight: 400;">

                                              <strong>NYC:</strong> <?php echo $json['course_9_ny_dates'] ?>
                                              <br>
                                              <strong>LA:</strong> <?php echo $json['course_9_la_dates'] ?>
                                              <br>
                                              <strong>Online:</strong> <?php echo $json['course_9_online_dates'] ?>

                                            </a>
                                          </p>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                                <td>
                                  <table border="0" cellspacing="0" cellpadding="0" style="padding: 8px;">
                                    <tbody>
                                      <tr>
                                        <td style="padding: 4px 0 0 4px; vertical-align: top;" >
                                          <img src="<?php echo $image_folder ?>/_icons/<?php echo $json['course_10_icon'] ?>.png" width="33" height="33" alt="" style="padding-top: 4px;">
                                        </td>
                                        <td valign="top" style="color:white; padding: 0 0 0 10px; ">
                                          <a href="<?php echo $json['course_10_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none;">
                                            <h5 style="color: <?php echo $json['hex_color'] ?>; margin: 5px 0 1px 0; font-size:17px; font-weight: 600;">

                                              <?php echo $json['course_10_name'] ?>

                                            </h5>
                                          </a>
                                          <p style="font-size: 13px; margin: 0 0 3px 0; line-height: 17px;">
                                            <a href="<?php echo $json['course_10_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none; color: white; font-weight: 400;">

                                              <strong>NYC:</strong> <?php echo $json['course_10_ny_dates'] ?>
                                              <br>
                                              <strong>LA:</strong> <?php echo $json['course_10_la_dates'] ?>
                                              <br>
                                              <strong>Online:</strong> <?php echo $json['course_10_online_dates'] ?>
                                              <br>
                                              <!-- <strong>LA:</strong> <?php echo $json['course_10_la_dates'] ?> -->

                                            </a>
                                          </p>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>


                              <tr>
                                <table id="sale-info" border="0" cellspacing="0" cellpadding="0" width="798" style="margin: 0; padding: 8px 8px 16px 8px;">
                                <tbody>
                                  <tr>
                                    <td style="color: white; padding-left: 12px;">
                                      <a href="http://dubspot.com/sale<?php echo $link_tracking ?>" style="vertical-align: top; height: 40px; width: 40px; border-radius: 40px; background: <?php echo $json['hex_color'] ?>; display: inline-block; margin-right: 3px; text-decoration: none; ">
                                        <h5 style="text-decoration: none; color: black; font-weight: 700;font-size: 16px; margin: 10px 0 0 4px; ">
                                          <?php echo $json['sale_amount'] ?>
                                        </h5>
                                      </a>
                                      <a href="http://dubspot.com/sale<?php echo $link_tracking ?>" style="text-align: left; color: white;">
                                        <h5 style="vertical-align: top; font-size: 16px; margin-bottom: 0; display: inline-block; margin-top: 11px; margin-bottom: 5px;">

                                          <?php echo $json['sale_headline'] ?>

                                          <br>
                                          <span style="font-size: 13px; font-weight: 400; margin-top: 0; display: inline-block;">
                                            <?php echo $json['sale_body'] ?>
                                          </span>

                                        </h5>
                                      </a>
                                    </td>
                                    <td style="text-align: right; "height="30">
                                      <a href="http://www.dubspot.com/courses/<?php echo $link_tracking ?>" style="font-size: 13px; margin-right: 16px; color: <?php echo $json['hex_color'] ?>;">

                                        See more dates &amp; register

                                      </a>
                                    </td>
                                  </tr>
                                </tbody>
                                </table>
                              </tr>


                            <!-- </table> -->
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>

                <!--========== End of COURSES Row  ===========-->








                <tr>
                  <td class="spacer" bgcolor="#f4f4f4" height="15"></td>
                </tr>













                <!--=======================================================
                =                   SECONDARY CONTENT Row                 =
                =========================================================-->

                <tr>
                    <td>
                      <table class="secondary-content" align="center" border="0" cellpadding="0" cellspacing="10">
                        <tbody>
                          <tr>

                            <td valign="top" bgcolor="#F4F4F4">
                              <table id="stories" border="0" cellspacing="0" cellpadding="0">



                                  <tr>
                                    <td class="article" valign="top" bgcolor="#f4f4f4" height="170" style="padding-bottom: 35px;">
                                      <table border="0" cellspacing="0" cellpadding="0" style="background: #EBEBEB;">
                                        <tbody>
                                          <tr>
                                            <td valign="top" style="color:white; padding: 8px; ">
                                              <a href="<?php echo $json['feature_1_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none;">
                                                <h4 style="font-size: 16px; color: black; margin: 0 0 0 0 ; width: 280px; line-height: 24px;">

                                                  <?php echo $json['feature_1_headline'] ?>

                                                </h4>
                                              </a>
                                              <p style="color: #777777; font-size: 13px; margin-top: 8px; padding-right: 14px; line-height: 21px;">

                                                  <?php echo $json['feature_1_body'] ?>

                                              </p>
                                            </td>
                                            <td style="text-align: right; padding: 8px;">
                                              <a href="<?php echo $json['feature_1_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none;">
                                                <img src="<?php echo $json['feature_1_img'] ?>" width="200" height="150" alt="">
                                              </a>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </td>
                                  </tr>

                                  <?php if(!empty($json['feature_2_headline'])) { ?>
                                  <tr>
                                    <td class="article" valign="top" bgcolor="#f4f4f4" height="170" style="padding-bottom: 35px;">
                                      <table border="0" cellspacing="0" cellpadding="0" style="background: #FBFBFB;">
                                        <tbody>
                                          <tr>
                                            <td valign="top" style="color:white; padding: 8px; ">
                                              <a href="<?php echo $json['feature_2_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none;">
                                                <h4 style="font-size: 16px; color: black; margin: 0 0 0 0 ; width: 280px; line-height: 24px;">

                                                  <?php echo $json['feature_2_headline'] ?>

                                                </h4>
                                              </a>
                                              <p style="color: #777777; font-size: 13px; margin-top: 8px; padding-right: 14px; line-height: 21px;">

                                                  <?php echo $json['feature_2_body'] ?>

                                              </p>
                                            </td>
                                            <td style="text-align: right; padding: 8px;">
                                              <a href="<?php echo $json['feature_2_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none;">
                                                <img src="<?php echo $json['feature_2_img'] ?>" width="200" height="150" alt="">
                                              </a>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </td>
                                  </tr>
                                  <?php  } ?>

                                  <?php if(!empty($json['feature_3_headline'])) { ?>
                                  <tr>
                                    <td class="article" valign="top" bgcolor="#f4f4f4" height="170" style="padding-bottom: 35px;">
                                      <table border="0" cellspacing="0" cellpadding="0" style="background: #EBEBEB;">
                                        <tbody>
                                          <tr>
                                            <td valign="top" style="color:white; padding: 8px; ">
                                              <a href="<?php echo $json['feature_3_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none;">
                                                <h4 style="font-size: 16px; color: black; margin: 0 0 0 0 ; width: 280px; line-height: 24px;">

                                                  <?php echo $json['feature_3_headline'] ?>

                                                </h4>
                                              </a>
                                              <p style="color: #777777; font-size: 13px; margin-top: 8px; padding-right: 14px; line-height: 21px;">

                                                  <?php echo $json['feature_3_body'] ?>

                                              </p>
                                            </td>
                                            <td style="text-align: right; padding: 8px;">
                                              <a href="<?php echo $json['feature_3_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none;">
                                                <img src="<?php echo $json['feature_3_img'] ?>" width="200" height="150" alt="">
                                              </a>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </td>
                                  </tr>
                                  <?php  } ?>

                                  <?php if(!empty($json['feature_4_headline'])) { ?>
                                  <tr>
                                    <td class="article" valign="top" bgcolor="#f4f4f4" height="170" style="padding-bottom: 35px;">
                                      <table border="0" cellspacing="0" cellpadding="0" style="background: #FBFBFB;">
                                        <tbody>
                                          <tr>
                                            <td valign="top" style="color:white; padding: 8px; ">
                                              <a href="<?php echo $json['feature_4_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none;">
                                                <h4 style="font-size: 16px; color: black; margin: 0 0 0 0 ; width: 280px; line-height: 24px;">

                                                  <?php echo $json['feature_4_headline'] ?>

                                                </h4>
                                              </a>
                                              <p style="color: #777777; font-size: 13px; margin-top: 8px; padding-right: 14px; line-height: 21px;">

                                                  <?php echo $json['feature_4_body'] ?>

                                              </p>
                                            </td>
                                            <td style="text-align: right; padding: 8px;">
                                              <a href="<?php echo $json['feature_4_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none;">
                                                <img src="<?php echo $json['feature_4_img'] ?>" width="200" height="150" alt="">
                                              </a>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </td>
                                  </tr>
                                  <?php  } ?>

                                  <?php if(!empty($json['feature_5_headline'])) { ?>
                                  <tr>
                                    <td class="article" valign="top" bgcolor="#f4f4f4" height="170" style="padding-bottom: 35px;">
                                      <table border="0" cellspacing="0" cellpadding="0" style="background: #EBEBEB;">
                                        <tbody>
                                          <tr>
                                            <td valign="top" style="color:white; padding: 8px; ">
                                              <a href="<?php echo $json['feature_5_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none;">
                                                <h4 style="font-size: 16px; color: black; margin: 0 0 0 0 ; width: 280px; line-height: 24px;">

                                                  <?php echo $json['feature_5_headline'] ?>

                                                </h4>
                                              </a>
                                              <p style="color: #777777; font-size: 13px; margin-top: 8px; padding-right: 14px; line-height: 21px;">

                                                  <?php echo $json['feature_5_body'] ?>

                                              </p>
                                            </td>
                                            <td style="text-align: right; padding: 8px;">
                                              <a href="<?php echo $json['feature_5_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none;">
                                                <img src="<?php echo $json['feature_5_img'] ?>" width="200" height="150" alt="">
                                              </a>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </td>
                                  </tr>
                                  <?php  } ?>

                                  <?php if(!empty($json['feature_6_headline'])) { ?>
                                  <tr>
                                    <td class="article" valign="top" bgcolor="#f4f4f4" height="170" style="padding-bottom: 20px;">
                                      <table border="0" cellspacing="0" cellpadding="0" style="background: #FBFBFB;">
                                        <tbody>
                                          <tr>
                                            <td valign="top" style="color:white; padding: 8px; ">
                                              <a href="<?php echo $json['feature_6_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none;">
                                                <h4 style="font-size: 16px; color: black; margin: 0 0 0 0 ; width: 280px; line-height: 24px;">

                                                  <?php echo $json['feature_6_headline'] ?>

                                                </h4>
                                              </a>
                                              <p style="color: #777777; font-size: 13px; margin-top: 8px; padding-right: 14px; line-height: 21px;">

                                                  <?php echo $json['feature_6_body'] ?>

                                              </p>
                                            </td>
                                            <td style="text-align: right; padding: 8px;">
                                              <a href="<?php echo $json['feature_6_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none;">
                                                <img src="<?php echo $json['feature_6_img'] ?>" width="200" height="150" alt="">
                                              </a>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </td>
                                  </tr>
                                  <?php  } ?>

                                 <?php if(!empty($json['feature_7_headline'])) { ?>
                                  <tr>
                                    <td class="article" valign="top" bgcolor="#f4f4f4" height="170" style="padding-bottom: 35px;">
                                      <table border="0" cellspacing="0" cellpadding="0" style="background: #EBEBEB;">
                                        <tbody>
                                          <tr>
                                            <td valign="top" style="color:white; padding: 8px; ">
                                              <a href="<?php echo $json['feature_7_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none;">
                                                <h4 style="font-size: 16px; color: black; margin: 0 0 0 0 ; width: 280px; line-height: 24px;">

                                                  <?php echo $json['feature_7_headline'] ?>

                                                </h4>
                                              </a>
                                              <p style="color: #777777; font-size: 13px; margin-top: 8px; padding-right: 14px; line-height: 21px;">

                                                  <?php echo $json['feature_7_body'] ?>

                                              </p>
                                            </td>
                                            <td style="text-align: right; padding: 8px;">
                                              <a href="<?php echo $json['feature_7_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none;">
                                                <img src="<?php echo $json['feature_7_img'] ?>" width="200" height="150" alt="">
                                              </a>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </td>
                                  </tr>
                                  <?php  } ?>

                                 <?php if(!empty($json['feature_8_headline'])) { ?>
                                  <tr>
                                    <td class="article" valign="top" bgcolor="#f4f4f4" height="170" style="padding-bottom: 35px;">
                                      <table border="0" cellspacing="0" cellpadding="0" style="background: #FBFBFB;">
                                        <tbody>
                                          <tr>
                                            <td valign="top" style="color:white; padding: 8px; ">
                                              <a href="<?php echo $json['feature_8_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none;">
                                                <h4 style="font-size: 16px; color: black; margin: 0 0 0 0 ; width: 280px; line-height: 24px;">

                                                  <?php echo $json['feature_8_headline'] ?>

                                                </h4>
                                              </a>
                                              <p style="color: #777777; font-size: 13px; margin-top: 8px; padding-right: 14px; line-height: 21px;">

                                                  <?php echo $json['feature_8_body'] ?>

                                              </p>
                                            </td>
                                            <td style="text-align: right; padding: 8px;">
                                              <a href="<?php echo $json['feature_8_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none;">
                                                <img src="<?php echo $json['feature_8_img'] ?>" width="200" height="150" alt="">
                                              </a>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </td>
                                  </tr>
                                  <?php  } ?>

                                 <?php if(!empty($json['feature_9_headline'])) { ?>
                                  <tr>
                                    <td class="article" valign="top" bgcolor="#f4f4f4" height="170" style="padding-bottom: 35px;">
                                      <table border="0" cellspacing="0" cellpadding="0" style="background: #EBEBEB;">
                                        <tbody>
                                          <tr>
                                            <td valign="top" style="color:white; padding: 8px; ">
                                              <a href="<?php echo $json['feature_9_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none;">
                                                <h4 style="font-size: 16px; color: black; margin: 0 0 0 0 ; width: 280px; line-height: 24px;">

                                                  <?php echo $json['feature_9_headline'] ?>

                                                </h4>
                                              </a>
                                              <p style="color: #777777; font-size: 13px; margin-top: 8px; padding-right: 14px; line-height: 21px;">

                                                  <?php echo $json['feature_9_body'] ?>

                                              </p>
                                            </td>
                                            <td style="text-align: right; padding: 8px;">
                                              <a href="<?php echo $json['feature_9_link'] ?><?php echo $link_tracking ?>" style="text-decoration: none;">
                                                <img src="<?php echo $json['feature_9_img'] ?>" width="200" height="150" alt="">
                                              </a>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </td>
                                  </tr>
                                  <?php  } ?>

                              </table>
                            </td>

                            <td class="horizontal-spacer" valign="top" bgcolor="#f4f4f4" height="25"></td>

                            <td class="bottom-sidebar" valign="top" bgcolor="#f4f4f4" >
                              <table border="0" cellspacing="0" cellpadding="0" width="250">
                                <tbody>
                                  <tr>
                                    <td class="bottom-sidebar-1" valign="top" bgcolor="#000000" height="400">
                                      <div class="ribbon" style="background: <?php echo $json['hex_color'] ?>; height: 30px; text-align: left; padding-left: 24px;">
                                        <h2 style="font-size: 16px; padding-top: 7px; margin-top: 0;">FRESH TUTORIALS</h2>
                                      </div>
                                      <table id="tutorials" border="0" cellspacing="0" cellpadding="" style="padding: 0 10px 0 10px;">


                                        <tr>
                                          <td style="margin-right: 12px; padding: 11px 0 10px 2px; border-bottom: 2px solid #333333;">
                                            <a href="<?php echo $json['tutorial_1_link'] ?><?php echo $link_tracking ?>">
                                              <img src="<?php echo $image_folder ?>/sidebar_tutorial_01.jpg" width="75" height="75" alt="">
                                            </a>
                                          </td>
                                          <td valign="top" style="padding: 10px 0 10px 12px; border-bottom: 2px solid #333333; ">
                                            <a href="<?php echo $json['tutorial_1_link'] ?><?php echo $link_tracking ?>" style="color:white; text-decoration: none;">
                                              <h6 style="font-size: 12px; margin: 0 0 3px 0; line-height: 16px;">

                                                  <?php echo $json['tutorial_1_headline'] ?>

                                              </h6>
                                              <p style="font-size: 12px; margin: 0 0 3px 0; line-height: 16px;">

                                                  <?php echo $json['tutorial_1_body'] ?>

                                              </p>
                                            </a>
                                          </td>
                                        </tr>

                                        <?php if(!empty($json['tutorial_2_headline'])) { ?>
                                        <tr>
                                          <td style="margin-right: 12px; padding: 11px 0 10px 2px; border-bottom: 2px solid #333333;">
                                            <a href="<?php echo $json['tutorial_2_link'] ?><?php echo $link_tracking ?>">
                                              <img src="<?php echo $image_folder ?>/sidebar_tutorial_02.jpg" width="75" height="75" alt="">
                                            </a>
                                          </td>
                                          <td valign="top" style="padding: 10px 0 10px 12px; border-bottom: 2px solid #333333; ">
                                            <a href="<?php echo $json['tutorial_2_link'] ?><?php echo $link_tracking ?>" style="color:white; text-decoration: none;">
                                              <h6 style="font-size: 12px; margin: 0 0 3px 0; line-height: 16px;">

                                                  <?php echo $json['tutorial_2_headline'] ?>

                                              </h6>
                                              <p style="font-size: 12px; margin: 0 0 3px 0; line-height: 16px;">

                                                  <?php echo $json['tutorial_2_body'] ?>

                                              </p>
                                            </a>
                                          </td>
                                        </tr>
                                        <?php  } ?>

                                        <?php if(!empty($json['tutorial_3_headline'])) { ?>
                                        <tr>
                                          <td style="margin-right: 12px; padding: 11px 0 10px 2px; border-bottom: 2px solid #333333;">
                                            <a href="<?php echo $json['tutorial_3_link'] ?><?php echo $link_tracking ?>">
                                              <img src="<?php echo $image_folder ?>/sidebar_tutorial_03.jpg" width="75" height="75" alt="">
                                            </a>
                                          </td>
                                          <td valign="top" style="padding: 10px 0 10px 12px; border-bottom: 2px solid #333333; ">
                                            <a href="<?php echo $json['tutorial_3_link'] ?><?php echo $link_tracking ?>" style="color:white; text-decoration: none;">
                                              <h6 style="font-size: 12px; margin: 0 0 3px 0; line-height: 16px;">

                                                  <?php echo $json['tutorial_3_headline'] ?>

                                              </h6>
                                              <p style="font-size: 12px; margin: 0 0 3px 0; line-height: 16px;">

                                                  <?php echo $json['tutorial_3_body'] ?>

                                              </p>
                                            </a>
                                          </td>
                                        </tr>
                                        <?php  } ?>

                                        <?php if(!empty($json['tutorial_4_headline'])) { ?>
                                        <tr>
                                          <td style="margin-right: 12px; padding: 11px 0 10px 2px; border-bottom: 2px solid #333333;">
                                            <a href="<?php echo $json['tutorial_4_link'] ?><?php echo $link_tracking ?>">
                                              <img src="<?php echo $image_folder ?>/sidebar_tutorial_04.jpg" width="75" height="75" alt="">
                                            </a>
                                          </td>
                                          <td valign="top" style="padding: 10px 0 10px 12px; border-bottom: 2px solid #333333; ">
                                            <a href="<?php echo $json['tutorial_4_link'] ?><?php echo $link_tracking ?>" style="color:white; text-decoration: none;">
                                              <h6 style="font-size: 12px; margin: 0 0 3px 0; line-height: 16px;">

                                                  <?php echo $json['tutorial_4_headline'] ?>

                                              </h6>
                                              <p style="font-size: 12px; margin: 0 0 3px 0; line-height: 16px;">

                                                  <?php echo $json['tutorial_4_body'] ?>

                                              </p>
                                            </a>
                                          </td>
                                        </tr>
                                        <?php  } ?>

                                        <?php if(!empty($json['tutorial_5_headline'])) { ?>
                                        <tr>
                                          <td style="margin-right: 12px; padding: 11px 0 10px 2px; border-bottom: 2px solid #333333;">
                                            <a href="<?php echo $json['tutorial_5_link'] ?><?php echo $link_tracking ?>">
                                              <img src="<?php echo $image_folder ?>/sidebar_tutorial_05.jpg" width="75" height="75" alt="">
                                            </a>
                                          </td>
                                          <td valign="top" style="padding: 10px 0 10px 12px; border-bottom: 2px solid #333333; ">
                                            <a href="<?php echo $json['tutorial_5_link'] ?><?php echo $link_tracking ?>" style="color:white; text-decoration: none;">
                                              <h6 style="font-size: 12px; margin: 0 0 3px 0; line-height: 16px;">

                                                  <?php echo $json['tutorial_5_headline'] ?>

                                              </h6>
                                              <p style="font-size: 12px; margin: 0 0 3px 0; line-height: 16px;">

                                                  <?php echo $json['tutorial_5_body'] ?>

                                              </p>
                                            </a>
                                          </td>
                                        </tr>
                                        <?php  } ?>

                                      </table>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td class="vertical-spacer" valign="top" bgcolor="#f4f4f4" height="10"></td>
                                  </tr>

                                  <tr>
                                    <td class="bottom-sidebar-2" valign="top" bgcolor="#000000">
                                      <div class="ribbon" style="background: <?php echo $json['hex_color'] ?>; height: 30px; text-align: left; padding-left: 24px;">
                                        <h2 style="font-size: 16px; padding-top: 7px; margin-top: 0;">ARTISTS</h2>
                                      </div>
                                      <table id="artists" border="0" cellspacing="0" cellpadding="0" style="padding: 0 10px 0 10px;">



                                        <tr>
                                          <td style="margin-right: 12px; padding: 11px 0 10px 2px; border-bottom: 2px solid #333333;">
                                            <a href="<?php echo $json['artist_1_link'] ?><?php echo $link_tracking ?>">
                                              <img src="<?php echo $image_folder ?>/sidebar_artist_01.jpg" width="75" height="75" alt="">
                                            </a>
                                          </td>
                                          <td valign="top" style="padding: 10px 0 10px 12px; border-bottom: 2px solid #333333; ">
                                            <a href="<?php echo $json['artist_1_link'] ?><?php echo $link_tracking ?>" style="color:white; text-decoration: none;">
                                              <h6 style="font-size: 12px; margin: 0 0 3px 0; line-height: 16px;">

                                                  <?php echo $json['artist_1_headline'] ?>

                                              </h6>
                                              <p style="font-size: 12px; margin: 0 0 3px 0; line-height: 16px;">

                                                  <?php echo $json['artist_1_body'] ?>

                                              </p>
                                            </a>
                                          </td>
                                        </tr>

                                        <?php if(!empty($json['artist_2_headline'])) { ?>
                                        <tr>
                                          <td style="margin-right: 12px; padding: 11px 0 10px 2px; border-bottom: 2px solid #333333;">
                                            <a href="<?php echo $json['artist_2_link'] ?><?php echo $link_tracking ?>">
                                              <img src="<?php echo $image_folder ?>/sidebar_artist_02.jpg" width="75" height="75" alt="">
                                            </a>
                                          </td>
                                          <td valign="top" style="padding: 10px 0 10px 12px; border-bottom: 2px solid #333333; ">
                                            <a href="<?php echo $json['artist_2_link'] ?><?php echo $link_tracking ?>" style="color:white; text-decoration: none;">
                                              <h6 style="font-size: 12px; margin: 0 0 3px 0; line-height: 16px;">

                                                  <?php echo $json['artist_2_headline'] ?>

                                              </h6>
                                              <p style="font-size: 12px; margin: 0 0 3px 0; line-height: 16px;">

                                                  <?php echo $json['artist_2_body'] ?>

                                              </p>
                                            </a>
                                          </td>
                                        </tr>
                                        <?php  } ?>

                                        <?php if(!empty($json['artist_3_headline'])) { ?>
                                        <tr>
                                          <td style="margin-right: 12px; padding: 11px 0 10px 2px; border-bottom: 2px solid #333333;">
                                            <a href="<?php echo $json['artist_3_link'] ?><?php echo $link_tracking ?>">
                                              <img src="<?php echo $image_folder ?>/sidebar_artist_03.jpg" width="75" height="75" alt="">
                                            </a>
                                          </td>
                                          <td valign="top" style="padding: 10px 0 10px 12px; border-bottom: 2px solid #333333; ">
                                            <a href="<?php echo $json['artist_3_link'] ?><?php echo $link_tracking ?>" style="color:white; text-decoration: none;">
                                              <h6 style="font-size: 12px; margin: 0 0 3px 0; line-height: 16px;">

                                                  <?php echo $json['artist_3_headline'] ?>

                                              </h6>
                                              <p style="font-size: 12px; margin: 0 0 3px 0; line-height: 16px;">

                                                  <?php echo $json['artist_3_body'] ?>

                                              </p>
                                            </a>
                                          </td>
                                        </tr>
                                        <?php  } ?>

                                        <?php if(!empty($json['artist_4_headline'])) { ?>
                                        <tr>
                                          <td style="margin-right: 12px; padding: 11px 0 10px 2px; border-bottom: 2px solid #333333;">
                                            <a href="<?php echo $json['artist_4_link'] ?><?php echo $link_tracking ?>">
                                              <img src="<?php echo $image_folder ?>/sidebar_artist_04.jpg" width="75" height="75" alt="">
                                            </a>
                                          </td>
                                          <td valign="top" style="padding: 10px 0 10px 12px; border-bottom: 2px solid #333333; ">
                                            <a href="<?php echo $json['artist_4_link'] ?><?php echo $link_tracking ?>" style="color:white; text-decoration: none;">
                                              <h6 style="font-size: 12px; margin: 0 0 3px 0; line-height: 16px;">

                                                  <?php echo $json['artist_4_headline'] ?>

                                              </h6>
                                              <p style="font-size: 12px; margin: 0 0 3px 0; line-height: 16px;">

                                                  <?php echo $json['artist_4_body'] ?>

                                              </p>
                                            </a>
                                          </td>
                                        </tr>
                                        <?php  } ?>

                                        <?php if(!empty($json['artist_5_headline'])) { ?>
                                        <tr>
                                          <td style="margin-right: 12px; padding: 11px 0 10px 2px; border-bottom: 2px solid #333333;">
                                            <a href="<?php echo $json['artist_5_link'] ?><?php echo $link_tracking ?>">
                                              <img src="<?php echo $image_folder ?>/sidebar_artist_05.jpg" width="75" height="75" alt="">
                                            </a>
                                          </td>
                                          <td valign="top" style="padding: 10px 0 10px 12px; border-bottom: 2px solid #333333; ">
                                            <a href="<?php echo $json['artist_5_link'] ?><?php echo $link_tracking ?>" style="color:white; text-decoration: none;">
                                              <h6 style="font-size: 12px; margin: 0 0 3px 0; line-height: 16px;">

                                                  <?php echo $json['artist_5_headline'] ?>

                                              </h6>
                                              <p style="font-size: 12px; margin: 0 0 3px 0; line-height: 16px;">

                                                  <?php echo $json['artist_5_body'] ?>

                                              </p>
                                            </a>
                                          </td>
                                        </tr>
                                        <?php  } ?>

                                      </table>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="vertical-spacer" valign="top" bgcolor="#f4f4f4" height="10"></td>
                                  </tr>
                                  <tr>
                                    <td class="bottom-sidebar-3" valign="top" bgcolor="#000000">
                                      <div class="ribbon" style="background: <?php echo $json['hex_color'] ?>; height: 30px; text-align: left; padding-left: 24px;">
                                        <h2 style="font-size: 16px; padding-top: 7px; margin-top: 0;">iOS + TECH ROUNDUP</h2>
                                      </div>
                                      <table id="tech-articles" border="0" cellspacing="0" cellpadding="0" style="padding: 0 10px 0 10px;">

                                        <tr>
                                          <td style="margin-right: 12px; padding: 9px 0 8px 2px; border-bottom: 2px solid #333333;">
                                            <a href="<?php echo $json['tech_1_link'] ?><?php echo $link_tracking ?>">
                                              <img src="<?php echo $image_folder ?>/sidebar_tech_01.jpg" width="75" height="75" alt="">
                                            </a>
                                          </td>
                                          <td valign="top" style="padding: 9px 0 10px 12px; border-bottom: 2px solid #333333; ">
                                            <a href="<?php echo $json['tech_1_link'] ?><?php echo $link_tracking ?>" style="color:white; text-decoration: none;">
                                              <h6 style="font-size: 12px; margin: 0 0 3px 0; line-height: 16px;">
                                                <?php echo $json['tech_1_headline'] ?>
                                              </h6>
                                              <p style="font-size: 12px; margin: 0 0 3px 0; line-height: 16px;">
                                                <?php echo $json['tech_1_body'] ?>
                                              </p>
                                            </a>
                                          </td>
                                        </tr>

                                        <?php if(!empty($json['tech_2_headline'])) { ?>
                                        <tr>
                                          <td style="margin-right: 12px; padding: 9px 0 8px 2px; border-bottom: 2px solid #333333;">
                                            <a href="<?php echo $json['tech_2_link'] ?><?php echo $link_tracking ?>">
                                              <img src="<?php echo $image_folder ?>/sidebar_tech_02.jpg" width="75" height="75" alt="">
                                            </a>
                                          </td>
                                          <td valign="top" style="padding: 9px 0 10px 12px; border-bottom: 2px solid #333333; ">
                                            <a href="<?php echo $json['tech_2_link'] ?><?php echo $link_tracking ?>" style="color:white; text-decoration: none;">
                                              <h6 style="font-size: 12px; margin: 0 0 3px 0; line-height: 16px;">
                                                 <?php echo $json['tech_2_headline'] ?>
                                              </h6>
                                              <p style="font-size: 12px; margin: 0 0 3px 0; line-height: 16px;">
                                                  <?php echo $json['tech_2_body'] ?>
                                              </p>
                                            </a>
                                           </td>
                                          </tr>
                                        <?php  } ?>

                                        <?php if(!empty($json['tech_3_headline'])) { ?>
                                        <tr>
                                          <td style="margin-right: 12px; padding: 9px 0 8px 2px; border-bottom: 2px solid #333333;">
                                            <a href="<?php echo $json['tech_3_link'] ?><?php echo $link_tracking ?>">
                                              <img src="<?php echo $image_folder ?>/sidebar_tech_03.jpg" width="75" height="75" alt="">
                                            </a>
                                          </td>
                                          <td valign="top" style="padding: 9px 0 10px 12px; border-bottom: 2px solid #333333; ">
                                            <a href="<?php echo $json['tech_3_link'] ?><?php echo $link_tracking ?>" style="color:white; text-decoration: none;">
                                              <h6 style="font-size: 12px; margin: 0 0 3px 0; line-height: 16px;">
                                                 <?php echo $json['tech_3_headline'] ?>
                                              </h6>
                                              <p style="font-size: 12px; margin: 0 0 3px 0; line-height: 16px;">
                                                  <?php echo $json['tech_3_body'] ?>
                                              </p>
                                            </a>
                                           </td>
                                          </tr>
                                        <?php  } ?>

                                        <?php if(!empty($json['tech_4_headline'])) { ?>
                                        <tr>
                                          <td style="margin-right: 12px; padding: 9px 0 8px 2px; border-bottom: 2px solid #333333;">
                                            <a href="<?php echo $json['tech_4_link'] ?><?php echo $link_tracking ?>">
                                              <img src="<?php echo $image_folder ?>/sidebar_tech_04.jpg" width="75" height="75" alt="">
                                            </a>
                                          </td>
                                          <td valign="top" style="padding: 9px 0 10px 12px; border-bottom: 2px solid #333333; ">
                                            <a href="<?php echo $json['tech_4_link'] ?><?php echo $link_tracking ?>" style="color:white; text-decoration: none;">
                                              <h6 style="font-size: 12px; margin: 0 0 3px 0; line-height: 16px;">
                                                 <?php echo $json['tech_4_headline'] ?>
                                              </h6>
                                              <p style="font-size: 12px; margin: 0 0 3px 0; line-height: 16px;">
                                                  <?php echo $json['tech_4_body'] ?>
                                              </p>
                                            </a>
                                           </td>
                                          </tr>
                                        <?php  } ?>

                                      </table>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>

                          </tr>
                        </tbody>
                      </table>
                    </td>
                </tr>

                <!--======= End of SECONDARY CONTENT Row  ========-->



                <!-- <tr><td class="spacer" bgcolor="#FFFFFF" height="45"></td></tr> -->







                <!--=======================================================
                =                         FOOTER Row                      =
                =========================================================-->

                <tr>
                  <td valign="center" bgcolor="#000000" style="color: white; text-align: right; font-family: Helvetica, Arial, sans-serif; font-size: 9px; line-height: 15px; ">
                    <table border="0" cellspacing="0" cellpadding="0" height="60">
                      <tbody>
                        <tr>
                          <td style="padding: 20px 20px 0 31px;">
                            <img src="http://dubspot.com/wp-content/uploads/ableton-logo.png" alt="">
                          </td>
                          <td style="padding-top: 20px;">
                            <a style="text-decoration: none;" href="http://www.dubspot.com/music-foundations/<?php echo $link_tracking ?>">
                              <img src="<?php echo $image_folder ?>/_icons/mf.png" style="margin-right: 5px;" width="35" alt="">
                            </a>
                            <a style="text-decoration: none;" href="http://www.dubspot.com/dj/<?php echo $link_tracking ?>">
                              <img src="<?php echo $image_folder ?>/_icons/dj.png" style="margin-right: 5px;" width="35" alt="">
                            </a>
                            <a style="text-decoration: none;" href="http://www.dubspot.com/music-production<?php echo $link_tracking ?>">
                              <img src="<?php echo $image_folder ?>/_icons/mp.png" style="margin-right: 5px;" width="35" alt="">
                            </a>
                            <a style="text-decoration: none;" href="http://www.dubspot.com/sound-design/<?php echo $link_tracking ?>">
                              <img src="<?php echo $image_folder ?>/_icons/sd.png" style="margin-right: 5px;" width="35" alt="">
                            </a>
                            <a style="text-decoration: none;" href="http://www.dubspot.com/mixing-mastering/<?php echo $link_tracking ?>">
                              <img src="<?php echo $image_folder ?>/_icons/mm.png" width="35" alt="">
                            </a>
                          </td>
                          <td style="padding: 20px 0 0 3px;">
                            <a style="text-decoration: none;" href="http://dubspot.com<?php echo $link_tracking ?>">
                              <img src="http://dubspot.com/wp-content/uploads/dubspot_on_black.png" width="250" alt="">
                            </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>

                <tr>
                  <td valign="center" bgcolor="#000000" style="text-align: center; padding: 0 0 20px 0; font-family: Helvetica, Arial, sans-serif; font-size: 12px; line-height: 15px;">
                      <p style="color: #777777;">&copy; <?php echo date('Y'); ?> DS14, Inc. - Dubspot - 348 West 14th Street, New York, NY 10014 - 212.242.2100 - 1.877.DUBSPOT (1.877.382.7768) - <a style="text-decoration: none; color: #CCCCCC; " href="http://www.dubspot.com/about/contact/<?php echo $link_tracking ?>">Contact Us</a></p>
                  </td>
                </tr>
                <!--=========== End of FOOTER Row  ==========-->





              </tbody><!-- end of main container tbody -->
            </table><!-- end of main container table -->
          </td><!-- end of page td -->
        </tr><!-- end of page row -->
      </tbody><!-- end of page tbody -->
    </table><!-- end of page table -->
  </body>
</html>