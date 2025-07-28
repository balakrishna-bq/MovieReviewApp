<?php
include 'partials/header.php';

// fetch post from database if id is set
if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM posts WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $post = mysqli_fetch_assoc($result);
} else {
    header('location: ' . ROOT_URL . 'blog.php');
    die();
}
?>

<section class="singlepost">
    <div class="container singlepost__container">
        <h2><?= $post['title'] ?></h2>

        <!-- Post Author Info -->
        <div class="post__author">
            <?php
            // fetch author from users table using author_id
            $author_id = $post['author_id'];
            $author_query = "SELECT * FROM users WHERE id=$author_id";
            $author_result = mysqli_query($connection, $author_query);
            $author = mysqli_fetch_assoc($author_result);
            ?>
            <div class="post__author-avatar">
                <img src="./images/<?= $author['avatar'] ?>">
            </div>
            <div class="post__author-info">
                <h5>By: <?= "{$author['firstname']} {$author['lastname']}" ?></h5>
                <small>
                    <?= date("M d, Y - H:i", strtotime($post['date_time'])) ?>
                </small>
            </div>
        </div>

        <!-- Thumbnail -->
        <div class="singlepost__thumbnail">
           <div class="singlepost__thumbnail">
    <img src="./images/<?= $post['thumbnail'] ?>" style="display:block; width:30%; margin: 20px auto; border-radius: 8px;">
</div>

        </div>

        <!-- Post Body with Paragraphs -->
        <div class="singlepost__content">
            <?php
            // Format body into paragraphs by line breaks
            $paragraphs = explode("\n", $post['body']);
            foreach ($paragraphs as $para) {
                if (trim($para) !== '') {
                    echo '<p>' . nl2br(trim($para)) . '</p>';
                }
            }
            ?>
        </div>
    </div>
</section>

<?php include 'partials/footer.php'; ?>
