# Initiate template (used by page)
lib.templates.base = FLUIDTEMPLATE
lib.templates.base {
    partialRootPath = EXT:angelshop/Resources/Private/Partials/
    layoutRootPath = EXT:angelshop/Resources/Private/Layouts/

    variables {
        columnMain =< lib.contents.columns.main
        columnBottom =< lib.contents.columns.bottom
        columnSpecial =< lib.contents.columns.special

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
            wrap = &copy;  &nbsp; Aba-Angelshop &nbsp; |
        }
    }
}

# Choose template file (based on backend_layout, respecting heredity)
lib.templates.base.file.stdWrap.cObject = CASE
lib.templates.base.file.stdWrap.cObject {
    key.field = backend_layout
    key.ifEmpty.data = levelfield : -1 , backend_layout_next_level, slide

    pagets__Default = TEXT
    pagets__Default.value = EXT:angelshop/Resources/Private/Templates/Page/Default.html

    pagets__Sidebar = TEXT
    pagets__Sidebar.value = EXT:angelshop/Resources/Private/Templates/Page/Sidebar.html

    pagets__Slider = TEXT
    pagets__Slider.value = EXT:angelshop/Resources/Private/Templates/Page/Slider.html

    pagets__Product = TEXT
    pagets__Product.value = EXT:angelshop/Resources/Private/Templates/Page/Product.html
}