<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="4. HTML.css" type="text/css">
    </head>
    <body>
        <div class="header">
                <div class="header-left">
                    <span class = "judul">
                        DumbSocmed
                    </span>
                </div>
                <div class="header-right">
                    <button class="header-right-burger">
                        <span>
                            Add Post
                        </span>
                    </button>
                </div>
            </div>
       <?php
            $connection = mysqli_connect("127.0.0.1", "root", "", "soal_4_dw");
            if (!$connection) {
                echo "GABISA KONEK.";
                exit;
            }

            $result = $connection->query("SELECT * FROM post_tb");
            $rows = $result->fetch_all(MYSQLI_ASSOC);
            for ($i = 0; $i < count($rows); $i++) {
                echo("<div class='anjay'>
                <h1>" . $rows[$i]["id"] . "</h1>
                <p>" . $rows[$i]["content"] . "</p>
                <p>By: " . $rows[$i]["createdBy"] . "</p>
                </div>");
            }
            $connection->close();
       ?>
    </body>
</html>