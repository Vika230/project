<?php
echo "PHP TEST";
?>

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $token = "7669136820:AAGGxS7z4ppxA9vcoM-mxS6yqlNfN5FeIm0";
    $chat_id = "1123080872";

    $arr = array(
        'chat_id' => $chat_id,
        'text' => "🔥 New Message From Website

👤 Name: $name

📧 Email: $email

💬 Message:
$message"
    );

    file_get_contents(
        "https://api.telegram.org/bot$token/sendMessage?" .
        http_build_query($arr)
    );

    header("Location: index.php?success=1");
    exit();
}

?>