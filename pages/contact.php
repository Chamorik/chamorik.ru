<?php
include '../includes/header.php';

$showThankYou = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    if (!empty($name) && !empty($email) && !empty($message)) {
        $showThankYou = true;
    }
}
?>
<link rel="stylesheet" href="/assets/css/style.css">
<main>
    <h1>Контакты</h1>
    <?php if ($showThankYou): ?>
        <div class="thank-you-message">
            <p>Спасибо за отправку сообщения!</p>
        </div>
    <?php else: ?>
        <form method="post" class="contact-form">
            <div class="form-group">
                <input type="text" name="name" placeholder="Ваше имя" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Ваш email" required>
            </div>
            <div class="form-group">
                <textarea name="message" placeholder="Ваше сообщение" required></textarea>
            </div>
            <button type="submit">Отправить</button>
        </form>
    <?php endif; ?>
</main>

<?php include '../includes/footer.php'; ?>
