<?php
  $page_title = "Home";
  include '../header.php';
  require 'extensive/functions.php';
 ?>

 <h2>Extensive Newsletter Template</h2>

  <div class="row">
    <div class="12-large large-centered columns ">

      <form style="margin-top: 2em;" id="extensive_newsletter_config">

        <div class="row">
          <div class="large-6 columns">
            <input type="submit" name="" value="Update" class="button">
            <a class="button success" href="extensive/preview.php">Preview</a>
          </div>
        </div>
        <div class="row">
          <div class="large-12 columns">
            <p>Last updated: <strong><span class="last_updated"></span></strong></p>
          </div>
        </div>


          <dl class="accordion" data-accordion>

            <!--=======================================================
            =                       MAIN CONTENT Row                  =
            =========================================================-->

            <dd>
              <a href="#panel1" style="background: #6fa1de; text-align:center; font-size: 1.5em;">Main Copy</a>
              <div id="panel1" class="content" style="background: #99bce7;">
                  <div class="row"  style="background: #99bce7;">
                    <div class="large-12 columns">
                      <h5>Main Story</h5>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="main_story_ribbon">Ribbon:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="main_story_ribbon" name="main_story_ribbon" placeholder="Main Story Ribbon" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="main_story_headline">Headline:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="main_story_headline" name="main_story_headline" placeholder="Main Story Headline" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="main_story_body">Body:</label>
                        </div>
                        <div class="large-10 columns">
                          <textarea id="main_story_body" name="main_story_body" placeholder="Main Story Content" style="height: 140px;"></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="main_story_link">Link:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="main_story_link" name="main_story_link" placeholder="Main Story URL" />
                        </div>
                      </div>


                      <br>
                      <h5>Main Story (Right)</h5>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="main_story_right_ribbon">Ribbon:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="main_story_right_ribbon" name="main_story_right_ribbon" placeholder="Main Story (Right) Ribbon" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="main_story_right_headline">Headline:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="main_story_right_headline" name="main_story_right_headline" placeholder="Main Story (Right) Headline" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="main_story_right_body">Body:</label>
                        </div>
                        <div class="large-10 columns">
                          <textarea id="main_story_right_body" name="main_story_right_body" placeholder="Main Story (Right) Content" style="height: 100px;"></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="main_story_right_link">Link:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="main_story_right_link" name="main_story_right_link"placeholder="Main Story (Right) URL" />
                        </div>
                      </div>

                      <br>
                      <h5>Events</h5>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="events_ribbon">Ribbon:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="events_ribbon" name="events_ribbon" placeholder="Events  Ribbon" />
                        </div>
                      </div>
                      <h6>Event 1 (Right)</h6>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="event_1_headline">Headline:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="event_1_headline" name="event_1_headline" placeholder="Event 1 Headline" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="event_1_body">Body:</label>
                        </div>
                        <div class="large-10 columns">
                          <textarea id="event_1_body" name="event_1_body" placeholder="Event 1 Content"></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="event_1_link">Link:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="event_1_link" name="event_1_link"placeholder="Event 1 URL" />
                        </div>
                      </div>


                      <h6>Event 2 (Right)</h6>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="event_2_headline">Headline:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="event_2_headline" name="event_2_headline" placeholder="Event 2 Headline" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="event_2_body">Body:</label>
                        </div>
                        <div class="large-10 columns">
                          <textarea id="event_2_body" name="event_2_body" placeholder="Event 2 Content"></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="event_2_link">Link:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="event_2_link" name="event_2_link"placeholder="Event 2 URL" />
                        </div>
                      </div>


                      <h6>Event 3 (Right)</h6>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="event_3_headline">Headline:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="event_3_headline" name="event_3_headline" placeholder="Event 3 Headline" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="event_3_body">Body:</label>
                        </div>
                        <div class="large-10 columns">
                          <textarea id="event_3_body" name="event_3_body" placeholder="Event 3  Content"></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="event_3_link">Link:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="event_3_link" name="event_3_link"placeholder="Event 3 URL" />
                        </div>
                      </div>


                    </div>
                  </div>
              </div>
            </dd>

            <!--============= End of MAIN CONTENT Row  ==============-->










            <!--=======================================================
            =                     UPCOMING COURSES                    =
            =========================================================-->

            <dd>
              <a href="#panel2" style="background: #70d8dd; text-align:center; font-size: 1.5em;">Upcoming Courses</a>
              <div id="panel2" class="content" style="background: #99e3e7;">
                  <div class="row">
                    <div class="large-12 columns">
                      <h5>Course 1</h5>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_1_name">Course Name:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_1_name" name="course_1_name" placeholder="Course 1 Name" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_1_ny_dates">NY Dates:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_1_ny_dates" name="course_1_ny_dates" placeholder="Course 1 NY Dates"></input>
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_1_la_dates">LA Dates:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_1_la_dates" name="course_1_la_dates"placeholder="Course 1 LA Dates" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_1_online_dates">Online Dates:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_1_online_dates" name="course_1_online_dates"placeholder="Course 1 Online Dates" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_1_link">Link:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="course_1_link" name="course_1_link"placeholder="Course 1 Link URL" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_1_icon">Icon:</label>
                        </div>
                        <div class="large-10 columns">
                          <select id="course_1_icon" name="course_1_icon">
                            <option value="mf">Music Foundations</option>
                            <option value="dj">DJ</option>
                            <option value="mp">Music Production</option>
                            <option value="mm">Mixing and Mastering</option>
                            <option value="sd">Sound Design</option>
                          </select>
                        </div>
                      </div>
                      <br>
                    </div>
                  </div>

                  <div class="row">
                    <div class="large-12 columns">
                      <h5>Course 2</h5>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_2_name">Course Name:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_2_name" name="course_2_name" placeholder="Course 2 Name" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_2_ny_dates">NY Dates:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_2_ny_dates" name="course_2_ny_dates" placeholder="Course 2 NY Dates"></input>
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_2_la_dates">LA Dates:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_2_la_dates" name="course_2_la_dates"placeholder="Course 2 LA Dates" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_2_online_dates">Online Dates:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_2_online_dates" name="course_2_online_dates"placeholder="Course 2 Online Dates" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_2_link">Link:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="course_2_link" name="course_2_link"placeholder="Course 2 Link URL" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_2_icon">Icon:</label>
                        </div>
                        <div class="large-10 columns">
                          <select id="course_2_icon" name="course_2_icon">
                            <option value="mf">Music Foundations</option>
                            <option value="dj">DJ</option>
                            <option value="mp">Music Production</option>
                            <option value="mm">Mixing and Mastering</option>
                            <option value="sd">Sound Design</option>
                          </select>
                        </div>
                      </div>
                      <br>
                    </div>
                  </div>

                  <div class="row">
                    <div class="large-12 columns">
                      <h5>Course 3</h5>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_3_name">Course Name:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_3_name" name="course_3_name" placeholder="Course 3 Name" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_3_ny_dates">NY Dates:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_3_ny_dates" name="course_3_ny_dates" placeholder="Course 3 NY Dates"></input>
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_3_la_dates">LA Dates:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_3_la_dates" name="course_3_la_dates"placeholder="Course 3 LA Dates" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_3_online_dates">Online Dates:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_3_online_dates" name="course_3_online_dates"placeholder="Course 3 Online Dates" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_3_link">Link:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="course_3_link" name="course_3_link"placeholder="Course 3 Link URL" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_3_icon">Icon:</label>
                        </div>
                        <div class="large-10 columns">
                          <select id="course_3_icon" name="course_3_icon">
                            <option value="mf">Music Foundations</option>
                            <option value="dj">DJ</option>
                            <option value="mp">Music Production</option>
                            <option value="mm">Mixing and Mastering</option>
                            <option value="sd">Sound Design</option>
                          </select>
                        </div>
                      </div>
                      <br>
                    </div>
                  </div>

                  <div class="row">
                    <div class="large-12 columns">
                      <h5>Course 4</h5>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_4_name">Course Name:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_4_name" name="course_4_name" placeholder="Course 4 Name" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_4_ny_dates">NY Dates:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_4_ny_dates" name="course_4_ny_dates" placeholder="Course 4 NY Dates"></input>
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_4_la_dates">LA Dates:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_4_la_dates" name="course_4_la_dates"placeholder="Course 4 LA Dates" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_4_online_dates">Online Dates:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_4_online_dates" name="course_4_online_dates"placeholder="Course 4 Online Dates" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_4_link">Link:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="course_4_link" name="course_4_link"placeholder="Course 4 Link URL" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_4_icon">Icon:</label>
                        </div>
                        <div class="large-10 columns">
                          <select id="course_4_icon" name="course_4_icon">
                            <option value="mf">Music Foundations</option>
                            <option value="dj">DJ</option>
                            <option value="mp">Music Production</option>
                            <option value="mm">Mixing and Mastering</option>
                            <option value="sd">Sound Design</option>
                          </select>
                        </div>
                      </div>

                      <br>
                    </div>
                  </div>

                  <div class="row">
                    <div class="large-12 columns">
                      <h5>Course 5</h5>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_5_name">Course Name:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_5_name" name="course_5_name" placeholder="Course 5 Name" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_5_ny_dates">NY Dates:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_5_ny_dates" name="course_5_ny_dates" placeholder="Course 5 NY Dates"></input>
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_5_la_dates">LA Dates:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_5_la_dates" name="course_5_la_dates"placeholder="Course 5 LA Dates" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_5_online_dates">Online Dates:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_5_online_dates" name="course_5_online_dates"placeholder="Course 5 Online Dates" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_5_link">Link:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="course_5_link" name="course_5_link"placeholder="Course 5 Link URL" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_5_icon">Icon:</label>
                        </div>
                        <div class="large-10 columns">
                          <select id="course_5_icon" name="course_5_icon">
                            <option value="mf">Music Foundations</option>
                            <option value="dj">DJ</option>
                            <option value="mp">Music Production</option>
                            <option value="mm">Mixing and Mastering</option>
                            <option value="sd">Sound Design</option>
                          </select>
                        </div>
                      </div>
                      <br>
                    </div>
                  </div>

                  <div class="row">
                    <div class="large-12 columns">
                      <h5>Course 6</h5>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_6_name">Course Name:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_6_name" name="course_6_name" placeholder="Course 6 Name" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_6_ny_dates">NY Dates:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_6_ny_dates" name="course_6_ny_dates" placeholder="Course 6 NY Dates"></input>
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_6_la_dates">LA Dates:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_6_la_dates" name="course_6_la_dates"placeholder="Course 6 LA Dates" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_6_online_dates">Online Dates:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_6_online_dates" name="course_6_online_dates"placeholder="Course 6 Online Dates" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_6_link">Link:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="course_6_link" name="course_6_link"placeholder="Course 6 Link URL" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_6_icon">Icon:</label>
                        </div>
                        <div class="large-10 columns">
                          <select id="course_6_icon" name="course_6_icon">
                            <option value="mf">Music Foundations</option>
                            <option value="dj">DJ</option>
                            <option value="mp">Music Production</option>
                            <option value="mm">Mixing and Mastering</option>
                            <option value="sd">Sound Design</option>
                          </select>
                        </div>
                      </div>
                      <br>
                    </div>
                  </div>

                  <div class="row">
                    <div class="large-12 columns">
                      <h5>Course 7</h5>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_7_name">Course Name:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_7_name" name="course_7_name" placeholder="Course 7 Name" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_7_ny_dates">NY Dates:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_7_ny_dates" name="course_7_ny_dates" placeholder="Course 7 NY Dates"></input>
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_7_la_dates">LA Dates:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_7_la_dates" name="course_7_la_dates"placeholder="Course 7 LA Dates" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_7_online_dates">Online Dates:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_7_online_dates" name="course_7_online_dates"placeholder="Course 7 Online Dates" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_7_link">Link:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="course_7_link" name="course_7_link"placeholder="Course 7 Link URL" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_7_icon">Icon:</label>
                        </div>
                        <div class="large-10 columns">
                          <select id="course_7_icon" name="course_7_icon">
                            <option value="mf">Music Foundations</option>
                            <option value="dj">DJ</option>
                            <option value="mp">Music Production</option>
                            <option value="mm">Mixing and Mastering</option>
                            <option value="sd">Sound Design</option>
                          </select>
                        </div>
                      </div>
                      <br>
                    </div>
                  </div>

                  <div class="row">
                    <div class="large-12 columns">
                      <h5>Course 8</h5>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_8_name">Course Name:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_8_name" name="course_8_name" placeholder="Course 8 Name" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_8_ny_dates">NY Dates:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_8_ny_dates" name="course_8_ny_dates" placeholder="Course 8 NY Dates"></input>
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_8_la_dates">LA Dates:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_8_la_dates" name="course_8_la_dates"placeholder="Course 8 LA Dates" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_8_online_dates">Online Dates:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_8_online_dates" name="course_8_online_dates"placeholder="Course 8 Online Dates" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_8_link">Link:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="course_8_link" name="course_8_link"placeholder="Course 8 Link URL" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_8_icon">Icon:</label>
                        </div>
                        <div class="large-10 columns">
                          <select id="course_8_icon" name="course_8_icon">
                            <option value="mf">Music Foundations</option>
                            <option value="dj">DJ</option>
                            <option value="mp">Music Production</option>
                            <option value="mm">Mixing and Mastering</option>
                            <option value="sd">Sound Design</option>
                          </select>
                        </div>
                      </div>

                      <br>
                    </div>
                  </div>

                  <div class="row">
                    <div class="large-12 columns">
                      <h5>Course 9</h5>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_9_name">Course Name:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_9_name" name="course_9_name" placeholder="Course 9 Name" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_9_ny_dates">NY Dates:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_9_ny_dates" name="course_9_ny_dates" placeholder="Course 9 NY Dates"></input>
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_9_la_dates">LA Dates:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_9_la_dates" name="course_9_la_dates"placeholder="Course 9 LA Dates" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_9_online_dates">Online Dates:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_9_online_dates" name="course_9_online_dates"placeholder="Course 9 Online Dates" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_9_link">Link:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="course_9_link" name="course_9_link"placeholder="Course 9 Link URL" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_9_icon">Icon:</label>
                        </div>
                        <div class="large-10 columns">
                          <select id="course_9_icon" name="course_9_icon">
                            <option value="mf">Music Foundations</option>
                            <option value="dj">DJ</option>
                            <option value="mp">Music Production</option>
                            <option value="mm">Mixing and Mastering</option>
                            <option value="sd">Sound Design</option>
                          </select>
                        </div>
                      </div>

                      <br>
                    </div>
                  </div>

                  <div class="row">
                    <div class="large-12 columns">
                      <h5>Course 10</h5>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_10_name">Course Name:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_10_name" name="course_10_name" placeholder="Course 10 Name" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_10_ny_dates">NY Dates:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_10_ny_dates" name="course_10_ny_dates" placeholder="Course 10 NY Dates"></input>
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_10_la_dates">LA Dates:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_10_la_dates" name="course_10_la_dates"placeholder="Course 10 LA Dates" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_10_online_dates">Online Dates:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="course_10_online_dates" name="course_10_online_dates"placeholder="Course 10 Online Dates" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_10_link">Link:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="course_10_link" name="course_10_link"placeholder="Course 10 Link URL" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="course_10_icon">Icon:</label>
                        </div>
                        <div class="large-10 columns">
                          <select id="course_10_icon" name="course_10_icon">
                            <option value="mf">Music Foundations</option>
                            <option value="dj">DJ</option>
                            <option value="mp">Music Production</option>
                            <option value="mm">Mixing and Mastering</option>
                            <option value="sd">Sound Design</option>
                          </select>
                        </div>
                      </div>
                      <br>
                    </div>
                  </div>

              </div>
            </dd>

            <!--============= End of UPCOMING COURSES ===============-->










            <!--=======================================================
            =                         SALE INFO                       =
            =========================================================-->

            <dd>
              <a href="#panel3" style="background: #70dd75; text-align:center; font-size: 1.5em;">Sale Info</a>
              <div id="panel3" class="content" style="background: #99e79d;">
                  <div class="row">
                    <div class="large-12 columns">
                      <h5>Sale Info</h5>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="sale_amount">Sale Amount:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="sale_amount" name="sale_amount" placeholder="Sale Amount" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="sale_headline">Sale Headline:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="sale_headline" name="sale_headline" placeholder="Sale Headline"></input>
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="sale_body">Sale Body:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="sale_body" name="sale_body"placeholder="Sale Body" />
                        </div>
                      </div>
                    </div>
                  </div>

              </div>
            </dd>

            <!--================= End of SALE INFO ===================-->





            <!--=======================================================
            =                         FEATURES                        =
            =========================================================-->

            <dd>
              <a href="#panel4" style="background: #bce799; text-align:center; font-size: 1.5em;">Stories</a>
              <div id="panel4" class="content" style="background: #d7f1c2;">
                  <div class="row">
                    <div class="large-12 columns">
                      <h5>Feature 1</h5>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="feature_1_headline">Headline:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="feature_1_headline" name="feature_1_headline" placeholder="Feature 1 Headline" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="feature_1_body">Body:</label>
                        </div>
                        <div class="large-10 columns">
                          <textarea id="feature_1_body" name="feature_1_body" placeholder="Feature 1 Content"></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="feature_1_link">Link:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="feature_1_link" name="feature_1_link"placeholder="Feature 1 URL" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="feature_1_img">Image:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="feature_1_img" name="feature_1_img"placeholder="Feature 1 Image URL" />
                        </div>
                      </div>

                      <br>
                      <h5>Feature 2</h5>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="feature_2_headline">Headline:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="feature_2_headline" name="feature_2_headline" placeholder="Feature 2 Headline" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="feature_2_body">Body:</label>
                        </div>
                        <div class="large-10 columns">
                          <textarea id="feature_2_body" name="feature_2_body" placeholder="Feature 2 Content"></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="feature_2_link">Link:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="feature_2_link" name="feature_2_link"placeholder="Feature 2 URL" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="feature_2_img">Image:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="feature_2_img" name="feature_2_img"placeholder="Feature 2 Image URL" />
                        </div>
                      </div>

                      <br>
                      <h5>Feature 3</h5>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="feature_3_headline">Headline:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="feature_3_headline" name="feature_3_headline" placeholder="Feature 3 Headline" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="feature_3_body">Body:</label>
                        </div>
                        <div class="large-10 columns">
                          <textarea id="feature_3_body" name="feature_3_body" placeholder="Feature 3 Content"></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="feature_3_link">Link:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="feature_3_link" name="feature_3_link"placeholder="Feature 3 URL" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="feature_3_img">Image:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="feature_3_img" name="feature_3_img"placeholder="Feature 3 Image URL" />
                        </div>
                      </div>

                      <br>
                      <h5>Feature 4</h5>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="feature_4_headline">Headline:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="feature_4_headline" name="feature_4_headline" placeholder="Feature 4 Headline" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="feature_4_body">Body:</label>
                        </div>
                        <div class="large-10 columns">
                          <textarea id="feature_4_body" name="feature_4_body" placeholder="Feature 4 Content"></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="feature_4_link">Link:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="feature_4_link" name="feature_4_link"placeholder="Feature 4 URL" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="feature_4_img">Image:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="feature_4_img" name="feature_4_img"placeholder="Feature 4 Image URL" />
                        </div>
                      </div>

                      <br>
                      <h5>Feature 5</h5>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="feature_5_headline">Headline:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="feature_5_headline" name="feature_5_headline" placeholder="Feature 5 Headline" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="feature_5_body">Body:</label>
                        </div>
                        <div class="large-10 columns">
                          <textarea id="feature_5_body" name="feature_5_body" placeholder="Feature 5 Content"></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="feature_5_link">Link:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="feature_5_link" name="feature_5_link"placeholder="Feature 5 URL" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="feature_5_img">Image:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="feature_5_img" name="feature_5_img"placeholder="Feature 5 Image URL" />
                        </div>
                      </div>

                      <br>

                      <h5>Feature 6</h5>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="feature_6_headline">Headline:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="feature_6_headline" name="feature_6_headline" placeholder="Feature 6 Headline" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="feature_6_body">Body:</label>
                        </div>
                        <div class="large-10 columns">
                          <textarea id="feature_6_body" name="feature_6_body" placeholder="Feature 6 Content"></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="feature_6_link">Link:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="feature_6_link" name="feature_6_link"placeholder="Feature 6 URL" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="feature_6_img">Image:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="feature_6_img" name="feature_6_img"placeholder="Feature 6 Image URL" />
                        </div>
                      </div>

                    </div>
                  </div>

              </div>
            </dd>

            <!--================= End of FEATURES ===================-->








            <!--========================================================
            =                         TUTORIALS                        =
            =========================================================-->

            <dd>
              <a href="#panel5" style="background: #d7dd70; text-align:center; font-size: 1.5em;">Tutorials</a>
              <div id="panel5" class="content" style="background: #eef1c2;">

                  <div class="row">
                    <div class="large-12 columns">
                      <h5>Tutorial 1</h5>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="tutorial_1_headline">Headline:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="tutorial_1_headline" name="tutorial_1_headline" placeholder="Tutorial 1 Headline" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="tutorial_1_body">Body:</label>
                        </div>
                        <div class="large-10 columns">
                          <textarea id="tutorial_1_body" name="tutorial_1_body" placeholder="Tutorial 1 Content"></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="tutorial_1_link">Link:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="tutorial_1_link" name="tutorial_1_link"placeholder="Tutorial 1 URL" />
                        </div>
                      </div>

                      <br>
                      <h5>Tutorial 2</h5>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="tutorial_2_headline">Headline:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="tutorial_2_headline" name="tutorial_2_headline" placeholder="Tutorial 2 Headline" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="tutorial_2_body">Body:</label>
                        </div>
                        <div class="large-10 columns">
                          <textarea id="tutorial_2_body" name="tutorial_2_body" placeholder="Tutorial 2 Content"></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="tutorial_2_link">Link:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="tutorial_2_link" name="tutorial_2_link"placeholder="Tutorial 2 URL" />
                        </div>
                      </div>

                      <br>
                      <h5>Tutorial 3</h5>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="tutorial_3_headline">Headline:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="tutorial_3_headline" name="tutorial_3_headline" placeholder="Tutorial 3 Headline" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="tutorial_3_body">Body:</label>
                        </div>
                        <div class="large-10 columns">
                          <textarea id="tutorial_3_body" name="tutorial_3_body" placeholder="Tutorial 3 Content"></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="tutorial_3_link">Link:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="tutorial_3_link" name="tutorial_3_link"placeholder="Tutorial 3 URL" />
                        </div>
                      </div>

                      <br>
                      <h5>Tutorial 4</h5>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="tutorial_4_headline">Headline:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="tutorial_4_headline" name="tutorial_4_headline" placeholder="Tutorial 4 Headline" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="tutorial_4_body">Body:</label>
                        </div>
                        <div class="large-10 columns">
                          <textarea id="tutorial_4_body" name="tutorial_4_body" placeholder="Tutorial 4 Content"></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="tutorial_4_link">Link:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="tutorial_4_link" name="tutorial_4_link"placeholder="Tutorial 4 URL" />
                        </div>
                      </div>

                      <br>
                      <h5>Tutorial 5</h5>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="tutorial_5_headline">Headline:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="tutorial_5_headline" name="tutorial_5_headline" placeholder="Tutorial 5 Headline" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="tutorial_5_body">Body:</label>
                        </div>
                        <div class="large-10 columns">
                          <textarea id="tutorial_5_body" name="tutorial_5_body" placeholder="Tutorial 5 Content"></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="tutorial_5_link">Link:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="tutorial_5_link" name="tutorial_5_link"placeholder="Tutorial 5 URL" />
                        </div>
                      </div>
                    </div>
                  </div>

              </div>
            </dd>

            <!--================= End of TUTORIALS ===================-->







            <!--========================================================
            =                          ARTISTS                         =
            =========================================================-->

            <dd>
              <a href="#panel6" style="background: #e7c499; text-align:center; font-size: 1.5em;">Artists</a>
              <div id="panel6" class="content" style="background: #f1dcc2;">
                  <div class="row" >
                    <div class="large-12 columns">
                      <h5>Artist 1</h5>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="artist_1_headline">Headline:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="artist_1_headline" name="artist_1_headline" placeholder="Artist 1 Headline" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="artist_1_body">Body:</label>
                        </div>
                        <div class="large-10 columns">
                          <textarea id="artist_1_body" name="artist_1_body" placeholder="Artist 1 Content"></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="artist_1_link">Link:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="artist_1_link" name="artist_1_link"placeholder="Artist 1 URL" />
                        </div>
                      </div>

                      <br>
                      <h5>Artist 2</h5>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="artist_2_headline">Headline:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="artist_2_headline" name="artist_2_headline" placeholder="Artist 2 Headline" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="artist_2_body">Body:</label>
                        </div>
                        <div class="large-10 columns">
                          <textarea id="artist_2_body" name="artist_2_body" placeholder="Artist 2 Content"></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="artist_2_link">Link:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="artist_2_link" name="artist_2_link"placeholder="Artist 2 URL" />
                        </div>
                      </div>

                      <br>
                      <h5>Artist 3</h5>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="artist_3_headline">Headline:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="artist_3_headline" name="artist_3_headline" placeholder="Artist 3 Headline" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="artist_3_body">Body:</label>
                        </div>
                        <div class="large-10 columns">
                          <textarea id="artist_3_body" name="artist_3_body" placeholder="Artist 3 Content"></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="artist_3_link">Link:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="artist_3_link" name="artist_3_link"placeholder="Artist 3 URL" />
                        </div>
                      </div>

                      <br>
                      <h5>Artist 4</h5>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="artist_4_headline">Headline:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="artist_4_headline" name="artist_4_headline" placeholder="Artist 4 Headline" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="artist_4_body">Body:</label>
                        </div>
                        <div class="large-10 columns">
                          <textarea id="artist_4_body" name="artist_4_body" placeholder="Artist 4 Content"></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="artist_4_link">Link:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="artist_4_link" name="artist_4_link"placeholder="Artist 4 URL" />
                        </div>
                      </div>

                      <br>
                      <h5>Artist 5</h5>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="artist_5_headline">Headline:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="artist_5_headline" name="artist_5_headline" placeholder="Artist 5 Headline" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="artist_5_body">Body:</label>
                        </div>
                        <div class="large-10 columns">
                          <textarea id="artist_5_body" name="artist_5_body" placeholder="Artist 5 Content"></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="artist_5_link">Link:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="artist_5_link" name="artist_5_link"placeholder="Artist 5 URL" />
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </dd>

            <!--================= End of ARTISTS ===================-->








            <!--========================================================
            =                            TECH                          =
            =========================================================-->

            <dd>
              <a href="#panel7" style="background: #e799bc; text-align:center; font-size: 1.5em;">Tech</a>
              <div id="panel7" class="content" style="background: #f1c2d7;">

                  <div class="row">
                    <div class="large-12 columns">
                      <h5>Tech 1</h5>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="tech_1_headline">Headline:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="tech_1_headline" name="tech_1_headline" placeholder="Tech 1 Headline" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="tech_1_body">Body:</label>
                        </div>
                        <div class="large-10 columns">
                          <textarea id="tech_1_body" name="tech_1_body" placeholder="Tech 1 Content"></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="tech_1_link">Link:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="tech_1_link" name="tech_1_link"placeholder="Tech 1 URL" />
                        </div>
                      </div>

                      <br>
                      <h5>Tech 2</h5>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="tech_2_headline">Headline:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="tech_2_headline" name="tech_2_headline" placeholder="Tech 2 Headline" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="tech_2_body">Body:</label>
                        </div>
                        <div class="large-10 columns">
                          <textarea id="tech_2_body" name="tech_2_body" placeholder="Tech 2 Content"></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="tech_2_link">Link:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="tech_2_link" name="tech_2_link"placeholder="Tech 2 URL" />
                        </div>
                      </div>

                      <br>
                      <h5>Tech 3</h5>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="tech_3_headline">Headline:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="tech_3_headline" name="tech_3_headline" placeholder="Tech 3 Headline" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="tech_3_body">Body:</label>
                        </div>
                        <div class="large-10 columns">
                          <textarea id="tech_3_body" name="tech_3_body" placeholder="Tech 3 Content"></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="tech_3_link">Link:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="url" id="tech_3_link" name="tech_3_link"placeholder="Tech 3 URL" />
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </dd>

            <!--=================== End of TECH =====================-->




            <!--========================================================
            =                          OPTIONS                        =
            =========================================================-->

            <dd>
              <a href="#panel8" style="background: lightgrey; text-align:center; font-size: 1.5em;">Options</a>
              <div id="panel8" class="content" style="background: lightgrey;">

                <div class="row">
                    <div class="large-12 columns">
                      <h4>Highlight Color</h4>
                      <div class="row">
                        <div class="large-2 columns">
                          <label class="left inline" for="hex_color">Color:</label>
                        </div>
                        <div class="large-10 columns">
                          <input type="text" id="hex_color" name="hex_color"placeholder="#HEXPLZ" />
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="large-12 columns">
                      <h4>Tracking Code</h4>
                      <div class="row collapse">
                        <div class="large-2 columns">
                          <label class="left inline" for="short_name">Code:</label>
                        </div>
                        <div class="large-2 columns">
                          <span class="prefix"><?php shortDate() ?>_</span>
                        </div>
                        <div class="large-8 columns">
                          <input type="text" id="short_name" name="short_name"placeholder="Newsletter Shortname" />
                        </div>
                      </div>
                    </div>
                  </div>



              </div>
            </dd>

            <!--=================== End of OPTIONS =====================-->

          </dl>






        <br><br>


       <div class="row">
          <div class="large-12 columns">
            <p>Last updated: <strong><span class="last_updated"></span></strong></p>
          </div>
        </div>
        <div class="row">
          <div class="large-6 columns">
            <input type="submit" name="" value="Update" class="button">
            <a class="button success" href="extensive/preview.php">Preview</a>
          </div>
        </div>

      </form>

    </div>
  </div>


