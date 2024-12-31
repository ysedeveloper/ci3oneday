<h2>글 수정</h2>
<form method="POST">
    <label for="title">제목</label>
    <input type="text" name="title" value="<?= $blog_post->title ?>" /><br />

    <label for="body">본문</label>
    <textarea name="body"><?= $blog_post->body ?></textarea><br />
    <input type="submit" name="submit" value="글 수정하기" />
</form>
