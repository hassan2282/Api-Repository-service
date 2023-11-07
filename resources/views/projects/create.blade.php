<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projects</title>

    <link rel="stylesheet" href="/fonts/material-icon/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" href="/css/style.css">
    <meta name="robots" content="noindex, follow">
    <script nonce="d85480db-e0da-4c0b-afed-6707a69fba94">(function(w,d){!function(bb,bc,bd,be){bb[bd]=bb[bd]||{};bb[bd].executed=[];bb.zaraz={deferred:[],listeners:[]};bb.zaraz.q=[];bb.zaraz._f=function(bf){return async function(){var bg=Array.prototype.slice.call(arguments);bb.zaraz.q.push({m:bf,a:bg})}};for(const bh of["track","set","debug"])bb.zaraz[bh]=bb.zaraz._f(bh);bb.zaraz.init=()=>{var bi=bc.getElementsByTagName(be)[0],bj=bc.createElement(be),bk=bc.getElementsByTagName("title")[0];bk&&(bb[bd].t=bc.getElementsByTagName("title")[0].text);bb[bd].x=Math.random();bb[bd].w=bb.screen.width;bb[bd].h=bb.screen.height;bb[bd].j=bb.innerHeight;bb[bd].e=bb.innerWidth;bb[bd].l=bb.location.href;bb[bd].r=bc.referrer;bb[bd].k=bb.screen.colorDepth;bb[bd].n=bc.characterSet;bb[bd].o=(new Date).getTimezoneOffset();if(bb.dataLayer)for(const bo of Object.entries(Object.entries(dataLayer).reduce(((bp,bq)=>({...bp[1],...bq[1]})),{})))zaraz.set(bo[0],bo[1],{scope:"page"});bb[bd].q=[];for(;bb.zaraz.q.length;){const br=bb.zaraz.q.shift();bb[bd].q.push(br)}bj.defer=!0;for(const bs of[localStorage,sessionStorage])Object.keys(bs||{}).filter((bu=>bu.startsWith("_zaraz_"))).forEach((bt=>{try{bb[bd]["z_"+bt.slice(7)]=JSON.parse(bs.getItem(bt))}catch{bb[bd]["z_"+bt.slice(7)]=bs.getItem(bt)}}));bj.referrerPolicy="origin";bj.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(bb[bd])));bi.parentNode.insertBefore(bj,bi)};["complete","interactive"].includes(bc.readyState)?zaraz.init():bb.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body>
<div class="main">

    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Project Create</h2>
                    <form class="register-form" id="createProject">
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="name" id="name" placeholder="Your Name" />
                        </div>
                        <div class="form-group">
                            <label for="author"><i class="zmdi zmdi-lock"></i></label>
                            <input type="text" name="author" id="author" placeholder="Author Name" />
                        </div>

                        <div class="form-group">
                            <input type="checkbox" name="status" id="status" class="checkbox" />
                            <label for="status" class="label-agree-term"><span><span></span></span> status</label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" onclick="createProject()"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

{{--    <section class="sign-in">--}}
{{--        <div class="container">--}}
{{--            <div class="signin-content">--}}
{{--                <div class="signin-image">--}}
{{--                    <figure><img src="/images/signin-image.jpg" alt="sing up image"></figure>--}}
{{--                    <a href="/#" class="signup-image-link">Create an account</a>--}}
{{--                </div>--}}
{{--                <div class="signin-form">--}}
{{--                    <h2 class="form-title">Sign up</h2>--}}
{{--                    <form method="POST" class="register-form" id="login-form">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>--}}
{{--                            <input type="text" name="your_name" id="your_name" placeholder="Your Name" />--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>--}}
{{--                            <input type="password" name="your_pass" id="your_pass" placeholder="Password" />--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />--}}
{{--                            <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>--}}
{{--                        </div>--}}
{{--                        <div class="form-group form-button">--}}
{{--                            <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                    <div class="social-login">--}}
{{--                        <span class="social-label">Or login with</span>--}}
{{--                        <ul class="socials">--}}
{{--                            <li><a href="/#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>--}}
{{--                            <li><a href="/#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>--}}
{{--                            <li><a href="/#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
</div>

<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');

    function createProject() {
        let request = new XMLHttpRequest();
        request.open('POST', '/project', true);
        request.onreadystatechange = () => {
            if (request.readyState === 4 && request.status === 200) {
                alert(request.response);
            }
        }
        let name = document.getElementById('name').value;
        let author = document.getElementById('author').value;
        let status = document.getElementById('status').value;
        const form = new FormData();
        form.append('name', name);
        form.append('author', author);
        form.append('status', status);
        request.send(form);
    };

</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"8227de2109576958","b":1,"version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>
</html>
