<?php
  $page_title = "Home"; 
  include '../header.php';
  require 'promo/functions.php';
 ?>

 <h2>Promo Newsletter Template</h2>

  <div class="row">
    <div class="12-large large-centered columns ">

      <form style="margin-top: 2em;" id="promo_newsletter_config">

        <div class="row">
          <div class="large-6 columns">
            <input type="submit" name="" value="Update" class="button">
            <a class="button success" href="promo/preview.php">Preview</a>
          </div>
        </div>
        <div class="row">
          <div class="large-12 columns">
            <p>Last updated: <strong><span class="last_updated"></span></strong></p>
          </div>
        </div>


        <dl class="accordion" data-accordion>








          <!--=======================================================
          =                       MAIN STORY Row                    =
          =========================================================-->          

          <dd>
            <a href="#panel1" style="background: #6fa1de; text-align:center; font-size: 1.5em;">Main Copy</a>
            <div id="panel1" class="content" style="background: #99bce7;">
              <div class="row"  style="background: #99bce7;">
                <div class="large-12 columns">
                  <h5>Main Story</h5>
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
                      <label class="left inline" for="main_story_headline">Sub-Headline:</label>            
                    </div>
                    <div class="large-10 columns">
                      <input type="text" id="main_story_sub-headline" name="main_story_sub-headline" placeholder="Main Story Sub-Headline" />            
                    </div>
                  </div>
                  <div class="row">
                    <div class="large-2 columns">
                      <label class="left inline" for="main_story_body1">Body (Part 1):</label>            
                    </div>
                    <div class="large-10 columns">
                      <textarea id="main_story_body1" name="main_story_body1" placeholder="Main Story Content Part 1" style="height: 140px;"></textarea>          
                    </div>
                  </div>
                  <div class="row">
                    <div class="large-2 columns">
                      <label class="left inline" for="main_story_body2">Body (Part 2):</label>            
                    </div>
                    <div class="large-10 columns">
                      <textarea id="main_story_body2" name="main_story_body2" placeholder="Main Story Content Part 2" style="height: 140px;"></textarea>          
                    </div>
                  </div>
                  <div class="row">
                    <div class="large-2 columns">
                      <label class="left inline" for="main_story_body3">Body (Part 3):</label>            
                    </div>
                    <div class="large-10 columns">
                      <textarea id="main_story_body3" name="main_story_body3" placeholder="Main Story Content Part 3" style="height: 140px;"></textarea>          
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
                        <label class="left inline" for="sale_headline">Sale Headline:</label>            
                      </div>
                      <div class="large-10 columns">
                        <input type="text" id="sale_headline" name="sale_headline" placeholder="Sale Headline"></input>          
                      </div>
                    </div>        
                  </div>
                </div>
                                                                                                  
            </div>
          </dd>

          <!--================= End of SALE INFO ===================-->






          <!--=======================================================
          =                          VIDEOS                         =
          =========================================================-->

          <dd>
            <a href="#panel4" style="background: #bce799; text-align:center; font-size: 1.5em;">Videos</a>
            <div id="panel4" class="content" style="background: #d7f1c2">
              <div class="row">
              <div class="large-12 columns">
                <h4>Tutorial Videos</h4>
                <h5>Video 1</h5>
                <div class="row">
                  <div class="large-2 columns">
                    <label class="left inline" for="video_1_link">Link:</label>            
                  </div>
                  <div class="large-10 columns">
                    <input type="text" id="video_1_link" name="video_1_link"placeholder="Video 1 Link URL" />            
                  </div>
                </div>
                <div class="row">
                  <div class="large-2 columns">
                    <label class="left inline" for="video_1_img">Image:</label>            
                  </div>
                  <div class="large-10 columns">
                    <input type="text" id="video_1_img" name="video_1_img"placeholder="Video 1 Image URL" />            
                  </div>
                </div>
              


                <br>
                <h5>Video 2</h5>
                <div class="row">
                  <div class="large-2 columns">
                    <label class="left inline" for="video_2_link">Link:</label>            
                  </div>
                  <div class="large-10 columns">
                    <input type="text" id="video_2_link" name="video_2_link"placeholder="Video 2 Link URL" />            
                  </div>
                </div>
                <div class="row">
                  <div class="large-2 columns">
                    <label class="left inline" for="video_2_img">Image:</label>            
                  </div>
                  <div class="large-10 columns">
                    <input type="text" id="video_2_img" name="video_2_img"placeholder="Video 2 Image URL" />            
                  </div>
                </div>
                <br>
                <h5>Video 3</h5>
                <div class="row">
                  <div class="large-2 columns">
                    <label class="left inline" for="video_3_link">Link:</label>            
                  </div>
                  <div class="large-10 columns">
                    <input type="text" id="video_3_link" name="video_3_link"placeholder="Video 3 Link URL" />            
                  </div>
                </div>
                <div class="row">
                  <div class="large-2 columns">
                    <label class="left inline" for="video_3_img">Image:</label>            
                  </div>
                  <div class="large-10 columns">
                    <input type="text" id="video_3_img" name="video_3_img"placeholder="Video 3 Image URL" />            
                  </div>
                </div>
              </div>
              </div>      
            </div>
          </dd>

          <!--================= End of VIDEO Row  ==================-->    








          <!--========================================================
          =                          OPTIONS                        =
          =========================================================-->

          <dd>
            <a href="#panel5" style="background: lightgrey; text-align:center; font-size: 1.5em;">Options</a>
            <div id="panel5" class="content" style="background: lightgrey;">

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









        <div class="row">
          <div class="large-12 columns">
            <p>Last updated: <strong><span class="last_updated"></span></strong></p>
          </div>
        </div>

        <div class="row">
          <div class="large-6 columns">
            <input type="submit" name="" value="Update" class="button">
            <a class="button success" href="promo/preview.php">Preview</a>
          </div>
        </div>
       
      </form>

    </div>  
  </div>

    
</div>
</div>

    <script src="<?php echo $root ?>js/vendor/jquery.js"></script>
    <script src="<?php echo $root ?>js/foundation.min.js"></script>
    <script>
      $(document).foundation();

      $.getJSON( "<?php echo latestVersion('promo/') ?>", function( data ) {
        $.each( data, function( key, value ) {
          $('input[name='+"'" + key + "'"+ ']').val(value);
          $('textarea[name='+"'" + key + "'"+ ']').val(value);
          if (key == "last_updated") {
            $('.last_updated').text(value);
          }          
        });
      });


      $("#promo_newsletter_config").submit(function() {

          var url = "promo/config.php"; // the script where you handle the form input.

          $.ajax({
                 type: "POST",
                 url: url,
                 data: $("#promo_newsletter_config").serialize(), // serializes the form's elements.
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
