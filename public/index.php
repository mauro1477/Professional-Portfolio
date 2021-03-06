<script>
function relocate_github()
{
     location.href = "https://github.com/mauro1477?tab=repositories";
}

function relocate_symfony_profile()
{
     location.href = "https://symfonycasts.com/u/shobbie1477";
}

function relocate_linkedin()
{
     location.href = "https://www.linkedin.com/in/mvjr14/";
}

</script>
<?php require_once('header.php'); ?>

<body>
  <main>
    <div class="w3-container w3-card">
      <h1>Mauro Vargas Jr - PHP Developer</h1>
        <div class="card bg-light text-dark">
          <div class="card-body">
            Recent graduate from the University of Colordo Boulder with a degree in Computer Science looking for job opportunities as a full-stack PHP developer.
            Comfortable developing on backend or frontend of web applications and APIs. Experienced in using Vanilla PHP, MySQL, HTML, CSS, and the framework Symfony.
          </div>
       </div>
      <h2>My Professional Profiles</h2>
      <p>
        <input type="button" class="btn btn-info" value="Github" onclick=" relocate_github()">
        <input type="button" class="btn btn-info" value="Symfony Certifications" onclick=" relocate_symfony_profile()">
        <input type="button" class="btn btn-info" value="LinkedIn" onclick=" relocate_linkedin()">
      </p>
      <address>
      Email: <a href="mailto:maurovargas7725@gmail.com">maurovargas7725@gmail.com</a><br>
      Resident Location: Denver CO USA<br>
      </address>
      <img src="images/professional_picture.jpg" alt = "Mauro's Profile" class="center-image" >
      <h3>Personal Projects</h3>
      <table class="table table-hover ">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Project Name</th>
            <th scope="col">Technology</th>
            <th scope="col">Links</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td >Simple Calendar</td>
            <td>LAMP Stack, Symfony Framework, DBL Doctrine, Webpack and Twig</td>
            <td><a href="https://simplecalendarmaker.com/">Simplecalendar</a></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Balance Shelf</td>
            <td>Pug, HTML, Javascript, SQL, Node</td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Ufly</td>
            <td>C++, CSV and Txt files</td>
            <td></td>
          </tr>
        </tbody>
    </table>
<?php require_once('footer.php'); ?>
