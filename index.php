<?php
get_header();
?>

<div id="monaliza-site" dir="rtl" lang="ar">

<style>
#monaliza-site{
--cream:#F8F5EF;--beige:#E9DFD1;--mocha:#79634F;--gold:#B39A72;
--dark:#332B24;--white:#fff;--muted:#817469;
direction:rtl;font-family:Tahoma,Arial,sans-serif;background:var(--cream);
color:var(--dark);line-height:1.9;overflow-x:clip;width:100%;
}
#monaliza-site *{box-sizing:border-box}
#monaliza-site img{max-width:100%;height:auto}
#monaliza-site a,#monaliza-site button{transition:.3s ease}
#monaliza-site button,#monaliza-site input,#monaliza-site select,#monaliza-site textarea{font:inherit}
#monaliza-site button{cursor:pointer}
#monaliza-site .m-header{
position:sticky;top:0;z-index:100;display:flex;align-items:center;
justify-content:space-between;gap:20px;padding:15px 7%;
background:rgba(255,255,255,.97);border-bottom:1px solid var(--beige);
box-shadow:0 3px 18px #00000005;backdrop-filter:blur(12px)
}
#monaliza-site .logo{color:var(--mocha);font-size:27px;font-weight:bold;letter-spacing:2px;white-space:nowrap;text-decoration:none}
#monaliza-site .logo span{color:var(--gold)}
#monaliza-site nav{display:flex;align-items:center;gap:22px;flex-wrap:wrap}
#monaliza-site nav a{text-decoration:none;color:var(--dark);font-size:14px}
#monaliza-site nav a:hover{color:var(--gold)}
#monaliza-site .nav-cta{padding:8px 16px;border-radius:5px;background:var(--mocha);color:white}
#monaliza-site .nav-cta:hover{background:var(--gold);color:white}
#monaliza-site .btn{
display:inline-block;border:none;border-radius:5px;padding:12px 23px;
text-align:center;text-decoration:none;background:var(--mocha);color:white;
transition:background .3s,transform .3s
}
#monaliza-site .btn:hover{background:var(--gold);transform:translateY(-2px);color:white}
#monaliza-site .btn-light{background:var(--cream);color:var(--dark)}
#monaliza-site .btn-light:hover{color:white}
#monaliza-site .btn-facebook{background:#4267B2;color:white}
#monaliza-site .btn-facebook:hover{background:#31549A}
#monaliza-site .btn-group{background:#514236;color:white;border:1px solid #C6A878}
#monaliza-site .btn-group:hover{background:#B39A72}
#monaliza-site .hero-buttons{display:flex;flex-wrap:wrap;gap:12px;align-items:center}
#monaliza-site .hero{min-height:590px;display:flex;align-items:center;padding:75px 8%;color:white;background:linear-gradient(90deg,rgba(35,27,21,.76),rgba(35,27,21,.18)),url("https://lightgray-salamander-569901.hostingersite.com/wp-content/uploads/2026/10/WhatsApp-Image-2026-10-18-at-10.32.00-PM-2.jpeg") center/cover no-repeat}
#monaliza-site .hero-content{max-width:650px}
#monaliza-site .eyebrow{display:inline-block;margin-bottom:15px;color:var(--gold);letter-spacing:2px;font-size:13px}
#monaliza-site .hero .eyebrow{color:#E2C9A7}
#monaliza-site .hero h1{font-size:clamp(34px,5vw,58px);line-height:1.5;margin:0 0 18px;color:white}
#monaliza-site .hero p{max-width:560px;color:#F3EDE5;font-size:17px;margin:0 0 28px}
#monaliza-site .section{padding:78px 7%}
#monaliza-site .section-title{max-width:680px;margin:0 auto 35px;text-align:center}
#monaliza-site .section-title h2{font-size:clamp(25px,3vw,35px);line-height:1.5;margin:0 0 8px;color:var(--dark)}
#monaliza-site .section-title p{color:var(--muted)}
#monaliza-site .about{display:grid;grid-template-columns:1fr 1fr;align-items:center;gap:45px}
#monaliza-site .about-image img{display:block;width:100%;height:410px;object-fit:cover;border-radius:10px}
#monaliza-site .about-content h2{font-size:32px;line-height:1.6;margin:0 0 15px;color:var(--dark)}
#monaliza-site .about-content p{color:var(--muted);margin:0 0 20px}
#monaliza-site .filters{display:flex;justify-content:center;gap:10px;flex-wrap:wrap;margin-bottom:32px}
#monaliza-site .filters button{padding:8px 20px;border:1px solid #D9C8B5;border-radius:25px;background:white;color:var(--dark)}
#monaliza-site .filters button:hover,#monaliza-site .filters button.active{background:var(--mocha);border-color:var(--mocha);color:white}
#monaliza-site .gallery{display:grid;grid-template-columns:repeat(4,minmax(0,1fr));gap:22px}
#monaliza-site .card{background:white;border:1px solid #EDE5DA;border-radius:10px;overflow:hidden;box-shadow:0 5px 20px #34251908;transition:transform .4s,box-shadow .4s}
#monaliza-site .card:hover{transform:translateY(-6px);box-shadow:0 15px 35px #59442A18}
#monaliza-site .card-image{overflow:hidden;background:var(--beige)}
#monaliza-site .card img{display:block;width:100%;height:260px;object-fit:cover;transition:transform .6s}
#monaliza-site .card:hover img{transform:scale(1.05)}
#monaliza-site .card-body{padding:18px}
#monaliza-site .card-body h3{margin:0 0 8px;font-size:18px;color:var(--mocha)}
#monaliza-site .card-body p{color:var(--muted);font-size:14px;line-height:1.9;margin:0 0 15px;min-height:78px}
#monaliza-site .card-body .btn{width:100%;font-size:14px}
#monaliza-site .empty-message{grid-column:1/-1;text-align:center;padding:30px}
#monaliza-site .services-section{background:var(--beige)}
#monaliza-site .services{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:25px}
#monaliza-site .service{padding:28px 20px;background:rgba(255,255,255,.65);border:1px solid white;border-radius:10px;text-align:center;transition:transform .3s}
#monaliza-site .service:hover{transform:translateY(-5px)}
#monaliza-site .service-icon{display:flex;align-items:center;justify-content:center;width:62px;height:62px;margin:0 auto 16px;border:1px solid #C6A878;border-radius:50%;background:#F8F5EF;color:#79634F;font-family:Georgia,serif;font-size:34px}
#monaliza-site .service h3{margin:0 0 8px;color:var(--dark)}
#monaliza-site .service p{color:var(--muted);font-size:14px}
#monaliza-site .steps{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:24px;text-align:center}
#monaliza-site .step-number{display:inline-flex;justify-content:center;align-items:center;width:52px;height:52px;border-radius:50%;background:var(--mocha);color:white;font-size:20px;margin-bottom:12px}
#monaliza-site .steps p{color:var(--muted);font-size:14px}
#monaliza-site .order-section{background:#F0E9DF}
#monaliza-site .order{max-width:720px;margin:auto;padding:32px;background:white;border:1px solid var(--beige);border-radius:12px;box-shadow:0 15px 45px #59442A0D}
#monaliza-site .form-row{display:grid;grid-template-columns:1fr 1fr;gap:15px}
#monaliza-site .field{margin-bottom:15px}
#monaliza-site .field label{display:block;margin-bottom:6px;font-size:14px}
#monaliza-site .field input,#monaliza-site .field select,#monaliza-site .field textarea{width:100%;padding:12px;border:1px solid #DDD1C5;border-radius:6px;background:#FFFEFC;color:var(--dark);outline:none}
#monaliza-site .field input:focus,#monaliza-site .field select:focus,#monaliza-site .field textarea:focus{border-color:var(--gold);box-shadow:0 0 0 2px #B39A721A}
#monaliza-site .field textarea{min-height:110px;resize:vertical}
#monaliza-site .order .btn{width:100%}
#monaliza-site .note{margin-top:10px;color:var(--muted);font-size:12px;text-align:center}
#monaliza-site .contact{text-align:center;background:var(--dark);color:white}
#monaliza-site .contact .section-title p{color:#E3D8CA}
#monaliza-site .contact .section-title{margin-bottom:0}
#monaliza-site .contact-buttons{display:flex;justify-content:center;flex-wrap:wrap;gap:12px;margin-top:24px}
#monaliza-site .m-footer{padding:32px 7% 20px;text-align:center;background:#251F1A;color:var(--beige)}
#monaliza-site .m-footer .logo{display:inline-block;margin-bottom:8px;color:#D0B894}
#monaliza-site .m-footer p{font-size:13px}
#monaliza-site .footer-links{display:flex;justify-content:center;flex-wrap:wrap;gap:20px;margin:15px 0}
#monaliza-site .footer-links a{color:#D0B894;text-decoration:none}
#monaliza-site .footer-links a:hover{color:white}
#monaliza-site .copyright{margin-top:15px;color:#C8B9A5;font-size:12px}
#monaliza-site .developer-credit{margin-top:18px;padding-top:14px;border-top:1px solid #514439;color:#D8C7B1;font-size:13px}
#monaliza-site .developer-credit a{color:#C6A878;text-decoration:none;font-weight:bold;margin-right:4px}
#monaliza-site .whatsapp{position:fixed;bottom:20px;left:20px;z-index:9999;display:inline-flex;align-items:center;gap:8px;padding:12px 18px;border-radius:30px;background:#218C58;color:white;text-decoration:none;box-shadow:0 5px 20px #0002}
#monaliza-site .whatsapp:hover{transform:translateY(-4px)}
#monaliza-site .reveal{opacity:0;transform:translateY(30px);transition:opacity .75s ease,transform .75s ease}
#monaliza-site .reveal.visible{opacity:1;transform:translateY(0)}

