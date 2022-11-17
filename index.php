
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      .firstImage{
    width:100%;
    height:auto;
}
.firstPage{
    /* background-image: url("https://media.istockphoto.com/photos/background-khaki-green-olive-grunge-texture-vignette-matte-dirty-picture-id1268727652?b=1&k=20&m=1268727652&s=170667a&w=0&h=ag8U6kbPTuYQg6tVVOm1Xz6ED4WPURJbey7QCyDZrhk="); */
    padding-top:0%;
    padding-bottom: 2%;
    /* padding-left:5%; */
    /* padding-right:2%; */
    text-align: center;
}
.firstPage{
    display: flex;
    flex-direction: column;
}
.firstFlexImg{
    width:100%;
}
.book1{
    font-size: 18px;
    text-align: center;
    font-family: 'Josefin Sans', sans-serif;
}
.age{
    font-size: 2rem;
    margin-top:2%;
    border:2px solid black;
    margin-left:2%;
    padding-left:5%;
    padding-right:5%;
    padding-top:1%;
    padding-bottom:1%;
}
.firstSecFlex{
    display: flex;
    flex-direction: row;
}
.clients{
    font-size: 2rem;
    margin-top:2%;
    border:2px solid black;
    margin-left:2%;
    padding-left:5%;
    padding-right:5%;
    padding-top:1%;
    padding-bottom:1%;
}
.workshop{
    font-size: 2rem;
    margin-top:2%;
    border:2px solid black;
    margin-left:2%;
    padding-left:5%;
    padding-right:5%;
    padding-top:1%;
    padding-bottom:1%;
}
.awards{
    font-size: 2rem;
    margin-top:2%;
    border:2px solid black;
    margin-left:2%;
    padding-left:5%;
    padding-right:5%;
    margin-right:2%;
    padding-top:1%;
    padding-bottom:1%;
}
.main{
    font-family: 'Josefin Sans', sans-serif;
    border-radius: 10px;
}
.main:hover{
    background-color: black;
    color:white;
    font-family: 'Josefin Sans', sans-serif;
}
.textLeader{
    padding-top:10%;
    padding-bottom:10%;
    padding-left:15%;
    padding-right:0%;
}
.leadershipDevelopment{
    font-size:4rem;
    font-weight: 600;
    font-family: 'Finlandica', sans-serif;
}
.leadershipDevelopment{
    overflow: hidden;
    border-right: 0.02em solid gray;
    white-space: nowrap;
    animation: typing 3s steps(50, end) forwards;
  }
  .flexMore{
    display: flex;
    flex-direction: row;
  }
  @keyframes typing {
    from { width: 0 }
    to { width: 80% }
  }
     @keyframes blink {
        from {
          border-color: black;
        }
        to {
          border-color: transparent;
        }
      }
  .secondText{
    font-family: 'Merriweather', serif;
    text-align: center;
    padding-left:5%;
    font-weight: 600;
    font-size: 20px;
    padding-right:5%;
    /* padding-top:5%; */
  }
  .secondPage{
    padding-top:2%;
    /* background-image: url("https://media.istockphoto.com/photos/background-khaki-green-olive-grunge-texture-vignette-matte-dirty-picture-id1268727652?b=1&k=20&m=1268727652&s=170667a&w=0&h=ag8U6kbPTuYQg6tVVOm1Xz6ED4WPURJbey7QCyDZrhk="); */
    background-color:rgb(236, 173, 173);
    background-repeat: no-repeat;
    background-size: 100%;
  }
  .course{
    border-radius: 10px;
    margin-top:4%;
    margin-left:42%;
    margin-right:40%;
    margin-bottom:5%;
    padding-left:2%;
    padding-right:2%;
    padding-top:0.8%;
    padding-bottom:0.8%;
    background-color: white;
    color:black;
    border:2px solid black;
    font-family: 'Josefin Sans', sans-serif;
    font-size: 1.5rem;
}
.course:hover{
    background-color: black;
    color:white;
    transition: 0.2s;
    border:2px solid white;
}
.thirdPage{
    padding-top:2%;
    padding-bottom:3%;
    background-color:rgb(236, 173, 173);
    /* background-image: url("https://media.istockphoto.com/photos/background-khaki-green-olive-grunge-texture-vignette-matte-dirty-picture-id1268727652?b=1&k=20&m=1268727652&s=170667a&w=0&h=ag8U6kbPTuYQg6tVVOm1Xz6ED4WPURJbey7QCyDZrhk="); */
    background-repeat: no-repeat;
    background-size: 100%;
}
.thirdPageCards{
    display: flex;
    flex-direction: row;
    justify-content: space-around;
}
.card-title{
    text-align: center;
    padding-top:10px;
    padding-bottom:10px;
}
.cardButton{
    border-radius: 0px;
    margin-top:10px;
    margin-left:10%;
    margin-right:2%;
    margin-bottom:10%;
    padding-left:10%;
    padding-right:10%;
    padding-top:3%;
    padding-bottom:3%;
    background-color: white;
    color:black;
    border:2px solid black;
    font-family: 'Josefin Sans', sans-serif;
    font-size: 1.2rem;
}
.cardButton:hover{
    background-color: black;
    color:white;
    transition: 0.2s;
    border:2px solid black;
}
a:link{
    text-decoration: dotted;
}
.headbook{
    padding-bottom:2%;
}
.cardsAva{
    text-align: center;
    font-size: 2rem;
    padding-bottom:2%;
    font-family: 'Josefin Sans', sans-serif;
    /* text-decoration: underline; */
    font-weight: 600;
}
.contact{
    font-size: 2.5rem;
    font-family: 'Merriweather', serif;
    text-align: center;
}
.contacting{
    text-decoration: none;
    color:black;
}
.course:hover{
    color:white;
}
.contacting:hover{
    text-decoration: none;
    color:white;
}
.textContact{
    text-align: center;
}
.fourthPage{
    padding-top: 2%;
    margin-bottom:1%;
}
.fifthPage{
    padding-top:3%;
    display:flex;
    flex-direction: row;
    justify-content: space-around;
    padding-bottom:2%;
}
.imgBackFifth{
    background-color:rgb(236, 173, 173);
    /* background-image: url("https://media.istockphoto.com/photos/background-khaki-green-olive-grunge-texture-vignette-matte-dirty-picture-id1268727652?b=1&k=20&m=1268727652&s=170667a&w=0&h=ag8U6kbPTuYQg6tVVOm1Xz6ED4WPURJbey7QCyDZrhk="); */
}
.readMore{
    color:rgb(4, 101, 69);
}
.readMore:hover{
    font-weight: 800;
    color:rgb(0, 15, 10);
}
.flexingSix{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}
.container {
    position: relative;
    width: 50%;
  }
  .first{
    display: flex;
    flex-direction: row;
    padding-left:5%;
    padding-right:5%;
    justify-content: space-around;
    padding-top:2%;
    padding-bottom:2%;
  }
  .image{
    display: block;
    width: 100%;
    height: auto;
    width:70%;
    padding-left:30%;
    border-radius: 30%;
  }
  
  /* .overlay {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    height: 100%;
    width: 60%;
    margin-left:10%;
    opacity: 0;
    transition: .5s ease;
    border-radius: 50px;
    font-family: 'Josefin Sans', sans-serif;
    background-color: rgb(31, 117, 45);
  }
  
  .container:hover .overlay {
    opacity: 1;
  } */
  
  .text {
    color: white;
    font-size: 20px;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    text-align: center;
  }
