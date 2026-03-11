<?php

require 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
  $id = $_GET['id'] ?? null;
  
  $stmnt = $pdo->prepare('SELECT * FROM posts WHERE id = :id');
  $stmnt->execute(['id' => $id]);
  $post = $stmnt->fetch();
} else if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
  $stmnt = $pdo->prepare('UPDATE posts SET title = :title, body = :body WHERE id = :id');
  $stmnt->execute([
    'title' => $_POST['title'] ?? '',
    'body' => $_POST['body'] ?? '',
    'id' => $_POST['id'] ?? null
  ]);
  // echo '<pre>';
  // var_dump($_POST);
  // echo '</pre>';
  header('Location: post.php?id=' . $_POST['id']);
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Blog Post</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">My Blog</h1>
    </div>
  </header>
  <div class="flex justify-center mt-10">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
      <h1 class="text-2xl font-semibold mb-6">Update Blog Post</h1>
      <form method="post">
        <input type="text" name="id" value="<?= $post['id'] ?>" hidden>
        <div class="mb-4">
          <label for="title" class="block text-gray-700 font-medium">Title</label>
          <input type="text" id="title" name="title" placeholder="Enter post title" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none" value="<?= $post['title'] ?>">
        </div>
        <div class="mb-6">
          <label for="body" class="block text-gray-700 font-medium">Body</label>
          <textarea id="body" name="body" placeholder="Enter post body" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none"><?= $post['body'] ?></textarea>
        </div>
        <div class="flex items-center justify-between">
          <button type="submit" name="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none">
            Submit
          </button>
          <a href="index.php" class="text-blue-500 hover:underline">Back to Posts</a>
        </div>
      </form>
    </div>
  </div>
</body>

</html>