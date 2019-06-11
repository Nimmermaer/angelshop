# Initiate template (used by page)
lib.templates.base = FLUIDTEMPLATE
lib.templates.base {
    partialRootPath = EXT:angelshop/Resources/Private/Partials/
    layoutRootPath = EXT:angelshop/Resources/Private/Layouts/
    dataProcessing {
        100 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
        100 {
            references.fieldName = media
            as = files
        }
 		110 = TYPO3\CMS\Frontend\DataProcessing\MenuProcessor
        110 {
               special = directory
               special.value.data = TSFE:id
               special.entryLevel = -1
               as = sidebar
          }
        120 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
        120 {
            references.fieldName = tx_angelshop_facebook_image
            as = facebook
        }
    }

    variables {
        columnMain =< lib.contents.columns.main
        columnSpecial =< lib.contents.columns.special
        columnFooterLeft =< lib.contents.columns.footerLeft
        columnFooterMiddle =< lib.contents.columns.footerMiddle
        columnFooterRight =< lib.contents.columns.footerRight

        homePagePid = TEXT
        homePagePid {
            value = {$global.homePageUid}
        }

        footerStartPid = TEXT
        footerStartPid {
            value = {$global.navigation.footerStartPoint}
        }
        serviceStartPid = TEXT
        serviceStartPid {
            value = {$global.navigation.serviceStartPoint}
        }

        metaStartPoint = TEXT
        metaStartPoint {
            value = {$global.navigation.metaStartPoint}
        }

        searchPid = TEXT
        searchPid {
            value = {$global.page.search.pid}
        }

        copyright = TEXT
        copyright {
            data = date:U
            strftime = %Y
            wrap = &copy; &nbsp; | &nbsp; Aba-Angelshop
        }
    }

    settings {
        opengraph {
            type =
            site_name = ABA - Angelshop, Laufen
            admins =
            email = info@aba-angelshop.de
            phone_number = 0 170 / 994 22 53
            street-address = Gartenstr. 10
            locality = Laufen/Leobendorf
            region = Bayern
            postal-code = 83410
            country-name = Deutschland
        }

        logoutNewsletter = {$plugin.tx_angelshop.settings.logoutNewsletter}
    }
}

# Choose template file (based on backend_layout, respecting heredity)
lib.templates.base.file.stdWrap.cObject = CASE
lib.templates.base.file.stdWrap.cObject {
    key.field = backend_layout
    key.ifEmpty.data = levelfield : -1 , backend_layout_next_level, slide

    pagets__Default = TEXT
    pagets__Default.value = EXT:angelshop/Resources/Private/Templates/Page/Default.html

    pagets__Newsletter = TEXT
    pagets__Newsletter.value = EXT:angelshop/Resources/Private/Templates/Page/Newsletter.html

    pagets__Sidebar = TEXT
    pagets__Sidebar.value = EXT:angelshop/Resources/Private/Templates/Page/Sidebar.html

    pagets__Slider = TEXT
    pagets__Slider.value = EXT:angelshop/Resources/Private/Templates/Page/Slider.html

    pagets__Product = TEXT
    pagets__Product.value = EXT:angelshop/Resources/Private/Templates/Page/Product.html

    pagets__News = TEXT
    pagets__News.value = EXT:angelshop/Resources/Private/Templates/Page/News.html
}