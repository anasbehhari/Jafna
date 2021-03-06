<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-language" content="ar">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="contact@jofna.com 0631874579" />
    <title>اتصل بنا | جفنة مدونة إلكترونية مغربية</title>
    <meta property="article:publisher" content="https://www.facebook.com/jofna">
    <meta property="og:url" content="https://www.jofna.com/join-us">
    <meta property="og:locale" content="ar_AR">
    <meta property="og:type" content="article">
    <meta property="og:title" content="اتصل بنا | جفنة مدونة إلكترونية مغربية" />
    <meta property="og:description" content="contact@jofna.com 0631874579">
    <meta property="og:image" content="../content/images/image.jpg" />
    <meta property="twitter:title" content="اتصل بنا | جفنة مدونة إلكترونية مغربية" />
    <meta property="twitter:description" content="contact@jofna.com 0631874579" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:creator" content="@jofna">
    <meta name="twitter:site" content="@jofna">
    <link href="css/join-us.css" rel="stylesheet" type="text/css" />
    <link rel="apple-touch-icon" sizes="180x180" href="content/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="content/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="content/icons/favicon-16x16.png">
    <link rel="manifest" href="content/icons/site.webmanifest">
    <link rel="mask-icon" href="content/icons/safari-pinned-tab.svg" color="#191d28">
    <meta name="apple-mobile-web-app-title" content="جفنة">
    <meta name="application-name" content="جفنة">
    <meta name="msapplication-TileColor" content="#191d28">
    <meta name="theme-color" content="#191d28" />
</head>

<body>
    <?php require 'components/header.php'; ?>
    <div class="section join-us wf-section">
        <div class="container">
            <div class="form-block w-form">
                <form id="wf-form-Contact-Us" name="wf-form-Contact-Us" data-name="Contact Us" class="main-form">
                    <h1>
                        تريد أن تُدوِن معنا
                        <span class="pink-text">؟</span>
                    </h1>
                    <p class="max-width" style="padding-top:20px;direction:rtl">
                        نتوصل يوميا بعشرات الأسئلة الخاصة بشروط وكيفية النشر في <b
                            style="text-decoration:underline">جفنة</b> أو الإنضمام ، ونود أن نخبر جميع المهتمين أننا
                        نرحب بالمقالات والمساهمات التي ترد إلينا من زوار الموقع وأعضائه!
                    </p>
                    <div class="_40px-height-div"></div>
                    <div class="form-group">
                        <div class="form-grid-halves">
                            <div class="_50-percent-form-field-wrap"><label for="Last-Name-3" class="form-label"
                                    style="direction:rtl">الكنية*</label><input type="text" class="form-input w-input"
                                    maxlength="256" name="Last-Name" data-name="Last Name" id="Last-Name-3"
                                    required="" /></div>
                            <div class="_50-percent-form-field-wrap">
                                <label for="First-Name-3" class="form-label">اسمك*</label>
                                <input type="text" class="form-input w-input" maxlength="256" name="First-Name"
                                    data-name="First Name" id="First-Name-3" required="" />
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-grid-halves">
                            <div class="_50-percent-form-field-wrap"><label for="Company-Name-5"
                                    class="form-label">عمرك</label><input type="text" class="form-input w-input"
                                    maxlength="256" name="Company-Name" data-name="Company Name" id="Company-Name-5"
                                    required="" /></div>
                            <div class="_50-percent-form-field-wrap"><label for="Email-4" class="form-label">البريد
                                    الإلكتروني
                                    *</label><input type="email" class="form-input w-input" maxlength="256" name="Email"
                                    data-name="Email" id="Email-4" required="" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="interested-in-seeing" class="form-label">يُرجى تحديد سبب اتصالك بنا أدناه حتى نتمكن
                            من دعم طلبك بشكل أفضل *</label>
                        <select style="padding:0;direction:rtl" id="field" name="field" required="" data-name="Field"
                            class="form-input w-select">
                            <option value="0" hidden>.............</option>
                            <option value="I want to write for Jofna">اريد ان اكتب لجفنة</option>
                            <option value="I want to partner with Jofna">اريد المشاركة مع جفنة</option>
                            <option value="Other">غير ذلك </option>
                        </select>
                    </div>
                    <div class="form-group"><label for="Your-message" class="form-label">حدثنا عنك قليلا
                        </label><textarea data-name="Your Message" maxlength="5000" id="Your-message"
                            name="Your-message" class="form-input message w-input"></textarea>
                    </div>
                    <button class="button-send" name="send">أرسل الآن</button>
                </form>
            </div>
        </div>
    </div>
    <?php require 'components/footer.php'; ?>
    <script src="js/app.js"></script>
</body>

</html>