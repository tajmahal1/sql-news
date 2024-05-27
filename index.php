<?php

class personalWeb
{
    private $routes = [];
    public $url;
    public $servername = "localhost";
    public $username = "devlabsge19e_blog";
    public $password = "Xonskixonski222";
    public $dbname = "devlabsge19e_blog";
    public $conn;

    public function addRoute($route, $handler)
    {
        $this->routes[$route] = $handler;
    }

    public function handleRequest($url)
    {
        foreach ($this->routes as $route => $handler) {
            if (preg_match("#^$route$#", $url, $matches)) {
                array_shift($matches);
                return call_user_func_array($handler, $matches);
            }
        }
        http_response_code(404);
        $this->nf();
    }

    public function handleRequestRoute()
    {
        $this->addRoute('/', function () {
            $this->home();
        });

        $this->addRoute('/about', function () {
            $this->about();
        });

        $this->addRoute('/doc', function () {
            $this->doclist();
        });

        $this->addRoute('/blog', function () {
            $this->bloglist();
        });

        $this->addRoute('/doc/([\w-]+)', function ($project) {
            $this->doc($project);
        });

        $this->addRoute('/blog/([\w-]+)', function ($topic) {
            $this->blog($topic);
        });
        $this->addRoute('/tag', function () {
            $this->taglist();
        });

        $this->addRoute('/attachTag', function () {
            $this->attachTag();
        });

        $this->addRoute('/attachTagHandle', function () {
            $this->attachTagHandle();
        });

        $this->addRoute('/addBlog', function () {
            $this->addBlog();
        });

        $this->addRoute('/addBlogHandle', function () {
            $this->addBlogHandle();
        });

        $this->addRoute('/addDoc', function () {
            $this->addDoc();
        });

        $this->addRoute('/addDocHandle', function () {
            $this->addDocHandle();
        });

        $this->addRoute('/addTag', function () {
            $this->addTag();
        });

        $this->addRoute('/addTagHandle', function () {
            $this->addTagHandle();
        });

        $this->addRoute('/addImage', function () {
            $this->addImage();
        });

        $this->addRoute('/addImageHandle', function () {
            $this->addImageHandle();
        });

        $this->addRoute('/editAbout', function () {
            $this->editAbout();
        });
        $this->addRoute('/editAboutHandle', function () {
            $this->editAboutHandle();
        });

        $this->addRoute('/manage', function () {
            $this->manage();
        });

        $this->addRoute('/editBlog', function () {
            $this->editBlog();
        });

        $this->addRoute('/editBlogPage', function () {
            $this->editBlogPage();
        });

        $this->addRoute('/editBlogHandle', function () {
            $this->editBlogHandle();
        });

        $this->addRoute('/editDoc', function () {
            $this->editDoc();
        });

        $this->addRoute('/editDocPage', function () {
            $this->editDocPage();
        });

        $this->addRoute('/editDocHandle', function () {
            $this->editDocHandle();
        });

        $this->addRoute('/editLinktree', function () {
            $this->editLinktree();
        });

        $this->addRoute('/editLinktreeHandle', function () {
            $this->editLinktreeHandle();
        });

        $this->addRoute('/editTag', function () {
            $this->editTag();
        });

        $this->addRoute('/editTagPage', function () {
            $this->editTagPage();
        });

        $this->addRoute('/editTagHandle', function () {
            $this->editTagHandle();
        });

        $this->addRoute('/deleteAttachTag', function () {
            $this->deleteAttachTag();
        });

        $this->addRoute('/deleteAttachTagHandle', function () {
            $this->deleteAttachTagHandle();
        });

        $this->addRoute('/deleteBlog', function () {
            $this->deleteBlog();
        });

        $this->addRoute('/deleteBlogHandle', function () {
            $this->deleteBlogHandle();
        });

        $this->addRoute('/deleteDoc', function () {
            $this->deleteDoc();
        });

        $this->addRoute('/deleteDocHandle', function () {
            $this->deleteDocHandle();
        });

        $this->addRoute('/deleteImage', function () {
            $this->deleteImage();
        });

        $this->addRoute('/deleteImageHandle', function () {
            $this->deleteImageHandle();
        });

        $this->addRoute('/deleteTag', function () {
            $this->deleteTag();
        });

        $this->addRoute('/deleteTagHandle', function () {
            $this->deleteTagHandle();
        });

        $this->addRoute('/tag/([\w-]+)', function ($tag) {
            $this->tag($tag);
        });

        $this->handleRequest($this->url);
    }

    public function __construct()
    {
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);

        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        session_start();