/* إخفاء هيدر القالب الذي قد يعرض رابط الموقع فوق التصميم */
body #masthead,body .site-header,body header.wp-block-template-part{display:none!important}

@media(max-width:1000px){
 #monaliza-site .gallery{grid-template-columns:repeat(2,minmax(0,1fr))}
 #monaliza-site .about{gap:25px}
}
@media(max-width:700px){
 #monaliza-site .m-header{padding:12px 5%;flex-wrap:wrap}
 #monaliza-site .logo{font-size:23px}
 #monaliza-site nav{width:100%;justify-content:center;gap:12px 18px}
 #monaliza-site nav a{font-size:13px}
 #monaliza-site .hero{min-height:490px;padding:55px 6%;background-position:center}
 #monaliza-site .hero p{font-size:15px}
 #monaliza-site .section{padding:55px 5%}
 #monaliza-site .about{grid-template-columns:1fr}
 #monaliza-site .about-image img{height:300px}
 #monaliza-site .gallery{gap:12px}
 #monaliza-site .card img{height:190px}
 #monaliza-site .card-body{padding:12px}
 #monaliza-site .card-body h3{font-size:15px}
 #monaliza-site .card-body p{font-size:12px;min-height:100px}
 #monaliza-site .card-body .btn{padding:10px 5px;font-size:12px}
 #monaliza-site .services,#monaliza-site .steps{grid-template-columns:1fr}
 #monaliza-site .order{padding:20px}
 #monaliza-site .form-row{grid-template-columns:1fr;gap:0}
 #monaliza-site .hero-buttons .btn,#monaliza-site .contact-buttons .btn{width:100%}
 #monaliza-site .whatsapp{bottom:14px;left:12px;padding:10px 14px;font-size:13px}
}
@media(prefers-reduced-motion:reduce){
 #monaliza-site .reveal{opacity:1;transform:none;transition:none}
 #monaliza-site *,#monaliza-site *::before,#monaliza-site *::after{animation-duration:.01ms!important;transition-duration:.01ms!important}
}
</style>

