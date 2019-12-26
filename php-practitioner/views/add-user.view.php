<?php include 'partials/head.php'; ?>

<h1>Add User</h1>

<form action="/store-user" method="POST" >
    <input name="name" required />

    <select name="todo" required>
        <?php forEach($tasks as $task): ?>
            <option value="<?= $task->id; ?>"><?= $task->description; ?></option>
        <?php endforeach;?>
    </select>
    <input type="submit" value="Send">
</form>

<ul>
    <?php foreach($authors as $author):?>
        <li><?= $author->name . ' | ' . $author->description; ?></li>
    <?php endforeach;?>
</ul>

<?php include 'partials/footer.php'; ?>
