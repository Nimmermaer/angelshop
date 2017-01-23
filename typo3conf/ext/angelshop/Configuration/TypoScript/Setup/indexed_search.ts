# Plugin configuration
plugin.tx_indexedsearch {
    settings {
        searchPid = {$global.page.search.pid}
        # show the rules
        displayRules = 0

        # show a link to the advanced search
        displayAdvancedSearchLink = 0

        # show the number of results
        displayResultNumber = 0

        breadcrumbWrap = / || /

        # show the parse times
        displayParsetimes = 0
        displayLevel1Sections = 1
        displayLevel2Sections = 0
        displayLevelxAllTypes = 0
        clearSearchBox = 0
        clearSearchBox.enableSubSearchCheckBox = 1
        displayForbiddenRecords = 0
        alwaysShowPageLinks = 1
        mediaList =

        #search.rootPidList
        rootPidList = 1
        page_links = 10
        detectDomainRcords = 0
        defaultFreeIndexUidList =
        searchSkipExtendToSubpagesChecking = 0
        exactCount = 0
        forwardSearchWordsInResultLink = 0
        forwardSearchWordsInResultLink.no_cache = 1

        # various crop/offset settings for single result items
        results {
            titleCropAfter = 50
            titleCropSignifier = ...
            summaryCropAfter = 180
            summaryCropSignifier =
            hrefInSummaryCropAfter = 60
            hrefInSummaryCropSignifier = ...
            markupSW_summaryMax = 300
            markupSW_postPreLgd = 60
            markupSW_postPreLgd_offset = 5
            markupSW_divider = ...
            markupSW_divider.noTrimWrap = | | |
        }

        # Blinding of option-selectors / values in these (advanced search)
        blind {
            searchType = 0
            defaultOperand = 0
            sections = 0
            freeIndexUid = 0
            mediaType = 0
            sortOrder = 0
            group = 0
            languageUid = 0
            desc = 0
            numberOfResults = 0
            # defaultOperand.1 = 1
            # extResume=1
        }

        /*
        flagRendering = CASE
        flagRendering {
        key.current = 1
        2 = TEXT
        2.value = German
        default = TEXT
        default.value = English
        }

        iconRendering = CASE
        iconRendering {
        key.current = 1
        html = TEXT
        html.value = HtmL
        default = TEXT
        default.value = TYPO3 pages
        }

        specialConfiguration {
        0.pageIcon = IMAGE
        0.pageIcon.file = typo3/sysext/indexed_search/Resources/Public/Icons/FileTypes/pages.gif
        1.pageIcon = IMAGE
        1.pageIcon.file = typo3/sysext/indexed_search/Resources/Public/Icons/FileTypes/pdf.gif
        }
        */
        defaultOptions {
            defaultOperand = 0
            sections = 0
            freeIndexUid = -1
            mediaType = -1
            sortOrder = rank_flag
            languageUid = -1
            sortDesc = 1
            searchType = 1
        }
    }

    view {
        templateRootPaths {
            0 = EXT:indexed_search/Resources/Private/Templates/
            10 = {$plugin.tx_indexedsearch.view.templateRootPath}
        }

        partialRootPaths {
            0 = EXT:indexed_search/Resources/Private/Partials/
            10 = {$plugin.tx_indexedsearch.view.partialRootPath}
        }

        layoutRootPaths {
            0 = EXT:indexed_search/Resources/Private/Layouts/
            10 = {$plugin.tx_indexedsearch.view.layoutRootPath}
        }
    }
}

