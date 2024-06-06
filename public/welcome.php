<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Web Heroes - Welcome</title>
    <link rel="stylesheet" href="dist/main.css">

  </head>
  <body>
    <div class="container">
      <header class="web-heroes-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="text-center">
            <h3 class="text-dark">Welcome to Web Heroes</h3>
          </div>
        </div>
      </header>

      <!-- Navbar -->
      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 link-secondary" href="#">World</a>
          <a class="p-2 link-secondary" href="#">Technology</a>
          <a class="p-2 link-secondary" href="#">Design</a>
          <a class="p-2 link-secondary" href="#">Culture</a>
          <a class="p-2 link-secondary" href="#">Business</a>
          <a class="p-2 link-secondary" href="#">Politics</a>
          <a class="p-2 link-secondary" href="#">Science</a>
          <a class="p-2 link-secondary" href="#">Style</a>
          <a class="p-2 link-secondary" href="#">Travel</a>
          <a class="p-2 link-secondary" href="#">Opinion</a>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </nav>
      </div>
    </div>

    <main class="container">
      <div class="p-4 p-md-5 my-4 text-white rounded bg-dark">
        <div class="px-0">
            <h1 class="display-4 fst-italic">
                Enter a title here
            </h1>
            <p class="lead my-3">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque illo maxime aperiam ipsum non dolore doloremque odit commodi exercitationem laborum facilis, ut sunt fuga possimus quaerat voluptatem blanditiis dolor corrupti!
            </p>
        </div>
      </div>

      <!-- Card -->
      <div class="row mb-2">
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary">World</strong>
                <h3 class="mb-2">Title</h3>
                <p class="mb-auto">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum beatae delectus tempore odit doloribus, provident quia numquam iusto explicabo?
                </p>
                <a href="#" class="read-more">Read more</a>
              </div>
              <div class="col-auto d-none d-lg-block">
                <svg class="bd-placeholder-img" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail">
                  <title>Placeholder</title>
                  <rect width="100%" height="100%" fill="#55595c"/>
                  <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                </svg>
              </div>
            </div>
          </div>
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-success">Design</strong>
              <h3 class="mb-2">Title</h3>
              <p class="mb-auto">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum beatae delectus tempore odit doloribus, provident quia numquam iusto explicabo?
              </p>
              <a href="#" class="read-more">Read more</a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <svg class="bd-placeholder-img" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c" />
                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
              </svg>
            </div>
          </div>
        </div>
      </div>

      <!-- Body and Sidebar -->
      <div class="row g-5">
        <div class="col-md-8">
          <h3 class="pb-4 mb-4 fst-italic border-bottom">From the Web</h3>

          <article class="blog-post">
            <h2 class="blog-post-title">Example blog post</h2>
            <p class="blog-post-meta">
              January 1, 1924 by ...
            </p>

            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti eum ex excepturi beatae, corporis harum nam facilis omnis quisquam illum itaque qui repellat ipsam hic eaque eos numquam odit suscipit.
            </p>
            <hr>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse omnis animi officia molestias accusamus accusantium ex et aspernatur maxime excepturi, provident magni aperiam necessitatibus eum consequatur ipsam officiis! Tempore, recusandae!
            </p>
            <hr>
            <h3>Example lists</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. At, possimus fuga quibusdam vel iure rem aliquid ad adipisci quisquam, sapiente nostrum eligendi ducimus quas, quos dolorum deleniti officia vero voluptatum!
            </p>
            <ul>
              <li>First list item</li>
              <li>Second list item with a longer description</li>
              <li>Third list item to close it out</li>
            </ul>
            <p>And this is an ordered list:</p>
            <ol>
              <li>First list item</li>
              <li>Second list item with a longer description</li>
              <li>Third list item to close it out</li>
            </ol>
            <p>And this is a definiton list:</p>
            <dl>
              <dt>HyperText Markup Language (HTML)</dt>
              <dd>
                The language used to describe and define the content of a Web
                page
              </dd>
              <dt>Cascading Style Sheets (CSS)</dt>
              <dd>Used to describe the appearance of Web content</dd>
              <dt>JavaScript (JS)</dt>
              <dd>
                The programming language used to build advanced Web sites and
                applications
              </dd>
            </dl>
          <hr>
          <article class="blog-post">
            <h2 class="blog-post-title">Another blog post with table</h2>
            <p class="blog-post-meta">
              April 1, 2024 by ...
            </p>

            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore incidunt vel sint veritatis mollitia facilis repudiandae aperiam, animi in quibusdam odio facere omnis minus, debitis neque nesciunt dolores voluptatem quo!
            </p>

            <h3>Example table</h3>
            <table class="table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Surname</th>
                  <th>Email</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Alice</td>
                  <td>Crow</td>
                  <td>a.crow@aruba.com</td>
                </tr>
                <tr>
                  <td>Bob</td>
                  <td>Marley</td>
                  <td>smoke.bong@gmail.com</td>
                </tr>
                <tr>
                  <td>Charles</td>
                  <td>Leclerc</td>
                  <td>char.lec@ferrari.it</td>
                </tr>
              </tbody>
            </table>
          </article>

          <article class="blog-post">
            <h2 class="blog-post-title">End blog post</h2>
            <p class="blog-post-meta">
              December 14, 2024 by ...
            </p>

            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores magnam animi atque! Deleniti sed illum enim tempora quibusdam laboriosam, similique minima neque voluptatum debitis eligendi, inventore optio fugit quo expedita!
            </p>
            <p class="fs-1">
                Thank you for your attention!
            </p>
          </article>
        </div>

        <div class="col-md-4">
          <div class="position-sticky about-container">
            <div class="p-4 mb-3 bg-light rounded">
              <h4 class="fst-italic">About</h4>
              <p class="mb-0">
                Hello everyone, my name is Vincenzo Giordano, I am 25 years old and my biggest ambition is to become a team leader of a great group.
              </p>
            </div>

            <div class="p-4">
              <h4 class="fst-italic">Archives</h4>
              <ol class="list-unstyled mb-0">
                <li><a href="#">August 2024</a></li>
                <li><a href="#">January 2023</a></li>
                <li><a href="#">March 2022</a></li>
                <li><a href="#">February 2021</a></li>
                <li><a href="#">January 2020</a></li>
                <li><a href="#">December 2019</a></li>
                <li><a href="#">November 2015</a></li>
                <li><a href="#">October 2010</a></li>
                <li><a href="#">September 2010</a></li>
                <li><a href="#">August 1999</a></li>
                <li><a href="#">July 1999</a></li>
                <li><a href="#">June 1924</a></li>
                <li><a href="#">May 1924</a></li>
                <li><a href="#">April 1924</a></li>
              </ol>
            </div>

            <div class="p-4">
              <h4 class="fst-italic">Find me</h4>
              <ol class="list-unstyled">
                <li><a href="https://github.com/vinsgiordi">GitHub</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Facebook</a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Footer -->
    <footer class="footer-blog bg-light bg-gradient py-5 px-5 mt-5">
        <div class="row">
        <div class="col-6 col-md-2 mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQ</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Contact</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
            </ul>
        </div>

        <div class="col-6 col-md-2 mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQ</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Contact</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
            </ul>
        </div>

        <div class="col-6 col-md-2 mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQ</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Contact</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
            </ul>
        </div>

        <div class="col-md-5 offset-md-1 mb-3">
            <form>
            <h5>Subscribe to our newsletter</h5>
            <p>Monthly digest of what's new and exciting from us.</p>
            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                <label for="newsletter1" class="visually-hidden">Email address</label>
                <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                <button class="btn btn-primary" type="button">Subscribe</button>
            </div>
            </form>
        </div>
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
        <p>&copy; 2022 Web-Heroes, Inc. All rights reserved.</p>
        </div>
    </footer>

  </body>
</html>
