<?php
    $sr_only = '<span class="sr-only">(current)</span>';
    if(!isset($file_name)) {
        $file_name = "";
    }
?>
<nav class="navbar navbar-expand-lg navbar-dark" style="padding: 16px 16px 16px 16px;">
    <div class="container">
        <a class="navbar-brand" href="/YBOT/">
            <img src="static/img/YBOT.png" height="30px" width="30px">
            <span class="brand">YBOT</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border-color:white;">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item <?php if($file_name == "index") echo "active";?>">
            <a class="nav-link" href="/YBOT/">홈<?php if($file_name == "index") echo $sr_only;?></a>
            </li>
            <li class="nav-item <?php if($file_name == "invite") echo "active";?>">
            <a class="nav-link" href="invite.html">초대<?php if($file_name == "invite") echo $sr_only;?></a>
            </li>
            <li class="nav-item <?php if($file_name == "dashboard") echo "active";?>">
                <a class="nav-link" href="dashboard.html">대시보드<?php if($file_name == "dashboard") echo $sr_only; ?></a>
            </li>
            <li class="nav-item dropdown <?php if($file_name == "docs") echo "active";?>">
            <a class="nav-link dropdown-toggle" href="docs" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                문서
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php if($file_name != "docs") echo "docs.html"?>?page=기본">기본</a>
                <a class="dropdown-item" href="<?php if($file_name != "docs") echo "docs.html"?>?page=검색">검색</a>
                <a class="dropdown-item" href="<?php if($file_name != "docs") echo "docs.html"?>?page=게임">게임</a>
                <a class="dropdown-item" href="<?php if($file_name != "docs") echo "docs.html"?>?page=전적">전적</a>
                <a class="dropdown-item" href="<?php if($file_name != "docs") echo "docs.html"?>?page=관리">관리</a>
                <a class="dropdown-item" href="<?php if($file_name != "docs") echo "docs.html"?>?page=이모지">이모지</a>
                <a class="dropdown-item" href="<?php if($file_name != "docs") echo "docs.html"?>?page=관리자">관리자</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="term.html">이용약관</a>
                <a class="dropdown-item" href="privacy.html">개인정보 처리방침</a>
            </div>
            </li>
            <li class="nav-item <?php if($file_name == "term") echo "active";?>">
                <a class="nav-link" href="term.html">이용약관<?php if($file_name == "term") echo $sr_only;?></a>
            </li>
            <li class="nav-item <?php if($file_name == "support") echo "active";?>">
                <a class="nav-link" href="forum.html">지원<?php if($file_name == "support") echo $sr_only;?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">YWEB</a>
            </li>
        </ul>
        </div>
    </div>
</nav>