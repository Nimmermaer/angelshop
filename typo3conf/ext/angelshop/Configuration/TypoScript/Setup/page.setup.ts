# Initiate page
page = PAGE
page {
    typeNum = 0
    10 =< lib.templates.base

    shortcutIcon = EXT:angelshop/Resources/Public/Icons/angelshop.ico

    # META Tag definitions
    meta {
        X-UA-Compatible = IE=edge
        X-UA-Compatible.httpEquivalent = 1

        copyright.data = {$translate}companyName

        language = de,en
        imagetoolbar = false
        viewport = width=device-width, initial-scale=1
        #        description {
        #            data = page:description
        #            ifEmpty.data = levelfield :-1, description, slide
        #        }

        keywords {
            data = page:keywords
            ifEmpty.data = levelfield :-1, keywords, slide
        }

        author = Angelika Anna Sailer
        author.override.field = author

        abstract {
            data = page:abstract
            data = levelfield:-1, abstract, slide
        }

        date {
            data = page:SYS_LASTCHANGED // page:crdate
            date = Y-m-d
        }

        robots = INDEX,FOLLOW
        viewport = width=device-width, initial-scale=1.0
    }

    # Body Tag Rendering
    bodyTagCObject = COA
    bodyTagCObject {
        10 = TEXT
        10 {
            value = default
            stdWrap.noTrimWrap = |language-| |
        }

        stdWrap {
            trim = 1
            dataWrap = <body class="|" data-languid="{TSFE:sys_language_uid}" itemscope itemtype="https://schema.org/WebPage">
        }
    }
    headTag = <head itemscope itemtype="http://schema.org/WebSite">
    headerData {
        10 = TEXT
        10 {
            field = title
            noTrimWrap = |<title itemprop="name"> | &#124; Aba-Angelshop Laufen </title>|
        }

        11 = TEXT
        11.value (
                <meta name="theme-color" content="#FFA500">
        )

        #        23 = TEXT
        #        23 {
        #            value = website
        #            wrap = <meta property=”og:type” content=”|”>
        #        }

        12 = TEXT
        12.value (
        <script type="application/ld+json">
              {
                "@context": "http://schema.org",
                "@type": "LocalBusiness",
                "url": "https://aba-angelshop.de/",
                "logo": "https://aba-angelshop.de/fileadmin/user_upload/Logos/LOGOabafischer_150x57.jpg",
                "image": "https://aba-angelshop.de/fileadmin/aktuelle_bilder/20150712_Friedfischen.Abtsee.jpg",
                "name": "Aba-Angelshop",
                "telephone": "08682953918",
                "address": "Gartenstr. 10, 83410 Laufen/Leobendorf",
                "priceRange": "$$",
                "email":"info@aba-angelshop.de",
                "publicAccess":true,
                "geo": {
                    "@type": "GeoCoordinates",
                    "latitude": "47.9229236",
                    "longitude": "12.8937513"
                  },
                 "openingHours": "We,Th,Fr 14:00-18:00 ,Sa 08:30-12:00",
                 "description": "Angeln und Zubehör für Angler und Angelsport. Riesige Auswahl an Angelruten, Angelhaken, Angelrollen, Ködern, Blei und vieles mehr!"
              }
              </script>

        )

        1391075691 = TEXT
        1391075691 {
            typolink {
                parameter.data = TSFE:id
                returnLast = url
                forceAbsoluteUrl = 1
                forceAbsoluteUrl.scheme = https
            }
            wrap = <link rel="canonical" href="|"/>
        }
        13910 = TEXT
        13910 {
            typolink {
                parameter.data = TSFE:id
                returnLast = url
                forceAbsoluteUrl = 1
                forceAbsoluteUrl.scheme = https
            }
            wrap = <link rel="dns-prefetch" href="|">

        }
        139101 = TEXT
        139101 {
            typolink {
                parameter.data = TSFE:id
                returnLast = url
                forceAbsoluteUrl = 1
                forceAbsoluteUrl.scheme = https
            }
            wrap = <link rel="preconnect" href="|">

        }
        3422423424 = TEXT
        3422423424 {
            value (
            	<meta name="google-site-verification" content="AOQ3Y0Tr2YEGxArXS_0qu7T_LHJt5d0sv2KIWlhAZZ4" />
            )
        }
    }
}

[globalVar = GP:tx_news_pi1|news > 0]
    page.headerData {
        10 = RECORDS
        10 {
            source = {GP:tx_news_pi1|news}
            source.insertData = 1
            tables = tx_news_domain_model_news
            conf.tx_news_domain_model_news >
            conf.tx_news_domain_model_news = TEXT
            conf.tx_news_domain_model_news.field = title
            wrap = <title  itemprop="name"> |&nbsp; &#124; Aba-Angelshop Laufen </title>
        }
    }
       page.headerData.1391075691 >
       page.headerData.1391075691 = TEXT
       page.headerData.1391075691 {
           typolink {
               parameter.data = TSFE:id
               returnLast = url
               forceAbsoluteUrl = 1
               forceAbsoluteUrl.scheme = https
               addQueryString = 1
               addQueryString.exclude = id
                   }
           wrap =  <link rel="canonical" href="|"/>
        }
[end]

[globalVar = TSFE:id = 1]
    page.headerData {
        10 = TEXT
        10 {
            field = title
            noTrimWrap = |<title  itemprop="name"> | Laufen I'geh fisch'n</title>|
        }
    }
[global]