.texting{
    display: flex;
    flex-direction: row;
    margin-right:38%;
}
.logoSix{
    padding-left:6%;
    font-size: 2rem;
    font-weight: 700;
    color:white;
}
.sixthPage{
    background-color: #003a40;
    padding-top:5%;
    padding-bottom:5%;
}
.textSix{
    font-size: 1rem;
    padding-left:15%;
    /* margin-left:3%; */
    /* margin-right:3%; */
}
.text-anchor{
    letter-spacing: 2px;
    color:white;
    text-decoration: none;
}
.text-anchor:hover{
    color:antiquewhite;
    text-decoration: underline;
}
.book{
    text-align: center;
    font-size: 1.3rem;
    padding-left:10%;
    padding-right:10%;
    font-weight: 600;
}
@media only screen and (max-width:800px)
{
    .firstSecFlex{
        display: flex;
        flex-direction: column;
    }
    .main{
        margin-left:20%;
        margin-right:20%;
        margin-top:5%;
    }
    .leadershipDevelopment{
        font-size: 21.5px;
    }
    .contact{
        font-size: 2rem;
    }
    .course{
        margin-left:28%;
        margin-right:23%;
    }
    .thirdPage{
        background-image: url("https://media.istockphoto.com/photos/background-khaki-green-olive-grunge-texture-vignette-matte-dirty-picture-id1268727652?b=1&k=20&m=1268727652&s=170667a&w=0&h=ag8U6kbPTuYQg6tVVOm1Xz6ED4WPURJbey7QCyDZrhk=");
        background-repeat: no-repeat;
        background-size: 150%;
        
    }
    .cardsAva{
        margin-left:10%;
        margin-right:10%;
    }
    .thirdPageCards{
        display: flex;
        flex-direction: column;
        padding-left:10%;
    }
    .thirdCard{
        padding-bottom:5%;
    }
    .fourthPage{
        padding-top:5%;
        padding-bottom:3%;
    }
    .fifthPage{
        display: flex;
        flex-direction: column;
        padding-left:13%;
        padding-top:8%;
        padding-bottom:5%;
    }
    .flexingSix{
        display: flex;
        flex-direction: column;
    }
    .texting{
        padding-top:5%;
    }
    .secondPage{
        background-repeat: no-repeat;
        background-size: 220%;
    }
    .image{
        width:80%;
    }
    .thirdPage{
        background-size: 400%;;
    }
    .sixthPage{
        padding-left:0px;
        margin-left:0px;
    }
    .texting{
        display: flex;
        flex-direction: column;
        padding-bottom:5%;
    }
    .book{
        padding-left:8%;
        padding-right:8%;
        font-weight: 700;
    }
    .book1{
        padding-left:8%;
        padding-right:8%;
        font-weight: 600;
    }
}

      </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Finlandica&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <title>myClass Leadership</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark sticky-top">
        <div class="container-fluid">
          <a class="navbar-brand text-light" href="#">myClass Leadership</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="exploreOurCourses.php">Courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="contacting.html">Contact Us</a>
              </li>
            </ul>
            <h3 style="color:white; padding-right:10px;">Hello, User</h3>
            <a href="login.php"><button style="padding-left:20px; padding-right:20px; padding-top:5px; padding-bottom:5px; margin-right:10px; margin-left:20px; background-color:rgb(236, 173, 173); font-size:20px;">Sign In</button></a>
            <!-- <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit"><ion-icon name="search-outline"></ion-icon></button>
            </form> -->
          </div>
        </div>
      </nav>
      <section class="firstPage">
        <div class="firstFlex">
          <img class="firstFlexImg" src="main_img.png">
        </div>
        <div class="firstFlex firstSecFlex">
        <p class="age main">Experience of over 30 years </p>
        <p class="clients main"> 50+ Clients</p>
        <p class="workshop main">500+ Workshops</p>
        <p class="awards main">20+ Awards</p>
        </div>
      </section>
      <section class="secondPage">
        <p class="secondText">Leadership is a vital management function that helps to direct an organization's resources for improved efficiency and the achievement of goals. Effective leaders provide clarity of purpose, motivate and guide the organization to realize its mission. </p>
        <p class="secondText">Make stronger connections with individuals and shape decisions that are essential for a long-lasting company. Based on your requirements and circumstances, long- and short-term engagements to develop leadership qualities can be created.</p>
          <a href="exploreOurCourses.php"><button type="button" class="button course">View Courses</button></a>
      </section>
      
        <section class="workPage" id="clients">
          <div class="first">
            <div class="container">
              <img src="https://www.freepnglogos.com/uploads/walmart-logo-24.jpg" alt="Avatar" class="image">
              <div class="overlay">
                <!-- <div class="text">Walmart</div> -->
              </div>
            </div>
            <div class="container">
              <img src="https://1000logos.net/wp-content/uploads/2020/04/Texas-Instruments-logo.jpg" alt="Avatar" class="image">
              <div class="overlay">
                <!-- <div class="text">Texas Instruments</div> -->
              </div>
            </div>
            <div class="container">
              <img src="https://brandlogos.net/wp-content/uploads/2014/10/Verizon-logo-300x300.png" alt="Avatar" class="image">
              <div class="overlay">
                <!-- <div class="text">Verizon</div> -->
              </div>
            </div>
            </div>
            <div class="first">
            <div class="container">
              <img src="https://locworld.com/wp-content/uploads/2018/04/Ciena.png" alt="Avatar" class="image">
              <div class="overlay">
                <!-- <div class="text">Ciena</div> -->
              </div>
            </div>
            <div class="container">
              <img src="delta.png" alt="Avatar" class="image">
              <div class="overlay">
                <!-- <div class="text">Delta Airlines</div> -->
              </div>
            </div>
            <div class="container">
              <img src="https://logoeps.com/wp-content/uploads/2012/05/southwest-airlines-logo-vector-01.png" alt="Avatar" class="image">
              <div class="overlay">
                <!-- <div class="text">South West Airlines</div> -->
              </div>
            </div>
            </div>
            <div class="first">
            <div class="container">
              <img src="http://harmonycrew.com/wp-content/uploads/2019/06/Washington-Gas-300x300.jpg" alt="Avatar" class="image">
              <div class="overlay">
                <!-- <div class="text">Washington gas</div> -->
              </div>
            </div>
            <div class="container">
              <img src="https://seeklogo.com/images/K/kfc-logo-81CF66A86D-seeklogo.com.png" alt="Avatar" class="image">
              <div class="overlay">
                <!-- <div class="text">KFC</div> -->
              </div>
            </div>
            <div class="container">
              <img src="data:image/png;base64,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" alt="Avatar" class="image">
              <div class="overlay">
                <!-- <div class="text">Chillis</div> -->
              </div>
            </div>
            </div>
            <div class="first">
            <div class="container">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRB6UZuzVk-e6wiYtdo3QYs0B4rl1ltUiIzJBc0C_g2l8eUxw6XCj5L7JfxFj6kUxe4txg&usqp=CAU" alt="Avatar" class="image">
              <div class="overlay">
                <!-- <div class="text">Nordstrom</div> -->
              </div>
            </div>
            <div class="container">
              <img src="https://www.freeiconspng.com/thumbs/amazon-icon/amazon-icon-6.png" alt="Avatar" class="image">
              <div class="overlay">
                <!-- <div class="text">Amazon</div> -->
              </div>
            </div>
            <div class="container">
              <img src="data:image/jpeg;base64,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" alt="Avatar" class="image">
              <div class="overlay">
                <!-- <div class="text">Jc Penny</div> -->
              </div>
            </div>
            </div>
          </div>
        </section>
    <section class="imgBackFifth">
    <section class="fifthPage">
        <div class="card" style="width: 18rem;">
            <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Succession Planning</h5>
              <p class="card-text">The process of selecting personnel who take over</p>
              <a href="successionPlanning.html" class="readMore">Read More ... </a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="https://st2.depositphotos.com/3889193/7829/i/600/depositphotos_78294064-stock-photo-executive-standing-in-his-office.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Emotional Intelligence</h5>
              <p class="card-text">The capacity to comprehend, utilise and control your</p>
              <a href="emotionalIntelligence.html" class="readMore">Read More ... </a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="card-3-image (1).jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Team Management</h5>
              <p class="card-text">The term "Team Management" refers to a variety of actions</p>
              <a href="teamManagement.html" class="readMore">Read More ... </a>
            </div>
          </div>
          </section>
          <section class="fifthPage">
          <div class="card" style="width: 18rem;">
            <img src="https://dailytravelpill.com/wp-content/uploads/2022/04/work-life-balance-digital-nomad-1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Work-Life Balance</h5>
              <p class="card-text">Researches have shown that work-life balance is a key element</p>
              <a href="workLifeBalance.html" class="readMore">Read More ... </a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="https://www.managementcentre.co.uk/wp-content/uploads/Giving-and-receiving-feedback-500x500.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Feedback Managing</h5>
              <p class="card-text">Giving and receiving feedback is crucial in the workplace because it is one of</p>
              <a href="feedbackManaging.html" class="readMore">Read More ... </a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="https://virkon.dk/wp-content/uploads/2017/11/Virkon-thumbnail21.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Sales Excellence programme</h5>
              <p class="card-text">Sales excellence is maximizing the performance of your </p>
              <a href="salesExcellence.html" class="readMore">Read More ... </a>
            </div>
          </div>
    </section>
    <section class="fifthPage">
      <div class="card" style="width: 18rem;">
        <img src="https://content.gallup.com/origin/gallupinc/GallupSpaces/Production/Cms/WORKPLACEV9CMS/-ntvpef-t0umodri5ef9dw.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Accountability</h5>
          <p class="card-text">Accountability is the quality of being held accountable for a system's actions,</p>
          <a href="accountability.html" class="readMore">Read More ... </a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="https://cdn.elearningindustry.com/wp-content/uploads/2016/04/change-management-3-reasons-training-supports-organizational-change-r100-1024x569.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Change Management</h5>
          <p class="card-text">A methodical strategy to dealing with the transition or transformation of</p>
          <a href="management.html" class="readMore">Read More ... </a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="https://www.upskillist.com/static/9a95ea7b5534a941347405925090c115/27f16/website-wide.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Leadership Development</h5>
          <p class="card-text">Activities that enhance a leader's capabilities, confidence, and skill </p>
          <a href="leadership-dev.html" class="readMore">Read More ... </a>
        </div>
      </div>
