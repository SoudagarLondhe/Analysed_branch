<?php include('header.php') ?>
<title>Dashboard</title>
<link rel="stylesheet" href="./css/client_jobs.css">

<body>
    <div class="container">
        <div class="small_container">
            <div class="bread-crumbs_Mytools-recruiter">
                <a href="/" class="unactive-breadcrumb-link">Dashboard</a> > <a href="" class="unactive-breadcrumb-link">My Database</a> > <a href="" class="unactive-breadcrumb-link">Add Client</a> > <a href="" class="active-breadcrumb-link"> Fox Hunt</a>
            </div>

            <div class="profile-img">
                <img src="img/Fox hunt.png"  alt="">
                <h1>Fox Hunt<p1><span><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></span> #JB13069</p1></h1><br>
                <h2><span>Information Technology</span></h2><br>
                <h4><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/></svg> London</h4>
            </div>
            <div class="button">
                <button>Edit client</button>
            </div>

            <div class="options">
                <p><a href="client_individual.php">At a glance</a></p>
                <p style="color:#3598DB;margin-left:-2px"> <b style="margin-right: 10px;">|</b>Hires</p>
                <p><a href="client_contacts.php">Contacts</a></p>
                <p><a href="client_appointments.php">Appointments</a></p>
                <p><a href="client_activity.php">Activity</a></p>
                <p><a href="client_files.php">Files</a></p>
                <p><a href="client_notes.php">Notes</a></p>
            </div>

            <div class="status">
                <div class="status1" >
                    <p>#JB13069</p>
                    <span>05-05-2021</span>
                </div>
                <div class="status-name" style="margin-top:30px;">
                    <span style="margin-left:50px;">Fox Hunt</span>
                    <p style="color:#3598DB;margin-left:40px">Information Technology</p>
                    <p style="color:#979797;font-size:18px;margin-left:25px"><i class="fa fa-briefcase" aria-hidden="true"></i> Jobs</p>
                    <p style="color:#979797;font-size:18px;margin-left:140px;margin-top: -23px;"><i class="fa fa-map-marker" aria-hidden="true"></i> London</p>
                    <u style="color:#979797;margin-left:15px">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</u>
                    <br><br>
                    <span style="color:#979797; font-size:15px; margin-left:15px;">Status&emsp;&emsp;Ownership&emsp;&emsp;Source</span>
                    <br>
                </div>

                <div class="displayname"> 
                    <span>Live</span>&emsp;&emsp;&emsp;Private&emsp;&emsp;&emsp;LinkedIn
                </div>
                <br><br>

                <div class="fee">
                    <span>Average fee&emsp;&emsp;&emsp;&emsp;Current fee</span><br>
                </div>

                <div class="fee-percent">
                    <span>10%</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;4%
                </div>
                <br><br>
                <div class="employeement">
                    <p style="margin-left:8px">Parent Company</p>
                    <p style="color:black;margin-top:10px">Name of company</p>
                </div>
                <br><br>

                <div class="details">
                    <p style="color:#979797;padding-top: 0px;">Created by</p>
                    <br>
                    <p style="color:#3598DB;">Curtis kelly</p>
                    <p style="color:black;">abc@gmail.com</p>
                    <p style="color:black;">+91 9876543210</p>
                    <br><br>
                    <p style="color:#979797;padding-top: 0px;">Active conatct</p>
                    <br>
                    <p style="color:#3598DB;">Curtis Kulley</p>
                    <p style="color:black;">abc@gmail.com</p>
                    <p style="color:black;">+91 9876543210</p>
                    <br><br>
                    <p style="color:#979797;padding-top: 0px;">Contact info</p>
                    <br>
                    <p style="color:#3598DB;">Emailid@gmail.com</p>
                    <p style="color:black;">+91 9876543210</p>
                    <p style="color:black;">+91 9876543210</p>
                    <br><br>
                    <p style="color:#979797;padding-top: 0px;">Address</p>
                    <br>
                    <p style="color:black">Address line 1</p>
                    <p style="color:black;">  City-12345</p>
                    <p style="color: black;">State,Country.</p>
                    <br><br>
                </div>
            </div>

            <div class="left-side-container-1">
                    <span class="row-recruiter upcoming_interview_top_span">
                        <div class="search-box">
                        <details id="dropdown" class="dropdown">
                            <summary class="dropdown-button">
                                <span id="selected-item" class="selected-item"> <i class="fa fa-map-marker" aria-hidden="true"></i> All Locations</span>
                            </summary>
                            <details-menu class="dropdown-menu">
                                <div class="dropdown-menu-list">
                                    <label class="dropdown-menu-item">
                                        <input type="radio" name="item" value="1">
                                        <span>1</span>
                                    </label>
                                    <label class="dropdown-menu-item">
                                        <input type="radio" name="item" value="2">
                                        <span>2</span>
                                    </label>
                                    <label class="dropdown-menu-item">
                                        <input type="radio" name="item" value="3">
                                        <span>3</span>
                                    </label>
                                    <label class="dropdown-menu-item">
                                        <input type="radio" name="item" value="4">
                                        <span>4</span>
                                    </label>
                                </div>
                            </details-menu>
                        </details>
                        <input class="search-form-input" type="search" name="search" placeholder="Search for job by Id or title">
                        <button class="searchButton">
                            <img src="./img/search-icon-blue.png" />
                        </button>
                    </div>
                    <button class="btn" id="myBtn" type="button">Add +</button>
                </span>
                <div class="row-flex-jobj justifycontent-flex-end-1">
                    <p class="sortbyText">Sort by :
                        <select name="multi_search" id="multi_search" class="sortbySelect">
                            <option>Recent</option>
                            <option value="Recent">All</option>
                            <option value="Old">Old</option>
                        </select>
                        <select  id="multi_search" class="search_list">
                            <option value="" default class="search_list_option">Prority</option>
                            <option value="1" class="search_list_option">1</option>
                            <option value="2" class="search_list_option">2</option>
                            <option value="3" class="search_list_option">3</option>
                        </select>
                    </p>
                </div>
                <div class="row-recruiter">
                    <div class="list" id="list">
                        <li><a class="btn-1 active" href="#" onclick="divVisibility('Div1');">All</a></li>
                        <li ><a class="btn-1" href="#" onclick="divVisibility('Div2');" >Active</a></li>
                        <li ><a class="btn-1" href="#" onclick="divVisibility('Div3');">Completed</a></li>
                    </div>
                    <div class="select-col">
                        <input type="checkbox" id="c" name="cb">
                        <label for="c" class="select-col-label"> Select all</label>
                    </div>
                    <select  id="multi_search" class="search_list_1">
                        <option value="" default>Select action</option>
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                    </select>
                </div>

                <div id="Div1">
                    <div class="row">
                        <p class="added-class-1">Added on <span>05-05-2020</span></p>
                        <p class="added-class-2">Last Edited <span>05-08-2020</span></p>
                        <div class="column">
                            <input type="checkbox" id="c1" class="checkbox">
                            <label for="c1"></label>
                        </div>
                        <div class="column">
                            <span  class="span-class-red"></span>
                        </div>
                        <div class="column">
                            <p class="col-2">Full-time</p>
                        </div>
                        <div class="column">
                            <p class="col-3">Acturial Assistant</p>
                            <p class="col-3-1">#1544-1</p>
                            <span class="col-span-3"><i class="fa fa-map-marker" aria-hidden="true"></i> London</span>
                        </div>
                        <div class="column">
                            <p class="col-4">Company contact</p>
                            <p class="col-4-1">Philip Martin</p>
                            <span class="col-span-4">sandrovicente@gmail.com</span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-eye" aria-hidden="true"></i></p>
                            <span class="col-span-5">10</span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-clipboard" aria-hidden="true"></i></p>
                            <span class="col-span-5">6</span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-user" aria-hidden="true"></i></p>
                            <span class="col-span-5">1/4</span>
                        </div>
                        <div class="column">
                            <p class="col-6">Recruiter</p>
                            <p class="col-6-1">Sandro Vicente</p>
                            <span class="col-span-6">sandrovicente@gmail.com</span>
                        </div>
                    </div>

                    <div class="row">
                        <p class="added-class-1">Added on <span>05-05-2020</span></p>
                        <p class="added-class-2">Last Edited <span>05-08-2020</span></p>
                        <div class="column">
                            <input type="checkbox" id="c1" class="checkbox">
                            <label for="c1"></label>
                        </div>
                        <div class="column">
                            <span  class="span-class-orange"></span>
                        </div>
                        <div class="column">
                            <p class="col-2">Full-time</p>
                        </div>
                        <div class="column">
                            <p class="col-3">Acturial Assistant</p>
                            <p class="col-3-1">#1544-1</p>
                            <span class="col-span-3"><i class="fa fa-map-marker" aria-hidden="true"></i> London</span>
                        </div>
                        <div class="column">
                            <p class="col-4">Company contact</p>
                            <p class="col-4-1">Philip Martin</p>
                            <span class="col-span-4">sandrovicente@gmail.com</span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-eye" aria-hidden="true"></i></p>
                            <span class="col-span-5">10</span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-clipboard" aria-hidden="true"></i></p>
                            <span class="col-span-5">6</span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-user" aria-hidden="true"></i></p>
                            <span class="col-span-5">1/4</span>
                        </div>
                        <div class="column">
                            <p class="col-6">Recruiter</p>
                            <p class="col-6-1">Sandro Vicente</p>
                            <span class="col-span-6">sandrovicente@gmail.com</span>
                        </div>
                    </div>

                    <div class="row">
                        <p class="added-class-1">Added on <span>05-05-2020</span></p>
                        <p class="added-class-2">Last Edited <span>05-08-2020</span></p>
                        <div class="column">
                            <input type="checkbox" id="c1" class="checkbox">
                            <label for="c1"></label>
                        </div>
                        <div class="column">
                            <span  class="span-class-yellow"></span>
                        </div>
                        <div class="column">
                            <p class="col-2">Full-time</p>
                        </div>
                        <div class="column">
                            <p class="col-3">Acturial Assistant</p>
                            <p class="col-3-1">#1544-1</p>
                            <span class="col-span-3"><i class="fa fa-map-marker" aria-hidden="true"></i> London</span>
                        </div>
                        <div class="column">
                            <p class="col-4">Company contact</p>
                            <p class="col-4-1">Philip Martin</p>
                            <span class="col-span-4">sandrovicente@gmail.com</span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-eye" aria-hidden="true"></i></p>
                            <span class="col-span-5">10</span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-clipboard" aria-hidden="true"></i></p>
                            <span class="col-span-5">6</span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-user" aria-hidden="true"></i></p>
                            <span class="col-span-5">1/4</span>
                        </div>
                        <div class="column">
                            <p class="col-6">Recruiter</p>
                            <p class="col-6-1">Sandro Vicente</p>
                            <span class="col-span-6">sandrovicente@gmail.com</span>
                        </div>
                    </div>
				</div>
				
				<div id="Div2"style="display:none">
                    <div class="row">
                        <p class="added-class-1">Added on <span>05-05-2020</span></p>
                        <p class="added-class-2">Last Edited <span>05-08-2020</span></p>
                        <div class="column">
                            <input type="checkbox" id="c1" class="checkbox">
                            <label for="c1"></label>
                        </div>
                        <div class="column">
                            <span  class="span-class-yellow"></span>
                        </div>
                        <div class="column">
                            <p class="col-2">Full-time</p>
                        </div>
                        <div class="column">
                            <p class="col-3">Acturial Assistant</p>
                            <p class="col-3-1">#1544-1</p>
                            <span class="col-span-3"><i class="fa fa-map-marker" aria-hidden="true"></i> London</span>
                        </div>
                        <div class="column">
                            <p class="col-4">Company contact</p>
                            <p class="col-4-1">Philip Martin</p>
                            <span class="col-span-4">sandrovicente@gmail.com</span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-eye" aria-hidden="true"></i></p>
                            <span class="col-span-5">10</span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-clipboard" aria-hidden="true"></i></p>
                            <span class="col-span-5">6</span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-user" aria-hidden="true"></i></p>
                            <span class="col-span-5">1/4</span>
                        </div>
                        <div class="column">
                            <p class="col-6">Recruiter</p>
                            <p class="col-6-1">Sandro Vicente</p>
                            <span class="col-span-6">sandrovicente@gmail.com</span>
                        </div>
                    </div>

                    <div class="row">
                        <p class="added-class-1">Added on <span>05-05-2020</span></p>
                        <p class="added-class-2">Last Edited <span>05-08-2020</span></p>
                        <div class="column">
                            <input type="checkbox" id="c1" class="checkbox">
                            <label for="c1"></label>
                        </div>
                        <div class="column">
                            <span  class="span-class-orange"></span>
                        </div>
                        <div class="column">
                            <p class="col-2">Full-time</p>
                        </div>
                        <div class="column">
                            <p class="col-3">Acturial Assistant</p>
                            <p class="col-3-1">#1544-1</p>
                            <span class="col-span-3"><i class="fa fa-map-marker" aria-hidden="true"></i> London</span>
                        </div>
                        <div class="column">
                            <p class="col-4">Company contact</p>
                            <p class="col-4-1">Philip Martin</p>
                            <span class="col-span-4">sandrovicente@gmail.com</span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-eye" aria-hidden="true"></i></p>
                            <span class="col-span-5">10</span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-clipboard" aria-hidden="true"></i></p>
                            <span class="col-span-5">6</span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-user" aria-hidden="true"></i></p>
                            <span class="col-span-5">1/4</span>
                        </div>
                        <div class="column">
                            <p class="col-6">Recruiter</p>
                            <p class="col-6-1">Sandro Vicente</p>
                            <span class="col-span-6">sandrovicente@gmail.com</span>
                        </div>
                    </div>

                    <div class="row">
                        <p class="added-class-1">Added on <span>05-05-2020</span></p>
                        <p class="added-class-2">Last Edited <span>05-08-2020</span></p>
                        <div class="column">
                            <input type="checkbox" id="c1" class="checkbox">
                            <label for="c1"></label>
                        </div>
                        <div class="column">
                            <span  class="span-class-red"></span>
                        </div>
                        <div class="column">
                            <p class="col-2">Full-time</p>
                        </div>
                        <div class="column">
                            <p class="col-3">Acturial Assistant</p>
                            <p class="col-3-1">#1544-1</p>
                            <span class="col-span-3"><i class="fa fa-map-marker" aria-hidden="true"></i> London</span>
                        </div>
                        <div class="column">
                            <p class="col-4">Company contact</p>
                            <p class="col-4-1">Philip Martin</p>
                            <span class="col-span-4">sandrovicente@gmail.com</span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-eye" aria-hidden="true"></i></p>
                            <span class="col-span-5">10</span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-clipboard" aria-hidden="true"></i></p>
                            <span class="col-span-5">6</span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-user" aria-hidden="true"></i></p>
                            <span class="col-span-5">1/4</span>
                        </div>
                        <div class="column">
                            <p class="col-6">Recruiter</p>
                            <p class="col-6-1">Sandro Vicente</p>
                            <span class="col-span-6">sandrovicente@gmail.com</span>
                        </div>
                    </div>
                </div>

                <div id="Div3"style="display:none">
                    <div class="row">
                        <p class="added-class-1">Added on <span>05-05-2020</span></p>
                        <p class="added-class-2">Last Edited <span>05-08-2020</span></p>
                        <div class="column">
                            <input type="checkbox" id="c1" class="checkbox">
                            <label for="c1"></label>
                        </div>
                        <div class="column">
                            <span  class="span-class-orange"></span>
                        </div>
                        <div class="column">
                            <p class="col-2">Full-time</p>
                        </div>
                        <div class="column">
                            <p class="col-3">Acturial Assistant</p>
                            <p class="col-3-1">#1544-1</p>
                            <span class="col-span-3"><i class="fa fa-map-marker" aria-hidden="true"></i> London</span>
                        </div>
                        <div class="column">
                            <p class="col-4">Company contact</p>
                            <p class="col-4-1">Philip Martin</p>
                            <span class="col-span-4">sandrovicente@gmail.com</span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-eye" aria-hidden="true"></i></p>
                            <span class="col-span-5">10</span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-clipboard" aria-hidden="true"></i></p>
                            <span class="col-span-5">6</span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-user" aria-hidden="true"></i></p>
                            <span class="col-span-5">1/4</span>
                        </div>
                        <div class="column">
                            <p class="col-6">Recruiter</p>
                            <p class="col-6-1">Sandro Vicente</p>
                            <span class="col-span-6">sandrovicente@gmail.com</span>
                        </div>
                    </div>

                    <div class="row">
                        <p class="added-class-1">Added on <span>05-05-2020</span></p>
                        <p class="added-class-2">Last Edited <span>05-08-2020</span></p>
                        <div class="column">
                            <input type="checkbox" id="c1" class="checkbox">
                            <label for="c1"></label>
                        </div>
                        <div class="column">
                            <span  class="span-class-red"></span>
                        </div>
                        <div class="column">
                            <p class="col-2">Full-time</p>
                        </div>
                        <div class="column">
                            <p class="col-3">Acturial Assistant</p>
                            <p class="col-3-1">#1544-1</p>
                            <span class="col-span-3"><i class="fa fa-map-marker" aria-hidden="true"></i> London</span>
                        </div>
                        <div class="column">
                            <p class="col-4">Company contact</p>
                            <p class="col-4-1">Philip Martin</p>
                            <span class="col-span-4">sandrovicente@gmail.com</span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-eye" aria-hidden="true"></i></p>
                            <span class="col-span-5">10</span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-clipboard" aria-hidden="true"></i></p>
                            <span class="col-span-5">6</span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-user" aria-hidden="true"></i></p>
                            <span class="col-span-5">1/4</span>
                        </div>
                        <div class="column">
                            <p class="col-6">Recruiter</p>
                            <p class="col-6-1">Sandro Vicente</p>
                            <span class="col-span-6">sandrovicente@gmail.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
var items = document.getElementsByName('item');
var selectedItem = document.getElementById('selected-item');
var dropdown = document.getElementById('dropdown');

items.forEach(item => {
  item.addEventListener('change', () => {
    if (item.checked) {
      selectedItem.innerHTML = item.value;
      dropdown.open = false;
    }
  });
});
</script>
<script>
var btnContainer=document.getElementById("list");
var btns=btnContainer.getElementsByClassName("btn-1");
for(var i=0;i<btns.length;i++){
	btns[i].addEventListener('click',function(){
		var current=document.getElementsByClassName("active");
		current[0].className=current[0].className.replace("active");
		this.className += " active";
	});
}
</script>

<script>
    var divs = ["Div1", "Div2","Div3"];
    var visibleDivId = null;
    function divVisibility(divId) {
      if(visibleDivId === divId) {
        visibleDivId = null;
      } else {
        visibleDivId = divId;
      }
      hideNonVisibleDivs();
    }
    function hideNonVisibleDivs() {
      var i, divId, div;
      for(i = 0; i < divs.length; i++) {
        divId = divs[i];
        div = document.getElementById(divId);
        if(visibleDivId === divId) {
          div.style.display = "block";
        } else {
          div.style.display = "none";
        }
      }
    }
</script>