<header class="m-header">
 <a class="logo" href="#home">MONA<span>LIZA</span></a>
 <nav>
  <a href="#home">الرئيسية</a>
  <a href="#about">من نحن</a>
  <a href="#gallery">الأقسام</a>
  <a href="#services">خدماتنا</a>
  <a href="#order" class="nav-cta">اطلبي الآن</a>
 </nav>
</header>

<section class="hero" id="home">
 <div class="hero-content reveal">
  <span class="eyebrow">MONALIZA • HOME & BABY COLLECTION</span>
  <h1>لمسات تكمّل جمال بيتك</h1>
  <p>من أناقة الستاير المودرن والكلاسيك إلى تفاصيل عالم البيبي، اختيارات مميزة تضيف لمسة من الجمال والراحة لكل ركن في بيتك.</p>
  <div class="hero-buttons">
   <a class="btn" href="#gallery">اكتشفي الأقسام</a>
   <a class="btn btn-light" href="https://wa.me/201000558337?text=%D9%85%D8%B1%D8%AD%D8%A8%D8%A7%D8%8C%20%D8%B9%D8%A7%D9%8A%D8%B2%D8%A9%20%D8%A3%D8%B3%D8%AA%D9%81%D8%B3%D8%B1%20%D8%B9%D9%86%20%D9%85%D9%86%D8%AA%D8%AC%D8%A7%D8%AA%20MONALIZA" target="_blank" rel="noopener noreferrer">تواصلي واتساب</a>
   <a class="btn btn-facebook" href="https://www.facebook.com/share/1GmfaVEAYu/" target="_blank" rel="noopener noreferrer">صفحتنا على فيسبوك</a>
   <a class="btn btn-group" href="https://www.facebook.com/share/g/1EgbvXDHLH/" target="_blank" rel="noopener noreferrer">انضمي لجروب فيسبوك</a>
  </div>
 </div>
