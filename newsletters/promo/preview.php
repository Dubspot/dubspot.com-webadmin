<?php
include 'functions.php';
$json = json_decode(file_get_contents(latestVersion()),true);
$link_tracking = "?c1=Newsletter&amp;source=" . date('My') . "&amp;kw=" . date('My') . "_" . $json['short_name'];
$image_folder = 'http://dubspot.s3.amazonaws.com/Newsletters/' . strtolower("2014-".date('m')."-promo");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta name="generator" content="HTML Tidy for Mac OS X (vers 31 October 2006 - Apple Inc. build 15.12), see www.w3.org">
    <title>
      Dubspot Newsletter | <?php echo date('F Y') ?>
    </title>
  </head>
  <body>
    <div id="announcement-container">
      <div class="announcement" style="background: black;padding-bottom: 4em;width: 760px;margin: 0 auto; border: 1px solid #777777;">














        <!--===========================================
        =                   HEADER Row                =
        =============================================-->

        <div id="header" style="background-color:#FFFFFF; margin: 0 auto;">
           <table border="0" cellspacing="0" cellpadding="0" width="760">
              <tr>
                <td width="475">
                  <!-- Dubspot Logo -->
                  <a href="http://www.dubspot.com/<?php echo $link_tracking ?>" style="text-decoration: none;color: #02FEFE">
                    <img id="logo" src="http://dubspot.com/email-images/icons/dubspot_on_white.jpg" style="display: block;margin: 0;padding: 0;border: none;color: #111111;" name="logo">
                  </a>
                </td>
                <td width="285">
                  <!-- Social Begin -->
                  <div style="color:#FFFFFF;background-color:#FFFFFF;line-height:45px;font-size:1px;">
                    .
                  </div>
                  <table border="0" cellspacing="0" cellpadding="0" width="285" >
                    <tr>
                      <td width="19">
                        <a href="http://www.facebook.com/DubSpot" style="text-decoration:none;">
                          <img src="http://www.dubspot.com/email-images/icons/social_fb.jpg" style="display:block; outline:none; border:none;" height="30" width="19">
                        </a>
                      </td>
                      <td width="18">
                        <a href="http://www.twitter.com/dubspot" style="text-decoration:none;">
                          <img src="http://www.dubspot.com/email-images/icons/social_tw.jpg" style="display:block; outline:none; border:none;" height="30" width="18">
                        </a>
                      </td>
                      <td width="18">
                        <a href="http://www.youtube.com/user/DubSpot" style="text-decoration:none;">
                          <img src="http://www.dubspot.com/email-images/icons/social_yt.jpg" style="display:block; outline:none; border:none;" height="30" width="18">
                        </a>
                      </td>
                      <td width="18">
                        <a href="http://soundcloud.com/dubspot" style="text-decoration:none;">
                          <img src="http://www.dubspot.com/email-images/icons/social_sc.jpg" style="display:block; outline:none; border:none;" height="30" width="18">
                        </a>
                      </td>
                      <td width="18">
                        <a href="http://www.instagram.com/dubspot" style="text-decoration:none;">
                          <img src="http://www.dubspot.com/email-images/icons/social_in.jpg" style="display:block; outline:none; border:none;" height="30" width="19">
                        </a>
                      </td>
                      <td width="100">
                        <div style="line-height:30px; font-size:1px; color:#FFFFFF; background-color:#FFFFFF;">
                          .
                        </div>
                      </td>
                    </tr>
                  </table>
                  <div style="color:#FFFFFF;background-color:#FFFFFF;line-height:5px;font-size:1px;">
                    .
                  </div>
                  <div style="color:#000000;background-color:#FFFFFF;line-height:12px;font-size:12px; font-family: Helvetica, Arial, sans-serif;">
                    Dubspot NY Open House - Sundays 11am + 12pm
                  </div>
                  <div style="color:#FFFFFF;background-color:#FFFFFF;line-height:35px;font-size:1px;">
                    .
                  </div><!-- Social End -->
                </td>
              </tr>
            </table>
        </div>

        <!--========== End of HEADER Row  ===========-->















        <a class="announcement-banner" href="<?php echo $json['main_story_link'] ?>" style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;background-image: url(<?php echo $image_folder ?>/header.jpg);display: block;height: 255px;width: 760px;background-size: 760px;background-repeat: no-repeat;"></a><!-- end .announcement-banner -->
















        <div class="announcement-content" style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0 auto;font-size: 15px;text-decoration: none;width: 692px;padding-top: 48px;">




          <!--===========================================
          =                MAIN CONTENT Row             =
          =============================================-->

          <h1 style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 42px;text-decoration: none;color: <?php echo $json['hex_color'] ?>;margin-bottom: 12px;font-weight: 800;">

            <?php echo $json['main_story_headline'] ?>
            <br>
          </h1>
          <h2 style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 22px;text-decoration: none;color: white;margin-bottom: 24px;text-align: justify; font-weight: 500;">

            <?php echo $json['main_story_sub-headline'] ?>

          </h2>
          <div class="announcement-body-copy" style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0 auto;font-size: 15px; text-decoration: none;text-align: justify;width: 692px;">
            <p style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 1em 0 2em 0;font-size: 16px;text-decoration: none;color: white;font-weight: 400; line-height: 1.4em;">


              <?php echo $json['main_story_body1'] ?>
              <br><br>
              <?php echo $json['main_story_body2'] ?>
              <br><br>
              <?php echo $json['main_story_body3'] ?>

              <br>
              <a href="<?php echo $json['main_story_link'] ?>" style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 16px;text-decoration: none;font-weight: 700;color: <?php echo $json['hex_color'] ?>;">
                <b style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">Learn more
                </b>
              </a>
            </p>
          </div>

          <!--======= End of MAIN CONTENT Row  ========-->













          <hr style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 1em 0;font-size: 15px;text-decoration: none;display: block;height: 1px;border: 0;border-top: 1px solid #ccc;padding: 0;">












          <!--===========================================
          =                  COURSES Row                =
          =============================================-->

          <div class="announcement-extra-content" style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 1em 0 0 0;font-size: 15px;text-decoration: none;">
            <h3 style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 18px;text-decoration: none; color: white;">
              Upcoming courses:
             </h3>
          </div>



          <div class="announcement-courses" style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none; height: 316px; padding-top: 18px;">

            <div style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0 0 18px 0;font-size: 15px;text-decoration: none;width: 158px;height: 64px;float: left;">
              <a href="<?php echo $json['course_1_link'] ?>" style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                <h4 style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;color: <?php echo $json['hex_color'] ?>;padding-bottom: 4px;font-weight: 400;">
                <?php echo $json['course_1_name'] ?>
                </h4>
                <h5 style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 13px;text-decoration: none;color: white;font-weight: 400;">
                  NYC: <?php echo $json['course_1_ny_dates'] ?>
                  <br style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                  LA: <?php echo $json['course_1_la_dates'] ?>
                  <br style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                  Online: <?php echo $json['course_1_online_dates'] ?>
                </h5>
              </a>
              <a href="<?php echo $json['course_1_link'] ?>" style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                <h6 style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 11px;text-decoration: none;color: <?php echo $json['hex_color'] ?>;">
                  &gt; See More Dates
                </h6>
              </a>
            </div>


            <div style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0 0 18px 18px;font-size: 15px;text-decoration: none;width: 158px;height: 64px;float: left;">
              <a href="<?php echo $json['course_2_link'] ?>" style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                <h4 style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;color: <?php echo $json['hex_color'] ?>;padding-bottom: 4px;font-weight: 400;">
                <?php echo $json['course_2_name'] ?>
                </h4>
                <h5 style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 13px;text-decoration: none;color: white;font-weight: 400;">
                  NYC: <?php echo $json['course_2_ny_dates'] ?>
                  <br style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                  LA: <?php echo $json['course_2_la_dates'] ?>
                  <br style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                  Online: <?php echo $json['course_2_online_dates'] ?>
                </h5>
              </a>
              <a href="<?php echo $json['course_2_link'] ?>" style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                <h6 style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 11px;text-decoration: none;color: <?php echo $json['hex_color'] ?>;">
                  &gt; See More Dates
                </h6>
              </a>
            </div>


            <div style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0 0 18px 18px;font-size: 15px;text-decoration: none;width: 158px;height: 64px;float: left;">
              <a href="<?php echo $json['course_3_link'] ?>" style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                <h4 style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;color: <?php echo $json['hex_color'] ?>;padding-bottom: 4px;font-weight: 400;">
                <?php echo $json['course_3_name'] ?>
                </h4>
                <h5 style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 13px;text-decoration: none;color: white;font-weight: 400;">
                  NYC: <?php echo $json['course_3_ny_dates'] ?>
                  <br style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                  LA: <?php echo $json['course_3_la_dates'] ?>
                  <br style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                  Online: <?php echo $json['course_3_online_dates'] ?>
                </h5>
              </a>
              <a href="<?php echo $json['course_3_link'] ?>" style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                <h6 style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 11px;text-decoration: none;color: <?php echo $json['hex_color'] ?>;">
                  &gt; See More Dates
                </h6>
              </a>
            </div>


            <div style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0 0 18px 18px;font-size: 15px;text-decoration: none;width: 158px;height: 64px;float: left;">
              <a href="<?php echo $json['course_4_link'] ?>" style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                <h4 style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;color: <?php echo $json['hex_color'] ?>;padding-bottom: 4px;font-weight: 400;">
                <?php echo $json['course_4_name'] ?>
                </h4>
                <h5 style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 13px;text-decoration: none;color: white;font-weight: 400;">
                  NYC: <?php echo $json['course_4_ny_dates'] ?>
                  <br style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                  LA: <?php echo $json['course_4_la_dates'] ?>
                  <br style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                  Online: <?php echo $json['course_4_online_dates'] ?>
                </h5>
              </a>
              <a href="<?php echo $json['course_4_link'] ?>"  style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                <h6 style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 11px;text-decoration: none;color: <?php echo $json['hex_color'] ?>;">
                  &gt; See More Dates
                </h6>
              </a>
             </div>

            <!-- <div style="width: 200px; height: 36px; float: left;"></div> -->

            <div style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 36px 0 0 0;font-size: 15px;text-decoration: none;width: 158px;height: 64px;float: left;  clear: both;">
              <a href="<?php echo $json['course_5_link'] ?>" style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                <h4 style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;color: <?php echo $json['hex_color'] ?>;padding-bottom: 4px;font-weight: 400;">
                <?php echo $json['course_5_name'] ?>
                </h4>
                <h5 style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 13px;text-decoration: none;color: white;font-weight: 400;">
                  NYC: <?php echo $json['course_5_ny_dates'] ?>
                  <br style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                  LA: <?php echo $json['course_5_la_dates'] ?>
                  <br style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                  Online: <?php echo $json['course_5_online_dates'] ?>
                </h5>
              </a>
              <a href="<?php echo $json['course_5_link'] ?>"  style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                <h6 style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 11px;text-decoration: none;color: <?php echo $json['hex_color'] ?>;">
                  &gt; See More Dates
                </h6>
              </a>
            </div>


            <div style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 36px 0 0 18px;font-size: 15px;text-decoration: none;width: 158px;height: 64px;float: left; ">
              <a href="<?php echo $json['course_6_link'] ?>" style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                <h4 style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;color: <?php echo $json['hex_color'] ?>;padding-bottom: 4px;font-weight: 400;">
                <?php echo $json['course_6_name'] ?>
                </h4>
                <h5 style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 13px;text-decoration: none;color: white;font-weight: 400;">
                  NYC: <?php echo $json['course_6_ny_dates'] ?>
                  <br style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                  LA: <?php echo $json['course_6_la_dates'] ?>
                  <br style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                  Online: <?php echo $json['course_6_online_dates'] ?>
                </h5>
              </a>
              <a href="<?php echo $json['course_6_link'] ?>" style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                <h6 style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 11px;text-decoration: none;color: <?php echo $json['hex_color'] ?>;">
                  &gt; See More Dates
                </h6>
              </a>
            </div>


            <div style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 36px 0 0 18px;font-size: 15px;text-decoration: none;width: 158px;height: 64px;float: left; ">
              <a href="<?php echo $json['course_7_link'] ?>" style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                <h4 style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;color: <?php echo $json['hex_color'] ?>;padding-bottom: 4px;font-weight: 400;">
                <?php echo $json['course_7_name'] ?>
                </h4>
                <h5 style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 13px;text-decoration: none;color: white;font-weight: 400;">
                  NYC: <?php echo $json['course_7_ny_dates'] ?>
                  <br style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                  LA: <?php echo $json['course_7_la_dates'] ?>
                  <br style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                  Online: <?php echo $json['course_7_online_dates'] ?>
                </h5>
              </a>
              <a href="<?php echo $json['course_7_link'] ?>" style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                <h6 style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 11px;text-decoration: none;color: <?php echo $json['hex_color'] ?>;">
                  &gt; See More Dates
                </h6>
              </a>
            </div>


            <div style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 36px 0 0 18px;font-size: 15px;text-decoration: none;width: 158px;height: 64px;float: left; ">
              <a href="<?php echo $json['course_8_link'] ?>" style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                <h4 style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;color: <?php echo $json['hex_color'] ?>;padding-bottom: 4px;font-weight: 400;">
                <?php echo $json['course_8_name'] ?>
                </h4>
                <h5 style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 13px;text-decoration: none;color: white;font-weight: 400;">
                  NYC: <?php echo $json['course_8_ny_dates'] ?>
                  <br style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                  LA: <?php echo $json['course_8_la_dates'] ?>
                  <br style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                  Online: <?php echo $json['course_8_online_dates'] ?>
                </h5>
              </a>
              <a href="<?php echo $json['course_8_link'] ?>" style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                <h6 style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 11px;text-decoration: none;color: <?php echo $json['hex_color'] ?>;">
                  &gt; See More Dates
                </h6>
              </a>
            </div>

           <!-- <div style="width: 800px; height: 36px; float: left; "></div> -->


            <div style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 36px 0 0 0px;font-size: 15px;text-decoration: none;width: 158px;height: 64px;float: left; ">
              <a href="<?php echo $json['course_9_link'] ?>" style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                <h4 style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;color: <?php echo $json['hex_color'] ?>;padding-bottom: 4px;font-weight: 400;">
                <?php echo $json['course_9_name'] ?>
                </h4>
                <h5 style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 13px;text-decoration: none;color: white;font-weight: 400;">
                  NYC: <?php echo $json['course_9_ny_dates'] ?>
                  <br style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                  LA: <?php echo $json['course_9_la_dates'] ?>
                  <br style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                  Online: <?php echo $json['course_9_online_dates'] ?>
                </h5>
              </a>
              <a href="<?php echo $json['course_9_link'] ?>" style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                <h6 style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 11px;text-decoration: none;color: <?php echo $json['hex_color'] ?>;">
                  &gt; See More Dates
                </h6>
              </a>
            </div>


            <div style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 36px 0 0 18px;font-size: 15px;text-decoration: none;width: 158px;height: 64px;float: left; ">
              <a href="<?php echo $json['course_10_link'] ?>" style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                <h4 style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;color: <?php echo $json['hex_color'] ?>;padding-bottom: 4px;font-weight: 400;">
                <?php echo $json['course_10_name'] ?>
                </h4>
                <h5 style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 13px;text-decoration: none;color: white;font-weight: 400;">
                  NYC: <?php echo $json['course_10_ny_dates'] ?>
                  <br style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                  LA: <?php echo $json['course_10_la_dates'] ?>
                  <br style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                  Online: <?php echo $json['course_10_online_dates'] ?>
                </h5>
              </a>
              <a href="<?php echo $json['course_10_link'] ?>" style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;">
                <h6 style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 11px;text-decoration: none;color: <?php echo $json['hex_color'] ?>;">
                  &gt; See More Dates
                </h6>
              </a>
            </div>


          </div><!-- end .announcement-courses -->








          <!-- <br><br> -->








          <div class="announcement-courses-footer" style="clear: both; -webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 36px 0 18px 0;font-size: 14px;text-decoration: none;color: white;">
            <p style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 1em 0;font-size: 16px;text-decoration: none;color: #777777;font-weight: 400;">
              <a href="http://www.dubspot.com/sale<?php echo $link_tracking ?>" style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 16px;text-decoration: none;color: <?php echo $json['hex_color'] ?>;">
                <?php echo $json['sale_headline'] ?>
              </a>
            </p>
          </div>








          <a id="register-button" href="http://www.dubspot.com/sale<?php echo $link_tracking ?>" style="background: <?php echo $json['hex_color'] ?>; border-radius: 6px; -webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;font-size: 15px;text-decoration: none;display: block;font-weight: 700;width: 174px;height: 41px;margin: 2em 0; text-align: center; -webkit-transition: box-shadow 150ms linear;-moz-transition: box-shadow 150ms linear;-ms-transition: box-shadow 150ms linear;-o-transition: box-shadow 150ms linear;transition: box-shadow 150ms linear; color: black !important;line-height: 41px;" name="register-button">
            Learn More
          </a>




          <!--========== End of COURSES Row  ===========-->



          <hr style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 1em 0;font-size: 15px;text-decoration: none;display: block;height: 1px;border: 0;border-top: 1px solid #ccc;padding: 0;">



        </div><!-- end .announcement-content -->
















        <!--===========================================
        =                  VIDEOS Row                 =
        =============================================-->

        <div class="announcement-videos" style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0 auto; margin-top: 32px;font-size: 15px;text-decoration: none;width: 692px;margin-bottom: 2em;min-height: 202px;">
          <div style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;width: 202px;height: 114px;float: left;">
            <h4 style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 13px;text-decoration: none;color: white;padding-bottom: 4px;font-weight: 400;margin-bottom: 6px;text-align: left;">
              <?php echo $json['video_1_title'] ?>
            </h4>
            <a href="<?php echo $json['video_1_link'] ?><?php echo $link_tracking ?>">
              <img style="width: 200px; height: 150px; border: 1px solid #777777;" src="<?php echo $json['video_1_img'] ?>" alt="">
            </a>
          </div>
          <div style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;width: 202px;height: 114px;float: left;margin-left: 42px;">
            <h4 style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 13px;text-decoration: none;color: white;padding-bottom: 4px;font-weight: 400;margin-bottom: 6px;text-align: left;">
              <?php echo $json['video_2_title'] ?>
            </h4>
            <a href="<?php echo $json['video_2_link']  ?><?php echo $link_tracking ?>">
              <img style="width: 200px; height: 150px; border: 1px solid #777777;" src="<?php echo $json['video_2_img'] ?>" alt="">
            </a>
          </div>
          <div style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;width: 202px;height: 114px;float: left;margin-left: 42px;">
            <h4 style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 13px;text-decoration: none;color: white;padding-bottom: 4px;font-weight: 400;margin-bottom: 6px;text-align: left;">
              <?php echo $json['video_3_title'] ?>
            </h4>
            <a href="<?php echo $json['video_3_link']  ?><?php echo $link_tracking ?>">
              <img style="width: 200px; height: 150px; border: 1px solid #777777;" src="<?php echo $json['video_3_img'] ?>" alt="">
            </a>
          </div>
          <div class="clearfix:after" style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 0;font-size: 15px;text-decoration: none;width: 202px;height: 0;float: left;margin-left: 42px;"></div>
        </div><!-- end .announcement-videos -->

        <!--========== End of VIDEOS Row  ===========-->















        <hr style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;font-family: Helvetica, Arial, sans-serif;margin: 1em 0;font-size: 15px;text-decoration: none;display: block;height: 1px;border: 0;border-top: 1px solid #ccc;padding: 0; width: 692px; margin: 0 auto;">















        <!--===========================================
        =                   FOOTER Row                =
        =============================================-->
        <div id="footer" style="margin-top: 2em;background-color: #000000; color: #B9B9B9; font-family: Arial, Helvetica, sans-serif; font-size:11px; font-weight:bold; height: 93px; width: 760px; text-align:center;">
          <a href="http://www.dubspot.com/<?php echo $link_tracking ?>" style="text-decoration: none;color: #B9B9B9;font-weight: normal">
            <img alt="" src="http://www.dubspot.com/email-images/icons/footer.png" style="border: none;margin: 0 auto;padding: 0 0 0 0;display: block;color: #111">
          </a>
          <p style="display: block;margin: 0px auto;padding: 5px 0px 10px 0px;border: none;color: #B9B9B9">
            &copy; <?php echo date('Y'); ?> DS14, Inc. - Dubspot - 348 West 14th Street, New York, NY 10014 - 212.242.2100 - 1.877.DUBSPOT (1.877.382.7768) -
            <a href="http://www.dubspot.com/about/contact/<?php echo $link_tracking ?>" style="color: #B9B9B9;text-decoration: none">
              Contact Us
            </a>
          </p>
        </div>

        <!--========== End of FOOTER Row  ===========-->










      </div><!-- end .announcement -->
    </div><!-- end .announcement-container -->
  </body>
</html>
