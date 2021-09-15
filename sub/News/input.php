<?
    include("header.php");
?>

<?

    if(!empty($_POST['title']) && !empty($_POST['writer']) && !empty($_POST['body'])){

        
        $sql = "INSERT INTO board (title,writer,body) VALUES ('{$_POST['title']}','{$_POST['writer']}','{$_POST['body']}')";

        $result = mysqli_query($con, $sql);

        if($result){
            $last_no = mysqli_insert_id($con);
        }


        print "<script>alert('글이 정상적으로 등록되었습니다.');</script>";
        print "<script>location.href='view.php?no=".$last_no."';</script>";
    }



?>
    <section>
        <article class="main">
            <div class="mtxt">
                <h2>NEWS</h2>
                <p><strong>이삭토스트 소식</strong>을 접해보세요</p>
            </div>
        </article>
        <article class="top-menu">
            <div class="tmenu-b">
                <ul class="tmenu">
                    <li><a href="news.php">NEWS</a></li>
                    <li class="selM"><a href="notice.php">공지사항</a></li>
                </ul>
            </div>
        </article>
        <article class="noticewrap">
            <h2>공지사항</h2>
            <form name="inputfrm" method="post">
                <div class="inputBox">
                    <div class="input">

                        <div class="title">
                            <span>제목</span>
                            <input type="text" name="title">
                        </div>

                        <div class="writer">
                            <span>작성자</span>
                            <input type="text" name="writer">
                        </div>

                        <div class="content">
                            <span>내용</span>
                            <textarea name="body" id=""></textarea>
                        </div>
                    </div>


                    <!--Back to list-->
                    <div class="btngrp">
                        <a href="#" class="btn abtn" onclick="location.href='notice.php';return false;">목록</a>
                        <input type="submit" class="btn" value="등록">
                    </div>

                </div>
            </form>
        </article>

    </section>


<?include("../../footer.php");?>