</section>

<section class="section about" id="about">
 <div class="about-image reveal">
  <img src="https://lightgray-salamander-569901.hostingersite.com/wp-content/uploads/2026/10/WhatsApp-Image-2026-10-18-at-10.32.00-PM-2.jpeg" alt="اختيارات MONALIZA للبيت" loading="lazy">
 </div>
 <div class="about-content reveal">
  <span class="eyebrow">ABOUT MONALIZA</span>
  <h2>تفاصيل صغيرة تصنع فرقًا كبيرًا</h2>
  <p>في MONALIZA بنجمع لكِ بين الذوق الراقي والاختيارات المميزة؛ من الستاير المودرن والكلاسيك إلى مستلزمات البيبي، عشان تلاقي لمسات جميلة تناسب بيتك واحتياجات أسرتك.</p>
  <a class="btn" href="#gallery">تصفحي مجموعتنا</a>
 </div>
</section>

<section class="section" id="gallery">
 <div class="section-title reveal">
  <span class="eyebrow">OUR COLLECTION</span>
  <h2>اختاري القسم الأقرب لذوقك</h2>
  <p>ثلاث مجموعات بتفاصيل مختلفة، وكل صورة معاها وصف يساعدك تتعرفي على التصميم.</p>
 </div>
 <div class="filters reveal">
  <button class="active" type="button" data-type="all">كل الأقسام</button>
  <button type="button" data-type="modern">المودرن</button>
  <button type="button" data-type="classic">الكلاسيك</button>
  <button type="button" data-type="baby">عالم البيبي</button>
 </div>
 <div class="gallery" id="gallery-list"></div>
</section>

<section class="section services-section" id="services">
 <div class="section-title reveal">
  <span class="eyebrow">WHY MONALIZA</span>
  <h2>اختيارات مميزة واهتمام بالتفاصيل</h2>
  <p>تجربة سهلة تساعدك تختاري المنتج المناسب بكل بساطة.</p>
 </div>
 <div class="services">
  <article class="service reveal"><div class="service-icon">✧</div><h3>ذوق يليق ببيتك</h3><p>اختيارات متنوعة بتفاصيل وألوان تساعدك تكملي شكل المكان.</p></article>
  <article class="service reveal"><div class="service-icon">♡</div><h3>اهتمام بكل أفراد الأسرة</h3><p>من ديكور البيت إلى لمسات ناعمة تناسب عالم البيبي.</p></article>
  <article class="service reveal"><div class="service-icon">✓</div><h3>طلب سهل على واتساب</h3><p>اختاري المنتج وابعتي استفسارك مباشرة علشان تعرفي التفاصيل.</p></article>
 </div>
</section>

<section class="section">
 <div class="section-title reveal"><span class="eyebrow">HOW TO ORDER</span><h2>إزاي تطلبي من MONALIZA؟</h2></div>
 <div class="steps">
  <article class="reveal"><div class="step-number">١</div><h3>اختاري القسم والمنتج</h3><p>تصفحي المودرن أو الكلاسيك أو عالم البيبي.</p></article>
  <article class="reveal"><div class="step-number">٢</div><h3>اكتبي التفاصيل</h3><p>حددي المنتج المطلوب وأي تفاصيل حابة توضحيها.</p></article>
  <article class="reveal"><div class="step-number">٣</div><h3>ابعتي على واتساب</h3><p>راجعي الرسالة الجاهزة واضغطي إرسال للتواصل معانا.</p></article>
 </div>
