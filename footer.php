// In footer.php

<div class="icon-logo"><a href="https://www.3mediaweb.com/" target="_blank" class="web_logo" title="<?php if(is_front_page()){ echo 'Web Design, Digital Marketing & Digital Experience Optimization'; } else { echo '3 Media Web';} ?>"><?php if(is_front_page()){ echo 'Web Design, Digital Marketing & Digital Experience Optimization'; } else { echo '3 Media Web';} ?></a></div>



// In CSS

.copy-rights .icon-logo {
    position: relative;
    display: inline-block;
    vertical-align: top;
    padding: 0 0 0 32px;
}
.copy-rights .icon-logo::before {
    background: url('https://www.3mediaweb.com/wp-content/themes/3mediaweb2021/assets/img/logo-3mw.png') center center no-repeat;
    content: '';
    position: absolute;
    top: 45%;
    left: 0;
    width: 20px;
    height: 20px;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    background-size: 100%;
    opacity: 0.5;
}
