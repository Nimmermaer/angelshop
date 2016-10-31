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
        description {
            data = page:description
            ifEmpty.data = levelfield :-1, description, slide
        }

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
        viewport = width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no
    }

    # Optional canonical tag if content_from_pid is set
    1391075690 = TEXT
    1391075690 {
        typolink {
            parameter.data = TSFE:id
            returnLast = url
            forceAbsoluteUrl = 1
            addQueryString = 1
            addQueryString.method = GET
            addQueryString.exclude = cHash,backPid
        }

        wrap = <link rel="canonical" href="|" />
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
            dataWrap = <body class="|" data-languid="{TSFE:sys_language_uid}">
        }
    }

    headerData {
        10 = TEXT
        10 {
            field = title
            noTrimWrap = |<title> | &#124; Aba-Angelshop Laufen </title>|
        }

        11 = TEXT
        11.value (
                <meta name="theme-color" content="#FFA500">
        )

        23 = TEXT
        23 {
            value = website
            wrap = <meta property=”og:type” content=”|”>
        }
        3422423424 = TEXT
        3422423424 {
            value (
            	<meta name="google-site-verification" content="AOQ3Y0Tr2YEGxArXS_0qu7T_LHJt5d0sv2KIWlhAZZ4" />
            )
        }
    }
}

[globalVar = TSFE:id = 1]
    page.headerData {
        10 = TEXT
        10 {
            field = title
            noTrimWrap = |<title> | Laufen I'geh fisch'n</title>|
        }
    }
[global]