<head>
<meta charset="UTF-8" name="csrf-token" content="{{ csrf_token() }}">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "About Us",
    "item": "https://www.smacdigital.com/about-us"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "Services",
    "item": "https://www.smacdigital.com/service"  
  },{
    "@type": "ListItem", 
    "position": 3, 
    "name": "Portfolios",
    "item": "https://www.smacdigital.com/portfolios"  
  },{
    "@type": "ListItem", 
    "position": 4, 
    "name": "Blogs",
    "item": "https://www.smacdigital.com/blogs"  
  },{
    "@type": "ListItem", 
    "position": 5, 
    "name": "Contact Us",
    "item": "https://www.smacdigital.com/contact-us"  
  }]
}
</script>
<link rel="canonical" href="{{ url(Request::url()) }}" />
<title>{{isset($metatitle) ? $metatitle : config('settings.CONFIG_SITE_TITLE') }}</title>
<meta name="keywords" content="{{isset($meta_keywords) ? $meta_keywords : config('settings.CONFIG_META_KEYWORDS') }}">
<meta name="description" content="{{isset($meta_description) ? $meta_description : config('settings.CONFIG_META_DESCRIPTION') }}">
<meta http-equiv="Content-Type" content="text/html; charset= ISO-8859-1"> 
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900%7COpen+Sans:400,700,700i" rel="stylesheet"  rel="preload" as="style" >
<meta property="og:image" content="{{url('/')}}/public/uploads/product/{{isset($meta_image) ? $meta_image: 'logo.jpg' }}">
<meta property="og:url" content="{{ url(Request::url()) }}">
<meta property="og:type" content="website">
<meta property="og:site_name" content="SMAC Digital Digital Marketing Agency in Jaipur">
<meta property="og:locale" content="en-IN">
<meta property="og:title" content="{{isset($metatitle) ? $metatitle : config('settings.CONFIG_SITE_TITLE') }}"/>
<meta property="og:description" content="{{isset($meta_description) ? $meta_description : config('settings.CONFIG_META_DESCRIPTION') }}"/>
<meta property="og:country-name" content="in"/>
<meta itemprop="name" content="SMAC Digital Digital Marketing Agency in Jaipur">
<meta itemprop="image" content="{{url('/')}}/public/uploads/product/{{isset($meta_image) ? $meta_image: 'logo.jpg' }}">
<meta itemprop="url" content="{{ url(Request::url()) }}">
<meta itemprop="description" content="{{isset($meta_description) ? $meta_description : config('settings.CONFIG_META_DESCRIPTION') }}">
<meta itemprop="keywords" content="{{isset($meta_keywords) ? $meta_keywords : config('settings.CONFIG_META_KEYWORDS') }}">
<meta name="thumbnail" content="{{url('/')}}/public/uploads/product/{{isset($meta_image) ? $meta_image: 'logo.jpg' }}" alt="SMAC Digital Digital Marketing Agency in Jaipur"/>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10992320206"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-10992320206');
</script>
<!-- Event snippet for Get Direction conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-10992320206/pITfCLS5n-UDEM79xfko',
      'value': 1.0,
      'currency': 'INR',
      'event_callback': callback
  });
  return false;
}
</script>
<!-- Event snippet for Contact conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-10992320206/RFJYCK_Dn-UDEM79xfko',
      'value': 1.0,
      'currency': 'INR',
      'event_callback': callback
  });
  return false;
}
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-247435510-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-247435510-1');
</script>

<meta http-equiv="Content-Type" content="text/html; charset= ISO-8859-1"> 

{!! Html::style( asset('assets/css/bootstrap.css')) !!}
{!! Html::style( asset('assets/css/main.css')) !!}
{!! Html::style( asset('assets/css/responsive.css')) !!}
{!! Html::style( asset('assets/css/demo.css')) !!}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<link rel="dns-prefetch" href="https://q.quora.com">
<link rel="dns-prefetch" href="https://www.facebook.com">
<link rel="dns-prefetch" href="https://connect.facebook.net">
<link rel="dns-prefetch" href="https://www.google-analytics.com">
<link rel="dns-prefetch" href="https://stats.g.doubleclick.net">
<link rel="dns-prefetch" href="https://www.google.com">
<link rel="dns-prefetch" href="https://www.google.co.in">
<link rel="dns-prefetch" href="https://bid.g.doubleclick.net">
<link rel="dns-prefetch" href="https://www.googleadservices.com">
<link rel="dns-prefetch" href="https://www.googletagmanager.com">

<script type="text/javascript">
var SITE_URL = "{{url('/')}}";
</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<!-- Favicon -->
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<!-- Google Tag Manager -->
<script>
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MG3Z8PH');</script>
<!-- End Google Tag Manager -->
</head>
<!-- End <head> -->