        $this->url = $_SERVER['REQUEST_URI'];
    }

    public function __destruct()
    {
        mysqli_close($this->conn);
    }

    public static function getHashedPassword()
    {
        $hashed_password = '$2y$10$T3ewpaLSYz2BbKkILyssdefL3omK9IDbvPkB/h1TtR0hxlIHSN49e';
        return $hashed_password;
    }

    public function getAboutData($conn)
    {
        $query = "SELECT * FROM about WHERE id = 1";
        $result = $conn->query($query);

        if ($result) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            $result->free();
            return $data;
        } else {
            return null;
        }
    }

    public function nf()
    {
        $this->header('Not Found');
?>
        <body style="font-family:BPG Arial Caps sans-serif;" class='font-sans mx-auto max-w-prose'>

            <div class='pt-12 pb-4'>
                <div class='bg-white min-h-full px-4 py-16 sm:px-6 sm:py-24 md:grid md:place-items-center lg:px-8'>
                    <div class='max-w-max mx-auto'>
                        <main class='sm:flex'>
                            <p class='text-4xl font-extrabold text-indigo-600 sm:text-5xl'>404</p>
                            <div class='sm:ml-6'>
                                <div class='sm:border-l sm:border-gray-200 sm:pl-6'>
                                    <h1 class='text-4xl font-extrabold text-gray-900 tracking-tight sm:text-5xl'>გვერდი ვერ მოიძებნა!
                                    </h1>
                                    <p class='mt-1 text-base text-gray-500'>მითითებული URL მისამართი არ არსებობს/გაუქმებულია, სცადეთ სხვა</p>
                                </div>
                                <div class='mt-10 flex space-x-3 sm:border-l sm:border-transparent sm:pl-6'>
                                    <a href='../' class='inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500'>
                                        მთავარი
                                    </a>
                                </div>
                            </div>
                        </main>
                    </div>
                    <div class='w-1/4 w-1/2 w-1/3 w-3/4 w-4/5'></div>
                </div>
            </div>
        </body>
    <?php
    }

    public function header($doc_title)
    {
    ?>
        <!DOCTYPE html>
        <html lang=" en-US">

        <head>

            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta charset="utf-8">
            <title><?php echo $doc_title; ?></title>

            <!-- TailwindCSS and Inter Font-->
            <link rel="stylesheet" href="../assets/css/tailwind.css">
            <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

            <!-- fontawesome -->
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
            <link rel="stylesheet" href="//cdn.web-fonts.ge/fonts/bpg-arial-caps/css/bpg-arial-caps.min.css">
            
            <!-- favicon -->
            <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon.png">
            <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon.png">
            <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">
            <meta name="msapplication-TileColor" content="#da532c">
            <meta name="theme-color" content="#ffffff">
            
            <!-- META -->
            <meta property="og:url"                content="http://devlabs.ge" />
            <meta property="fb:app_id"             content="941231377748328" />
            <meta property="og:type"               content="article" />
            <meta property="og:title"              content="DEVLABS.GE" />
            <meta property="og:description"        content="საიტი შეიქმნა ერთი მიზნით: მარტივად მოუყაროს თავი სხვადასხვა არგუმენტს და დაეხმაროს საზოგადოებას არგუმენტირებულ პროტესტში." />
            <meta property="og:image"              content="http://devlabs.ge/assets/img/favicon.png" />
            
            
            
            <style>
                body {
                    font-family: "BPG Arial Caps", sans-serif;
                }
                .body{
                    font-family: "BPG Arial Caps", sans-serif;
                }
                *{
                    font-family: "BPG Arial Caps", sans-serif;
                }
            </style>

        </head>
    <?php
    }

    public function footer()
    {
    ?>

        <script>
            /* Function for opning navbar on mobile */
            function toggleNavbar(collapseID) {
                document.getElementById(collapseID).classList.toggle("hidden");
                document.getElementById(collapseID).classList.toggle("block");
            }
            /* Function for dropdowns */
            function openDropdown(event, dropdownID) {
                let element = event.target;
                while (element.nodeName !== "A") {
                    element = element.parentNode;
                }
                document.getElementById(dropdownID).classList.toggle("hidden");
                document.getElementById(dropdownID).classList.toggle("block");
            }
        </script>

        </html>
    <?php
    }

    public function getDocs($conn, $project)
    {
        $sql = "SELECT * FROM docs WHERE project = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $project);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        return $result;
    }

    public function getAllDocs($conn)
    {
        $sql = "SELECT * FROM docs";
        $result = $conn->query($sql);
        return $result;
    }

    public function getAllTags($conn)
    {
        $sql = "SELECT * FROM tags";
        $result = $conn->query($sql);
        return $result;
    }

    public function getBlogs($conn, $project)
    {
        $sql = "SELECT * FROM blogs WHERE topic = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $project);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        return $result;
    }

    public function getTags($conn, $blog_id)
    {
        $sql_get_tags = "SELECT tags.tag_name
        FROM tags
        INNER JOIN blog_tags ON tags.id = blog_tags.tag_id
        WHERE blog_tags.blog_id = ?";

        $stmt = $conn->prepare($sql_get_tags);
        $stmt->bind_param('i', $blog_id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }

    public function getdocsTags($conn, $docs_id)
    {
        $sql_get_tags = "SELECT tags.tag_name
        FROM tags
        INNER JOIN doc_tags ON tags.id = doc_tags.tag_id
        WHERE doc_tags.doc_id = ?";

        $stmt = $conn->prepare($sql_get_tags);
        $stmt->bind_param('i', $docs_id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }

    public function getViews($conn, $content_id, $content_type)
    {
        $sql = "SELECT views_count
                FROM views
                WHERE content_type = ? AND content_id = ?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param('si', $content_type, $content_id);
        $stmt->execute();

        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['views_count'];
        } else {
            return 0;
        }
    }

    public function incrementViews($conn, $content_id, $content_type)
    {
        $sql = "SELECT views_count
                FROM views
                WHERE content_type = ? AND content_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('si', $content_type, $content_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $updateSql = "UPDATE views
                          SET views_count = views_count + 1
                          WHERE content_type = ? AND content_id = ?";
            $updateStmt = $conn->prepare($updateSql);
            $updateStmt->bind_param('si', $content_type, $content_id);
            $updateStmt->execute();
        } else {
            $insertSql = "INSERT INTO views (content_type, content_id, views_count)
                          VALUES (?, ?, 1)";
            $insertStmt = $conn->prepare($insertSql);
            $insertStmt->bind_param('si', $content_type, $content_id);
            $insertStmt->execute();
        }
    }

    public function getLinktree($conn)
    {
        $query = "SELECT * FROM `linktree`";
        $result = $conn->query($query);
        if ($result) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            $result->free();
            return $data;
        } else {
            return null;
        }
    }
    public function head()
    {
    }

    public function about()
    {
        $this->header('პროექტის შესახებ');
    ?>

        <body class="font-sans mx-auto max-w-prose">
            <div class="pt-12 pb-4">
                <?php $this->navbar(); ?>

                <div class="px-4 pt-4 prose prose-indigo">
                    <h1 class="text-center mt-6 mb-6">პროექტის შესახებ</h1>

                    <?php
                    $aboutData = $this->getAboutData($this->conn);
                    if ($aboutData !== null) {
                        foreach ($aboutData as $row) {

                            echo $row['hypertextabout'];
                        }
                    }
                    ?>
                </div>

            </div>
        </body>

        <?php $this->footer() ?>
        <?php
    }

    public function blog($topic)
    {
        $this->header('ბლოგი');
        $result = $this->getBlogs($this->conn, $topic);
        $this->incrementViews($this->conn, 'blog', 1);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>

                <body class="font-sans mx-auto max-w-prose">
                    <div class="pt-12 pb-4">

                        <?php $this->navbar() ?>
                        <div class="px-4 pt-4 prose prose-indigo">

                            <h1 class="text-center mt-6 mb-6">
                                <?php echo $row["title"]; ?>
                            </h1>
                            <div class="text-center">
                                <?php

                                $blog_id = $row["id"];
                                $this->incrementViews($this->conn, $blog_id, 'blog');
                            }
                            $getTagresult = $this->getTags($this->conn, $blog_id);

                            if ($getTagresult->num_rows > 0) {
                                while ($tag = $getTagresult->fetch_assoc()) {
                                ?>
                                    <div class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                                        <a class="!no-underline" href="../tag/<?php echo $tag['tag_name']; ?>">
                                            <?php echo $tag['tag_name']; ?>
                                        </a>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                            </div>
                            <?php
                            $result2 = $this->getBlogs($this->conn, $topic);

                            if (mysqli_num_rows($result2) > 0) {
                                while ($row2 = mysqli_fetch_assoc($result2)) {
                                    echo $row2["hypertext"];
                                }
                            }

                            ?>
                        </div>
                    </div>
                </body>

            <?php
            $this->footer();
        } else {
        }
    }

    public function navbar()
    {
            ?>
            <nav class="flex flex-wrap items-center justify-center px-2 mb-6">
                <div class="container px-4 mx-auto flex flex-wrap items-center justify-center">
                    <div class="w-full relative flex justify-center">
                        <button type="button" onclick="toggleNavbar('navbar')" class="rounded-md inline-flex items-center justify-center text-gray-500 md:hidden" aria-expanded="false">
                            <span class="sr-only">ნავიგაცია</span>
                            <!-- Heroicon name: outline/menu -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>

                    <div class="flex hidden md:block" id="navbar">
                        <div class="flex flex-col md:flex-row mr-auto w-full">
                            <?php
                            $menuItems = [
                                'მთავარი' => '/',
                                'ბლოგი' => '/blog',
                                'პროექტის შესახებ' => '/about',
                                'კონტაქტი' => 'https://en.wikipedia.org/wiki/Georgia_(country)'
                            ];

                            $currentEndpoint = $_SERVER['REQUEST_URI'];
                            $lastSegment = basename($currentEndpoint);

                            foreach ($menuItems as $label => $url) {
                                $isActive = ($lastSegment == strtolower($label)) ? 'text-gray-900' : 'text-gray-500 hover:text-gray-900';
                            ?>
                                <a class="text-sm <?= $isActive ?> px-3 py-2 lg:py-1 mx-auto uppercase <?= $isActive == 'text-gray-900' ? 'active' : '' ?>" href="<?= $url ?>">
                                    <?= $label ?>
                                </a>
                            <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </nav>
        <?php
    }

    public function doclist()
    {
        $this->header('Doc');
        ?>

            <body class="font-sans mx-auto max-w-prose">
                <div class="pt-12 pb-4">
                    <?php $this->navbar()
                    ?>
                    <div class="px-4 pt-4 prose prose-indigo">
                        <h1 class="text-center mt-6 mb-6">დოკ</h1>
                        <div>
                            <?php
                            $result = $this->getAllDocs($this->conn);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $docId = $row['id'];
                                    $project = $row['project'];
                                    $createdAt = $row['created_at'];
                                    $dateTime = new DateTime($createdAt);
                                    $formattedDate = $dateTime->format('F j, Y');

                            ?>
                                    <div class="pt-3.5">
                                        <a class="!no-underline" href="<?php echo '/doc/' . $project ?>">
                                            <h3 class="text-sm text-gray-700">
                                                <?php echo $project; ?>
                                                <div class="inline-flex items-center px-2.5 py-0.25 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                                                    <?php echo $this->getViews($this->conn, $docId, 'doc') ?> ნახვა
                                                </div>
                                            </h3>
                                        </a>
                                        <p class="max-w-[40ch] text-xs text-gray-500">
                                            <?php echo $row['shortdesc']; ?> <br> <br> <small class="text-gray-400">
                                                <?php echo $formattedDate; ?>
                                            </small>

                                        </p>

                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </body>

        <?php
        $this->footer();
    }

    public function bloglist()
    {
        $this->header('ბლოგი');
        ?>

            <body class="font-sans mx-auto max-w-prose">
                <div class="pt-12 pb-4">
                    <?php $this->navbar() ?>
                    <div class="px-4 pt-4 prose prose-indigo">
                        <h1 class="text-center mt-6 mb-6">ბლოგი</h1>
                        <div>
                            <?php
                            $sql = "SELECT * FROM blogs";
                            $result = mysqli_query($this->conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $blog_id = $row['id'];
                                    $topic = $row['topic'];
                                    $createdAt = $row['created_at'];
                                    $dateTime = new DateTime($createdAt);
                                    $formattedDate = $dateTime->format('F j, Y');

                            ?>
                                    <div class="pt-3.5">
                                        <a class="!no-underline" href="<?php echo '/blog/' . $topic ?>">
                                            <h3 class="text-sm text-gray-700">
                                                <?php echo $topic; ?>
                                                <div class="inline-flex items-center px-2.5 py-0.25 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                                                    <?php echo $this->getViews($this->conn, $blog_id, 'blog') ?> ნახვა
                                                </div>
                                            </h3>
                                        </a>
                                        <p class="max-w-[40ch] text-xs text-gray-500">
                                            <?php echo $row['shortdesc']; ?> <br> <br> <small class="text-gray-400">
                                                <?php echo $formattedDate; ?>
                                            </small>

                                        </p>

                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </body>
            <?php
            $this->footer();
        }

        public function doc($project)
        {
            $this->header('Doc');
            $result = $this->getDocs($this->conn, $project);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>

                    <body class="font-sans mx-auto max-w-prose">
                        <div class="pt-12 pb-4">
                            <?php $this->navbar() ?>

                            <div class="px-4 pt-4 prose prose-indigo">

                                <h1 class="text-center mt-6 mb-6">
                                    <?php echo $row["title"]; ?>
                                </h1>
                                <div class="text-center">
                                    <?php
                                    $docs_id = $row["id"];
                                    $this->incrementViews($this->conn, $docs_id, 'doc');
                                }

                                $result = $this->getdocsTags($this->conn, $docs_id);
                                if ($result->num_rows > 0) {
                                    while ($tag = $result->fetch_assoc()) {
                                    ?>
                                        <div class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                                            <a class="!no-underline" href="../tag/<?php echo $tag['tag_name']; ?>">
                                                <?php echo $tag['tag_name']; ?>
                                            </a>
                                        </div>
                                <?php
                                    }
                                }
                                ?>
                                </div>
                                <?php

                                $result2 = $this->getDocs($this->conn, $project);
                                if (mysqli_num_rows($result2) > 0) {
                                    while ($row2 = mysqli_fetch_assoc($result2)) {
                                        echo $row2["hypertext"];
                                    }
                                }

                                ?>
                            </div>
                        </div>
                    </body>

                    <?php
                    $this->footer();
                } else {
                }
            }

            public function home()
            {
                $aboutData = $this->getAboutData($this->conn);
                if ($aboutData !== null) {
                    foreach ($aboutData as $row) {
                        $this->header($row['name']);
                    ?>

                        <body class="font-sans mx-auto max-w-prose">
                            <div class="pt-12 pb-4">
                                <?php $this->navbar() ?>
                                <div class="mx-auto text-center prose prose-indigo">
                                    <div>
                                        <img class="object-cover mx-auto h-36 w-36 rounded-full" src="assets\img\profile.jpg">
                                        <h1><?php echo $row['name'] ?></h1>
                                    </div>

                                    <p class="text-gray-500 pb-4"><?php echo $row['hypertexthome'] ?></p>

                                </div>
                            </div>

                    <?php
                    }
                }
                    ?>

                    <section>
                        <div class="flex flex-wrap text-center">
                            <div class="w-full pt-4">
                                <div>
                                    <?php
                                    $linktreedata = $this->getLinktree($this->conn);
                                    if ($linktreedata !== null) {
                                        foreach ($linktreedata as $row) {
                                    ?>
                                            <a href="<?php echo $row['url'] ?>" target="_blank">
                                                <button class="bg-white text-lightBlue-600 font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                                                    <i class="fab fa-<?php echo $row['platform_name'] ?>"></i>
                                                </button>
                                            </a>
                                    <?php
                                        }
                                    }

                                    ?>

                                </div>
                            </div>
                        </div>
                    </section>

                        </body>

                        <?php
                        $this->footer();
                    }

                    public function addBlog()
                    {

                        if (isset($_SESSION['original_password'])) {
                            if (password_verify($_SESSION['original_password'], $this->getHashedPassword())) {
                                $this->display_form('blog', '/addBlogHandle', 'add');
                            } else {
                                $this->returnToHome();
                            }
                        } else {
                            $this->returnToHome();
                        }
                    }

                    public function addBlogHandle()
                    {
                        if (isset($_SESSION['original_password'])) {
                            if (password_verify($_SESSION['original_password'], $this->getHashedPassword())) {

                                $topic = $_POST['topic'];
                                $docname = $_POST['docname'];
                                $title = $_POST['title'];
                                $shortdesc = $_POST['shortdesc'];
                                $hypertext = $_POST['hypertext'];

                                $sql = "INSERT INTO blogs (topic,docname,title,shortdesc, hypertext) VALUES (?, ?,?,?,?)";
                                $stmt = mysqli_prepare($this->conn, $sql);
                                mysqli_stmt_bind_param($stmt, "sssss", $topic, $docname, $title, $shortdesc, $hypertext);
                                if (mysqli_stmt_execute($stmt)) {
                                    $this->returnToHome();
                                } else {
                                    $this->returnToHome();
                                }
                            } else {
                                $this->returnToHome();
                            }
                        } else {
                            $this->returnToHome();
                        }
                    }

                    public function addDoc()
                    {
                        if (isset($_SESSION['original_password'])) {
                            if (password_verify($_SESSION['original_password'], $this->getHashedPassword())) {
                                $this->display_form('doc', 'addDocHandle', 'add');
                            } else {
                                $this->returnToHome();
                            }
                        } else {
                            $this->returnToHome();
                        }
                    }

                    public function addDocHandle()
                    {
                        if (isset($_SESSION['original_password'])) {
                            if (password_verify($_SESSION['original_password'],  $this->getHashedPassword())) {

                                $project = $_POST['project'];
                                $docname = $_POST['docname'];
                                $title = $_POST['title'];
                                $shortdesc = $_POST['shortdesc'];
                                $hypertext = $_POST['hypertext'];

                                $sql = "INSERT INTO docs (project,docname,title,shortdesc, hypertext) VALUES (?, ?,?,?,?)";
                                $stmt = mysqli_prepare($this->conn, $sql);
                                mysqli_stmt_bind_param($stmt, "sssss", $project, $docname, $title, $shortdesc, $hypertext);
                                if (mysqli_stmt_execute($stmt)) {
                                    $this->returnToHome();
                                } else {
                                    $this->returnToHome();
                                }
                            } else {
                                $this->returnToHome();
                            }
                        } else {
                            $this->returnToHome();
                        }
                    }

                    public function addImage()
                    {

                        if (isset($_SESSION['original_password'])) {
                            if (password_verify($_SESSION['original_password'], $this->getHashedPassword())) {
                        ?>
                                <!DOCTYPE html>
                                <html lang="en">

                                <head>
                                    <meta charset="UTF-8">
                                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                    <title>სურათის ატვირთვა</title>
                                    
                                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
                                <link rel="stylesheet" href="//cdn.web-fonts.ge/fonts/bpg-arial-caps/css/bpg-arial-caps.min.css">
                                
                                <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon.png">
                                <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon.png">
                                <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">
                                <meta name="msapplication-TileColor" content="#da532c">
                                <meta name="theme-color" content="#ffffff">
                
                                <style>
                                    body {
                                        font-family: "BPG Arial Caps", sans-serif;
                                    }
                                    .body{
                                        font-family: "BPG Arial Caps", sans-serif;
                                    }
                                    *{
                                        font-family: "BPG Arial Caps", sans-serif;
                                    }
                                </style>
                                </head>

                                <body>
                                    <h2>სურათის ატვირთვა</h2>
                                    <form action="/addImageHandle" method="post" enctype="multipart/form-data">
                                        <label for="image">აირჩიე სურათი:</label>
                                        <input type="file" name="image" id="image" accept="image/*">
                                        <br>
                                        <input type="submit" value="ატვირთვა">
                                    </form>
                                </body>

                                </html>

                        <?php
                            } else {
                                $this->returnToHome();
                            }
                        } else {
                            $this->returnToHome();
                        }
                    }

                    public function taglist()
                    {
                        $this->header('Tag');
                        ?>

                        <body class="font-sans mx-auto max-w-prose">
                            <div class="pt-12 pb-4">
                                <?php $this->navbar() ?>

                                <div class="px-4 pt-4 prose prose-indigo">
                                    <h1 class="text-center mt-6 mb-6">თაგები</h1>

                                    <?php
                                    $result = $this->getAllTags($this->conn);
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            $tagName = $row["tag_name"];
                                    ?>
                                            <div class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                                                <a class="!no-underline" href="<?php echo '/tag/' . $tagName; ?>">
                                                    <?php echo $tagName; ?>
                                                </a>
                                            </div>
                                    <?php
                                        }
                                    }

                                    ?>
                                </div>
                            </div>
                        </body>


                    <?php
                        $this->footer();
                    }

                    public function tag($tag)
                    {
                        $this->header('Tag Specify');
                    ?>

                        <body class="font-sans mx-auto max-w-prose">
                            <div class="pt-12 pb-4">

                                <?php $this->navbar() ?>

                                <div class="px-4 pt-4 prose prose-indigo">
                                    <h1 class="text-center mt-6 mb-6">
                                        <?php echo $tag; ?> Tag
                                    </h1>

                                    <?php


                                    $sqlDocs = "SELECT d.project, d.shortdesc, d.created_at
        FROM docs d
        JOIN doc_tags dt ON d.id = dt.doc_id
        JOIN tags t ON dt.tag_id = t.id
        WHERE t.tag_name = '$tag'
        GROUP BY d.project, d.shortdesc, d.created_at;
        ";

                                    $resultDocs = $this->conn->query($sqlDocs);

                                    if ($resultDocs) {
                                    ?>
                                        <?php
                                        while ($row = $resultDocs->fetch_assoc()) {
                                        ?>
                                            <div class="pt-3.5">
                                                <a class="!no-underline" href="../doc/<?php echo $row['project'] ?>">
                                                    <h3 class="text-sm text-gray-700">
                                                        <?php echo $row['project']; ?>
                                                        <div class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                                                            docs
                                                        </div>
                                                    </h3>
                                                </a>
                                                <p class="max-w-[40ch] text-xs text-gray-500">
                                                    <?php echo $row['shortdesc']; ?> <br> <br> <small class="text-gray-400">
                                                        <?php
                                                        $dateTime = new DateTime($row['created_at']);
                                                        $formattedDate = $dateTime->format('F j, Y');
                                                        echo $formattedDate; ?>
                                                    </small>
                                                </p>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    <?php
                                    }

                                    $sqlBlogs = "SELECT b.topic, b.shortdesc, b.created_at
        FROM blogs b
        JOIN blog_tags bt ON b.id = bt.blog_id
        JOIN tags t ON bt.tag_id = t.id
        WHERE t.tag_name = '$tag'
        GROUP BY b.topic, b.shortdesc, b.created_at
        ";
                                    $resultBlogs = $this->conn->query($sqlBlogs);
                                    if ($resultBlogs) {
                                    ?>
                                        <?php
                                        while ($row = $resultBlogs->fetch_assoc()) {
                                        ?>
                                            <div class="pt-3.5">
                                                <a class="!no-underline" href="../blog/<?php echo $row['topic'] ?>">
                                                    <h3 class="text-sm text-gray-700">
                                                        <?php echo $row['topic']; ?>
                                                        <div class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                                                            blog
                                                        </div>
                                                    </h3>
                                                </a>
                                                <p class="max-w-[40ch] text-xs text-gray-500">
                                                    <?php echo $row['shortdesc']; ?> <br> <br> <small class="text-gray-400">
                                                        <?php
                                                        $dateTime = new DateTime($row['created_at']);
                                                        $formattedDate = $dateTime->format('F j, Y');
                                                        echo $formattedDate; ?>
                                                    </small>
                                                </p>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    <?php
                                    }
                                    ?>
                                </div>

                            </div>
                        </body>


                        <?php
                        $this->footer();
                    }

                    public function addImageHandle()
                    {
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            if (isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK) {
                                $uploadDir = "assets/img/";
                                if (!file_exists($uploadDir)) {
                                    mkdir($uploadDir, 0777, true);
                                }
                                $fileName = uniqid("image_") . "." . pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
                                $targetPath = $uploadDir . $fileName;
                                if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetPath)) {
                                    $this->returnToHome();
                                } else {
                                    $this->returnToHome();
                                }
                            } else {
                                $this->returnToHome();
                            }
                        }
                    }

                    public function addTag()
                    {
                        if (isset($_SESSION['original_password'])) {
                            if (password_verify($_SESSION['original_password'], $this->getHashedPassword())) {
                        ?>
                                <form action="/addTagHandle" method="post">
                                    <label for="tag_name">თაგის სახელი:</label><br>
                                    <input type="text" id="tag_name" name="tag_name"><br><br>

                                    <input type="submit" value="დადასტურება">
                                </form>

                        <?php
                            } else {
                                $this->returnToHome();
                            }
                        } else {
                            $this->returnToHome();
                        }
                    }

                    public function addTagHandle()
                    {
                        if (isset($_SESSION['original_password'])) {
                            if (password_verify($_SESSION['original_password'], $this->getHashedPassword())) {
                                $tag_name = $_POST['tag_name'];
                                $sql = "INSERT INTO `tags` (`id`, `tag_name`) VALUES (NULL, ?);";
                                $stmt = mysqli_prepare($this->conn, $sql);
                                mysqli_stmt_bind_param($stmt, "s", $tag_name);
                                if (mysqli_stmt_execute($stmt)) {
                                    $this->returnToHome();
                                } else {
                                    $this->returnToHome();
                                }
                            } else {
                                $this->returnToHome();
                            }
                        } else {
                            $this->returnToHome();
                        }
                    }

                    public function bootstrapHead($title)
                    {
                        ?>
                        <!DOCTYPE html>
                        <html lang="en">

                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title><?php echo $title; ?></title>

                            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
                            <script src="assets/js/tinymce.min.js"></script>
                            
                            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
                                <link rel="stylesheet" href="//cdn.web-fonts.ge/fonts/bpg-arial-caps/css/bpg-arial-caps.min.css">
                                
                                <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon.png">
                                <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon.png">
                                <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">
                                <meta name="msapplication-TileColor" content="#da532c">
                                <meta name="theme-color" content="#ffffff">
                
                                <style>
                                    body {
                                        font-family: "BPG Arial Caps", sans-serif;
                                    }
                                    .body{
                                        font-family: "BPG Arial Caps", sans-serif;
                                    }
                                    *{
                                        font-family: "BPG Arial Caps", sans-serif;
                                    }
                                </style>

                        </head>
                        <?php
                    }

                    public function editLinktree()
                    {
                        if (password_verify($_SESSION['original_password'], $this->getHashedPassword())) {
                            $result = $this->getLinktree($this->conn);
                            if ($result !== null && !empty($result)) {
                                $this->bootstrapHead('რედაქტირება - სოც.ქსელები');
                        ?>

                                <body>
                                    <div class="container">

                                        <form action="/editLinktreeHandle" method="post">
                                            <?php
                                            foreach ($result as $row) {
                                            ?>
                                                <input type="hidden" name="id<?php echo $row['id'] ?>" value="<?php echo $row['id'] ?>">
                                                <label class="form-label" for="name">სოც.ქსელები <?php echo $row['id'] ?></label><br>
                                                <select name="platform<?php echo $row['id'] ?>" class="form-select">
                                                    <option selected><?php echo $row['platform_name'] ?></option>
                                                    <option value="facebook">Facebook</option>
                                                    <option value="instagram">Instagram</option>
                                                    <option value="youtube">Youtube</option>
                                                    <option value="twitter">Twitter</option>
                                                </select>
                                                <input class="form-control" type="text" id="url<?php echo $row['id'] ?>" name="url<?php echo $row['id'] ?>" value="<?php echo $row['url'] ?>"><br>

                                            <?php
                                            }
                                            ?>
                                            <input class="btn btn-dark" type="submit" value="განახლება">
                                        </form>

                                    </div>
                                </body>

                        </html><?php
                            }
                                ?>


                <?php
                        } else {
                            $this->returnToHome();
                        }
                    }

                    public function deleteAttachTag()
                    {
                        if (password_verify($_SESSION['original_password'], $this->getHashedPassword())) {
                            $getTagquery = "SELECT * FROM tags";
                            $getTagresult = $this->conn->query($getTagquery);

                            $getpostquery = "SELECT *, 'docs' AS source FROM docs
                UNION
                SELECT *, 'blog' AS source FROM blogs;
                ";
                            $getpostresult = $this->conn->query($getpostquery);
                ?>
                    <form action="/deleteAttachTagHandle" method="POST">
                        <label for="tag_id">აირჩიეთ თაგი</label><br>
                        <select name="tag_id">
                            <?php
                            while ($row = $getTagresult->fetch_assoc()) {
                                echo "<option value='" . $row['id'] . "'>" . $row['tag_name'] . "</option>";
                            }
                            ?>
                        </select><br>

                        <label for="id_post">რომელ ბლოგს მიენიჭოს</label><br>
                        <select name="id_post">
                            <?php
                            while ($row = $getpostresult->fetch_assoc()) {
                                echo "<option value='" . $row['source'] . $row['id'] . "'>" . $row['source'] . ' ' . $row['project'] . "</option>";
                            }
                            ?>
                        </select><br>
                        <br>
                        <input type="submit" name="delete" value="დადასტურება">
                    </form>

                    <?php
                        } else {
                            $this->returnToHome();
                        }
                    }

                    public function deleteAttachTagHandle()
                    {
                        if (password_verify($_SESSION['original_password'], $this->getHashedPassword())) {

                            $id_post = $_POST['id_post'];
                            $tag_id = $_POST['tag_id'];

                            $type = substr($id_post, 0, 4);
                            $id = substr($id_post, 4);

                            if ($type == 'docs') {
                                $sql = "DELETE FROM `doc_tags` WHERE `doc_id` = ? AND `tag_id` = ?";
                                $stmt = $this->conn->prepare($sql);
                                $stmt->bind_param("ii", $id, $tag_id);
                                $stmt->execute();
                                $stmt->close();
                                $this->returnToHome();
                            } elseif ($type == 'blog') {
                                $sql = "DELETE FROM `blog_tags` WHERE `blog_id` = ? AND `tag_id` = ?";
                                $stmt = $this->conn->prepare($sql);
                                $stmt->bind_param("ii", $id, $tag_id);
                                $stmt->execute();
                                $stmt->close();
                                $this->returnToHome();
                            } else {
                                $this->returnToHome();
                            }
                        } else {
                            $this->returnToHome();
                        }
                    }

                    public function editLinktreeHandle()
                    {
                        $url1 = $_POST['url1'];
                        $url2 = $_POST['url2'];
                        $url3 = $_POST['url3'];
                        $url4 = $_POST['url4'];

                        $id1 = $_POST['id1'];
                        $id2 = $_POST['id2'];
                        $id3 = $_POST['id3'];
                        $id4 = $_POST['id4'];

                        $platform1 = $_POST['platform1'];
                        $platform2 = $_POST['platform2'];
                        $platform3 = $_POST['platform3'];
                        $platform4 = $_POST['platform4'];

                        if (password_verify($_SESSION['original_password'], $this->getHashedPassword())) {
                            // Updating the first record
                            $query1 = "UPDATE `linktree` SET `platform_name` = ?, `url` = ? WHERE `id` = ?";
                            $stmt1 = $this->conn->prepare($query1);
                            $stmt1->bind_param("ssi", $platform1, $url1, $id1);
                            $result1 = $stmt1->execute();

                            // Updating the second record
                            $query2 = "UPDATE `linktree` SET `platform_name` = ?, `url` = ? WHERE `id` = ?";
                            $stmt2 = $this->conn->prepare($query2);
                            $stmt2->bind_param("ssi", $platform2, $url2, $id2);
                            $result2 = $stmt2->execute();

                            // Updating the third record
                            $query3 = "UPDATE `linktree` SET `platform_name` = ?, `url` = ? WHERE `id` = ?";
                            $stmt3 = $this->conn->prepare($query3);
                            $stmt3->bind_param("ssi", $platform3, $url3, $id3);
                            $result3 = $stmt3->execute();

                            // Updating the fourth record
                            $query4 = "UPDATE `linktree` SET `platform_name` = ?, `url` = ? WHERE `id` = ?";
                            $stmt4 = $this->conn->prepare($query4);
                            $stmt4->bind_param("ssi", $platform4, $url4, $id4);
                            $result4 = $stmt4->execute();
                            $this->returnToHome();
                        } else {
                            $this->returnToHome();
                        }
                    }

                    public function attachTag()
                    {
                        if (isset($_SESSION['original_password'])) {
                            if (password_verify($_SESSION['original_password'], $this->getHashedPassword())) {
                                $getTagquery = "SELECT * FROM tags";
                                $getTagresult = $this->conn->query($getTagquery);
                                $getpostquery = "SELECT *, 'docs' AS source FROM docs
                UNION
                SELECT *, 'blog' AS source FROM blogs;
                ";
                                $getpostresult = $this->conn->query($getpostquery);
                    ?>
                        <form action="/attachTagHandle" method="POST">
                            <label for="tag_id">აირჩიეთ თაგი</label><br>
                            <select name="tag_id">
                                <?php
                                while ($row = $getTagresult->fetch_assoc()) {
                                    echo "<option value='" . $row['id'] . "'>" . $row['tag_name'] . "</option>";
                                }
                                ?>
                            </select><br>

                            <label for="id_post">რომელ ბლოგს მიენიჭოს</label><br>
                            <select name="id_post">
                                <?php
                                while ($row = $getpostresult->fetch_assoc()) {
                                    echo "<option value='" . $row['source'] . $row['id'] . "'>" . $row['source'] . ' ' . $row['project'] . "</option>";
                                }
                                ?>
                            </select><br>
                            <br>
                            <input type="submit" name="delete" value="დადასტურება">
                        </form>

                    <?php
                            } else {
                                $this->returnToHome();
                            }
                        } else {
                            $this->returnToHome();
                        }
                    }
                    public function deleteTag()
                    {
                        if (password_verify($_SESSION['original_password'], $this->getHashedPassword())) {
                            $query = "SELECT * FROM tags";
                            $result = $this->conn->query($query);
                    ?>
                    <form action="/deleteTagHandle" method="POST">
                        <label for="tag_id">აირჩიეთ წასაშლელი თაგი</label><br>
                        <select name="tag_id">
                            <?php
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row['id'] . "'>" . $row['tag_name'] . "</option>";
                            }
                            ?>
                        </select>
                        <br><br>
                        <input type="submit" name="delete" value="დადასტურება">
                    </form>
                <?php
                        } else {
                            $this->returnToHome();
                        }
                    }
                    public function deleteTagHandle()
                    {
                        if (password_verify($_SESSION['original_password'], $this->getHashedPassword())) {
                            if (isset($_POST['delete'])) {
                                $tag_id = $_POST['tag_id'];
                                $delete_doc_tags_query = "DELETE FROM `doc_tags` WHERE `tag_id` = ?";
                                $delete_doc_tags_stmt = $this->conn->prepare($delete_doc_tags_query);
                                $delete_doc_tags_stmt->bind_param("i", $tag_id);
                                $delete_doc_tags_stmt->execute();
                                $delete_doc_tags_stmt->close();
                                $delete_blog_tags_query = "DELETE FROM `blog_tags` WHERE `tag_id` = ?";
                                $delete_blog_tags_stmt = $this->conn->prepare($delete_blog_tags_query);
                                $delete_blog_tags_stmt->bind_param("i", $tag_id);
                                $delete_blog_tags_stmt->execute();
                                $delete_blog_tags_stmt->close();
                                $delete_tags_query = "DELETE FROM `tags` WHERE `id` = ?";
                                $delete_tags_stmt = $this->conn->prepare($delete_tags_query);
                                $delete_tags_stmt->bind_param("i", $tag_id);
                                $delete_tags_stmt->execute();
                                $delete_tags_stmt->close();
                                $this->returnToHome();
                            } else {
                                $this->returnToHome();
                            }
                        } else {
                            $this->returnToHome();
                        }
                    }


                    public function attachTagHandle()
                    {
                        if (isset($_SESSION['original_password'])) {
                            if (password_verify($_SESSION['original_password'], $this->getHashedPassword())) {

                                $id_post = $_POST['id_post'];
                                $tag_id = $_POST['tag_id'];

                                $type = substr($id_post, 0, 4);
                                $id = substr($id_post, 4);

                                if ($type == 'docs') {
                                    $sql = "INSERT INTO `doc_tags` (`doc_id`, `tag_id`) VALUES (?, ?)";
                                    $stmt = $this->conn->prepare($sql);
                                    $stmt->bind_param("ii", $id, $tag_id);
                                    $stmt->execute();
                                    $stmt->close();
                                    $this->returnToHome();
                                } elseif ($type == 'blog') {
                                    $sql = "INSERT INTO `blog_tags` (`blog_id`, `tag_id`) VALUES (?, ?)";
                                    $stmt = $this->conn->prepare($sql);
                                    $stmt->bind_param("ii", $id, $tag_id);
                                    $stmt->execute();
                                    $stmt->close();
                                    $this->returnToHome();
                                } else {
                                    $this->returnToHome();
                                }
                            } else {
                                $this->returnToHome();
                            }
                        } else {
                            $this->returnToHome();
                        }
                    }

                    public function display_form($type, $form_action, $operation, $row = null)
                    {
                        $pageTitle = ($operation == 'add') ? "Add $type Page" : "Edit $type Page";
                        $submitButtonText = ($operation == 'add') ? 'დადასტურება' : 'განახლება';
                        $typepost = ($type == 'blog') ? 'topic' : 'project';
                        $this->bootstrapHead($pageTitle);
                ?>

                <body>
                    <div class="container">

                        <form action="<?php echo $form_action; ?>" method="post">
                            <label class="form-label pt-3" for="topic">სათაური:</label><br>
                            <input class="form-control" type="text" id="<?php echo $typepost; ?>" name="<?php echo $typepost; ?>" value="<?php echo ($row) ? $row[$typepost] : ''; ?>"><br>

                            <!--<label class="form-label" for="docname">Docname:</label><br>
                            <input class="form-control" type="text" id="docname" name="docname" value="<?php echo ($row) ? $row['docname'] : ''; ?>"><br>-->

                            <label class="form-label" for="title">მთავარი სათაური:</label><br>
                            <input class="form-control" type="text" id="title" name="title" value="<?php echo ($row) ? $row['title'] : ''; ?>"><br>

                            <label class="form-label" for="hypertext">ტექსტი:</label><br>
                            <textarea id="hypertext" name="hypertext" rows="4" cols="50"><?php echo ($row) ? $row['hypertext'] : ''; ?></textarea><br>

                            <label class="form-label" for="shortdesc">მინი აღწერა (ბლოგში შესვლამდე ჩანს)</label><br>
                            <textarea class="form-control" id="shortdesc" name="shortdesc" rows="4" cols="50"><?php echo ($row) ? $row['shortdesc'] : ''; ?></textarea><br>

                            <?php if ($operation == 'edit') : ?>
                                <?php if ($type == 'blog') : ?>
                                    <input name="blog_id" type="hidden" value="<?php echo $row['id'] ?>">
                                <?php endif; ?>
                                <?php if ($type == 'doc') : ?>
                                    <input name="doc_id" type="hidden" value="<?php echo $row['id'] ?>">
                                <?php endif; ?>
                            <?php endif; ?>


                            <input class="btn btn-dark" type="submit" value="<?php echo $submitButtonText; ?>">
                        </form>

                        <script>
                            tinymce.init({
                                selector: '#hypertext',
                                height: 500,
                                plugins: 'code',
                                toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | code',
                            });
                        </script>
                    </div>
                </body>

                </html>

            <?php
                    }

                    public function display_about_form($form_action, $row)
                    {
                        $this->bootstrapHead('რედაქტირება - მთავარი & ჩვენ შესახებ')
            ?>

                <body>
                    <div class="container">

                        <form action="<?php echo $form_action; ?>" method="post" enctype="multipart/form-data">

                            <label class="form-label" for="name">სახელი </label><br>
                            <input class="form-control" type="text" id="name" name="name" value="<?php echo $row['name'] ?>"><br>

                            <label for="formFile" class="form-label">მთავარი ფოტო</label>
                            <input class="form-control" type="file" id="formFile" name="formFile" accept=".png, .jpg"><br>

                            <label class="form-label" for="hypertexthome">მოკლე აღწერა</label><br>
                            <textarea class="form-control" id="hypertexthome" name="hypertexthome" rows="4" cols="50"><?php echo $row['hypertexthome'] ?></textarea><br>

                            <label class="form-label" for="hypertextabout">ჩვენ შესახებ</label><br>
                            <textarea id="hypertextabout" name="hypertextabout" rows="4" cols="50"><?php echo $row['hypertextabout'] ?></textarea><br>


                            <input class="btn btn-dark" type="submit" value="განახლება">
                        </form>

                        <script>
                            tinymce.init({
                                selector: '#hypertextabout',
                                height: 500,
                                plugins: 'code',
                                toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | code',
                            });
                        </script>
                    </div>
                </body>

                </html>

                <?php
                    }

                    public function editBlog()
                    {
                        if (password_verify($_SESSION['original_password'], $this->getHashedPassword())) {
                            $query = "SELECT * FROM blogs";
                            $result = $this->conn->query($query);
                ?>
                    <form action="/editBlogPage" method="POST">
                        <label for="blog_id">აირჩიეთ დასარედაქტირებელი ბლოგი<br>
                        <select name="blog_id">
                            <?php
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row['id'] . "'>" . $row['topic'] . "</option>";
                            }
                            ?>
                        </select><br><br>
                        <input type="submit" name="delete" value="დადასტურება">
                    </form>

                <?php
                        } else {
                            $this->returnToHome();
                        }
                    }

                    public function editBlogPage()
                    {
                        if (password_verify($_SESSION['original_password'], $this->getHashedPassword())) {
                            $blog_id = $_POST['blog_id'];
                            $sql = "SELECT * FROM blogs WHERE id = ?";
                            $stmt = mysqli_prepare($this->conn, $sql);
                            mysqli_stmt_bind_param($stmt, "s", $blog_id);
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);

                            while ($row = mysqli_fetch_assoc($result)) {
                                $this->display_form('blog', '/editBlogHandle', 'edit', $row);
                            }
                        } else {
                            $this->returnToHome();
                        }
                    }

                    public function editTag()
                    {
                        if (password_verify($_SESSION['original_password'], $this->getHashedPassword())) {
                            $query = "SELECT * FROM tags";
                            $result = $this->conn->query($query);
                ?>
                    <form action="/editTagPage" method="POST">
                        <label for="tag_id">აირჩიეთ დასარედაქტირებელი თაგი</label><br>
                        <select name="tag_id">
                            <?php
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row['id'] . "'>" . $row['tag_name'] . "</option>";
                            }
                            ?>
                        </select><br><br>
                        <input type="submit" name="delete" value="დადასტურება">
                    </form>

                    <?php
                        } else {
                            $this->returnToHome();
                        }
                    }

                    public function editTagPage()
                    {
                        if (password_verify($_SESSION['original_password'], $this->getHashedPassword())) {
                            $tag_id = $_POST['tag_id'];
                            $sql = "SELECT * FROM tags WHERE id = ?";
                            $stmt = mysqli_prepare($this->conn, $sql);
                            mysqli_stmt_bind_param($stmt, "s", $tag_id);
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);

                            while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <form action="/editTagHandle" method="POST">

                            <label for="tag_name">თაგის სახელი:</label><br>
                            <input type="text" id="tag_name" name="tag_name" value="<?php echo $row['tag_name'] ?>"><br><br>
                            <input name="tag_id" type="hidden" value="<?php echo $row['id'] ?>">

                        <?php
                            }
                        ?>
                        <input type="submit" value="დადასტურება">
                        </form>

                    <?php
                        } else {
                            $this->returnToHome();
                        }
                    }

                    public function editTagHandle()
                    {
                        $tag_id = $_POST['tag_id'];
                        $tag_name = $_POST['tag_name'];
                        if (password_verify($_SESSION['original_password'], $this->getHashedPassword())) {
                            $sql = "UPDATE `tags` SET `tag_name` = ? WHERE `tags`.`id` = ?;";
                            $stmt = mysqli_prepare($this->conn, $sql);

                            if ($stmt) {
                                mysqli_stmt_bind_param($stmt, "si", $tag_name, $tag_id);

                                if (mysqli_stmt_execute($stmt)) {
                                    $this->returnToHome();
                                } else {
                                    $this->returnToHome();
                                }
                            } else {
                                $this->returnToHome();
                            }
                        } else {
                            $this->returnToHome();
                        }
                    }

                    public function editBlogHandle()
                    {
                        $blog_id = $_POST['blog_id'];
                        $docname = $_POST['docname'];
                        $topic = $_POST['topic'];
                        $title = $_POST['title'];
                        $hypertext = $_POST['hypertext'];
                        $shortdesc = $_POST['shortdesc'];

                        if (password_verify($_SESSION['original_password'], $this->getHashedPassword())) {
                            $sql = "UPDATE `blogs` SET `topic` = ?, `docname` = ?, `title` = ?, `hypertext` = ?, `shortdesc` = ? WHERE `blogs`.`id` = ?;";
                            $stmt = mysqli_prepare($this->conn, $sql);

                            if ($stmt) {
                                mysqli_stmt_bind_param($stmt, "sssssi", $topic, $docname, $title, $hypertext, $shortdesc, $blog_id);

                                if (mysqli_stmt_execute($stmt)) {
                                    $this->returnToHome();
                                } else {
                                    $this->returnToHome();
                                }
                            } else {
                                $this->returnToHome();
                            }
                        } else {
                            $this->returnToHome();
                        }
                    }
                    public function deleteImage()
                    {
                        if (password_verify($_SESSION['original_password'], $this->getHashedPassword())) {

                    ?>
                        <!DOCTYPE html>
                        <html lang="en">

                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>სურათის წაშლა</title>
                        </head>

                        <body>
                            <h2>სურათის წაშლა</h2>
                            <form method="post" action="/deleteImageHandle">
                                <label for="image">აირჩიეთწასაშლელი სურათი:</label>
                                <select name="image" id="image">
                                    <?php
                                    $imageDirectory = 'assets/img/';
                                    $files = glob($imageDirectory . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
                                    foreach ($files as $file) {
                                        $fileName = basename($file);
                                        echo "<option value=\"$fileName\">$fileName</option>";
                                    }
                                    ?>
                                </select>
                                <br><br>
                                <input type="submit" value="წაშლა">
                            </form>
                        </body>

                        </html>
                    <?php
                        } else {
                            $this->returnToHome();
                        }
                    }

                    public function deleteImageHandle()
                    {
                        $imageDirectory = 'assets/img/';
                        $selectedImage = $_POST['image'];
                        $imageFilePath = $imageDirectory . $selectedImage;
                        if (file_exists($imageFilePath)) {
                            if (unlink($imageFilePath)) {
                                $this->returnToHome();
                            } else {
                                $this->returnToHome();
                            }
                        } else {
                            $this->returnToHome();
                        }
                    }

                    public function manage()
                    {
                        if (isset($_SESSION['original_password'])) {
                    ?>
                        <!DOCTYPE html>
                        <html lang="en">

                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>სამართავი პანელი</title>
                            
                            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
                            <link rel="stylesheet" href="//cdn.web-fonts.ge/fonts/bpg-arial-caps/css/bpg-arial-caps.min.css">
                            
                            <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon.png">
                            <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon.png">
                            <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">
                            <meta name="msapplication-TileColor" content="#da532c">
                            <meta name="theme-color" content="#ffffff">
            
                            <style>
                                body {
                                    font-family: "BPG Arial Caps", sans-serif;
                                }
                                .body{
                                    font-family: "BPG Arial Caps", sans-serif;
                                }
                                *{
                                    font-family: "BPG Arial Caps", sans-serif;
                                }
                            </style>
                        </head>

                        <body>
                            <h2>სამართავი პანელი</h2>
                            <a href="../">მთავარი გვერდი</a>
                            <br>
                            <a href="../assets/img/">ატვირთული ფოტოები</a>
                            

                            <h2>დამატება</h2>
                            <a href="/addBlog">ახალი ბლოგი</a>
                            <br>
                            <!--<a href="/addDoc">დოკ</a>
                            <br>-->
                            <a href="/attachTag">მიამაგრე თაგი</a>
                            <br>
                            <a href="/addTag">დაგთის დამატება</a>
                            <br>
                            <a href="/addImage">სურათის დამატება</a>
                            <br>

                            <h2>რედაქტირება</h2>
                            <a href="/editAbout">მთავარი & ჩვენ შესახებ</a>
                            <br>
                            <a href="/editBlog">ბლოგი</a>
                            <br>
                            <!--<a href="/editDoc">დოკ</a>
                            <br>-->
                            <a href="/editLinktree">ლინკები</a>
                            <br>
                            <a href="/editTag">თაგები</a>

                            <h2>წაშლა</h2>
                            <a href="/deleteBlog">ბლოგი</a>
                            <br>
                            <!--<a href="/deleteDoc">დოკ</a>
                            <br>-->
                            <a href="/deleteAttachTag">მიმაგრებული თაგები</a>
                            <br>
                            <a href="/deleteTag">თაგები</a>
                            <br>
                            <a href="/deleteImage">სურათები</a>
                            <br>
                        </body>

                        </html>
                    <?php


                        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            $password = $_POST['password'];
                            if (password_verify($password, $this->getHashedPassword())) {
                                $_SESSION['original_password'] = $password;
                                header('Location: ../');
                                exit;
                            } else {
                                header('Location: ../');
                                exit;
                            }
                        } else {
                    ?>
                        <!DOCTYPE html>
                        <html lang="en">

                        <head>
                            <!-- Title -->
                            <title>Unlock</title>

                            <!-- Styles -->
                            <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&amp;display=swap" rel="stylesheet">
                            <link href="assets/css/bootstrap.min.css" rel="stylesheet">
                            <!-- Theme Styles -->
                            <link href="assets/css/main.min.css" rel="stylesheet">
                            
                            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
                            <link rel="stylesheet" href="//cdn.web-fonts.ge/fonts/bpg-arial-caps/css/bpg-arial-caps.min.css">
                            
                            <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon.png">
                            <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon.png">
                            <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">
                            <meta name="msapplication-TileColor" content="#da532c">
                            <meta name="theme-color" content="#ffffff">
            
                            <style>
                                body {
                                    font-family: "BPG Arial Caps", sans-serif;
                                }
                                .body{
                                    font-family: "BPG Arial Caps", sans-serif;
                                }
                                *{
                                    font-family: "BPG Arial Caps", sans-serif;
                                }
                            </style>


                        </head>

                        <body class="login-page">
                            <div class="container">
                                <div class="row justify-content-md-center">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="card login-box-container">
                                            <div class="card-body">
                                                <div class="authent-text">
                                                    <!--<p>მოგესალმებით</p>
                                                    <p>ავტორიზაციისთვის მიუთითეთ პაროლი</p>-->
                                                </div>
                                                <form action="" method="post">
                                                    <div class="mb-3">
                                                        <div class="form-floating">
                                                            <input type="password" class="form-control" name="password" id="password" placeholder="მიუთითეთ პაროლი">
                                                            <label for="password">პაროლი</label>
                                                        </div>
                                                    </div>
                                                    <div class="d-grid">
                                                        <button type="submit" class="btn btn-info m-b-xs">განბლოკვა</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </body>

                        </html>
                        <?php
                        }
                    }

                    public function editAbout()
                    {
                        if (password_verify($_SESSION['original_password'], $this->getHashedPassword())) {
                            $result = $this->getAboutData($this->conn);
                            if ($result !== null && !empty($result)) {
                                foreach ($result as $row) {
                                    $this->display_about_form('/editAboutHandle', $row);
                        ?>
                        <?php
                                }
                            }
                        ?>
                    <?php
                        } else {
                            $this->returnToHome();
                        }
                    }

                    public function deleteBlog()
                    {
                        if (password_verify($_SESSION['original_password'], $this->getHashedPassword())) {
                            $query = "SELECT * FROM blogs";
                            $result = $this->conn->query($query);
                    ?>
                        <form action="/deleteBlogHandle" method="POST">
                            <label for="blog_id">აირჩიეთ წასაშლელი ბლოგი</label><br>
                            <select name="blog_id">
                                <?php
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value='" . $row['id'] . "'>" . $row['topic'] . "</option>";
                                }
                                ?>
                            </select>
                            <br><br>
                            <input type="submit" name="delete" value="დადასტურება">
                        </form>
                    <?php
                        } else {
                            $this->returnToHome();
                        }
                    }

                    public function deleteBlogHandle()
                    {
                        if (password_verify($_SESSION['original_password'], $this->getHashedPassword())) {

                            $blog_id = $_POST['blog_id'];
                            $delete_tags_query = "DELETE FROM blog_tags WHERE blog_id = $blog_id";
                            $delete_tags_result = $this->conn->query($delete_tags_query);

                            if (!$delete_tags_result) {
                                $this->returnToHome();
                            } else {
                                $delete_blog_query = "DELETE FROM blogs WHERE id = $blog_id";
                                $delete_blog_result = $this->conn->query($delete_blog_query);
                                if (!$delete_blog_result) {
                                    $rollback_tags_query = "ROLLBACK";
                                    $this->conn->query($rollback_tags_query);
                                    $this->returnToHome();
                                } else {
                                    $delete_view_query = "DELETE FROM `views` WHERE `content_type` = 'blog' AND content_id = $blog_id;";
                                    $delete_view_result = $this->conn->query($delete_view_query);

                                    if ($delete_view_result) {
                                        $this->returnToHome();
                                    } else {
                                        $this->returnToHome();
                                    }
                                }
                            }
                        } else {
                            $this->returnToHome();
                        }
                    }

                    public function editDoc()
                    {
                        if (password_verify($_SESSION['original_password'], $this->getHashedPassword())) {
                            $query = "SELECT * FROM docs";
                            $result = $this->conn->query($query);
                    ?>
                        <form action="/editDocPage" method="POST">
                            <label for="doc_id">Choose Docs to edit</label><br>
                            <select name="doc_id">
                                <?php
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value='" . $row['id'] . "'>" . $row['project'] . "</option>";
                                }
                                ?>
                            </select><br>
                            <input type="submit" name="delete" value="Go">
                        </form>

                    <?php
                        } else {
                            $this->returnToHome();
                        }
                    }

                    public function editDocPage()
                    {
                        if (password_verify($_SESSION['original_password'], $this->getHashedPassword())) {
                            $doc_id = $_POST['doc_id'];
                            $sql = "SELECT * FROM docs WHERE id = ?";
                            $stmt = mysqli_prepare($this->conn, $sql);
                            mysqli_stmt_bind_param($stmt, "s", $doc_id);
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);

                            while ($row = mysqli_fetch_assoc($result)) {
                                $this->display_form('doc', '/editDocHandle', 'edit', $row);
                            }
                        } else {
                            $this->returnToHome();
                        }
                    }

                    public function deleteDoc()
                    {
                        if (password_verify($_SESSION['original_password'], $this->getHashedPassword())) {
                            $query = "SELECT * FROM docs";
                            $result = $this->conn->query($query);
                    ?>
                        <form action="/deleteDocHandle" method="POST">
                            <label for="doc_id">აირჩიეთ წასაშლელი თაგი</label><br>
                            <select name="doc_id">
                                <?php
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value='" . $row['id'] . "'>" . $row['project'] . "</option>";
                                }
                                ?>
                            </select>
                            <br><br>
                            <input type="submit" name="delete" value="დადასტურება">
                        </form>
            <?php
                        } else {
                            $this->returnToHome();
                        }
                    }

                    public function deleteDocHandle()
                    {
                        if (password_verify($_SESSION['original_password'], $this->getHashedPassword())) {

                            $doc_id = $_POST['doc_id'];
                            $delete_tags_query = "DELETE FROM doc_tags WHERE doc_id = $doc_id";
                            $delete_tags_result = $this->conn->query($delete_tags_query);

                            if (!$delete_tags_result) {
                                $this->returnToHome();
                            } else {
                                $delete_doc_query = "DELETE FROM docs WHERE id = $doc_id";
                                $delete_doc_result = $this->conn->query($delete_doc_query);
                                if (!$delete_doc_result) {
                                    $rollback_tags_query = "ROLLBACK";
                                    $this->conn->query($rollback_tags_query);
                                    $this->returnToHome();
                                } else {
                                    $delete_view_query = "DELETE FROM `views` WHERE `content_type` = 'doc' AND content_id = $doc_id;";
                                    $delete_view_result = $this->conn->query($delete_view_query);

                                    if ($delete_view_result) {
                                        $this->returnToHome();
                                    } else {
                                        $this->returnToHome();
                                    }
                                }
                            }
                        } else {
                            $this->returnToHome();
                        }
                    }

                    public function editDocHandle()
                    {
                        $doc_id = $_POST['doc_id'];
                        $docname = $_POST['docname'];
                        $project = $_POST['project'];
                        $title = $_POST['title'];
                        $hypertext = $_POST['hypertext'];
                        $shortdesc = $_POST['shortdesc'];

                        if (password_verify($_SESSION['original_password'], $this->getHashedPassword())) {
                            $sql = "UPDATE `docs` SET `project` = ?, `docname` = ?, `title` = ?, `hypertext` = ?, `shortdesc` = ? WHERE `docs`.`id` = ?;";
                            $stmt = mysqli_prepare($this->conn, $sql);

                            if ($stmt) {
                                mysqli_stmt_bind_param($stmt, "sssssi", $project, $docname, $title, $hypertext, $shortdesc, $doc_id);

                                if (mysqli_stmt_execute($stmt)) {
                                    $this->returnToHome();
                                } else {
                                    $this->returnToHome();
                                }
                            } else {
                                $this->returnToHome();
                            }
                        } else {
                            $this->returnToHome();
                        }
                    }

                    public function editAboutHandle()
                    {
                        $name = $_POST['name'];
                        $hypertexthome = $_POST['hypertexthome'];
                        $hypertextabout = $_POST['hypertextabout'];

                        if (password_verify($_SESSION['original_password'], $this->getHashedPassword())) {

                            if (isset($_FILES["formFile"]) && $_FILES["formFile"]["error"] == UPLOAD_ERR_OK) {
                                $uploadDirectory = "assets/img/";
                                $newFileName = "favicon.png";
                                $uploadFilePath = $uploadDirectory . $newFileName;
                                if (move_uploaded_file($_FILES["formFile"]["tmp_name"], $uploadFilePath)) {
                                    $this->returnToHome();
                                } else {
                                    $this->returnToHome();
                                }
                            }

                            $sql = "UPDATE `about` SET `hypertexthome` = ?, `name` = ?, `hypertextabout` = ? WHERE `about`.`id` = 1;";
                            $stmt = mysqli_prepare($this->conn, $sql);

                            if ($stmt) {
                                mysqli_stmt_bind_param($stmt, "sss", $hypertexthome, $name, $hypertextabout);

                                if (mysqli_stmt_execute($stmt)) {
                                    $this->returnToHome();
                                } else {
                                    $this->returnToHome();
                                }
                            } else {
                                $this->returnToHome();
                            }
                        } else {
                        }
                    }

                    public function returnToHome()
                    {
                        header('Location: /');
                        exit;
                    }
                }

                $personalWeb = new personalWeb();
                $personalWeb->handleRequestRoute();
