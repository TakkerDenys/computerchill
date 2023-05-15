<?php if (post_password_required()) {
	return;
}

$comment_count = get_comments_number();
?>

<div id="comments" class="comments-area default-max-width <?php echo get_option('show_avatars') ? 'show-avatars' : ''; ?>">
	<div class="post-comment">
		<div class="comment-header">
			<h2 class="comment-title">Коментарі</h2>
		</div>
		<div class="comment-main">
			<?php if (have_comments()) : ?>
				<ol class="comment-list">
					<?php
					$comments = get_comments(array('post_id' => get_the_ID()));
					foreach ($comments as $comment) :
						?>
						<li class="comment">
							<div class="comment-main-header">
								<div class="comment-main-header-right">
									<?php echo get_avatar($comment, 60); ?>
								</div>
								<div class="comment-main-header-left">
									<p><?php echo $comment->comment_author; ?></p>
									<div class="comment-main-header-bottom">
										<p><?php echo get_comment_date('d.m.Y', $comment->comment_ID); ?></p>
										<p><?php edit_comment_link('Редагувати'); ?></p>
									</div>
								</div>
							</div>
							<p class="comment-text"><?php echo $comment->comment_content; ?></p>
							<p class="comment-action" data-comment-id="<?php echo $comment->comment_ID; ?>">Відповісти</p>
						</li>
					<?php
					endforeach;
					?>
				</ol>
			<?php else: ?>
				<p class="comment-description">Коментарі відсутні</p>
			<?php endif; ?>

			<?php if (is_user_logged_in()) : ?> <!-- Додано перевірку, чи користувач зареєстрований -->
				<div class="comment-add">
					<h3 class="comment-add-main">Залишити відповідь</h3>
				</div>

				<form class="comment-form" action="<?php echo site_url('/wp-comments-post.php'); ?>" method="post">
					<div class="comment-form-group">
						<label class="comment-add-label" for="comment">Коментар*<br></label>
						<textarea class="comment-add-text" id="comment" name="comment" rows="6" cols="100" required></textarea>
					</div>
					<input type="submit" value="Надіслати коментар">
					<?php comment_id_fields(); ?>
					<?php do_action('comment_form', get_the_ID()); ?>
				</form>
			<?php else: ?>
			<p class="comment-error">Для залишення коментаря потрібно <a href="<?php echo wp_login_url(get_permalink()); ?>">увійти в аккаунт</a>.</p>
			<?php endif; ?>
		</div>
	</div>
</div>
<script>
	document.addEventListener("DOMContentLoaded", function() {
		let replyButtons = document.querySelectorAll('.comment-action');
		let commentForm = document.querySelector('.comment-form');
		let commentField = document.getElementById('comment');
		let commentParentField = document.createElement('input');

		replyButtons.forEach(function(button) {
			button.addEventListener('click', function() {
				let commentId = this.getAttribute('data-comment-id');

				commentParentField.setAttribute('type', 'hidden');
				commentParentField.setAttribute('name', 'comment_parent');
				commentParentField.setAttribute('value', commentId);

				commentForm.appendChild(commentParentField);
				commentField.focus();
			});
		});
	});
</script>