</section>
<section class="fifthPage">
  <div class="card" style="width: 18rem;">
    <img src="https://www.verywellmind.com/thmb/o2imihXRxV40wDOr1Djz-C8_jAg=/500x350/filters:no_upscale():max_bytes(150000):strip_icc()/iStock_93170915_MEDIUM-579b8c095f9b589aa9380581.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Working with uncertainity and ambiguity</h5>
      <p class="card-text">Underestimating uncertainty can lead to strategies that neither</p>
      <a href="uncertain.html" class="readMore">Read More ... </a>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <img src="https://www.zandax.com/wordpress/wp-content/uploads/2016/05/Delegate-to-the-best-person-1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Delegation, Empowerment</h5>
      <p class="card-text">Increasing status, power, and control through delegation.</p>
      <a href="delegation.html" class="readMore">Read More ... </a>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <img src="https://www.sassyhongkong.com/wp-content/uploads/2020/12/set-realistic-goals-2021-health-wellness-500x500.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Goal-setting</h5>
      <p class="card-text">Goal setting is a powerful process for thinking about your </p>
      <a href="goal.html" class="readMore">Read More ... </a>
    </div>
  </div>
</section>
  </section>
 
<section class="fourthPage">
    <p class="contact">Ready to learn more ? </p>
    <p class="textContact">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium neque eaque assumenda. Qui cum fugiat atque laudantium, id perferendis nulla.</p>
    <button class="course"><a class="contacting" href="login.php">Login</a></button>
