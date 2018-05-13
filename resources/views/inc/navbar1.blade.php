<div class = "container">
<div class="w3-container w3-teal">
  <center><h3><a href="/admins"><img src = "/Images/trans_logo.png" height="300" width="1050"></h3></center>
</div>
    <div class="container">
      <div class = "card-header" >
        <ul>
 
            <li class="nav-item">
              <a class="nav-link" href="/admins">List of Students<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/createactivity">Create Activity</a>
            </li> 

            <li class="nav-item">
              <a class="nav-link" href="/activitylist">List of Activities</a>
            </li> 

            <li class="nav-item">
              <a class="nav-link" href="/registration">Activity Registration</a>
            </li> 

            <li class="nav-item">
                <a class="nav-link" href="/analysis">GEmS Analysis</a>
              </li> 

            <li class="nav-item">
                  <a class="nav-link" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                   Logout
                  </a>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </li>          
        </ul>
        </div>  
    </div>  
</div>  

   


   
         