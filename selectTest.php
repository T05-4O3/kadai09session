<?php
// 0. SESSION開始！！
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!isset($_SESSION['chk_ssid']) || $_SESSION['chk_ssid'] !== session_id()) {
    exit('LOGIN ERROR');
} else {
    session_regenerate_id(true);
    $_SESSION['chk_ssid'] = session_id();
}

// funcs.phpを読み込む
require_once('funcs.php');
loginCheck();

//1. DB接続します

use LDAP\Result;

$pdo = db_conn();
$stmt = $pdo->prepare('SELECT * FROM cgp2_movie_table');
$status = $stmt->execute();

//２．データ取得SQL作成
$id = isset($_GET['id']) ? $_GET['id'] : '';
$sort = isset($_GET['sort']) ? $_GET['sort'] : '';
$orderBy = $sort === 'asc' ? 'ASC' : 'DESC';

$perPage = 10; // 1ページあたりの表示件数
$page = isset($_GET['page']) ? $_GET['page'] : 1; // 現在のページ番号
$offset = ($page - 1) * $perPage; // ページ番号からオフセットを計算

// ページネーションのためのデータ総数取得
$stmtCount = $pdo->prepare("SELECT COUNT(*) AS total FROM cgp2_movie_table");
$stmtCount->execute();
$totalCount = $stmtCount->fetch(PDO::FETCH_ASSOC)['total'];
$totalPages = ceil($totalCount / $perPage);

// ページ番号の範囲チェック
if ($page < 1) {
    $page = 1;
} elseif ($page > $totalPages) {
    $page = $totalPages;
}

// データ取得クエリの作成
$stmt = $pdo->prepare("SELECT * FROM cgp2_movie_table WHERE id > :id ORDER BY id $orderBy LIMIT :offset, :perPage");
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->bindValue(':perPage', $perPage, PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
$view = "";
$count = $offset;

while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
    // 表示するデータの処理
    $title = h($result['title']);
    $id = $result['id'];
    
    // ２）動画の表示
    $onlineMovieUrl = h($result['onlineMovieUrl']);
    $embedCode = getEmbedCode($onlineMovieUrl);
    $videoContainer = "<div class='videoContainer'>$embedCode</div>";
    
    // ３）1行分のデータを表示
    $view .= "<div class='dataContainer'>";
    $view .= "<p class='title'>$title <span class='id'>[$id]</span></p>";
    $view .= $videoContainer;

    // ４）industryCategory1とindustryCategory2とindustryTextのデータを表示
    $industryCategory1 = isset($result['industryCategory1']) ? h($result['industryCategory1']) : "";
    $industryCategory2 = isset($result['industryCategory2']) ? h($result['industryCategory2']) : "";
    $industryText = isset($result['industryText']) ? h($result['industryText']) : "";
    $campaignGoal = isset($result['campaignGoal']) ? h($result['campaignGoal']) : "";
    $targetType = isset($result['targetType']) ? h($result['targetType']) : "";
    $appeal = isset($result['appeal']) ? h($result['appeal']) : "";
    $storyTelling1 = isset($result['storyTelling1']) ? h($result['storyTelling1']) : "";
    $storyTelling2 = isset($result['storyTelling2']) ? h($result['storyTelling2']) : "";
    $shootingTech = isset($result['shootingTech']) ? h($result['shootingTech']) : "";
    $view .= "<p class='industry'>$industryCategory1 $industryCategory2 $industryText</p>\n";
    $view .= "<p class='campaignGoal'>$campaignGoal</p>\n";
    $view .= "<p class='targetType'>$targetType</p>\n";
    $view .= "<p class='appeal'>$appeal</p>\n";
    $view .= "<p class='storyTelling1'>$storyTelling1</p>\n";
    $view .= "<p class='storyTelling2'>$storyTelling2</p>\n";
    $view .= "<p class='shootingTech'>$shootingTech</p>\n";

    $view .= "</div>";
    $count++;
}

// 埋め込みコードを取得する関数
function getEmbedCode($url) {
    if (isYouTubeUrl($url)) {
        $videoId = getYouTubeVideoId($url);
        if ($videoId) {
            return getYouTubeEmbedCodeWithAPI($videoId);
        } else {
            return '<p class="error">指定されたYouTube動画のURLが無効です。</p>';
        }
    } else if (isVimeoUrl($url)) {
        $videoId = getVimeoVideoId($url);
        if ($videoId) {
            return getVimeoEmbedCode($videoId);
        } else {
            return '<p class="error">指定されたVimeo動画のURLが無効です。</p>';
        }
    } else {
        return '<p class="error">YouTubeまたはVimeoのURLを入力してください。</p>';
    }
}

