<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no">
        <meta name="description" content="AI-CD Project 2">
        <meta name="keywords" content="PRをしたい？クリエイティブディレクターがお手伝いをします">

        <meta property="og:type" content="website">
        <meta property="og:title" content="AI-CD Project 2">
        <meta property="og:description" content="PRをしたい？クリエイティブディレクターがお手伝いをします">
        <meta property="og:url" content="http://observation.jp/t05_4o3_m/aicd2/index.html">
        <meta property="og:image" content="http://observation.jp/t05_4o3_m/aicd2/img/common/ogimage.jpg">
        <meta property="og:site_name" content="AI-CD Project 2">

        <meta name="twitter:description" content="AI-CD Project 2" />
        <meta name="twitter:title" content="AI-CD Project 2" />
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:image" content="">

        <link rel="icon" href="http://observation.jp/t05_4o3_m/img/common/favicon.ico">
        <link href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/0a7c43b5fe.js" crossorigin="anonymous"></script>

        <title>こんな動画広告はどう？</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <!-- header -->
        <header class="header nav">
            <div class="wrapper header-wrapper">
                <p>CREATIVE GUENOME PROJECT 2 | DB Register</p>
                <input type="checkbox" name="navigation" id="navigation" class="nav-input">
                <label for="navigation" class="nav-bg"></label>
                <ul class="header-list nav-list">
                    <li class="header-list__item"><a href="#">YouTube Search</a></li>
                    <li class="header-list__item"><a href="#">DB Register</a></li>
                    <li class="header-list__item"><a href="#">DB Search</a></li>
                    <li class="header-list__item"><a href="#">Criative Concept</a></li>
                    <li class="header-list__item"><a href="#">Structure Plan</a></li>
                    <li class="header-list__item"><a href="selectTest.php">登録動画一覧</a></li>
                    <li class="header-list__item"><a href="loginTest.php">ログイン</a></li>
                    <li class="header-list__item"><a href="logoutTest.php">ログアウト</a></li>
                </ul>
                <label for="navigation" class="nav-button">
                    <span class="nav-button__mark"></span>
                    <span class="nav-button__mark"></span>
                    <span class="nav-button__mark"></span>
                </label>
            </div>
        </header>
        <!-- //header -->

        <!-- コンテンツ表示画面 -->
        <div class="register">
            <div id="urlForm">
                <h2 class="onlineMovieUrl">動画のURLを入力</h2>
                <input type="text" id="onlineMovieUrl" onblur="checkUrlValidity()" placeholder="YouTubeかVimeoのURLを入力">
                <button id="submitBtn">検索</button>
                <div class="urlView">
                    <div class="title" id="videoContainer"></div>
                </div>
                <div class="titleView">
                    <div class="title-label">
                        <label class="onlineMovieUrl">タイトル：</label>
                    </div>
                    <textarea id="titleInput" name="title" rows="3" style="resize: auto;"></textarea>
                </div>
            </div>

            <div class="industry-category">
                <h2>業態/商材</h2>
                <select id="industryCategory1" name="industryCategory1" onchange="updateIndustryCategory1()">
                    <option value="未選択" selected>大分類を選択</option>
                    <option value="食品/飲料/アルコール">食品/飲料/アルコール</option>
                    <option value="家電/家庭用品">家電/家庭用品</option>
                    <option value="エンタメ/メディア">エンタメ/メディア</option>
                    <option value="自動車/交通">自動車/交通</option>
                    <option value="旅行/観光">旅行/観光</option>
                    <option value="ファッション/アパレル">ファッション/アパレル</option>
                    <option value="金融/保険">金融/保険</option>
                    <option value="不動産/建築">不動産/建築</option>
                    <option value="医療/美容/健康">医療/美容/健康</option>
                    <option value="教育/キャリア">教育/キャリア</option>
                    <option value="採用/就職/転職">採用/就職/転職</option>
                    <option value="通信販売/ネットショップ">通信販売/ネットショップ</option>
                    <option value="エネルギー">エネルギー</option>
                    <option value="ギャンブル">ギャンブル</option>
                    <option value="公益/環境/福祉">公益/環境/福祉</option>
                    <option value="その他">その他</option>
                </select>
                <select id="industryCategory2" name="industryCategory2"></select>
                <input type="text" id="industryText" name="industryText" placeholder="さらに名称を記入する？">
            </div>

            <div class="campaign-goal">
                <h2>目的</h2>
                <select id="campaignGoal" name="campaignGoal"></select>
            </div>

            <div class="targetType">
                <h2>ターゲットペルソナ</h2>
                <div id="targetLabel"></div>
            </div>

            <div class="appeal">
                <h2>内容や特徴</h2>
                <select id="appeal" name="appeal"></select>
            </div>

            <div class="storyTelling1" name="storyTelling1">
                <h2>表現手法</h2>
                <div id="storyTelling1"></div>
            </div>

            <div class="storyTelling2" name="storyTelling2">
                <h2>ストーリーテリング</h2>
                <div id="storyTelling2"></div>
            </div>

            <div class="shootingTech" name="shootingTech">
                <h2>撮影手法</h2>
                <div id="shootingTech"></div>
            </div>
            
            <div class="editingTech" name="editingTech">
                <h2>編集手法</h2>
                <div id="editingTech"></div>
            </div>

            <div class="onomatope">
                <h2>オノマトペ</h2>
                <div class="onomatopeBox">
                    <div name="onomatopeLight">
                        <label for="onomatopeLight">光</label>
                        <select id="onomatopeLight"></select>
                        <input type="text" id="onomatopeLightName" name="onomatopeLightName" placeholder="その他">
                    </div>
                    <div name="onomatopeWind">
                        <label for="onomatopeWind">風</label>
                        <select id="onomatopeWind"></select>
                        <input type="text" id="onomatopeWindName" name="onomatopeWindName" placeholder="その他">
                    </div>
                    <div name="onomatopeWater">
                        <label for="onomatopeWater">液体</label>
                        <select id="onomatopeWater"></select>
                        <input type="text" id="onomatopeWaterName" name="onomatopeWaterName" placeholder="その他">
                    </div>
                    <div name="onomatopeSound">
                        <label for="onomatopeSound">音</label>
                        <select id="onomatopeSound"></select>
                        <input type="text" id="onomatopeSoundName" name="onomatopeSoundName" placeholder="その他">
                    </div>
                    <div name="onomatopeMind">
                        <label for="onomatopeMind">心</label>
                        <select id="onomatopeMind"></select>
                        <input type="text" id="onomatopeMindName" name="onomatopeMindName" placeholder="その他">
                    </div>
                    <div name="onomatopeCondition">
                        <label for="onomatopeCondition">状態</label>
                        <select id="onomatopeCondition"></select>
                        <input type="text" id="onomatopeConditionName" name="onomatopeConditionName" placeholder="その他">
                    </div>
                    <div name="onomatopeIntuition">
                        <label for="onomatopeIntuition">感覚</label>
                        <select id="onomatopeIntuition"></select>
                        <input type="text" id="onomatopeIntuitionName" name="onomatopeIntuitionName" placeholder="その他">
                    </div>
                </div>
            </div>

            <!-- 送信ボタンと押した時の送り先 -->
            <form id="form" method="POST" action="./dbinsertTest.php">
                <input type="hidden" id="hiddenUrl" name="onlineMovieUrl">
                <input type="hidden" id="hiddenTitle" name="title">
                <input type="hidden" id="hiddenindustryCategory1" name="industryCategory1">
                <input type="hidden" id="hiddenindustryCategory2" name="industryCategory2">
                <input type="hidden" id="hiddenindustryText" name="industryText">
                <input type="hidden" id="hiddencampaignGoal" name="campaignGoal">
                <input type="hidden" id="hiddentargetType" name="targetType[]">
                <input type="hidden" id="hiddenappeal" name="appeal">
                <input type="hidden" id="hiddenstoryTelling1" name="storyTelling1[]">
                <input type="hidden" id="hiddenstoryTelling2" name="storyTelling2[]">
                <input type="hidden" id="hiddenshootingTech" name="shootingTech[]">
                <input type="hidden" id="hiddeneditingTech" name="editingTech[]">
                <input type="hidden" id="hiddenonomatopeLight" name="onomatopeLight">
                <input type="hidden" id="hiddenonomatopeWind" name="onomatopeWind">
                <input type="hidden" id="hiddenonomatopeWater" name="onomatopeWater">
                <input type="hidden" id="hiddenonomatopeSound" name="onomatopeSound">
                <input type="hidden" id="hiddenonomatopeMind" name="onomatopeMind">
                <input type="hidden" id="hiddenonomatopeCondition" name="onomatopeCondition">
                <input type="hidden" id="hiddenonomatopeIntuition" name="onomatopeIntuition">
                <button type="submit" id="submitButton">送信</button>
            </form>
        </div>

        <script src="main.js"></script>
        <script src="industryCategory.js"></script>
        <script src="campaignGoal.js"></script>
        <script src="targetType.js"></script>
        <script src="appeal.js"></script>
        <script src="storyTelling1.js"></script>
        <script src="storyTelling2.js"></script>
        <script src="shootingTech.js"></script>
        <script src="editingTech.js"></script>
        <script src="onomatope.js"></script>
    </body>
</html>