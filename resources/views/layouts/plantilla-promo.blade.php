<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {!! Artesaos\SEOTools\Facades\SEOTools::generate() !!}


    <link rel="icon" type="image/png" href="/images/isotipo.png"> 

    {{-- <link async href="{{ mix('assets/css/app.css') }}" rel="stylesheet">
    <noscript><link rel="stylesheet" href="{{ mix('assets/css/app.css') }}"></noscript> --}}
    <link rel="preload" href="{{ mix('assets/css/animation.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ mix('assets/css/animation.css') }}"></noscript>
    <link rel="preload" href="{{ mix('assets/css/app.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="{{ mix('assets/css/app.css') }}"></noscript>
    {{-- <link  async  href="https://www.mecagoenlos.com/Posicionamiento/assets/pages/css/components.css"   rel="preload" as="style" onload="this.rel='stylesheets'">
	<noscript><link rel="stylesheet" href="https://www.mecagoenlos.com/Posicionamiento/assets/pages/css/components.css"></noscript> --}}
    <link rel="preload" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"></noscript>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-205246474-2"></script>
    <script async>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-205246474-2');
    </script>
<script async>
    !function (w, d, t) {
      w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var i="https://analytics.tiktok.com/i18n/pixel/events.js";ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=i,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};var o=document.createElement("script");o.type="text/javascript",o.async=!0,o.src=i+"?sdkid="+e+"&lib="+t;var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(o,a)};
    
      ttq.load('C9AL4CBC77U63IDICTE0');
      ttq.page();
      ttq.track('Browse');
    }(window, document, 'ttq');
    </script>
    

        <!-- Meta Pixel Code -->
        <meta name="facebook-domain-verification" content="e9pjto5plrf6lm2sy85ghppb19o89c" />
<script async>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '723764551956466');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=723764551956466&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
    <script async type="text/javascript">
        _linkedin_partner_id = "4287201";
        window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
        window._linkedin_data_partner_ids.push(_linkedin_partner_id);
        </script><script type="text/javascript">
        (function(l) {
        if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])};
        window.lintrk.q=[]}
        var s = document.getElementsByTagName("script")[0];
        var b = document.createElement("script");
        b.type = "text/javascript";b.async = true;
        b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
        s.parentNode.insertBefore(b, s);})(window.lintrk);
        </script>
        <noscript>
        <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=4287201&fmt=gif" />
        </noscript>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" defer ></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js" defer></script>
<script src='/assets/js/lazysizes.min.js' async ></script>
<script src='/assets/js/app.js' defer ></script>
<script src='/assets/js/animation.js' defer ></script>
</head>
<div class="--wrapper" id="@yield('id-page')">
@include('layouts.nav-promo')

    @yield('content')

    @include('layouts.footer')
    @include('layouts.cookies')
</div>
@if (empty($chat) || $chat == 'ok')
<!-- Chatbot ALMA -->
<script id="helper" data-idEmpresa="11b575c0-3b73-11ea-9b14-afbcefb5bb52" data-idChatbot="8db6d920-b655-11ec-8e32-575a89d49389" data-install="1" src="https://assistant.almaintelligence.com:7777/stylesAndScripts/version3/iframe.js"></script>
{{-- <script id="helper" data-idEmpresa="11b575c0-3b73-11ea-9b14-afbcefb5bb52" data-idChatbot="e68bee40-4d2a-11ec-a2c3-db310abc81ab" data-install="1" src="https://assistant.almaintelligence.com:7777/stylesAndScripts/version3/iframe.js" async></script> --}}
@endif
 <!-- Fin Chatbot ALMA -->
 <script>

 </script>
</body>
</html>