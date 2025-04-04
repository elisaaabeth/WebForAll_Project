<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>邮箱验证</title>
    <style>
        body {
            font-family: 'Arial', sans-serif; /* 设置页面字体 */
            transition: background-image 0.3s ease;
        }
        .input-container {
            margin-top: 50px;
            text-align: center;
        }
        input {
            padding: 10px;
            font-size: 16px;
            margin-top: 10px;
        }
        #message {
            font-size: 24px; /* 设置字体大小 */
            font-weight: bold; /* 设置字体粗细 */
            font-family: 'Courier New', Courier, monospace; /* 设置字体家族 */
            text-align: center;
            margin-top: 20px;
            color: white; /* 默认字体颜色 */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* 添加文字阴影 */
        }
    </style>
</head>
<body>
    <div class="input-container">
        <label for="email">请输入邮箱地址：</label>
        <input type="email" id="email" placeholder="邮箱地址" />
    </div>
    <div id="message"></div> <!-- 用于显示文字的元素 -->

    <script>
        const emailInput = document.getElementById('email');
        const messageDiv = document.getElementById('message');

        // 定义以@authencesi.fr结尾的正则表达式
        const emailRegex = /^[a-zA-Z0-9._-]+@authencesi\.fr$/;

        emailInput.addEventListener('input', () => {
            // 获取输入的邮箱值
            const emailValue = emailInput.value;

            // 检查邮箱格式是否匹配
            if (emailRegex.test(emailValue)) {
                // 如果匹配，设置背景图片为有效邮箱背景
                document.body.style.backgroundImage = 'url("valid-email-background.jpg")';
                
                // 显示提示文字
                messageDiv.textContent = '有效的邮箱地址！';
                messageDiv.style.color = 'green';  // 成功时文字为绿色
            } else {
                // 如果不匹配，设置默认背景图片
                document.body.style.backgroundImage = 'url("default-background.jpg")';

                // 显示错误提示文字
                messageDiv.textContent = '请输入以@authencesi.fr结尾的邮箱地址！';
                messageDiv.style.color = 'red';  // 错误时文字为红色
            }
        });
    </script>
</body>
</html>
