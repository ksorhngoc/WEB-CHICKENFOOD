<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="stylec.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Phản hồi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .message-item img {
        border-radius: 50%;
        margin-right: 10px;
        max-width: 40px; /* Kích thước tối đa cho hình ảnh */
        max-height: 40px; /* Kích thước tối đa cho hình ảnh */
        opacity: 0.8; /* Độ trong suốt của hình ảnh */
        background-color: #ccc; /* Màu nền của hình ảnh */
        }

        #messenger-container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        #message-list {
            list-style: none;
            padding: 0;
            margin: 0;
            max-height: 400px;
            overflow-y: auto;
            border-bottom: 1px solid #ccc;
        }

        .message-item {
            display: flex;
            padding: 10px;
            border-bottom: 1px solid #eee;
        }



        .message-content {
            background-color: #e1ffc7;
            padding: 10px;
            border-radius: 8px;
        }

        .sender {
            justify-content: flex-end;
            text-align: right;
        }

        #message-input {
            width: calc(100% - 20px);
            padding: 10px;
            box-sizing: border-box;
            margin: 10px;
            border: none;
            border-radius: 5px;
            resize: none;
        }

        #send-btn {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            background-color: #0084ff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<?php
        include('header.php');
    ?>
    <div id="messenger-container">
        <ul id="message-list"></ul>
        <textarea id="message-input" placeholder="Nhập phản hồi"></textarea>
        <button id="send-btn" onclick="sendMessage()">Gửi Phản hồi</button>
    </div>

    <script>
        function sendMessage() {
            var messageInput = document.getElementById("message-input");
            var messageList = document.getElementById("message-list");
            var messageText = messageInput.value;

            if (messageText.trim() !== "") {
                // Tạo một mục tin nhắn mới
                var listItem = document.createElement("li");
                listItem.className = "message-item";

                // Xác định là người gửi hay người nhận
                var senderClass = Math.random() < 0.5 ? "sender" : "";
                listItem.classList.add(senderClass);

                // Avatar
                var avatar = document.createElement("img");
                avatar.src = senderClass === "sender" ? "images/user.jpg" : "images/user.jpg";
                avatar.alt = "Avatar";
                listItem.appendChild(avatar);

                // Nội dung tin nhắn
                var messageContent = document.createElement("div");
                messageContent.className = "message-content";
                messageContent.textContent = messageText;
                listItem.appendChild(messageContent);

                // Thêm mục tin nhắn vào danh sách
                messageList.appendChild(listItem);

                // Đặt cuộn tới cuối danh sách tin nhắn
                messageList.scrollTop = messageList.scrollHeight;

                // Xóa nội dung trong ô nhập tin nhắn
                messageInput.value = "";
            }
        }
    </script>
</body>
</html>

