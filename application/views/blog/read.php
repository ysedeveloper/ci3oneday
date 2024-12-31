<h2><?= $blog_post->title ?></h2>
<p>
	<?=nl2br($blog_post->body) ?>
</p>
<p>
    <a href="/blog/update/<?= $blog_post->id?>">
        <input type="button" value="수정하기" />
    </a>
</p>
