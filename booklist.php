<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th><th>Author</th><th>Description</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($books as $title=>$book) {
                        echo '<tr>';
                        echo "<td><a href='index.php?book=$book->id'>$book->title</a></td>";
                        echo "<td>$book->author</td>";
                        echo "<td>$book->description</td>";
                        echo '<tr>';
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>