
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
        typolink.parameter.field = content_from_pid
        typolink.returnLast = url
        typolink.forceAbsoluteUrl = 1
        wrap = <link rel="canonical" href="/|" />
        if.value = 0
        if.isGreaterThan.field = content_from_pid
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
            noTrimWrap = |<title> | &#124; Aba-Angelshop Laufen</title>|
        }
        11 = TEXT
        11.value (
                <meta name="theme-color" content="#FFA500">
        )

        990 < temp.canonical
    }
}
