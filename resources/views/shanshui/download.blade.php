<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title>iServices</title>
    <style type="text/css">
        a {
            font-size: 60px;
            color: red;
            font-weight: bold;
        }
    </style>
    <!--var returnCitySN = {"cip": "120.24.208.42", "cid": "310000", "cname": "上海市”, "cdevice" : "pc"};-->
    {{--<script type="text/javascript" src="https://iservices-iam.the-ascott.com.cn/wifi/download/cityjson.php"></script>--}}

    <script type="text/javascript">
        var checkIphoneWeixinAndV2 = 0;
        var checkAndroidWeixinAndV2 = 0;
        const PAGE_IPAD = "ipad_url";
        const PAGE_PC = "pc_url";


        const ANDROID_V2 = "/download/shanshui.apk";
        const ANDROID_WEIXIN_V2 = "http://a.app.qq.com/o/simple.jsp?pkgname=com.itearoa.shanshui";


        const IPHONE_V2 = "https://itunes.apple.com/us/app/easyiservice-riverside/id1291074127?l=zh&ls=1&mt=8";
        const IPHONE_WEIXIN_V2 = "http://a.app.qq.com/o/simple.jsp?pkgname=com.itearoa.shanshui";
        var browser = {
            versions: function () {
                var u = navigator.userAgent, app = navigator.appVersion;
                return {         //移动终端浏览器版本信息
                    trident: u.indexOf('Trident') > -1, //IE内核
                    presto: u.indexOf('Presto') > -1, //opera内核
                    webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
                    gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核
                    mobile: !!u.match(/AppleWebKit.*Mobile.*/), //是否为移动终端
                    ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
                    android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或uc浏览器
                    iPhone: u.indexOf('iPhone') > -1, //是否为iPhone或者QQHD浏览器
                    iPad: u.indexOf('iPad') > -1, //是否iPad
                    webApp: u.indexOf('Safari') == -1, //是否web应该程序，没有头部与底部
                    weixin: u.indexOf('MicroMessenger') > -1
                };
            }(),
            language: (navigator.browserLanguage || navigator.language).toLowerCase()
        }

        var url = PAGE_PC;
        if (browser.versions.mobile) {
            //mobile device
            if (browser.versions.iPhone) {

                if (browser.versions.weixin) {
                    url = IPHONE_WEIXIN_V2;
                    checkIphoneWeixinAndV2 = 1;
                } else {
                    url = IPHONE_V2;
                }

            }
            if (browser.versions.android) {

                if (browser.versions.weixin) {
                    url = ANDROID_WEIXIN_V2;
                    checkAndroidWeixinAndV2 = 1;
                } else {
                    url = ANDROID_V2;
                }
            }
            if (browser.versions.iPad) {
                url = PAGE_IPAD;
            }
        } else {
            url = PAGE_PC;
        }
        if (url == PAGE_PC || url == PAGE_IPAD) {
            document.write("请使用手机设备扫描");
            document.write("Please scan the QR code with a mobile device");
        } else {
            window.location.href = url;
        }
    </script>
</head>

<body>
<section style="border: 0px none; padding: 0px; box-sizing: border-box; margin: 0px; font-family: 微软雅黑;">
    <section
            style="margin: 3px; background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 3px; border-color: rgb(211, 42, 99); box-sizing: border-box; padding: 0px;">
    </section>
</section>
</body>

</html>