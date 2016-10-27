config {
    additionalHeaders = Content-Type:text/html;charset=utf-8
    doctype = html5
    disableAllHeaderCode = 0

    sendCacheHeaders = 1

    renderCharset = utf-8
    metaCharset = utf-8

    notification_email_urlmode = all
    notification_email_encoding = quoted-printable
    notification_email_charset = utf-8

    formMailCharset = utf-8

    spamProtectEmailAddresses = 2
    spamProtectEmailAddresses_atSubst = (at)

    disablePrefixComment = 1

    sys_language_uid = 0
    language = de
    locale_all = de_DE
    htmlTag_langKey = de
    stdWrap.strftime = %A, %e. %B %Y

    linkVars = L 1

    uniqueLinkVars = 1

    noPageTitle = 2

    absRefPrefix = /
    # prefixLocalAnchors = all

    compressCss = 1
    compressJs = 1
    concatenateCss = 1
    concatenateJs = 1

    removeDefaultCss = 1
    removeDefaultJS = 1
    simulateStaticDocuments = 0
    tx_realurl_enable = 1

    index_enable = 1
    index_metatags = 1

    sourceopt {
        removeGenerator =1
        enabled = 1
        enable_utf-8_support = 1
        headerComment = 1
        removeComments.keep.10 = /^TYPO3SEARCH_/usi
        formatHtml = 1
        headerComment (
><(((('> ><(((('> ><(((('>

     _    ____    _         _                     _     _
    / \  | __ )  / \       / \   _ __   __ _  ___| |___| |__   ___  _ __
   / _ \ |  _ \ / _ \     / _ \ | '_ \ / _` |/ _ \ / __| '_ \ / _ \| '_ \
  / ___ \| |_) / ___ \   / ___ \| | | | (_| |  __/ \__ \ | | | (_) | |_) |
 /_/   \_\____/_/   \_\ /_/   \_\_| |_|\__, |\___|_|___/_| |_|\___/| .__/
                                       |___/                       |_|

I' geh fisch'n in Berchtesgaden

><(((('> ><(((('> ><(((('>
        )
    }
}

[applicationContext = Development]
 config {
     compressCss = 0
     compressJs = 0
     concatenateCss = 0
     concatenateJs = 0
 }
[end]