// YouTubeのURLかどうかを判定する関数
function isYouTubeUrl($url) {
    return strpos($url, 'youtube.com') !== false || strpos($url, 'youtu.be') !== false || strpos($url, 'youtube-nocookie.com') !== false;
}

// VimeoのURLかどうかを判定する関数
function isVimeoUrl($url) {
    return strpos($url, 'vimeo.com') !== false;
}

// YouTubeのURLから動画IDを取得する関数
function getYouTubeVideoId($url) {
    $regex = '/(?:\?v=|&v=|youtu.be\/|\/embed\/|\/v\/|\/watch\?v=)([^#\&\?]{11})/';
    preg_match($regex, $url, $matches);
    if (isset($matches[1])) {
        return $matches[1];
    } else {
        return null;
    }
}


// YouTubeの埋め込みコードを取得する関数
function getYouTubeEmbedCodeWithAPI($videoId) {
    require 'ytconfig.php';
    $apiKey = $apiKey;
    $apiUrl = 'https://www.googleapis.com/youtube/v3/videos?part=snippet&id=' . $videoId . '&key=' . $apiKey;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($response, true);

    if (isset($data['items']) && count($data['items']) > 0) {
        $embedCode = '<iframe width="560" height="315" src="https://www.youtube.com/embed/' . $videoId . '" frameborder="0" allowfullscreen></iframe>';
        $title = $data['items'][0]['snippet']['title'];
        return "<div class='embedCode'>$embedCode</div>";
    } else {
        return '<p class="error">指定されたYouTube動画が見つかりませんでした。</p>';
    }
}

// VimeoのURLから埋め込みコードを取得する関数
function getVimeoEmbedCode($videoId) {
    $apiUrl = 'https://vimeo.com/api/v2/video/' . $videoId . '.json';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($response, true);

    if (isset($data[0])) {
        $embedCode = $data[0]['html'];
        $title = $data[0]['title'];
        return "<div class='embedCode'>$embedCode</div><p class='videoTitle'>$title</p>";
    } else {
        return '<p class="error">指定されたVimeo動画が見つかりませんでした。</p>';
    }
}

// ページネーションのリンクを生成する関数
function generatePaginationLinks($currentPage, $totalPages, $sort)
{
    $links = "";
    for ($i = 1; $i <= $totalPages; $i++) {
        if ($i == $currentPage) {
            $links .= "<span class='current'>$i</span>";
        } else {
            $links .= "<a href='?sort=$sort&page=$i'>$i</a>";
        }
    }
    return $links;
}

// ページネーションの表示
$paginationLinks = generatePaginationLinks($page, $totalPages, $sort);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGP2 動画データベース</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="dbregisterTest2.php">登録画面へ</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <form action="./dbdetailTest2.php" method="GET">
                            <input type="text" name="id" placeholder="id番号を入力" required>
                            <?php
                            $sort = isset($_GET['sort']) ? $_GET['sort'] : '';
                            echo '<input type="hidden" name="sort" value="' . $sort . '">';
                            ?>
                            <button type="submit">移動</button>
                        </form>
                    </li>
                    <li><a href="?sort=asc<?php if(!empty($id)) echo '&id=' . $id; ?>">昇順</a></li>
                    <li><a href="?sort=desc<?php if(!empty($id)) echo '&id=' . $id; ?>">降順</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <div>
    <div class="container jumbotron" id="movieContainer"><?= $view ?></div>
    </div>
    <!-- Main[End] -->

    <div class="pagination"><?= $paginationLinks ?></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(function() {
            var sort = getParameterByName('sort');
            if (sort === 'asc') {
            $('#sortAscending').addClass('active');
            } else if (sort === 'desc') {
            $('#sortDescending').addClass('active');
            }

            $('#sortAscending').click(function(e) {
            e.preventDefault();
            if (sort !== 'asc') {
                window.location.search = '?sort=asc';
            }
            });

            $('#sortDescending').click(function(e) {
            e.preventDefault();
            if (sort !== 'desc') {
                window.location.search = '?sort=desc';
            }
            });

            function getParameterByName(name) {
            var url = window.location.href;
            name = name.replace(/[\[\]]/g, '\\$&');
            var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
                results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, ' '));
            }

            $('form').submit(function(e) {
                e.preventDefault();
                var id = $('input[name="id"]').val();
                var sort = getParameterByName('sort');
                if (id) {
                    var url = './dbdetailTest2.php?id=' + id;
                    if (sort) {
                        url += '&sort=' + sort;
                    }
                    window.location.href = url;
                } else {
                    alert('ID番号を入力してください');
                }
            });
        });
    </script>
</body>

</html>