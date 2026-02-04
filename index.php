<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Local Server Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Kanit', sans-serif;
            background-color: #0f172a;
            color: #f8fafc;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            width: 100%;
            max-width: 500px;
            padding: 20px;
            text-align: center;
        }

        h1 {
            font-weight: 500;
            margin-bottom: 30px;
            letter-spacing: 1px;
            color: #38bdf8;
        }

        .menu-list {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .menu-item {
            display: flex;
            align-items: center;
            padding: 20px;
            background: #1e293b;
            color: white;
            text-decoration: none;
            border-radius: 12px;
            transition: all 0.3s ease;
            border: 1px solid #334155;
        }

        .menu-item:hover {
            background: #334155;
            transform: translateX(10px);
            border-color: #38bdf8;
            box-shadow: 0 4px 15px rgba(56, 189, 248, 0.2);
        }

        .icon {
            font-size: 24px;
            margin-right: 20px;
        }

        .text-group {
            text-align: left;
        }

        .title {
            display: block;
            font-weight: 500;
            font-size: 1.1rem;
        }

        .subtitle {
            display: block;
            font-size: 0.8rem;
            color: #94a3b8;
        }

        .status {
            margin-top: 30px;
            font-size: 0.8rem;
            color: #4ade80;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>🚀 My Localhost</h1>
    
    <div class="menu-list">
        <a href="/friend" class="menu-item">
            <span class="icon">👥</span>
            <div class="text-group">
                <span class="title">Friend Project</span>
                <span class="subtitle">เข้าสู่โฟลเดอร์เพื่อน</span>
            </div>
        </a>

        <a href="/Happy-Anniversary" class="menu-item">
            <span class="icon">🎂</span>
            <div class="text-group">
                <span class="title">Happy Anniversary</span>
                <span class="subtitle">เข้าสู่หน้าวันครบรอบ</span>
            </div>
        </a>

        <a href="/love" class="menu-item">
            <span class="icon">❤️</span>
            <div class="text-group">
                <span class="title">Love Project</span>
                <span class="subtitle">เข้าสู่หน้าพื้นที่ความรัก</span>
            </div>
        </a>
    </div>

    <div class="status">
        ● Server Status: Online
    </div>
</div>

</body>
</html>