</section>
<section class="thirdPage">
  <p class="cardsAva"><ion-icon name="location-outline" class="icon"></ion-icon>LOCATION</p>
  <p class="book headbook">With over 30 years of Experience and 20+ awards, These courses are exactly what you need to enchance your leadership skills and let your company thrive.</p>
  <p class="book">At Austin,</p>
  <p class="book1">500 E St Johns Ave Suite 2.620, Austin, TX 78752, United States</p>
  <p class="book">At Los Angeles,</p>
  <p class="book1">1325 Palmetto St, Los Angeles, CA 90013, United States</p>
  <p class="book">At Newyork,</p>
  <p class="book1">447 Broadway 2nd floor, New York, NY 10013, United States</p>

</section>
    <section class="sixthPage">
        <div class="flexingSix">
            <div class="logoSix">myClass Leadership</div>
        <div class="logoSix texting">
        <h6 class="textSix"><a class="text-anchor" href="aboutus.html" >About Us</a></h6>
        <h6 class="textSix"><a href="exploreOurCourses.php" class="text-anchor">Courses</a></h6>
        <h6 class="textSix"><a class="text-anchor" href="services.html" >Case Studies</a></h6>
        <h6 class="textSix"><a class="text-anchor" href=#clients >Clients</a></h6>
        <h6 class="textSix"><a class="text-anchor" href="contacting.html" class="text-anchor">Contact Us</a></h6>
        </div>
        </div>
    </section>
</body>
</html>

