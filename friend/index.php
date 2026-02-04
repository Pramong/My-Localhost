<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Surprise Friend 🎉</title>

<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;500&family=Caveat:wght@700&display=swap" rel="stylesheet">

<style>
:root{
--primary:#4dabf7;
--secondary:#d0ebff;
--bg:#f1f8ff;
}

body{
margin:0;
font-family:Kanit;
background:var(--bg);
}

.container{
max-width:480px;
margin:auto;
padding:20px;
min-height:100vh;
display:flex;
align-items:center;
justify-content:center;
}

.card{
background:white;
border-radius:25px;
padding:35px;
text-align:center;
box-shadow:0 10px 30px rgba(0,0,0,.15);
width:100%;
}

h1{
font-family:Caveat;
font-size:48px;
color:var(--primary);
margin:0;
}

input{
width:80%;
padding:12px;
border-radius:15px;
border:2px solid var(--secondary);
font-size:18px;
text-align:center;
margin:20px 0;
}

button{
background:var(--primary);
color:white;
border:none;
padding:12px 35px;
border-radius:30px;
font-size:18px;
cursor:pointer;
}

#memory{display:none}

.grid{
display:grid;
grid-template-columns:1fr 1fr;
gap:15px;
margin-top:25px;
}

.box{
height:120px;
background:var(--secondary);
border-radius:20px;
display:flex;
align-items:center;
justify-content:center;
font-size:30px;
cursor:pointer;
transition:.4s;
}

.box.active{
background:white;
border:2px solid var(--primary);
transform:scale(1.05);
}

.hidden{
display:none;
font-size:14px;
padding:10px;
}

.box.active .hidden{display:block}
.box.active span{display:none}

#final{display:none;margin-top:25px}

.heart{
position:fixed;
top:-20px;
animation:fall linear infinite;
pointer-events:none;
}

@keyframes fall{
to{transform:translateY(110vh);opacity:0}
}
</style>
</head>

<body>

<div class="container">

<div id="login" class="card">
<h1>Surprise 🎉</h1>
<p>ใส่รหัสลับ</p>

<input id="pass" maxlength="3" placeholder="รหัสมี 3 ตัว เช่น 123">

<br>
<button onclick="check()">เปิดเลย!</button>

<p style="margin-top:15px;font-size:12px">ส่งลิงก์นี้ให้เพื่อน 😄</p>
</div>

<div id="memory" class="card">

<h1>Friend Time</h1>
<p>กดกล่องดูเลย</p>

<div class="grid">
<div class="box" onclick="flip(this)"><span>🎁</span><div class="hidden">เพื่อนรัก 😄</div></div>
<div class="box" onclick="flip(this)"><span>🎁</span><div class="hidden">ไม่เคยเสียใจเลย ที่มีแกเป็นเพื่อน</div></div>
<div class="box" onclick="flip(this)"><span>🎁</span><div class="hidden">เพื่อนจริง ไม่ทิ้งกันในวันที่เราล้ม</div></div>
<div class="box" onclick="flip(this)"><span>🎁</span><div class="hidden">มีอะไรให้ช่วย บอกได้เสมอ 🙂</div></div>
</div>

<div id="final">
<hr>
<h2 style="font-family:Caveat;font-size:36px">เพื่อนรัก 😄</h2>
<p>ขอบคุณสำหรับมิตรภาพนะ</p>
</div>

</div>
</div>

<script>
const PASSWORD="999"; // 🔴 เปลี่ยนรหัสตรงนี้

function check(){
if(pass.value===PASSWORD){
login.style.display="none";
memory.style.display="block";
}else alert("รหัสไม่ถูก ลองใหม่ 😜");
}

let openCount=0;
function flip(e){
if(!e.classList.contains("active")){
e.classList.add("active");
openCount++;
if(openCount==4) final.style.display="block";
}
}

setInterval(()=>{
let h=document.createElement("div");
h.className="heart";
h.innerHTML=["🎉","✨","😄"][Math.floor(Math.random()*3)];
h.style.left=Math.random()*100+"vw";
h.style.animationDuration=(Math.random()*3+2)+"s";
document.body.appendChild(h);
setTimeout(()=>h.remove(),5000);
},350);
</script>

</body>
</html>