</section>

<section class="section order-section" id="order">
 <div class="section-title reveal"><span class="eyebrow">YOUR ORDER</span><h2>خلينا نساعدك تختاري</h2><p>املئي البيانات لتجهيز رسالة طلبك على واتساب.</p></div>
 <form class="order reveal" id="order-form">
  <div class="form-row">
   <div class="field"><label for="name">الاسم بالكامل *</label><input id="name" name="name" required maxlength="100" autocomplete="name" placeholder="اكتبي اسمك"></div>
   <div class="field"><label for="phone">رقم الموبايل *</label><input id="phone" name="phone" type="tel" required maxlength="25" autocomplete="tel" placeholder="رقم التواصل"></div>
  </div>
  <div class="form-row">
   <div class="field"><label for="type">القسم *</label><select id="type" name="type" required><option value="">اختاري القسم</option><option value="المودرن">المودرن</option><option value="الكلاسيك">الكلاسيك</option><option value="عالم البيبي">عالم البيبي</option></select></div>
   <div class="field"><label for="room">مكان الاستخدام (اختياري)</label><select id="room" name="room"><option value="الريسبشن">الريسبشن</option><option value="غرفة النوم">غرفة النوم</option><option value="غرفة الأطفال">غرفة الأطفال</option><option value="غرفة البيبي">غرفة البيبي</option><option value="مكان آخر">مكان آخر</option></select></div>
  </div>
  <div class="field"><label for="product">اسم المنتج أو التصميم</label><input id="product" name="product" maxlength="200" placeholder="اسم المنتج اللي عجبك"></div>
  <div class="field"><label for="details">تفاصيل إضافية</label><textarea id="details" name="details" maxlength="1000" placeholder="اكتبي اللون أو المقاسات أو أي استفسار..."></textarea></div>
  <button class="btn" type="submit">ابعتي طلبك على واتساب</button>
  <p class="note">هتفتح رسالة جاهزة في واتساب، وهتحتاجي تضغطي إرسال بنفسك.</p>
 </form>
</section>

<section class="section contact">
 <div class="section-title reveal">
  <span class="eyebrow">GET IN TOUCH</span>
  <h2>اختيارك يبدأ بخطوة بسيطة</h2>
  <p>للاستفسار عن المنتجات والتفاصيل، تواصلي معانا مباشرة.</p>
  <div class="contact-buttons">
   <a class="btn" id="contact-whatsapp" href="https://wa.me/201000558337" target="_blank" rel="noopener noreferrer">تواصلي عبر واتساب</a>
   <a class="btn btn-facebook" href="https://www.facebook.com/share/1GmfaVEAYu/" target="_blank" rel="noopener noreferrer">صفحتنا على فيسبوك</a>
   <a class="btn btn-group" href="https://www.facebook.com/share/g/1EgbvXDHLH/" target="_blank" rel="noopener noreferrer">انضمي لجروب فيسبوك</a>
  </div>
 </div>
</section>

<footer class="m-footer">
 <a class="logo" href="#home">MONA<span>LIZA</span></a>
 <p>لمسات تكمّل جمال بيتك.</p>
 <div class="footer-links">
  <a href="https://www.facebook.com/share/1GmfaVEAYu/" target="_blank" rel="noopener noreferrer">صفحتنا على فيسبوك</a>
  <a href="https://www.facebook.com/share/g/1EgbvXDHLH/" target="_blank" rel="noopener noreferrer">جروب فيسبوك</a>
  <a href="https://wa.me/201000558337" target="_blank" rel="noopener noreferrer">تواصلي معنا على واتساب</a>
  <a href="#home">العودة للأعلى ↑</a>
 </div>
 <p class="copyright">© 2026 MONALIZA — جميع الحقوق محفوظة</p>
 <div class="developer-credit">تم التصميم والتطوير بواسطة <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer">Waja Web</a></div>
</footer>

<a class="whatsapp" id="whatsapp-link" href="https://wa.me/201000558337" target="_blank" rel="noopener noreferrer" aria-label="تواصلي معنا عبر واتساب">تواصلي واتساب</a>

