<?php include 'partials/head.php'; ?>

<h1>Submit name</h1>

    <form action="/names" method="POST">
        <input name="name" />
        <input type="submit" value="Send">
    </form>
<?php include 'partials/footer.php'; ?>