<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Love Story ❤️</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Mitr:wght@300;500&family=Pattaya&display=swap');

        :root {
            --primary-color: #ff4d6d;
            --secondary-color: #ff8fa3;
            --bg-color: #fff0f3;
        }

        body {
            margin: 0;
            background: var(--bg-color);
            font-family: 'Mitr', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* Login Screen */
        #login-screen {
            text-align: center;
            padding: 30px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        input {
            padding: 12px;
            border-radius: 10px;
            border: 2px solid var(--primary-color);
            font-size: 1rem;
            text-align: center;
            width: 150px;
            margin-bottom: 15px;
        }

        /* Main Content */
        #main-content {
            display: none;
            width: 90%;
            max-width: 500px;
            text-align: center;
            animation: fadeIn 1.5s;
        }

        @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }

        .card {
            background: white;
            padding: 30px;
            border-radius: 30px;
            box-shadow: 0 15px 35px rgba(255, 77, 109, 0.2);
            position: relative;
        }

        .photo-frame {
            width: 250px;
            height: 250px;
            background: #eee;
            margin: 20px auto;
            border: 8px solid white;
            border-radius: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .photo-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        h1 {
            font-family: 'Pattaya', sans-serif;
            color: var(--primary-color);
            font-size: 2.8rem;
            margin: 10px 0;
        }

        .timer-box {
            font-size: 1.3rem;
            color: var(--secondary-color);
            background: #fff5f6;
            padding: 10px;
            border-radius: 15px;
            margin: 15px 0;
            font-weight: 500;
        }

        .quote-display {
            font-style: italic;
            color: #777;
            min-height: 50px;
            margin: 15px 0;
        }

        button {
            background: var(--primary-color);
            color: white;
            border: none;
            padding: 12px 28px;
            border-radius: 50px;
            cursor: pointer;
            font-size: 1rem;
            transition: 0.3s;
            box-shadow: 0 5px 15px rgba(255, 77, 109, 0.3);
        }

        button:hover { transform: translateY(-3px); background: #c9184a; }

        .heart-particle {
            position: fixed;
            pointer-events: none;
            z-index: 99;
            animation: moveUp 3s linear forwards;
        }

        @keyframes moveUp {
            0% { transform: translateY(0) rotate(0deg); opacity: 1; }
            100% { transform: translateY(-100vh) rotate(360deg); opacity: 0; }
        }
    </style>
</head>
<body>

    <div id="login-screen">
        <h2 style="color: var(--primary-color);">🔐 รหัสผ่านคือวันครบรอบ</h2>
        <input type="password" id="pass" placeholder="วว ดด">
        <br>
        <button onclick="checkPass()">เข้าสู่หัวใจ ❤️</button>
    </div>

    <div id="main-content">
        <div class="card">
            <div class="photo-frame">
                <img src="images/1770222144721.img" onerror="this.src='https://cdn-icons-png.flaticon.com/512/833/833472.png'">
            </div>
            <h1>Happy Anniversary</h1>
            
            <div class="timer-box" id="display-time">กำลังคำนวณเวลา...</div>
            
            <div class="quote-display" id="quote-text">"ยินดีด้วยกับก้าวแรกของเรานะ"</div>

            <p style="color: #666; font-size: 0.9rem;">
                ขอบคุณที่อยู่ด้วยกันนะคนดี
            </p>

            <button onclick="powerUp()">คลิกเติมพลังรัก ❤️</button>
        </div>
    </div>

    <script>
        const quotes = [
            "รักคุณมากกว่าเมื่อวานนะ",
            "ขอบคุณที่เป็นความสุขให้กัน",
            "อยู่เป็นรอยยิ้มแบบนี้ไปนานๆ นะ",
            "โชคดีจังที่มีคุณในชีวิต",
            "อยากขอบคุณทุกอย่างที่ทำให้เราเจอกัน",
            "สัญญาว่าจะดื้อให้น้อยลง (นิดนึง) ❤️"
        ];

        function checkPass() {
            const pw = document.getElementById('pass').value;
            if(pw === "1017") {
                document.getElementById('login-screen').style.display = 'none';
                document.getElementById('main-content').style.display = 'block';
                setInterval(createHeart, 600);
            } else {
                alert("รหัสผ่านไม่ถูกนะ ลองวันเดือนปีที่เจอกันครับ!");
            }
        }

        const anniversaryDate = new Date(2025, 10, 17); // 17 พ.ย. 2025

        function updateTimer() {
            const now = new Date();
            let years = now.getFullYear() - anniversaryDate.getFullYear();
            let months = now.getMonth() - anniversaryDate.getMonth();
            let days = now.getDate() - anniversaryDate.getDate();

            // จัดการกรณีที่จำนวนวันติดลบ
            if (days < 0) {
                months--;
                // หาวันสุดท้ายของเดือนที่แล้ว
                const lastMonth = new Date(now.getFullYear(), now.getMonth(), 0);
                days += lastMonth.getDate();
            }

            // จัดการกรณีที่จำนวนเดือนติดลบ
            if (months < 0) {
                years--;
                months += 12;
            }

            // แสดงผลลัพธ์
            let result = "เราเดินร่วมทางกันมา ";
            if (years > 0) result += `${years} ปี `;
            if (months > 0) result += `${months} เดือน `;
            result += `${days} วันแล้วนะ`;

            document.getElementById('display-time').innerText = result;
        }
        setInterval(updateTimer, 1000);
        updateTimer();

        function createHeart() {
            const heart = document.createElement('div');
            heart.classList.add('heart-particle');
            heart.innerHTML = ['❤️','💖','💗','💕'][Math.floor(Math.random()*4)];
            heart.style.left = Math.random() * 100 + "vw";
            heart.style.top = "100vh";
            heart.style.fontSize = (Math.random() * 15 + 15) + "px";
            heart.style.opacity = Math.random() * 0.8 + 0.2;
            document.body.appendChild(heart);
            setTimeout(() => heart.remove(), 3000);
        }

        function powerUp() {
            // สุ่มคำบอกรัก
            const randomQuote = quotes[Math.floor(Math.random() * quotes.length)];
            document.getElementById('quote-text').innerText = `"${randomQuote}"`;
            
            // ปล่อยหัวใจชุดใหญ่
            for(let i=0; i<15; i++) {
                setTimeout(createHeart, i * 100);
            }
        }
    </script>
</body>
</html>