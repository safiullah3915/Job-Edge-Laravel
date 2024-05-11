<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Edge</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:ital,wght@0,400;0,700;1,300&family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{asset('/web/style.css')}}">
    <link rel="stylesheet" href="{{asset('/web/java.js')}}">

</head>

<body>
    <header>
        <div class="top-bar">
            <img id="image" src="{{asset('/web/img/pakistan.png')}}" alt=" Country Flag">
            <h3 id="pakistan">PAKISTAN</h3>
            <div class="language-select">

                <h3>English</h3>
            </div>
        </div>

        <nav class="main-nav">
            <h2>JOB EDGE</h2>
            <a href="index.html">
                <button class="signin-button">
                    <i class="fas fa-user"></i> Sign Out <i class="fas fa-chevron-down"></i>
                </button>
            </a>

        </nav>
    </header>

    <main>
        <section class="search-section">
            <div class="search-content">
                <h1>Your Job Search Start Here ...</h1>
                <p>Search 123,342 Job Postings</p>
                <div class="search-bar">
                    <input type="text" id="title-input" placeholder="Title" />
                    <input type="text1" id="location-input" placeholder="Where" />
                    <button id="search-btn">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
                <div class="search-filter">
                    <span class="search-label">Search For:</span>
                    <button class="filter-button">Part Time</button>
                    <button class="filter-button">Full Time</button>
                    <button class="filter-button">Remote</button>
                    <button class="filter-button">Student</button>
                </div>


            </div>
        </section>
        <section class="content">
            <div class="browse-jobs-section">

                <!-- The Modal -->
                <div id="myModal" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <form id="add-category-form">
                            <label for="industry-input">By Industry:</label>
                            <input type="text" id="industry-input" name="industry"><br>
                            <label for="city-input">By City:</label>
                            <input type="text" id="city-input" name="city"><br>
                            <label for="company-input">By Company:</label>
                            <input type="text" id="company-input" name="company"><br>
                            <label for="position-input">By Position:</label>
                            <input type="text" id="position-input" name="position"><br>
                            <button type="button" id="submit-btn">Submit</button>
                        </form>

                    </div>
                </div>

                <div class="tabs">
                    <button class="tab active" data-category="browse">Browse Jobs</button>
                    <button class="tab" data-category="industry">By Industry</button>
                    <button class="tab" data-category="city">By City</button>
                    <button class="tab" data-category="company">By Company</button>
                    <button class="tab" data-category="position">By Position</button>
                </div>
                <form id="add-job-category-form" style="display:none;">
                    <input type="text" id="new-job-category" placeholder="Add new job category">
                    <button type="submit">Add</button>
                </form>
                <div class="job-categories">
                    <ul id="job-category-list">
                        <!-- ... existing list items ... -->
                    </ul>
                </div>
            </div>

            <!-- Job categories content, initially empty -->
            <div class="job-category-content" id="industry-content"></div>
            <div class="job-category-content" id="city-content"></div>
            <div class="job-category-content" id="company-content"></div>
            <div class="job-category-content" id="position-content"></div>

            <article class="job-promo">
                <h1>Find Your Dream at Job Edge</h1>
                <h2>Unlock Your Career Potential with Cutting-Edge Opportunities 🚀</h2>
                <!-- Additional promotional content can go here -->
            </article>
        </section>
        <div class="Job-title">
            <h2>Job Edge: Where Opportunities Multiply</h2>

        </div>
        <div class="statistics">
            <div class="stat-item">
                <img src="{{asset('/web/img/up-arrow.png')}}" alt="Upload Icon">
                <strong>100,200</strong>
                <p>Job Posting views (average Monthly)</p>
            </div>
            <div class="stat-item">
                <img src="{{asset('/web/img/up-arrow.png')}}" alt="User Icon">
                <strong>200,200</strong>
                <p>Employees already register</p>
            </div>
        </div>

    </main>

    <footer>
    </footer>
    <script type="text/javascript" src="{{asset('/web/category.js')}}"></script>
    <script type="text/javascript" src="{{asset('/web/home.js')}}"></script>
</body>

</html>