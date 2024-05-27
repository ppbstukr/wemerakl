<link rel="stylesheet" href="/public/css/qna_write.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>메라클</title>
    <?php include('../common_en/Header.php') ?>
</head>
<body>
    <?php include('../common_en/Nav.php')?>
    <div class="container">
        <div class="notice-banner">
            <div class="top-text">
                소통공간
            </div>
        </div>
        <div class="notice-area">
            <div class="notice-content">
                <div class="notice-menu">
                    <div class="n_title">
                        <h1>소통공간</h1>
                    </div>
                    <ul>
                        <li><a href="../pages/notice.php">Notice</a></li>
                        <li><a href="../pages/article.php">Article</a></li>
                        <li><a href="../pages/New.php">News</a></li>
                        <li><a href="../pages/qna.php">Q&A</a></li>
                        <li><a href="../pages/faq.php">FAQ</a></li>
                    </ul>
                </div>
                <div class="notice-board-area">
                    <div class="route">
                        <a href="/">Home</a> > <a href="../pages/notice.php">소통공간</a> > <a href="../pages/faq.php">FAQ</a>
                    </div>
                    <div class="notice-board">
                        <form class="form-area" method="post" action="/pages/faq_result.php" >
                            <div class="qna_row">
                                <div class="input-area division">
                                    <select title="문의유형" name="faq_division">
                                        <option value='창업교육'>창업교육</option>
                                        <option value='RnD'>R&D기획</option>
                                        <option value='IR제작'>IR제작</option>
                                        <option value='사업계획서'>사업계획서</option>
                                    </select>
                                </div>
                                <div class="input-area title">
                                    <input type="text" class="title-input" placeholder="질문내용" name="faq_title">
                                </div>
                            </div>
                            <div class="input-area qna_content"> 
                                <textarea name="faq_content" placeholder="답변내용"></textarea>
                            </div>
                            <div class="qna_row" style="justify-content:flex-end">
                                <div class="form-submit" style="text-align:right">
                                    <input class="submit-btn" type="submit" value="질문등록" >
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('../common_en/Footer.php') ?>
</body>
</html>