<!--
                  <div class="row">
                    <div class="large-12 columns">
                      <h4>Upload Images</h4>
                      <form action="extensive/upload_file.php" method="post" enctype="multipart/form-data">
                        <label for="file">Filename:</label>
                        <input type="file" name="file" id="file"><br>
                        <input type="file" name="file" id="file"><br>
                        <input type="file" name="file" id="file"><br>
                        <input type="file" name="file" id="file"><br>
                        <input type="submit" name="submit" value="Submit">
                      </form>
                    </div>
                  </div> -->


</div>
</div>

    <script src="<?php echo $root ?>js/vendor/jquery.js"></script>
    <script src="<?php echo $root ?>js/foundation.min.js"></script>
    <script>
      $(document).foundation();

      $.getJSON( "<?php echo latestVersion('extensive/') ?>", function( data ) {
        $.each( data, function( key, value ) {
          $('input[name='+"'" + key + "'"+ ']').val(value);
          $('textarea[name='+"'" + key + "'"+ ']').val(value);
          $('select[name='+"'"+key+"'"+']').val(value);
          if (key == "last_updated") {
            $('.last_updated').text(value);
          }
        });
      });


      $("#extensive_newsletter_config").submit(function() {

          var url = "extensive/config.php"; // the script where you handle the form input.

          $.ajax({
                 type: "POST",
                 url: url,
                 data: $("#extensive_newsletter_config").serialize(), // serializes the form's elements.
                 success: function(data)
                 {
                     alert("Newsletter has been updated."); // show response from the php script.
                 }
               });

          return false; // avoid to execute the actual submit of the form.
      });

    </script>

  </body>
</html>
