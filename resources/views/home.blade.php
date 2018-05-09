@extends('layout.app')
@section('content')

<script>
  $(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide"
  });
});
</script>


<body>

<div class="container">
    <div class="container">

        <div class="box2">
            <table align="center">
              <tr>
            <th><center>Quick Navigation</center></th>
              </tr>

              <tr align="center">
                  <td bgcolor="white"><br/><a href="https://www.msu.edu.my/" target="_blank"><img src="Images/msu1.png" alt="MSU page" width="auto" height="auto" class="center"></a><br/><center>Management
                  and Science University</center></a>
                </td>

                <tr align="center">
                    <td bgcolor="white"><a href="/calendar" target="_blank"><img src="Images/calendar.png" alt="MSU Academic Calendar" width="auto" height="auto" class="center"></a><br/><center>MSU Academic Calendar</center></a>
                  </td>

                <tr align="center">
                    <td bgcolor="white"><a href="https://www.instagram.com/msumalaysia/?hl=en" target="_blank"><img src="Images/insta.png" alt="MSU Instagram page" width="auto" height="auto" class="center"></a><br/><center>MSU Instagram</center></a>
                  </td>

                  <tr align="center">
                      <td bgcolor="white"><a href="https://twitter.com/MSUmalaysia" target="_blank"><img src="Images/twitter.png" alt="MSU Twitter page" width="auto" height="auto" class="center"></a><br/><center>MSU Twitter</center></a>
                    </td>

            </table>
          </div>

          <div class="box1">
              <table align="center">
                  <tr>
                <th><center>Welcome!</center></th>
                  </tr>

                  <tr align="center">
                      <td bgcolor="white"><center>All students need to update their personal details before <strong>24th of December 2018.</strong></center></a>
                      </td>

                      <tr align="center">
                          <td bgcolor="white"><center>As according to the GEmS planner, each student needs to join the activities based on the requirements needed in order to graduate.</center></a>
                          </td> 

                          <tr align="center">
                              <td bgcolor="white"><center>Please be reminded to follow the GEmS planner for each semester that has been outlined.</center></a>     
                              </td>

                              <tr align="center">
                                  <td bgcolor="white"><center>Students are advised to join the briefing for the GEmS activities on <strong>26th of September 2018.</strong> Registration must be made before
                                    <strong>4th of September 2018</strong> to respective mentors.</center></a>     
                                  </td>

                              <tr>
                                <th><center>Latest Activities</center></th>
                                  </tr>

                                  <tr align="center">
                                    <td bgcolor="white"> 
                                        
                                        <div id="captioned-gallery">
                                          <figure class="slider">
                                            <figure>
                                              <img src="Images/img1.jpg" alt>
                                              <figcaption><center>SHCA 2018 Global Mobility Program (Ho Chi Minh, Vietnam)</center></figcaption>
                                            </figure>
                                            <figure>
                                              <img src="Images/img2.jpg" alt>
                                              <figcaption><center>MSU Sport United Championship (SUCA) 2018</center></figcaption>
                                            </figure>
                                            <figure>
                                              <img src="Images/img7.jpg" alt>
                                              <figcaption><center>MSU Chinese New Year Celebration 2018</center></figcaption>
                                            </figure>
                                            <figure>
                                              <img src="Images/img8.jpg" alt>
                                              <figcaption><center>FISE 2018 Global Internship Program (Wuxi, China)</center></figcaption>
                                            </figure>
                                            
                                          </figure>
                                        </div>
                                    </td>
                                  </tr>
                            </table>
            </div>

            
      

          

    </div>
  </div>

</body>



@endsection
    