<script>
(function(){
"use strict";
const WHATSAPP_NUMBER="201000558337";
const base="https://lightgray-salamander-569901.hostingersite.com/wp-content/uploads/2026/10/";
const image=name=>base+name;
const curtains=[
{id:2,name:"لمسة عصرية راقية",type:"modern",description:"تصميم أنيق بخطوط بسيطة يناسب المساحات الحديثة ويكمل جمال الأثاث.",image:image("WhatsApp-Image-2026-10-18-at-10.32.00-PM.jpeg")},
{id:3,name:"دفء الألوان الطبيعية",type:"modern",description:"درجات متناسقة تضيف إحساسًا بالراحة والدفء إلى تفاصيل الغرفة.",image:image("WhatsApp-Image-2026-10-18-at-10.32.00-PM-5.jpeg")},
{id:4,name:"تناغم التفاصيل",type:"modern",description:"لمسة هادئة لمحبي البساطة والتناسق في اختيار ديكور المنزل.",image:image("WhatsApp-Image-2026-10-18-at-10.32.01-PM-5.jpeg")},
{id:5,name:"فخامة ناعمة",type:"modern",description:"تفاصيل أنيقة تمنح المكان مظهرًا مرتبًا وتبرز جمال الألوان.",image:image("WhatsApp-Image-2026-10-18-at-10.32.01-PM-1.jpeg")},
{id:6,name:"بساطة بطابع فاخر",type:"modern",description:"تصميم يجمع بين البساطة والذوق الراقي ليناسب أكثر من مساحة.",image:image("WhatsApp-Image-2026-10-18-at-10.32.01-PM-4.jpeg")},
{id:7,name:"إشراقة وأناقة",type:"modern",description:"ألوان مريحة للعين تضفي على الديكور إحساسًا بالاتساع والنعومة.",image:image("WhatsApp-Image-2026-10-18-at-10.32.02-PM-4.jpeg")},
{id:8,name:"هدوء يكمّل الديكور",type:"modern",description:"اختيار ناعم ينسجم مع الأثاث ويضيف لمسة متوازنة للمكان.",image:image("WhatsApp-Image-2026-10-18-at-10.32.02-PM-2.jpeg")},
{id:9,name:"تفاصيل تصنع الفرق",type:"modern",description:"لمسة بسيطة وأنيقة تساعد على إبراز جمال الغرفة وتنسيقها.",image:image("WhatsApp-Image-2026-10-18-at-10.32.02-PM-3.jpeg")},
{id:10,name:"اختيار موناليزا",type:"modern",description:"تصميم مميز لعشاق الأناقة العصرية واللمسات الراقية في البيت.",image:image("WhatsApp-Image-2026-10-18-at-10.32.03-PM-2.jpeg")},
{id:11,name:"كلاسيك بفخامة راقية",type:"classic",description:"تصميم كلاسيكي أنيق يضيف حضورًا مميزًا للمجالس والريسبشن.",image:image("WhatsApp-Image-2026-10-18-at-10.32.04-PM-3.jpeg")},
{id:12,name:"أناقة التفاصيل",type:"classic",description:"لمسات راقية وتنسيق جذاب يناسب الديكورات الكلاسيكية الدافئة.",image:image("WhatsApp-Image-2026-10-18-at-10.32.04-PM-1.jpeg")},
{id:13,name:"فخامة تليق بالمجالس",type:"classic",description:"اختيار يبرز جمال المكان ويمنحه طابعًا أنيقًا ومتناسقًا.",image:image("WhatsApp-Image-2026-10-18-at-10.32.04-PM-2.jpeg")},
{id:14,name:"لمسة كلاسيكية دافئة",type:"classic",description:"تفاصيل تجمع بين الدفء والرقي لتكمل ديكور منزلك.",image:image("WhatsApp-Image-2026-10-18-at-10.32.03-PM.jpeg")},
{id:15,name:"ذوق كلاسيكي مميز",type:"classic",description:"ستايل أنيق لمحبي التفاصيل الهادئة ذات الطابع الفخم.",image:image("WhatsApp-Image-2026-10-18-at-10.32.03-PM-1.jpeg")},
{id:16,name:"تناغم الألوان",type:"classic",description:"ألوان وتفاصيل متناسقة تضيف لمسة من الانسجام إلى الغرفة.",image:image("WhatsApp-Image-2026-10-18-at-10.32.02-PM.jpeg")},
{id:17,name:"كلاسيك بلمسة ناعمة",type:"classic",description:"مظهر أنيق وهادئ ينسجم مع الأثاث والديكور الكلاسيكي.",image:image("WhatsApp-Image-2026-10-18-at-10.32.02-PM-1.jpeg")},
{id:18,name:"تفاصيل من الذوق الرفيع",type:"classic",description:"لمسة مميزة تضيف عمقًا وجمالًا لتنسيق المساحة.",image:image("WhatsApp-Image-2026-10-18-at-10.32.01-PM-6.jpeg")},
{id:19,name:"أناقة كلاسيكية",type:"classic",description:"اختيار راقٍ يليق بالمساحات التي تحب اللمسات الكلاسيكية.",image:image("WhatsApp-Image-2026-10-18-at-10.32.00-PM-4.jpeg")},
{id:20,name:"جمال في كل تفصيلة",type:"classic",description:"تنسيق متوازن يبرز جمال الديكور ويمنح المكان طابعًا خاصًا.",image:image("WhatsApp-Image-2026-10-18-at-10.32.01-PM-2.jpeg")},
{id:21,name:"لمسة موناليزا الكلاسيكية",type:"classic",description:"تصميم يجمع بين الأناقة والدفء ليكمل شكل منزلك.",image:image("WhatsApp-Image-2026-10-18-at-10.32.00-PM-3.jpeg")},
{id:22,name:"عالم صغير مليان حب",type:"baby",description:"لمسة لطيفة تضيف أجواء دافئة ومبهجة إلى ركن البيبي.",image:image("WhatsApp-Image-2026-10-19-at-12.44.10-PM.jpeg")},
{id:23,name:"نعومة تليق بطفلك",type:"baby",description:"اختيار ناعم بأجواء هادئة يناسب تجهيزات غرفة الطفل.",image:image("WhatsApp-Image-2026-10-19-at-12.44.10-PM-3.jpeg")},
{id:24,name:"تفاصيل طفولية جميلة",type:"baby",description:"تفاصيل رقيقة تضيف لمسة من البهجة والدفء لعالم طفلك.",image:image("WhatsApp-Image-2026-10-19-at-12.44.09-PM.jpeg")},
{id:25,name:"ركن البيبي الأنيق",type:"baby",description:"أفكار لطيفة تساعدك تنسقي مساحة مريحة وجميلة للصغير.",image:image("WhatsApp-Image-2026-10-19-at-12.44.09-PM-3.jpeg")},
{id:26,name:"لمسات ناعمة للصغار",type:"baby",description:"اختيار محبب يضيف نعومة وتناسقًا لتجهيزات البيبي.",image:image("WhatsApp-Image-2026-10-19-at-12.44.11-PM-1.jpeg")},
{id:27,name:"راحة وأناقة للبيبي",type:"baby",description:"تفاصيل هادئة تناسب أجواء غرفة الطفل وتكمل شكلها.",image:image("WhatsApp-Image-2026-10-19-at-12.44.10-PM-5.jpeg")},
{id:28,name:"تجهيزات بحب",type:"baby",description:"لمسات مختارة بعناية لتجهيز ركن صغير مليان حنان.",image:image("WhatsApp-Image-2026-10-19-at-12.44.10-PM-4.jpeg")},
{id:29,name:"أناقة غرفة البيبي",type:"baby",description:"تنسيق لطيف يضيف جمالًا وهدوءًا إلى غرفة طفلك.",image:image("WhatsApp-Image-2026-10-19-at-12.44.10-PM-2.jpeg")},
{id:30,name:"تفاصيل رقيقة",type:"baby",description:"لمسة ناعمة تكمل تجهيزات البيبي وتمنحها شكلًا متناسقًا.",image:image("WhatsApp-Image-2026-10-19-at-12.44.10-PM-1.jpeg")},
{id:31,name:"اختيارات لعالم البيبي",type:"baby",description:"أفكار متنوعة لتجهيزات صغيرة بتفاصيل لطيفة ومبهجة.",image:image("WhatsApp-Image-2026-10-19-at-12.44.09-PM-5.jpeg")},
{id:32,name:"لمسة دافئة لطفلك",type:"baby",description:"ألوان وتفاصيل هادئة تناسب أجواء الراحة والاحتواء.",image:image("WhatsApp-Image-2026-10-19-at-12.44.09-PM-4.jpeg")},
{id:33,name:"جمال التفاصيل الصغيرة",type:"baby",description:"تفاصيل مميزة تضيف لمسة جميلة إلى احتياجات الطفل.",image:image("WhatsApp-Image-2026-10-19-at-12.44.09-PM-2.jpeg")},
{id:34,name:"عالم من النعومة",type:"baby",description:"اختيار لطيف يكمّل ديكور غرفة البيبي بأجواء هادئة.",image:image("WhatsApp-Image-2026-10-19-at-12.44.09-PM-1.jpeg")}
];

const site=document.getElementById("monaliza-site");
if(!site)return;
const gallery=site.querySelector("#gallery-list");
const typeLabels={modern:"المودرن",classic:"الكلاسيك",baby:"عالم البيبي"};
const observer=("IntersectionObserver" in window)?new IntersectionObserver(entries=>{
 entries.forEach(entry=>{
  if(entry.isIntersecting){entry.target.classList.add("visible");observer.unobserve(entry.target)}
 });
},{threshold:.12}):null;

function activateReveal(root){
 root.querySelectorAll(".reveal").forEach(el=>{
  if(el.dataset.revealReady==="true")return;
  el.dataset.revealReady="true";
  if(observer)observer.observe(el);else el.classList.add("visible");
 });
}
function whatsappUrl(message){
 return "https://wa.me/"+WHATSAPP_NUMBER+"?text="+encodeURIComponent(message);
}
function showCurtains(type="all"){
 const filtered=type==="all"?curtains:curtains.filter(item=>item.type===type);
 if(!filtered.length){gallery.innerHTML='<p class="empty-message">لا توجد منتجات في هذا القسم حاليًا.</p>';return}
 gallery.innerHTML=filtered.map(item=>`
  <article class="card reveal">
   <div class="card-image"><img src="${item.image}" alt="${item.name}" loading="lazy"></div>
   <div class="card-body"><h3>${item.name}</h3><p>${item.description}</p>
   <button class="btn" type="button" data-product-id="${item.id}">استفسري عن المنتج</button></div>
  </article>`).join("");
 activateReveal(gallery);
}
site.querySelectorAll(".filters button").forEach(button=>{
 button.addEventListener("click",()=>{
  site.querySelectorAll(".filters button").forEach(item=>item.classList.remove("active"));
  button.classList.add("active");
  showCurtains(button.dataset.type);
 });
});
gallery.addEventListener("click",event=>{
 const button=event.target.closest("[data-product-id]");
 if(!button)return;
 const item=curtains.find(product=>product.id===Number(button.dataset.productId));
 if(!item)return;
 const message="مرحبًا، عايزة أستفسر عن المنتج ده من MONALIZA.\n\n"+
 "اسم المنتج: "+item.name+"\n"+
 "القسم: "+typeLabels[item.type]+"\n"+
 "التفاصيل: "+item.description+"\n\nممكن أعرف السعر والتفاصيل؟";
 window.open(whatsappUrl(message),"_blank","noopener,noreferrer");
});
site.querySelector("#whatsapp-link").href=whatsappUrl("مرحبًا، عايزة أستفسر عن منتجات MONALIZA.");
site.querySelector("#contact-whatsapp").href=whatsappUrl("مرحبًا، عايزة أعرف تفاصيل منتجات MONALIZA.");
site.querySelector("#order-form").addEventListener("submit",event=>{
 event.preventDefault();
 const name=site.querySelector("#name").value.trim();
 const phone=site.querySelector("#phone").value.trim();
 const type=site.querySelector("#type").value;
 const room=site.querySelector("#room").value;
 const product=site.querySelector("#product").value.trim();
 const details=site.querySelector("#details").value.trim();
 if(!name||!phone||!type){alert("من فضلك املئي الاسم ورقم الموبايل والقسم.");return}
 const message="طلب من MONALIZA\n\nالاسم: "+name+"\nرقم التواصل: "+phone+
 "\nالقسم: "+type+"\nمكان الاستخدام: "+room+
 "\nالمنتج: "+(product||"لم يتم تحديد منتج")+
 "\nالتفاصيل: "+(details||"لا توجد تفاصيل إضافية");
 window.open(whatsappUrl(message),"_blank","noopener,noreferrer");
});
showCurtains();
activateReveal(site);
})();
</script>

</div>

<?php get_footer(); ?>