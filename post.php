<?php
get_header();

/* Start the Loop */
while ( have_posts() ) :
    the_post();
    get_template_part( 'template-parts/content/content-page' );

    // If comments are open or there is at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) {
        comments_template();
    }
endwhile; // End of the loop.


?>
    <main>
        <div class="post-header">
            <h2 class="post-title">Заголовок поста</h2>
            <h3 class="post-date">01.01.2023 9:52</h3>
        </div>
        <div class="post-main">
            <div class="post-photo">
                <img class="posts-photo-image" src="images/323894501.webp" alt="Зображення відсутнє">
            </div>
            <div class="post-text">
                <p class="post-text-paragraph">
                    Test post text
                </p>
            </div>
        </div>
    </main>
                <div class="post-comment">
                    <div class="comment-header">
                        <h2 class="comment-title">Заголовок поста</h2>
                        <h3 class="comment-description">Одна відповідь до “Заголовок поста”</h3>
                    </div>
                    <div class="comment-main">
                        <div class="comment-main-header">
                            <div class="comment-main-header-right">
                                <img src="images/comment.png" alt="Коментатор">
                            </div>
                            <div class="comment-main-header-left">
                                <p>Коментатор WordPress</p>
                                <div class="comment-main-header-bottom">
                                    <p>10.05.2023</p>
                                    <p>Редагувати</p>
                                </div>
                            </div>
                        </div>
                        <p class="comment-text">Hi, this is a comment.To get started with moderating, editing, and deleting comments, please visit the Comments screen in the dashboard.Commenter avatars come from Gravatar.</p>
                        <p class="comment-action">Відповісти</p>
                    </div>
                    <div class="comment-add">
                        <h3 class="comment-add-main">Залишити відповідь</h3>
                    </div>
                    <form class="comment-form">
                        <div class="comment-form-group">
                            <label class="comment-add-label" for="comment">Коментар*<br></label>
                            <textarea class="comment-add-text" id="comment" name="comment" rows="6" cols="100" required></textarea>
                        </div>
                        <input type=submit value="Надіслати коментар">
                    </form>
                </div>

<?php


get_footer();